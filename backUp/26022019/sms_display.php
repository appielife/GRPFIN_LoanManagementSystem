<?php
 include 'header.php';
 include 'connection.php';
// $servername="localhost";
// 	$username="root";
// 	$password="password";
// 	$dbname="fincorp";
	$name=$_POST['due_name'];
	$date=$_POST['curr_date'];
		$date2=$_POST['curr_date'];
	$count=1;
	$total=0;
	$TEXT1=" ";
		$total1=0;
			$total2=0;
	
	$conn = new mysqli($servername,$username,$password,$dbname);
		
if ($conn->connect_error)
{
	die("Connection failed: ". $conn->connect_error);
} 
$sql0= "SELECT * FROM `clients_info` WHERE `NAME` LIKE '$name'";

$result0=$conn->query($sql0);
while($row = $result0->fetch_assoc())
{
$PHONE=$row["PHONE"];
}
$conn1 = new mysqli($servername,$username,$password,$dbname);
		
if ($conn1->connect_error)
{
	die("Connection failed: ". $conn->connect_error);
} 

$sql1= "SELECT *  FROM `transactions_record` WHERE `TO` LIKE '$name' AND DUE LIKE 'Y' AND DUE_DATE < '$date' ORDER BY `transactions_record`.`DUE_DATE`  ASC";
$result1=$conn1->query($sql1);
while($row1 = $result1->fetch_assoc())
{
	
	
	
	$date = new DateTime($row1['DUE_DATE']);
	$date1=$date->format('d-m-Y');
$TEXT1 .= '\n'.$row1["FROM"].'('.$date1.') -> '.$row1["INTREST_AMT"].'/- ,';
$total=$total+$row1["BROKERAGE_AMOUNT"];	
;

}


echo("<br> <center>");
$TEXT="Dear $name,<br>Reminder for Int. payment to$TEXT1 <br>& BROK_AMT->$total/- <br>Regards, <br>Ramesh Parwal";

$TEXT = str_replace('_',' ',$TEXT);

$TEXT = str_replace('\n','<br>',$TEXT);

 


$message1 = urlencode($TEXT);
echo($TEXT);



ECHO("<BR> <br><br>
<form action='sms.php' method='post'>
	<input type='hidden' name='due_name' value='$name'>
	<input type='hidden' name='curr_date' value='$date2'>
	<input type='submit' value='Send Reminder(SMS)'>
	
	</form>
	");

 
	include 'footer.php';

?>