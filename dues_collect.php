<?php
include 'connection.php';
include 'header.php';

// $servername="localhost";
// $username="root";
// $password="password";
// $dbname="fincorp";
$name   = $_POST[ 'due_name' ];
$date   = $_POST[ 'curr_date' ];
$count  = 1;
$total  = 0;
$total1 = 0;
$total2 = 0;
// ECHO ( '<center><B><font size="4">RAMESH PARWAL</b><BR> </FONT>214-A, City Center, S.C.Road, Jaipur-302001 (P)0141-2374431 (E)parwal.ramesh@yahoo.co.in<br><HR>' );
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
	if($clientData['GST_BILLING'])
	{
		$brokerage_to='G_R_PARWAL&CO.';
	}
	else{
		$brokerage_to='PARWAL_FINCORP';

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
$result1 = $conn->query( $sql0 );
if ( $result0->num_rows == 0 ) {
    echo "LENDER";
} else {
    echo ( ' 
	
	<h3>Comission Details</h3>
	
	<style type="text/css">
.myTable { border-collapse:collapse; }
.myTable th { }
.myTable td, .myTable th {border-collapse:collapse; padding:5px;border:1px dotted #505050; }
</style>
	<table class="myTable"cellspacing="2"  width="700px" 	 style="font-size:12px  ;">
	<tr>
	
	<th>Comission To </th>
	
	
    <th>Brokerage</th>
    <th>Via</th>
    <th>Current Date</th>
    
	<th>Collect Comission</th>
	<th>Generate GST Bill</th>
	
	
	
	</tr>
	' );
    while ( $row1 = $result1->fetch_assoc() ) {
        $DUE_DATE = $row1[ "DUE_DATE" ];
        $total    = $total + $row1[ "BROKERAGE_AMOUNT" ];
    }
    echo ( "<tr > 
	<td > 
			
			
			<form method='post' >
			Brokerage:<input name='bro' value='$brokerage_to' size='40' type='text'/> 	</td>
	
	
	<td align='right'>
	<input name='bro_amt' value='$total' /></td>
	<td><input name='brokerage_via'/></td>
	<td><input type='date' name='curr_date' value='$DUE_DATE' > </td>
	<input type='hidden' name='from' value='$name' />
	<td> <input type='submit' formaction='dues_collect_bro_continue.php' value='Collect Comission' name='button1' > </td>
	<td> <input type='submit' formaction='generate_gst_individual.php' value='Generate GST Invoice' name='btn_collect_gst' > </td>
	<input type='hidden' name='date_temp' value='$date' />
	</form>
	
	</tr>" );

	ECHO ( '</table> ' );
	
	$total = number_format( (float) $total, 2, '.', '' );
		
	$cgst            = number_format( (float) $total * 0.09, 2, '.', '' );
	
	$sgst            = number_format( (float) $total * 0.09, 2, '.', '' );
	
	$tds_5           = number_format( (float) $total * 0.05, 2, '.', '' );
	
	$tds_10           = number_format( (float) $total * 0.10, 2, '.', '' );
	
	$total_tax       = number_format( (float) $sgst + $cgst, 2, '.', '' );
	
	$total_amount    = number_format( (float) $total + $cgst + $sgst, 2, '.', '' );
	
	$sum_gst_tds5=$total_tax-$tds_5;
	$sum_gst_tds10=$total_tax-$tds_10;


	$round_off       = number_format( (float) ceil( $total_amount ) - $total_amount, 2, '.', '' );
	
	if ( $round_off > 0.50 ) {
		
		$round_off = number_format( (float) floor( $total_amount ) - $total_amount, 2, '.', '' );
	}
	
	$total_amount = $total_amount + $round_off;
	$total_tds5=$total-$tds_5;
	$total_tds10=$total-$tds_10;
	$total_gst_tds5=$total+$sum_gst_tds5;
	$total_gst_tds10=$total+$sum_gst_tds10;



	
	
	ECHO('
		<h4>Comission breakup</h4>
		<table width="100%" class="myTable"cellspacing="2"  width="700px" 	 style="font-size:12px  ;">
		<tr>
		<td rowspan="3">Cheque Amount</td>
		<td>
		NONE
		</td>
		<td>GST @18%</td>
		<td>TDS @ 5%</td>
		<td>TDS @ 10%</td>
		<td>GST + TDS@5</td>
		<td>GST + TDS@10%</td>
		</tr>
		<tr>
		
		<td>'.$total.'</td>
		<td>'.$total_tax.'</td>
		<td>'.$tds_5.'</td>
		<td>'.$tds_10.'</td>
		<td>'.$sum_gst_tds5.'</td>
		<td>'.$sum_gst_tds10.'</td>
		</tr>

		<tr>
		
		<td>'.$total.'</td>
		<td>'.$total_amount.'</td>
		<td>'.$total_tds5.'</td>
		<td>'.$total_tds10.'</td>
		<td>'.$total_gst_tds5.'</td>
		<td>'.$total_gst_tds10.'</td>
		</tr>

		</table>
		<br>
		<hr>
	');
	
    echo ( '	
	<h3>Intrest Details</h3>	
	<style type="text/css">
.myTable { border-collapse:collapse; width:90%;}
.myTable th { }
.myTable td, .myTable th {border-collapse:collapse; padding:5px;border:1px dotted #505050; }
</style>
	<table class="myTable"cellspacing="2"  width="625px" 	 style="font-size:12px  ;">
	<tr>
	<th>No. </th>
	<th>Bearer Name </th>
	<th>Amount</th>
	<th>Intrest</th>
    <th>Brokerage</th>
    <th>Via</th>
    <th>Current Date</th>
    <th>Next Due Date </th>
    <th>Collect Intrest</th>
	
	
	
	</tr>
	' );
    while ( $row0 = $result0->fetch_assoc() ) {
        $duration = '+' . $row0[ "DURATION" ] . ' months';
        $DUE_DATE = date( 'Y-m-d', strtotime( $duration, strtotime( $row0[ "DUE_DATE" ] ) ) );
        echo ( '
	 <form action="dues_collect_intrest_continue.php" method="post">
	<tr>
	
	<td>' . $count . '</td>
	
	
	
	<td><B>' . str_replace( '_', ' ', $row0[ "FROM" ] ) . '</B></td>
	<td>' . $row0[ "AMOUNT" ] . '/-</td>		
    <td><input name="intrest_amount" value=' . $row0[ "INTREST_AMT" ] . ' /></td>
    <td><input value=' . $row0[ "BROKERAGE_AMOUNT" ] . ' /></td>
    <td><input name="intrest_via"/></td>
    <td><input type="date" name="curr_date" size="100" value=' . $row0[ "DUE_DATE" ] . '> </td>
    <td><input type="date" name="due_date" size="100" value=' . $DUE_DATE . '> </td>
	<td> <input type="submit" value="Collect Intrest" name="button1" >
		 <input type="hidden" name="rid" value=' . $row0[ "RID" ] . ' />
		 <input type="hidden" name="from" value=' . $row0[ "TO" ] . ' />
		 <input type="hidden" name="to" value=' . $row0[ "FROM" ] . ' />
		 <input type="hidden" name="amount" value=' . $row0[ "AMOUNT" ] . ' />
		 <input type="hidden" name="date_temp" value=' . $date . ' />
		 
	
	 </td>
   
	</tr>
	</form>
	' );
        $count  = $count + 1;
        $total  = $total + $row0[ "BROKERAGE_AMOUNT" ];
        $total1 = $total1 + $row0[ "AMOUNT" ];
        $total2 = $total2 + $row0[ "INTREST_AMT" ];
	}

	ECHO ( '</table> <hr>' );	

	

}
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
	<table class="myTable"cellspacing="2"  width="625px" 	 style="font-size:13px  ;">
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
	<td>' . $row1[ "DUE_DATE" ] . '</td>
	
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
	
	