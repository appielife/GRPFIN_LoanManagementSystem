<?php
include 'header.php';
include 'connection.php';
// $servername="localhost";
// $username="root";
// $password="password";
// $dbname="fincorp";
// 
$counter = 1;
$date    = $_POST[ 'curr_date' ];
echo $date;
$conn = new mysqli( $servername, $username, $password, $dbname );
if ( $conn->connect_error ) {
    die( "Connection failed: " . $conn->connect_error );
}
$sql1   = "SELECT *  FROM `transactions_record` WHERE `DUE_DATE` <= '$date' AND `DUE` LIKE 'Y' ORDER BY `transactions_record`.`DUE_DATE`  ASC";
$result = $conn->query( $sql1 );
if ( $result->num_rows == 0 ) {
    echo "error";
} else
    $row = $result->fetch_assoc(); {
    echo ( "
<br>
<hr>
<br>
<font size='2'>
	<center>
			<TABLE BORDER='2' style='font-size:	12px;   WIDTH='50%' CELLPADDING='2' CELLSPACING='2'>
			<tr>
			<th>NO.</th>
			
			<th>FROM</th>
			<th>TO</th>
			<th>AMOUNT</th>
			<th>INTREST AMOUNT</th>
			<th>BROKERAGE</th>
			<th>LOAN_DATE</th>
			<th style='background-color:red'>DUE_DATE</th>
			<th STYLE='WIDTH:250PX;'>REMARKS</th>
			
			
			
			</tr>" );
}
$result1 = $conn->query( $sql1 );
while ( $row1 = $result1->fetch_assoc() ) {
    echo ( '
			<tr>
			<td>' . $counter . '</td>
			
			<td class="team">' . $row1[ "FROM" ] . '</td>
			<td class="points">' . $row1[ "TO" ] . '</td>
			<td class="points">' . $row1[ "AMOUNT" ] . '</td>
			<td class="points">' . $row1[ "INTREST_AMT" ] . '</td>
			<td class="points">' . $row1[ "BROKERAGE_AMOUNT" ] . '</td>
			<td class="points">' . $row1[ "CURR_DATE" ] . '</td>
			<td style="background-color; "class="points"><b>' . $row1[ "DUE_DATE" ] . '</b></td>
			
			
			
		<td></td>
			</tr>
	
' );
    $counter = $counter + 1;
}
echo ( " </table> " );
include 'footer.php';
?>
