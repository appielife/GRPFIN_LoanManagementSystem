
<?php
$total=0;
$total1=0;
// include 'header.php';
include 'connection.php';
	// $servername="localhost";
	// $username="root";
	// $password="password";
	// $dbname="fincorp";
	$name=$_POST['name'];
	$from=$_POST['from'];
	$to=$_POST['to'];
$total_loan=0;
	
	$conn = new mysqli($servername,$username,$password,$dbname);
	
if ($conn->connect_error)
{
	die("Connection failed: ". $conn->connect_error);
} 
$sql0= "SELECT *  FROM `clients_info` WHERE `NAME` LIKE '$name'";
$result0=$conn->query($sql0);
if ($result0->num_rows == 0)
			{ echo "error";}
else
	$row0 = $result0->fetch_assoc();
echo('
<center>

Account statement for<br><font size="6"> '.$name.'</font><br>
'.$row0["COMPANY"].','.$row0["ADDRESS"].', Phone:'.$row0["PHONE"].' PAN: '.$row0["PAN"].' 
<BR>
<b>
From: '.$from.' To:'.$to.'

<BR>





');

$sql2= "SELECT *  FROM `transactions_record` WHERE `FROM` LIKE '$name' AND `DUE` LIKE 'Y'  ORDER BY `transactions_record`.`CURR_DATE`  ASC";
$result=$conn->query($sql2);
if ($result->num_rows == 0)
			{ echo "";}
else
{$row = $result->fetch_assoc();
ECHO('<div width=100%><BR> <CENTER> ACTIVE LOANS <TABLE  WIDTH="80%" BORDER="5" style="font-size:12px">
<TR><TD>DATE</TD>
<TD> TO </TD> 
<TD>AMOUNT</TD>
<TD>RATE</TD></TR> 


');}
$result=$conn->query($sql2);
		while($row1 = $result->fetch_assoc())
		{
		echo ('
			<tr>
			<td >'.$row1["CURR_DATE"].'</td>
			
			<td>'.$row1["TO"].'</td>
			<td>'.$row1["AMOUNT"].'</td>
			<td>'.$row1["INTREST_RATE"].'</td>
			

			</tr>  	'
	);
		$total_loan=$total_loan+$row1["AMOUNT"];
			
		}
	if (($result->num_rows != 0))
			{ 	
echo('<tr><td colspan="2"><b>TOTAL</B></td>
<td cellspacing="2"><b>'.$total_loan.'/-</b></td>
</tr> </TABLE> <hr> <br> </div>');
			}

////////////////////////////

$sql2= "SELECT *  FROM `transactions_record` WHERE `TO` LIKE '$name' AND `DUE` LIKE 'Y'  ORDER BY `transactions_record`.`CURR_DATE`  ASC";
$result=$conn->query($sql2);
if ($result->num_rows == 0)
			{ echo "";}
else
{$row = $result->fetch_assoc();
ECHO('<BR> <CENTER> ACTIVE LOANS <TABLE WIDTH="80%" BORDER="5" style="font-size:12px">
<TR><TD>DATE</TD>
<TD> TO </TD> 
<TD>AMOUNT</TD>
<TD>RATE</TD>
<TD>BROKERAGE</TD>
</TR> 


');}
$result=$conn->query($sql2);
		while($row1 = $result->fetch_assoc())
		{
		echo ('
			<tr>
			<td >'.$row1["CURR_DATE"].'</td>
			
			<td>'.$row1["FROM"].'</td>
			<td>'.$row1["AMOUNT"].'</td>
			<td>'.$row1["INTREST_RATE"].'</td>	
			<td>'.$row1["BROKERAGE_RATE"].'</td>

			</tr>  	'
	);
		$total_loan=$total_loan+$row1["AMOUNT"];
			
		}
	if (($result->num_rows != 0))
			{ 	
echo('<tr><td colspan="2"><b>TOTAL</B></td>
<td cellspacing="2"><b>'.$total_loan.'/-</b></td>
</tr> </TABLE> <hr> <br> ');
			}

/////////////////////////////
echo('<center>
STATEMENT
<BR><BR>

<table BORDER="5">
<tr><th>OUT</th> <th>IN</th></tr>
<tr>
		<td width="50%">

			<TABLE  border="1" CELLSPACING="5" CELLPADDING="2" style="font-size:12px">
			<tr>
			<th>DATE</th>
			<th>TO</th>
			<th>AMOUNT</th>
			<th>VIA</th>
			
			
			</tr>  <br> 
		');


$sql1= "SELECT *  FROM `transactions_record` WHERE `FROM` LIKE '$name' AND CURR_DATE>='$from' AND CURR_DATE<='$to' ORDER BY `transactions_record`.`CURR_DATE`  ASC";
	$result=$conn->query($sql1);
if ($result->num_rows == 0)
			{ echo "";}
else

{echo (' '	
		
	); 
}
	$result1=$conn->query($sql1);
		while($row1 = $result1->fetch_assoc())
	{
		echo ('
			<tr>
			
			<td class="points">'.$row1["CURR_DATE"].'</td>
			
			<td class="points">'.$row1["TO"].'</td>
			<td class="points">'.$row1["AMOUNT"].'</td>
			<td class="points">'.$row1["VIA"].'</td>
			

			</tr> '
	

		
	); 
	 $total=$total+$row1["AMOUNT"];
	
	}
	 echo("<tr><td colspan='2' > <b><h2>Total</td> <td colspan='1'><b> <h2>".$total."</td></tr></h2> 	</table></td>");
	
//////////////////////////
	
	
$sql1= "SELECT *  FROM `transactions_record` WHERE `TO` LIKE '$name' AND CURR_DATE >= '$from' AND CURR_DATE<='$to' ORDER BY `transactions_record`.`CURR_DATE`  ASC";
	$result=$conn->query($sql1);
	echo ('
<td width="50%">

<TABLE border="1"style="font-size:12px;"CELLSPACING="5" CELLPADDING="2">
			<tr>
			<th>DATE</th>
			<th>FROM</th>
			
			<th>AMOUNT</th>
			<th>VIA</th>
			
			
			
			
			
			</tr>'
	); 
if ($result->num_rows == 0)
			{ echo "	";}
else
	$row = $result->fetch_assoc();
		
{
}
	$result1=$conn->query($sql1);
		while($row1 = $result1->fetch_assoc())
	{
		echo ('
			<tr>
			
	<td class="points">'.$row1["CURR_DATE"].'</td>
			<td class="team">'.$row1["FROM"].'</td>
			
			<td class="points">'.$row1["AMOUNT"].'</td>
				<td class="points">'.$row1["VIA"].'</td>
			
						
			

			
			</tr>'
	

		
	); 
	$total1=$total1+$row1["AMOUNT"];	
		
	}
	echo("<tr><td colspan='2' > <b><h2>Total</td> <td colspan='1'><b> <h2>".$total1."</td></tr></h2></table></td></table>");
	


	echo(" <br><br><hr>
	<table cellspacing='20'>
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
	</tr>
	</table>
	
	
	<a href=''/> <h1>Home");
	
	?>



