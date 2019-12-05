<?php
include 'header.php';

ini_set('max_execution_time', 0);
include 'connection.php';
include 'functions.php';

$name2 = unserialize($_POST['result']);
$name1 = array_values(array_unique($name2));
// $nameArray=array();
// $name1=["SHARAD_ELECTRONICS"];
$len   = count($name1);
echo ('
   
   <style type="text/css">
   .myTable { border-collapse:collapse; }
   .myTable th { }
   .myTable td, .myTable th {border-collapse:collapse; padding:5px;border:1px dotted #505050; }
   </style>
   <center>
   <form method="post" action="generate_gst_confirm.php">
   <table width="100%"class="myTable">
   <tr>
   <th>S.No. </th>
   <th>Date </th>
   <th>Party Name</th>
   <th>Amount</th>
   <th>CGST</th>
   <th>SGST</th>
   <th>Round Off</th>
   <th>Total</th>
   <th>Generate </th>
   </tr>
   
   ');

   $conn = new mysqli($servername, $username, $password, $dbname);
   ////header
   if ($conn->connect_error) {
       die("Connection failed: " . $conn->connect_error);
   }
for ($i = 0; $i < $len; $i++) {
    $name            = $name1[$i];
    $date            = $_POST['curr_date'];
    $count           = 1;
    $total_brokerage = 0;    
  
    $sql0    = "SELECT *  FROM `clients_info` WHERE `NAME` LIKE '$name' AND `GST_BILLING`=1";
    $result0 = $conn->query($sql0);
    if ($result0->num_rows == 0) {
        // echo "error";
    }
     else {
        $clientData = $result0->fetch_assoc();
        $client_uid = $clientData["UID"];
        
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }
        $sql0    = "SELECT *  FROM `transactions_record` WHERE `TO` LIKE '$name' AND DUE LIKE 'Y' AND DUE_DATE < '$date' ORDER BY `transactions_record`.`DUE_DATE`  ASC";
        $result0 = $conn->query($sql0);
        if ($result0->num_rows == 0) {
            echo "LENDER";
        } else {
            while ($clientTransactions = $result0->fetch_assoc()) {
                $count           = $count + 1;
                $total_brokerage = $total_brokerage + $clientTransactions["BROKERAGE_AMOUNT"];
                $total_brokerage = number_format((float) $total_brokerage, 2, '.', '');
                // $total_brokerage=2175.00;
                $cgst            = number_format((float) $total_brokerage * 0.09, 2, '.', '');
                $sgst            = number_format((float) $total_brokerage * 0.09, 2, '.', '');
                $total_tax       = number_format((float) $sgst + $cgst, 2, '.', '');
                $total_amount    = number_format((float) $total_brokerage + $cgst + $sgst, 2, '.', '');
                $round_off       = number_format((float) ceil($total_amount) - $total_amount, 2, '.', '');
                if($round_off>0.49)
                {
                    $round_off       = number_format((float) floor($total_amount) - $total_amount, 2, '.', '');

                }
                $total_amount    = $total_amount+$round_off;
            }
        }
        
        
        
        // $date  = date('Y-m-d');
        $count = $i + 1;
        if ($total_brokerage > 0) {
            echo ('   <tr>
        <td>' . $count . '</td>
     <td>' . $date . ' </td>
     <td>' . $name . '</td>
     <td>' . $total_brokerage . '</td>
     <td>' . $cgst . '</td>
     <td>' . $sgst . '</td>
     <td>' . $round_off . '</td>
     <td>' . $total_amount . '</td>
     <td><input type="checkbox" name=nameArray[] value=' . $name . ' checked></td>
     </tr>');
            
        } else {
            echo ('   <tr>
        <td>' . $count . '</td>
   <td>' . $date . ' </td>
   <td>' . $name . '</td>
   <td>' . $total_brokerage . '</td>
   <td>' . $cgst . '</td>
   <td>' . $sgst . '</td>
   <td>' . $round_off . '</td>
   <td>' . $total_amount . '</td>
   <td>No Brokerage</th>
   </tr>');
        }
   
    
    
    
        
 } 
}

echo ("
</table>
<br>
<br>
<br>
<br>
<input type='date' name='curr_date' value=" . $_POST['curr_date'] . ">
   <input type='submit' value='Generate GST Bills'>
   </form>");

include 'footer.php';

?>