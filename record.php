<?php
 include 'header.php';
$servername = "localhost";
$username = "root";
$password = "password";
$dbname="fincorp";
$rid = $_POST['rid'];
$from = $_POST['from'];
$to = $_POST['to'];
$amount = $_POST['amount'];
$int_rate = $_POST['intrest_rate'];
$int_amt = $_POST['intrest_amount'];
$bro_rate = $_POST['brokerage_rate'];
$bro_amt = $_POST['brokerage_amount'];
$curr_date = $_POST['curr_date'];
$due_date = $_POST['due_date'];
$via = $_POST['via'];
$bro_to=$_POST['bro_to'];
$bro_via=$_POST['bro_via'];	
$int_via=$_POST['int_via'];	

		
	

// Create connection
$conn = new mysqli($servername, $username, $password,$dbname);
$conn1 = new mysqli($servername, $username, $password,$dbname);
$conn2 = new mysqli($servername, $username, $password,$dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
	
}


$sql0="SELECT * FROM `transactions_record`";
$result0=$conn->query($sql0);
if($result0->num_rows==0)
{ echo "error";}
else {	$count=$result0->num_rows;

$random="I{$count}";
$random1="B{$count}";
}

 
echo "Connected successfully <CENTER>
<br>
<br>
<br>";
 $SQL="INSERT INTO `transactions_record`(`RID`, `FROM`, `TO`, `AMOUNT`, `INTREST_RATE`, `INTREST_AMT`, `BROKERAGE_RATE`, `BROKERAGE_AMOUNT`, `CURR_DATE`, `DUE_DATE`, `VIA`, `DUE`) VALUES('$rid','$from','$to',$amount,$int_rate,$int_amt,$bro_rate,$bro_amt,'$curr_date','$due_date','.$via.','Y')";
$sql2="INSERT INTO `transactions_record`(`RID`, `FROM`, `TO`, `AMOUNT`,  `CURR_DATE`,  `VIA`) VALUES ('$random','$to','$from','$int_amt','$curr_date','$int_via')";
 $sql3="INSERT INTO `transactions_record`(`RID`, `FROM`, `TO`, `AMOUNT`,  `CURR_DATE`,  `VIA`) VALUES ('$random1','$to','$bro_to','$bro_amt','$curr_date','$bro_via')";
 if (mysqli_query($conn,$SQL)) {
    echo "<center><h3>Record updated successfully";
}	
 else {
    echo "Error updating record  saa: " . mysqli_error($conn);
}

if (mysqli_query($conn1,$sql3)) {
    echo "<center><h3>Record updated successfully(Brokerage)<br>";
}

	 else {
    echo "Error updating record  saa: " . mysqli_error($conn);
}
if (mysqli_query($conn2, $sql2)) {
    echo "<center><h3>Record updated successfully(Intrest)<br>";
}

	 else {
    echo "Error updating record  saa: " . mysqli_error($conn);
}

	echo("<a href='http://127.0.0.1/parwalfincorp/'");

?>