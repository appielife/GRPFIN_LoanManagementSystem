<?php
 include 'header.php';
 include 'connection.php';
// $servername = "localhost";
// $username = "root";
// $password = "password";
$rid = $_POST['rid'];
$from = $_POST['from'];
$to = $_POST['to'];
$bro= $_POST['bro'];
$cheque='CHEQUE NO ';
$int_via = $_POST['intrest_via'];

$int_amt = $_POST['intrest_amount'];
$bro_via = $_POST['brokerage_via'];
$bro_via =$cheque.$bro_via;
$bro_amt = $_POST['brokerage_amount'];
$curr_date = $_POST['curr_date'];
$due_date = $_POST['due_date'];
$int_via =$cheque.$int_via;
ECHO($due_date);

	
// $dbname="fincorp";



// Create connection

	$conn = new mysqli($servername,$username,$password,$dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
echo "Connected successfully";

$sql0="SELECT * FROM `transactions_record`";
$result0=$conn->query($sql0);
if($result0->num_rows==0)
{ echo "error";}
else {	$count=$result0->num_rows;

$random="I{$count}";
$random1="B{$count}";
}


if (mysqli_query($conn, $sql0)) {
    echo "<center><h3>Record updated successfully(due date shifted)<br>";
}

$sql1= "UPDATE `transactions_record` SET `DUE_DATE`='$due_date' WHERE `RID`='$rid'";
if (mysqli_query($conn, $sql1)) {
    echo "<center><h3>Record updated successfully(due date shifted)<br>";
}

 else {
    echo "Error updating record : " . mysqli_error($conn);
}

$sql2="INSERT INTO `transactions_record`(`RID`, `FROM`, `TO`, `AMOUNT`,  `CURR_DATE`,  `VIA`) VALUES ('$random','$from','$to','$int_amt','$curr_date','$int_via')";
$sql3="INSERT INTO `transactions_record`(`RID`, `FROM`, `TO`, `AMOUNT`,  `CURR_DATE`,  `VIA`) VALUES ('$random1','$from','$bro','$bro_amt','$curr_date','$bro_via')";

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

echo"  <form action='display.php' method='post'>

<input type='date' name='curr_date' value='$due_date'>
<input type='submit' value='Go to Display Screen'>

</form>
</body></html>";


    
    

    include 'footer.php';
?>