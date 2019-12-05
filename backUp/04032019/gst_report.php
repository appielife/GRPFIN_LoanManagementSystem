<?php
include 'header.php';
include 'connection.php';
	// $servername="localhost";
	// $username="root";
	// $password="password";
	// $dbname="fincorp";
	// 
	$counter=1;
	
    $from=$_POST['from'];
    $to=$_POST['to'];

	// $date="2019-04-01";
	
	$conn = new mysqli($servername,$username,$password,$dbname);
	
if ($conn->connect_error)
{
	die("Connection failed: ". $conn->connect_error);
} 
$sql_gst= "SELECT *  FROM `gst_info` WHERE `invoice_date` BETWEEN  '$from' and '$to' ";

$result=$conn->query($sql_gst);
if ($result->num_rows == 0)
			{ echo "error";}
else
  
    

	
{echo ("
<b>GST Report</b> <br><br>".date('j M,Y', strtotime($from))." to " .date('j M,Y', strtotime($to))."
<br>
<hr>
<br>
<style type='text/css'>
.myTable { border-collapse:collapse; }
.myTable th { }
.myTable td, .myTable th {border-collapse:collapse; padding:5px;border:1px dotted #505050; }
</style>


<font size='1'>
	<center>



			<TABLE class ='myTable'BORDER='2' style='font-size:	12px;' width='100%' CELLPADDING='2' CELLSPACING='2'>
            <tr>
            <th>S No.</th>
            <th>Invoice No.</th>
            <th>Invoice Date</th>			
			
			<th>Party Name</th>
			<th>Party GST</th>
			<th>Bill Amt.</th>
            <th>CGST</th>
            <th>SGST</th>
            <th>Total Tax</th>
            <th>R/O</th>
            <th>Total Amount</th>			
			
			</tr>"
	); 
}
while($row_gst_data = $result->fetch_assoc())
    {	$fkey_uid=$row_gst_data["fk_clients_info_uid"];
        $sql_client_data= "SELECT *  FROM `clients_info` WHERE `UID` = '$fkey_uid'";

        $result_client_data=$conn->query($sql_client_data);
        
if ($result_client_data->num_rows == 0)
			{ echo "error";}
else
{		$row_client_data =$result_client_data->fetch_assoc();
        $total_brokerage= number_format((float)$row_gst_data['bro_amount'], 2, '.', '');
        $cgst= number_format((float)$row_gst_data['cgst'], 2, '.', '');
        $sgst= number_format((float)$row_gst_data['sgst'], 2, '.', '');
        $total_tax= number_format((float)$sgst+$cgst, 2, '.', '');
        $round_off=number_format((float)$row_gst_data['round_off'], 2, '.', '');
        $total_amount=number_format((float)$total_brokerage+$cgst+$sgst+$round_off, 2, '.', ''); 
      
		
		echo ('
            <tr>
            <td>'.$counter.'</td>
            <td>'.$row_gst_data["uid"].'</td>
            <td>'.date("j/m/Y", strtotime($row_gst_data["invoice_date"])).'</td>            
            <td>'.str_replace('_',' ',$row_client_data["NAME"]).'</td>
            <td>'.$row_client_data["GST"].'</td>
            <td>'.$total_brokerage.'</td>
            <td>'.$cgst.'</td>
            <td>'.$sgst.'</td>
            <td>'.$total_tax.'</td>
            <td>'.$round_off.'</td>
            <td> &#8377 '.$total_amount.'</td>		
			
			</tr>
	
'
		
	); 
	$counter=$counter+1;

	
    }
}

	echo(" </table> ");


	include 'footer.php';
	?>