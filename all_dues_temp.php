 
    <?php
ini_set('max_execution_time', 0);
include 'connection.php';
// $servername="localhost";
// $username="root";
// $password="password";
// $dbname="fincorp";
$name2 = unserialize($_POST['result']);
$name1 = array_values(array_unique($name2));
$brokerage_to;
$len = count($name1);
for ($i = 0; $i < $len; $i++) {
    
    $name = $name1[$i];
    //    $date=$_POST['curr_date'];
    $date = "2019-03-31";
    
    $count  = 1;
    $total  = 0;
    $total1 = 0;
    $total2 = 0;
    ECHO ('<style type="text/css" media="print">
       div.page
       {
     
         page-break-inside: avoid;
       }
     </style>
     <div class="page"><B><font size="4">RAMESH PARWAL</b><BR> </FONT>214-A, City Center, S.C.Road, Jaipur-302001 (P)0141-2374431 (E)parwal.ramesh@yahoo.co.in<br><HR>');
    
    $conn = new mysqli($servername, $username, $password, $dbname);
    ////header
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    $sql0    = "SELECT *  FROM `clients_info` WHERE `NAME` LIKE '$name'";
    $result0 = $conn->query($sql0);
    if ($result0->num_rows == 0) {
        echo "error";
    } else
        $row0 = $result0->fetch_assoc();
    echo ('
<font size="4"> <B>' . str_replace('_', ' ', $name) . '</B></font><br><div style="font-size:14px">C/O SHRI
' . $row0["COMPANY"] . ',' . $row0["ADDRESS"] . '. Phone:' . $row0["PHONE"] . ' PAN: ' . $row0["PAN"] . ' Email: ' . $row0["EMAIL"] . ' 
</div>
');
    //////////////dues     
    
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    
    
    
    
    
    $sql0    = "SELECT *  FROM `transactions_record` WHERE `TO` LIKE '$name' AND DUE LIKE 'Y' AND DUE_DATE <= '$date' ORDER BY `transactions_record`.`DUE_DATE`  ASC";
    $result0 = $conn->query($sql0);
    if ($result0->num_rows == 0) {
        echo "LENDER";
    } else {
        
        echo ('<table ><tr><td><div style="font-size:14px">Your A/C have following intrest due(s) as in<B> ' . date("M, Y", strtotime($date . "- 1 month")) . '</B>.
   <br>Kindly issue cheque(s) in the name of bearer & mention TDS amount deducted(if any) behind . 
   <br></td></tr>
   </table>
   <style type="text/css">
.myTable { border-collapse:collapse; }
.myTable th { }
.myTable td, .myTable th {border-collapse:collapse; padding:5px;border:1px dotted #505050; }
</style>
   <table class="myTable"cellspacing="2"       width="850px"  style="font-size:13px  ;">
   <tr>
   <th>No. </th>
   <th>From </th>
   <th>To </th>
   <th>Duration</th>
   <th>Bearer Name </th>
   <th>Amount</th>
   <th>Intrest</th>
   <th>Brokerage</th>
   
   
   
   </tr>
   ');
        
        
        while ($row0 = $result0->fetch_assoc()) {
            
            
            
            
            
            
            
            $date_end = date_create("2019-04-01");
            // $DUE_DATE = date('Y-m-d', strtotime($duration, strtotime($row0["DUE_DATE"])));
            
            $datediff = date_diff(date_create($row0["DUE_DATE"]), $date_end);
            $datediff = ($datediff->format("%a") + 1);
            if ($datediff > 60) {
                $months   = floor($datediff / 60);
                $temp     = $datediff;
                $datediff = $datediff % 60;
                $rIntrest = $row0["INTREST_AMT"] * ($months + ($datediff / 60));
                $rBroker  = $row0["BROKERAGE_AMOUNT"] * ($months + ($datediff / 60));
                $datediff = $temp;
                
                
                
            } else {
                $datediff = $datediff - 1;
                $rIntrest = $row0["INTREST_AMT"] * ($datediff / 60);
                $rBroker  = $row0["BROKERAGE_AMOUNT"] * ($datediff / 60);
            }
            
            if ($rIntrest != 0 || $rBroker != 0) {
                //         echo ('
                //             <tr>
                //             <td>'.$counter.'</td>
                
                //             <td class="team">'.$row1["FROM"].'</td>
                //             <td class="points">'.$row1["TO"].'</td>
                //             <td class="points">'.$row1["AMOUNT"].'</td>
                //             <td class="points">'.$row1["INTREST_AMT"].'</td>
                //             <td class="points">'.$row1["BROKERAGE_AMOUNT"].'</td>
                //             <td style="background-color; "class="points"><b>'.$row1["DUE_DATE"].'</b></td>
                //             <td class="points">'.(floor($datediff/60)*2).' M '.($datediff % 60).' D</td>
                //             <td class="points">'.round($rIntrest).'</td>
                //             <td class="points">'.round($rBroker).'</td>
                
                
                
                //             </tr>
                
                // '
                
                //     ); 
                
                echo ('
    <tr>
    <td>' . $count . '</td>    
    <td>' . date("M j, Y", strtotime($row0["DUE_DATE"])) . '</td>
    <td>' . date("M j, Y", strtotime("2019-03-31")) . '</td>
    <td>' . (floor($datediff / 60) * 2) . ' M ' . ($datediff % 60) . ' D</td>
    <td><B>' . str_replace('_', ' ', $row0["FROM"]) . '</B></td>
    <td>' . $row0["AMOUNT"] . '/-</td>        
    <td>' . round($rIntrest) . '/-</td>
    <td>' . round($rBroker) . '/-</td>
 
    </tr>
    ');
            }                    
                      
            $count        = $count + 1;
            $total        = $total + round($rBroker);
            $total1       = $total1 + $row0["AMOUNT"];
            $total2       = $total2 + $row0["INTREST_AMT"];
            $brokerage_to = $row0["BROKERAGE_TO"];
            $brokerage_to = str_replace('_', ' ', $brokerage_to);
            
            
            
            
            
            
        }
        echo ("<tr >
<td colspan='5'<b> <style type='text/css'>
  input {font-weight:bold; FONT-SIZE:14PX;    }
</style>
       
       
       <form>Brokerage:<input value='$brokerage_to' size='40' type='text'/> </b>    </form></td>
<td colspan='3' align='right'><b>$total/-</b></td>
</tr>");
        
        
    }
    
    ECHO ('</table>  <br>
   <br><br>
   <HR>
   <br> 
   </div>');
    
    
    
    
}
?>
  
   
