<?php

include 'connection.php';
	// $servername="localhost";
	// $username="root";
	// $password="password";
	// $dbname="fincorp";
	$counter=1;
	
	$date=$_POST['curr_date'];
	
echo $date;

	
	$conn = new mysqli($servername,$username,$password,$dbname);
	
if ($conn->connect_error)
{
	die("Connection failed: ". $conn->connect_error);
} 

$sql1= "SELECT *  FROM `transactions_record` WHERE `DUE_DATE` < '$date' AND `DUE` LIKE 'Y' ORDER BY `transactions_record`.`DUE_DATE`  ASC" ;
	$result=$conn->query($sql1);
if ($result->num_rows == 0)
			{ echo "error";}
else
	$row = $result->fetch_assoc();
{echo ("
<CENTER>
<FONT SIZE='6'>G.R. PARWAL & CO. </FONT><BR>
214-A,CITY CENTER,S.C.ROAD,JAIPUR-302001 <BR>
01412355026 <T> support@parwalfincorp.in
<br>
<hr>
<br>


<font size='2'>
	<center>



			<TABLE BORDER='5' style='font-size:	12px;  ' WIDTH='50%'   CELLPADDING='2' CELLSPACING='1'>
			<tr>
			<th>NO.</th>
			
			<th>FROM</th>
			<th>TO</th>
			<th>AMOUNT</th>
			<th>INTREST AMOUNT</th>
			<th>BROKERAGE</th>
			<th>LOAN_DATE</th>
			<th>DUE_DATE</th>
			<th>COLLECT INREST</th>
			<th>CLOSE LOAN</th>
	
			<th>COMMENTS</th>
			
			
			
			</tr>"
	); 
}
	$result1=$conn->query($sql1);
		while($row1 = $result1->fetch_assoc())
	{ $name_array[$counter-1]=$row1['TO'];
		echo ('
			<tr>
			<td>'.$counter.'</td>
			
			<td class="team">'.$row1["FROM"].'</td>
			<td class="points">'.$row1["TO"].'</td>
			<td class="points">'.$row1["AMOUNT"].'</td>
			<td class="points">'.$row1["INTREST_AMT"].'</td>
			<td class="points">'.$row1["BROKERAGE_AMOUNT"].'</td>
			<td class="points">'.$row1["CURR_DATE"].'</td>
			<td class="points">'.$row1["DUE_DATE"].'</td>
			
			
			
			<td><form method="post" action="collect.php">
    <input type="hidden" name="varname" value='.$row1["RID"].'>
    <input type="submit" value="Collect Interest">
</form></td>
			<td><form method="post" action="close.php">
    <input type="hidden" name="varname" value='.$row1["RID"].'>
    <input type="submit" value="Close Loan">
</form></td>

			<td></td>
			</tr>
	
'
		
	); 
	$counter=$counter+1;	
		
	}

	echo(" </table><form method='post' action='display1.php'><input type='date' name='curr_date' value=".$date."></input> <br> <input type='submit' value='Print'/></form>

	<form method='POST' action='AllDues.php'>");


	
	
		  echo("
		<input type='hidden' name='result' value=".htmlentities(serialize($name_array))."></input> ");

   

echo("

	
	
		  
		
		<input type='date' name='curr_date' value=".$date."></input> <br> <input type='submit' value='Print All Dues'/></form>
	
	
	
	
	<a href=''/> </font><h1>Home");
	?>