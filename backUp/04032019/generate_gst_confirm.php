<?php
include 'header.php';

ini_set('max_execution_time', 0); 
include 'connection.php';
include 'functions.php';

   $name2=$_POST['nameArray'];
   $name1=array_values(array_unique($name2));
   // $name1=["SHARAD_ELECTRONICS"];
   $len=count($name1);
   echo('
   
   <style type="text/css">
   .myTable { border-collapse:collapse; }
   .myTable th { }
   .myTable td, .myTable th {border-collapse:collapse; padding:5px;border:1px dotted #505050; }
   </style>
   <center>

   <table class="myTable">
   <tr>
   <th>Date </th>
   <th>Party Name</th>
   <th>Amount</th>
   <th>CGST</th>
   <th>SGST</th>
   <th>Round Off</th>
   <th>Total</th>
   <th>Remarks </th>
   </tr>
   
   ');
    
   $conn = new mysqli($servername,$username,$password,$dbname);
   ////header
   if ($conn->connect_error)
{
   die("Connection failed: ". $conn->connect_error);
} 
   for ($i=0;$i<$len;$i++)
   {
   $name=$name1[$i];
   $date=$_POST['curr_date'];
   $count=1;
   $total_brokerage=0;      
  
$sql0= "SELECT *  FROM `clients_info` WHERE `NAME` LIKE '$name'";
$result0=$conn->query($sql0);
if ($result0->num_rows == 0)
           { echo "error";}
else
   $clientData = $result0->fetch_assoc();
   $client_uid=$clientData["UID"];

if ($conn->connect_error)
{
   die("Connection failed: ". $conn->connect_error);
} 
$sql0= "SELECT *  FROM `transactions_record` WHERE `TO` LIKE '$name' AND DUE LIKE 'Y' AND DUE_DATE < '$date' ORDER BY `transactions_record`.`DUE_DATE`  ASC";
$result0=$conn->query($sql0);
if ($result0->num_rows == 0)
           { echo "LENDER";}
else
{    
while($clientTransactions = $result0->fetch_assoc())
{ 
   $count=$count+1;
   $total_brokerage=$total_brokerage+$clientTransactions["BROKERAGE_AMOUNT"];  
   $total_brokerage= number_format((float)$total_brokerage, 2, '.', '');
   // $total_brokerage=2175.00;
   $cgst= number_format((float)$total_brokerage*0.09, 2, '.', '');
   $sgst=  number_format((float)$total_brokerage*0.09, 2, '.', ''); 
   $total_tax= number_format((float)$sgst+$cgst, 2, '.', '');
   $total_amount=number_format((float)$total_brokerage+$cgst+$sgst, 2, '.', ''); 
   $round_off=number_format((float)ceil($total_amount)-$total_amount, 2, '.', '');
   $total_amount=ceil($total_amount);
}
} 	

// Create connection
$conn_gstEntry = new mysqli($servername, $username, $password,$dbname);

// Check connection
if ($conn_gstEntry->connect_error) {
    die("Connection failed: " . $conn->connect_error);
	
}
$date=date('Y-m-d');
 
 $sql_gstEntry="INSERT INTO `fincorp`.`gst_info` (`uid`, `fk_clients_info_uid`, `invoice_date`, `bro_amount`, `cgst`, `sgst`, `round_off`) VALUES (NULL, $client_uid,'$date', $total_brokerage, $cgst, $sgst, $round_off )";

 if ($total_brokerage>0 && mysqli_query($conn_gstEntry, $sql_gstEntry) {
     echo('   <tr>
     <td>'.$date.' </td>
     <td>'.$name.'</td>
     <td>'.$total_brokerage.'</td>
     <td>'.$cgst.'</td>
     <td>'.$sgst.'</td>
     <td>'.$round_off.'</td>
     <td>'.$total_amount.'</td>
     <td>Success</td>

     </tr>');
	
}	
else {
   echo('   <tr>
   <td>'.$date.' </td>
   <td>'.$name.'</td>
   <td>'.$total_brokerage.'</td>
   <td>'.$cgst.'</td>
   <td>'.$sgst.'</td>
   <td>'.$round_off.'</td>
   <td>'.$total_amount.'</td>
   <td>'.mysqli_error($conn_gstEntry)?mysqli_error($conn_gstEntry):"No Brokerage".'</td>
   </tr>');
}






} 
echo('</table>
<br>
<br>');

include 'footer.php';




?>
   
   

