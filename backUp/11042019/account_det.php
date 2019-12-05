<?php
include 'functions.php';
$total  = 0;
$total1 = 0;
include 'header.php';
include 'connection.php';
// $servername="localhost";
// $username="root";
// $password="password";
// $dbname="fincorp";
$name       = $_POST['name'];
$from       = $_POST['from'];
$to         = $_POST['to'];
$total_loan = 0;
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$sql0    = "SELECT *  FROM `clients_info` WHERE `NAME` LIKE '$name'";
$result0 = $conn->query($sql0);
if ($result0->num_rows == 0) {
    echo "error";
} else
    $row0 = $result0->fetch_assoc();
$uid = $row0["UID"];
echo ('
<style type="text/css">
.myTable { border-collapse:collapse; }
.myTable td {border-collapse:collapse; padding:5px;border:1px solid #aaa; font-size:12px; font-weight:500; }
.myTable th {border-collapse:collapse;  padding:5px;padding-top:5px; border:1px solid #aaa; font-size:15px; font-weight:bold; }
.myTable{margin-top:10px;}
.myTable1 { border-collapse:collapse; }
.myTable1 td {border-collapse:collapse; padding:5px !important;border:1px solid #aaa; font-size:12px; font-weight:500; }
.myTable1 th {border-collapse:collapse;  padding:5px ; border:1px solid #aaa; font-size:15px; font-weight:bold; }
.points{padding:3px;}
.details{
    font-weight:bold !important;
    font-size:14px !important;
    
}
</style>
<center>
<b>
<H3><U>ACCOUNT INFORMATION</U></H3>
<div width=100%>
<table width=80% class=myTable>
<tr>
<td>Name</td>
<td class=details>' . str_replace('_', ' ', $name) . '</td>
<td width=15%>Company/Owner Name</td>
<td class=details>' . $row0["COMPANY"] . '</td>
</tr> 
<tr>
<td>Address</td>
<td class=details colspan=3>' . $row0["ADDRESS"] . '</td>
</tr>
<tr>
<td>Phone
</td>
<td class=details>' . $row0["PHONE"] . '</td>
<td width=15%>PAN NO:</td>
<td class=details>' . $row0["PAN"] . ' </td>
</tr>
<tr>
<td>Period
</td>
<td class=details colspan=3>  ' . date("j M Y", strtotime($from)) . ' - ' . date("j M Y", strtotime($to)) . '</td>
</tr>
</table>
</div>
<BR>
');
$sql2   = "SELECT *  FROM `transactions_record` WHERE `FROM` LIKE '$name' AND `DUE` LIKE 'Y'  ORDER BY `transactions_record`.`CURR_DATE`  ASC";
$result = $conn->query($sql2);
if ($result->num_rows == 0) {
    echo "";
} else {
    $row = $result->fetch_assoc();
    ECHO ('<div width=100%><BR> <CENTER> ACTIVE LOANS <TABLE class=myTable  WIDTH="80%" style="font-size:12px">
<TR><th>DATE</th>
<th> TO </th> 
<th>AMOUNT</th>
<th>RATE</th></TR> 
');
}
$result = $conn->query($sql2);
while ($row1 = $result->fetch_assoc()) {
    echo ('
            <tr>
            <td >' . $row1["CURR_DATE"] . '</td>
            
            <td>' . str_replace('_', ' ', $row1["TO"]) . '</td>
            <td>' . moneyFormatIndia($row1["AMOUNT"]) . '</td>
            <td>' . $row1["INTREST_RATE"] . '</td>
            
            </tr>      ');
    $total_loan = $total_loan + $row1["AMOUNT"];
    
}
if (($result->num_rows != 0)) {
    echo ('<tr><td colspan="2"><b>TOTAL</B></td>
<td cellspacing="2"><b>' . moneyFormatIndia($total_loan) . '/-</b></td>
</tr> </TABLE> <hr> <br> </div>');
}
////////////////////////////
$sql2   = "SELECT *  FROM `transactions_record` WHERE `TO` LIKE '$name' AND `DUE` LIKE 'Y'  ORDER BY `transactions_record`.`CURR_DATE`  ASC";
$result = $conn->query($sql2);
if ($result->num_rows == 0) {
    echo "";
} else {
    $row = $result->fetch_assoc();
    ECHO ('<BR> <CENTER> ACTIVE LOANS <TABLE class=myTable WIDTH="80%" BORDER=2 style="font-size:12px">
<TR><th>DATE</th>
<th> TO </th> 
<th>AMOUNT</th>
<th>RATE (p.a)</th>
<th>COMMI.(p.a)</th>
</TR> 
');
}
$result = $conn->query($sql2);
while ($row1 = $result->fetch_assoc()) {
    echo ('
            <tr>
            <td >' . $row1["CURR_DATE"] . '</td>
            
            <td><b>' . str_replace('_', ' ', $row1["FROM"]) . '</b></td>
            <td><b>' . moneyFormatIndia($row1["AMOUNT"]) . ' /-</b></td>
            <td>' . $row1["INTREST_RATE"] . ' </td>    
            <td>' . $row1["BROKERAGE_RATE"] . ' </td>
            </tr>      ');
    $total_loan = $total_loan + $row1["AMOUNT"];
    
}
if (($result->num_rows != 0)) {
    echo ('<tr><td colspan="2"><b>TOTAL</B></td>
<td style="font-size:16px;" cellspacing="2" colspan=3>  <b>' . moneyFormatIndia($total_loan) . '/-</b></td>
</tr> </TABLE> <hr> <br> ');
}
/////////////////////////////
// STATEMENT SECTION STARTS  NOW 
echo ('<center>
STATEMENT
<BR><BR>
<table class=myTable1 BORDER="2">
<tr><th>OUT</th> <th>IN</th></tr>
<tr>
    <td width="50%"  valign="top">
        <TABLE class="myTable1" border="1" >
            <tr>
            <th width="15%"> DATE </th>
            <th>TO</th>
            <th>AMOUNT</th>
            <th>VIA</th>  
            </tr>  <br> 
        ');
$sql1   = "SELECT *  FROM `transactions_record` WHERE `FROM` LIKE '$name' AND CURR_DATE>='$from' AND CURR_DATE<='$to' ORDER BY `transactions_record`.`CURR_DATE`  ASC";
$result = $conn->query($sql1);
if ($result->num_rows == 0) {
    echo "";
} else {
    echo (' ');
}
$result1 = $conn->query($sql1);
while ($row1 = $result1->fetch_assoc()) {
    echo ('
            <tr>
            
            <td>' . $row1["CURR_DATE"] . '</td>
            
            <td><b>' . str_replace('_', ' ', $row1["TO"]) . '</b></td>
            <td><b>' . moneyFormatIndia($row1["AMOUNT"]) . '/- </b></td>
            <td>' . $row1["VIA"] . '</td>
            
            </tr> ');
    $total = $total + $row1["AMOUNT"];
    
}
echo ("<tr><td colspan='2' > <b><h2>Total</td> <td colspan='1'><b> <h2>" . moneyFormatIndia($total) . "</td></tr></h2>     </table></td>");
//////////////////////////
$sql1   = "SELECT *  FROM `transactions_record` WHERE `TO` LIKE '$name' AND CURR_DATE >= '$from' AND CURR_DATE<='$to' ORDER BY `transactions_record`.`CURR_DATE`  ASC";
$result = $conn->query($sql1);
echo ('
<td width="50%" valign=top>
<TABLE class=myTable1>
            <tr>
            <th width="15%"> DATE </th>
            <th>FROM</th>
            
            <th>AMOUNT</th>
            <th>VIA</th>            
            </tr>');
if ($result->num_rows == 0) {
    echo "    ";
} else
    $row = $result->fetch_assoc();
{
}
$result1 = $conn->query($sql1);
while ($row1 = $result1->fetch_assoc()) {
    echo ('
            <tr>
            
    <td class="points">' . $row1["CURR_DATE"] . '</td>
            <td class="team"><b>' . str_replace('_', ' ', $row1["FROM"]) . '</b></td>
            
            <td class="points"><b>' . moneyFormatIndia($row1["AMOUNT"]) . '/-</b></td>
                <td class="points">' . $row1["VIA"] . '</td>
            
                        
            
            
            </tr>');
    $total1 = $total1 + $row1["AMOUNT"];    
}
echo ("<tr><td colspan='2' > <b><h2>Total</td> <td colspan='1'><b> <h2>" . moneyFormatIndia($total1) . "</td></tr></h2></table></td></table>");
echo (" <br><br><hr>
    <table>
    <tr>
    <td colspan='2'>
    <form action='dues.php' method='post'>
    <input type='hidden' name='due_name' value='$name'>
    <input type='date' name='curr_date'>
    <input type='submit' value='Print dues '>
    
    </form>
    </td>
    <td colspan='2'>
    
    <form action='sms_display.php' method='post'>
    <input type='hidden' name='due_name' value='$name'>
    <input type='date' name='curr_date'>
    <input type='submit' value='Send Reminder(SMS) '>
    
    </form>
    </td>
    <td colspan='2'>
    
    <form action='dues_collect.php' method='post'>
    <input type='hidden' name='due_name' value='$name'>
    <input type='date' name='curr_date'>
    <input type='submit' value='Collect Dues'>
    
    </form>
    
    </td>
    
    </tr>
    <tr>
    <td align='center' colspan='6' style='
    border-top: 1px dotted #505050;'>
    <h4>GST INFORMATION</h4>
    <table>        
<form  method='post'>
<tr><td>From:
<input type='date' name='from'/>
</td>
<td>
To:<input type='date' name='to'/><br>
</td></tr>
<tr>
</tr>
<tr>
<td align='center'>
<input type='hidden' name='uid' value='$uid'>
<input type='submit' formaction='gst_bill_individual.php' name ='invoices' value ='View Invoices'>
</td>
<td align='center' >
<input type='submit' formaction='gst_report_individual.php' name='report' value ='View Report'>
</td>
</tr>
</table>
<br><br>
    </form>
    </td>
    </tr>
    </table>
    
    ");
include 'footer.php';
?>
