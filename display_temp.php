<?php
include 'header.php';
include 'connection.php';
// $servername="localhost";
// $username="root";
// $password="password";
// $dbname="fincorp";
// 
$counter = 1;
// $date=$_POST['curr_date'];
$date    = "2019-04-01";
echo $date;
$conn = new mysqli( $servername, $username, $password, $dbname );
if ( $conn->connect_error ) {
    die( "Connection failed: " . $conn->connect_error );
} //$conn->connect_error
$sql1   = "SELECT *  FROM `transactions_record` WHERE `DUE_DATE` <= '$date' AND `DUE` LIKE 'Y' ORDER BY `transactions_record`.`TO` ,`transactions_record`.`DUE_DATE`  ASC";
$result = $conn->query( $sql1 );
if ( $result->num_rows == 0 ) {
    echo "error";
} //$result->num_rows == 0
else
    $row = $result->fetch_assoc(); {
    echo ( "
<br>
<hr>
<br>
<font size='2'>
    <center>
            <TABLE BORDER='2' style='font-size:    12px;   WIDTH='50%' CELLPADDING='2' CELLSPACING='2'>
            <tr>
            <th>NO.</th>
            
            <th>FROM</th>
            <th>TO</th>
            <th>AMOUNT</th>
            <th>INTREST AMOUNT</th>
            <th>BROKERAGE</th>
            <th style='background-color:red'>DUE_DATE</th>
            <th>DURATION</th>
            <th STYLE='WIDTH:125px;'>INTREST (31st March)</th>
            <th STYLE='WIDTH:125pX;'>BROKERAGE(31st March)</th>
            
            
            
            </tr>" );
}
$result1 = $conn->query( $sql1 );
while ( $row1 = $result1->fetch_assoc() ) {
    $date_end = date_create( "2019-04-01" );
    // $DUE_DATE = date('Y-m-d', strtotime($duration, strtotime($row0["DUE_DATE"])));
    $datediff = date_diff( date_create( $row1[ "DUE_DATE" ] ), $date_end );
    $datediff = ( $datediff->format( "%a" ) + 1 );
    if ( $datediff > 60 ) {
        $months   = floor( $datediff / 60 );
        $temp     = $datediff;
        $datediff = $datediff % 60;
        $rIntrest = $row1[ "INTREST_AMT" ] * ( $months + ( $datediff / 60 ) );
        $rBroker  = $row1[ "BROKERAGE_AMOUNT" ] * ( $months + ( $datediff / 60 ) );
        $datediff = $temp;
    } //$datediff > 60
    else {
        $datediff = $datediff - 1;
        $rIntrest = $row1[ "INTREST_AMT" ] * ( $datediff / 60 );
        $rBroker  = $row1[ "BROKERAGE_AMOUNT" ] * ( $datediff / 60 );
    }
    if ( $rIntrest != 0 || $rBroker != 0 ) {
        echo ( '
            <tr>
            <td>' . $counter . '</td>
            
            <td class="team">' . $row1[ "FROM" ] . '</td>
            <td class="points">' . $row1[ "TO" ] . '</td>
            <td class="points">' . $row1[ "AMOUNT" ] . '</td>
            <td class="points">' . $row1[ "INTREST_AMT" ] . '</td>
            <td class="points">' . $row1[ "BROKERAGE_AMOUNT" ] . '</td>
            <td style="background-color; "class="points"><b>' . $row1[ "DUE_DATE" ] . '</b></td>
            <td class="points">' . ( floor( $datediff / 60 ) * 2 ) . ' M ' . ( $datediff % 60 ) . ' D</td>
            <td class="points">' . round( $rIntrest ) . '</td>
            <td class="points">' . round( $rBroker ) . '</td>                      
            </tr>
    
' );
        $counter = $counter + 1;
    } //$rIntrest != 0 || $rBroker != 0
} //$row1 = $result1->fetch_assoc()
echo ( " </table> " );
include 'footer.php';
?>