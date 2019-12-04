<?php
include 'connection.php';
include 'header.php';
// $servername="localhost";
// $username="root";
// $password="password";
// $dbname="fincorp";
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
<CENTER>
<br>
<font size='2'>
	<center>
	<style type='text/css'>
	.myTable { border-collapse:collapse; }
	.myTable td {border-collapse:collapse;border:1px solid #333; font-size:12px;}
	.myTable th {border-collapse:collapse; padding:5px;border:1px solid;font-size:12px; font-weight:bold; font-style:italic; }
	.team {font-weight:bold;}
	
	</style>
			<TABLE class='myTable'>
			<tr>
			<th>NO.</th>
			
			<th>FROM</th>
			<th>TO</th>
			<th>AMOUNT</th>
			<th>INT AMT</th>
			<th>BROKERAGE</th>
			<th>LOAN_DATE</th>
			<th>DUE_DATE</th>
			<th>COLLECT INREST</th>
			<th>CLOSE LOAN</th>
	
			<th>COMMENTS</th>
			
			
			
			</tr>" );
}
$result1 = $conn->query( $sql1 );
while ( $row1 = $result1->fetch_assoc() ) {
    $name_array[ $counter - 1 ] = $row1[ 'TO' ];
    echo ( '
			<tr>
			<td>' . $counter . '</td>
			
			<td class="team">' . str_replace( '_', ' ', $row1[ "FROM" ] ) . '</td> 
			<td class="team">' . str_replace( '_', ' ', $row1[ "TO" ] ) . '</td>
			<td class="points">' . $row1[ "AMOUNT" ] . '/-</td>
			<td class="points">' . $row1[ "INTREST_AMT" ] . '/-</td>
			<td class="points">' . $row1[ "BROKERAGE_AMOUNT" ] . '/-</td>
			<td class="points">' . $row1[ "CURR_DATE" ] . '</td>
			<td class="team">' . $row1[ "DUE_DATE" ] . '</td>
			
			
			
			<td><form method="post" action="collect.php">
    <input type="hidden" name="varname" value=' . $row1[ "RID" ] . '>
    <input type="submit" value="Collect Interest">
</form></td>
			<td><form method="post" action="close.php">
    <input type="hidden" name="varname" value=' . $row1[ "RID" ] . '>
    <input type="submit" value="Close Loan">
</form></td>
			<td></td>
			</tr>
	
' );
    $counter = $counter + 1;
}
echo ( " </table>
	<table width=50%; style='margin-top:10;'>
	<td>
	<center>
	<form method='post' action='display1.php'><input type='date' name='curr_date' value=" . $date . "></input> <br> <br> <input type='submit' value='Print'/></form>
	</td>
	<td>
	<center>
	<form method='POST' action='AllDues.php'>
		<input type='hidden' name='result' value=" . htmlentities( serialize( $name_array ) ) . "></input>
		<input type='date' name='curr_date' value=" . $date . "></input> <br>  <br><input type='submit' value='Print All Dues'/></form>
		</td>
		<td>
	<center>
	<form method='POST' action='generate_gst.php'>
		<input type='hidden' name='result' value=" . htmlentities( serialize( $name_array ) ) . "></input>
		<input type='date' name='curr_date' value=" . $date . "></input> <br>  <br><input type='submit' value='Generate GST Bills'/></form>
		</td>
		</table>
		 " );
include 'footer.php';
?>