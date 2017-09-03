<?php
$date='2017-04-01';
include 'header.php';
	$servername="localhost";
	$username="root";
	$password="password";
	$dbname="fincorp";
	$count=1;
	$total=0;
		$total1=0;
			$total2=0;
			$count07=0;
			$loanAvg=0;
			$intrestAvg=0;
			$broAvg=0;
	
	$conn = new mysqli($servername,$username,$password,$dbname);
	
if ($conn->connect_error)
{
	die("Connection failed: ". $conn->connect_error);
} 
$sql0= "SELECT *  FROM `transactions_record` WHERE `INTREST_RATE`>0 ";
$sql1="SELECT *  FROM `transactions_record` WHERE DUE LIKE 'Y'  ";


$result0=$conn->query($sql0);
$result1=$conn->query($sql1);
if ($result0->num_rows == 0)
			{ echo "LENDER";}
else
{
	
	
	
while($row0 = $result1->fetch_assoc())
{ 
	$count=$count+1;
	$total=$total+$row0["BROKERAGE_AMOUNT"];
	$total1=$total1+$row0["AMOUNT"];
	$total2=$total2+$row0["INTREST_AMT"];
	
	
	
	
	
	
}
$loanAvg=round(($total1/$count),2);
$intrestAvg=round((($total2*6)/$total1)*100,2);
$broAvg=round((($total*6)/$total1)*100,2);
echo('
<table>
<tr>
	<table cellspacing="10" BORDER="2"	style="font-size:15px">
	<tr>
		<th>NUMBER OF LOANS</TH>
		<th>TOTAL LOAN GIVEN </th>
		<th> TOTAL INTREST</th>
		<th>TOTAL BROKERE</th>

	</tr>
	<tr>
		<td>'.$count.'</td>
		<td>'.$total1.'</td>
		<td>'.$total2.'</td>
		<td>'.$total.'</td>
	</tr>
	</table>
</tr>
<tr>
	<table cellspacing="10" BORDER="2"	style="font-size:15px">
	<tr>
		<th>AVG LOAN SIZE</th>
		<th>AVG INT % </th>
		<th>AVG BRO % </th>
	</tr>
	
	<tr>
		<td>'.$loanAvg.'</td>
		<td>'.$intrestAvg.'</td>
		<td>'.$broAvg.'</td>
	</tr>
	</table>
</tr>

</table> 
<HR>
	');


}
	
	
	while($row1 = $result1->fetch_assoc())
	{
		$count07=$count07+1;
		
		
	}

	echo('<h3>'.$count07.'</h3>');
	?>