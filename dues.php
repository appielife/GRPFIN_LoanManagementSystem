<?php
include 'connection.php';
// $servername="localhost";
// $username="root";
// $password="password";
// $dbname="fincorp";
$name  = $_POST[ 'due_name' ];
$date  = $_POST[ 'curr_date' ];
$count = 1;
$total = 0;
$brokerage_to;
$total1 = 0;
$total2 = 0;
ECHO ( '<B><font size="4">RAMESH PARWAL</b><BR> </FONT>214-A, City Center, S.C.Road, Jaipur-302001 (P)0141-2374431 (E)parwal.ramesh@yahoo.co.in<br><HR>' );
$conn = new mysqli( $servername, $username, $password, $dbname );
////header
if ( $conn->connect_error ) {
    die( "Connection failed: " . $conn->connect_error );
}
$sql0    = "SELECT *  FROM `clients_info` WHERE `NAME` LIKE '$name'";
$result0 = $conn->query( $sql0 );
if ( $result0->num_rows == 0 ) {
    echo "error";
} else
	{
		$row0 = $result0->fetch_assoc();
		$clientData = $row0;
	}
echo ( '
<font size="4"> <B>' . str_replace( '_', ' ', $name ) . '</B></font><br><div style="font-size:14px">C/O SHRI
' . $row0[ "COMPANY" ] . ',' . $row0[ "ADDRESS" ] . '. Phone:' . $row0[ "PHONE" ] . ' PAN: ' . $row0[ "PAN" ] . ' Email: ' . $row0[ "EMAIL" ] . ' 
</div>
' );
//////////////dues 	
if ( $conn->connect_error ) {
    die( "Connection failed: " . $conn->connect_error );
}
$sql0    = "SELECT *  FROM `transactions_record` WHERE `TO` LIKE '$name' AND DUE LIKE 'Y' AND DUE_DATE <= '$date' ORDER BY `transactions_record`.`DUE_DATE`  ASC";
$result0 = $conn->query( $sql0 );
if ( $result0->num_rows == 0 ) {
    echo "LENDER";
} else {
    echo ( '<table ><tr><td><div style="font-size:14px">Your A/C have following intrest due(s) as in<B> ' . date( "M,Y", strtotime( $date ) ) . '</B>.
	<br>Kindly issue cheque(s) in the name of bearer & mention TDS amount deducted(if any) behind . 
	<br></td></tr>
	</table>
	<style type="text/css">
.myTable { border-collapse:collapse; }
.myTable th { }
.myTable td, .myTable th {border-collapse:collapse; padding:5px;border:1px dotted #505050; }
</style>
	<table class="myTable"cellspacing="2"  width="625px" 	 style="font-size:13px  ;">
	<tr>
	<th>No. </th>
	<th>Due Date </th>
	<th>Bearer Name </th>
	<th>Amount</th>
	<th>Intrest</th>
	<th>Brokerage</th>
	
	
	
	</tr>
	' );
    while ( $row0 = $result0->fetch_assoc() ) {
        echo ( '
	<tr>
	<td>' . $count . '</td>
	
	<td>' . date( "M j, Y", strtotime( $row0[ "DUE_DATE" ] ) ) . '</td>
	
	<td><B>' . str_replace( '_', ' ', $row0[ "FROM" ] ) . '</B></td>
	<td>' . $row0[ "AMOUNT" ] . '/-</td>		
	<td><B>' . $row0[ "INTREST_AMT" ] . '/-</B></td>
	<td>' . $row0[ "BROKERAGE_AMOUNT" ] . '/-</td>
	</tr>
	' );
        $count        = $count + 1;
        $total        = $total + $row0[ "BROKERAGE_AMOUNT" ];
        $total1       = $total1 + $row0[ "AMOUNT" ];
        $total2       = $total2 + $row0[ "INTREST_AMT" ];
        $brokerage_to = $row0[ "BROKERAGE_TO" ];
        $brokerage_to = str_replace( '_', ' ', $brokerage_to );
	}
	
	if($clientData['GST_BILLING'])
	{
		$brokerage_to='G.R. PARWAL AND CO.';
		$total = number_format( (float) $total, 2, '.', '' );
		$cgst            = number_format( (float) $total * 0.09, 2, '.', '' );
		$sgst            = number_format( (float) $total * 0.09, 2, '.', '' );
		$total_tax       = number_format( (float) $sgst + $cgst, 2, '.', '' );
		$total_amount    = number_format( (float) $total + $cgst + $sgst, 2, '.', '' );
		$round_off       = number_format( (float) ceil( $total_amount ) - $total_amount, 2, '.', '' );
		if ( $round_off > 0.50 ) {
			$round_off = number_format( (float) floor( $total_amount ) - $total_amount, 2, '.', '' );
		}
		$total_amount = $total_amount + $round_off;
		echo ( "<tr >
 
		<td colspan='3'<b> <style type='text/css'>
		   input {font-weight:bold; FONT-SIZE:14PX;	}
		</style>
				
				
		Brokerage<b><h3>$brokerage_to</h3></b></b></td>
		<td colspan='1' align='left'><I>TOTAL<br>GST @ 18%<br>R/O<br>NET TOTAL</td>

		<td colspan='2' align='right'>$total<br>$total_tax<br>$round_off <br><b>$total_amount/-</b></td>
		</tr>" );
	}
	else{
		$brokerage_to='PARWAL FINCORP';
		echo ( "<tr >
 
		<td colspan='3'<b> <style type='text/css'>
		   input {font-weight:bold; FONT-SIZE:14PX;	}
		</style>
				
				
		Brokerage<b><h3>$brokerage_to</h3></b></b></td>
		<td colspan='3' align='right'><b>$total/-</b></td>
		</tr>" );
	}
   
}
ECHO ( '</table> <HR>' );
/*---------------------------------------------------- */
$conn1 = new mysqli( $servername, $username, $password, $dbname );
if ( $conn1->connect_error ) {
    die( "Connection failed: " . $conn->connect_error );
}
$sql1    = "SELECT *  FROM `transactions_record` WHERE `FROM` LIKE '$name' AND DUE LIKE 'Y' AND DUE_DATE <= '$date' ORDER BY `transactions_record`.`DUE_DATE`  ASC";
$result1 = $conn1->query( $sql1 );
if ( $result1->num_rows == 0 ) {
    echo "
		";
} else {
    echo ( '<table ><tr><td><div style="font-size:14px">Your A/C have following intrest due(s) as on<B> ' . date( "M j, Y", strtotime( $date ) ) . '</B>.
	<br> Kindly notify for changes (if any).
	<br></td></tr>
	</table>
	<style type="text/css">
.myTable { border-collapse:collapse; }
.myTable th { }
.myTable td, .myTable th {border-collapse:collapse; padding:5px;border:1px dotted #505050; }
</style>
	<table class="myTable"cellspacing="2"  width="800px" 	 style="font-size:13px  ;">
	<tr>
	<th>No. </th>
	<th>Due Date </th>
	<th>Bearer Name </th>
	<th>Amount</th>
	<th>Intrest %</th>
	<th>Intrest(2 Months) </th>
	
	
	
	</tr>
	' );
    while ( $row1 = $result1->fetch_assoc() ) {
        echo ( '
	<tr>
	<td>' . $count . '</td>
	<td>' . date( "M j, Y", strtotime( $row1[ "DUE_DATE" ] ) ) . '</td>
	
	
	<td><B>' . str_replace( '_', ' ', $row1[ "TO" ] ) . '</B></td>
	<td>' . $row1[ "AMOUNT" ] . '/-</td>	
	<td><B>' . $row1[ "INTREST_RATE" ] . '</B></td>	
	<td><B>' . $row1[ "INTREST_AMT" ] . '/-</B></td>
	
	</tr>
	' );
        $count             = $count + 1;
        $total1            = $total1 + $row1[ "AMOUNT" ];
        $total2            = $total2 + $row1[ "INTREST_AMT" ];
        $intrest_avg       = ( ( $total2 / $total1 ) * 600 );
        $intrest_avg_round = round( $intrest_avg, 2 );
    }
    echo ( '<tr><td colspan="3"><b>Total</b></td> 
 <td><b>' . $total1 . '/-</td>
 <td><b>' . $intrest_avg_round . '</td>
 <td><b>' . $total2 . '/-</td>
 </tr>' );
}
ECHO ( '</table><BR><hr>' );
include 'footer.php';

?>
	
	