<?php
 include 'header.php';
$servername = "localhost";
$username = "root";
$password = "password";
$rid = $_POST['rid'];
$from = $_POST['from'];
$to = $_POST['to'];
$bro= $_POST['bro'];
$amount=$_POST['amount'];
$amount_via=$_POST['amount_via'];
$int_via = $_POST['intrest_via'];
$int_amt = $_POST['intrest_amount'];
$bro_via = $_POST['brokerage_via'];
$bro_amt = $_POST['brokerage_amount'];
$curr_date = $_POST['curr_date'];

ECHO($due_date);
$random0=rand();
$random=rand();
$random1=rand();
$CLOSED="CLOSED";
	
$dbname="fincorp";



// Create connection

	$conn = new mysqli($servername,$username,$password,$dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
echo "Connected successfully";

$sql0="INSERT INTO `transactions_record`(`RID`, `FROM`, `TO`, `AMOUNT`,  `CURR_DATE`,  `VIA`) VALUES ('$random0','$from','$to','$amount','$curr_date','$amount_via')";
if (mysqli_query($conn, $sql0)) {
    echo "<center><h3>Record updated successfully(PRINCIPAL RECVD.)<br>";
}

 else {
    echo "Error updating record : " . mysqli_error($conn);
}
$sql1= "UPDATE `transactions_record` SET `DUE`='$CLOSED' WHERE `RID`='$rid'";
$sql2="INSERT INTO `transactions_record`(`RID`, `FROM`, `TO`, `AMOUNT`,  `CURR_DATE`,  `VIA`) VALUES ('$random','$from','$to','$int_amt','$curr_date','$int_via')";
$sql3="INSERT INTO `transactions_record`(`RID`, `FROM`, `TO`, `AMOUNT`,  `CURR_DATE`,  `VIA`) VALUES ('$random1','$from','$bro','$bro_amt','$curr_date','$bro_via')";

if (mysqli_query($conn, $sql1)) {
    echo "<center><h3>Record updated successfully(LOAN CLOSED)<br>";
}

 else {
    echo "Error updating record : " . mysqli_error($conn);
}


if (mysqli_query($conn, $sql2)) {
    echo "<center><h3>Record updated successfully(Intrest)<br>";
}

	 else {
    echo "Error updating record  saa: " . mysqli_error($conn);
}
if (mysqli_query($conn, $sql3)) {
    echo "<center><h3>Record updated successfully(Brokerage)<br>";
}

	 else {
    echo "Error updating record  saa: " . mysqli_error($conn);
}

echo"  <form action='http://127.0.0.1/parwalfincorp/display.php'>
<input type='submit' value='Go to Display Screen'>
</form>
</body></html>";


	echo("<a href='http://127.0.0.1/parwalfincorp/'/> <h1>Home");

?>