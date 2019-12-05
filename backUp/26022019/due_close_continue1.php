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
$amount=$_POST['amount'];
$amount_via=$_POST['amount_via'];
// $int_via = $_POST['intrest_via'];
// $int_amt = $_POST['intrest_amount'];
// $bro_via = $_POST['brokerage_via'];
// $bro_amt = $_POST['brokerage_amount'];
$curr_date = $_POST['curr_date'];
$due_date = $_POST['due_date'];
$diff_day = $_POST['diff_day'];
$diff_int = $_POST['diff_int'];
$diff_bro = $_POST['diff_bro'];






ECHO($rid.'  '.$from.'  '.$to.'  '.$amount.'  '.$amount_via.'  '.$curr_date.'  '.$due_date.'  '.$bro.'  '.$diff_day.'  '.$diff_int.'  '.$diff_bro);
// $random0=rand();
// $random=rand();
// $random1=rand();
$CLOSED="CLOSED";

	
// Create connection

	$conn = new mysqli($servername,$username,$password,$dbname);

// Check connection


$sql0="SELECT * FROM `transactions_record` where `INTREST_RATE`<> 0";
$result0=$conn->query($sql0);
if($result0->num_rows==0)
{ echo "error";}
else {	$count=$result0->num_rows;

// $random=$count+31;
$random="D_I_{$rid}";
$random_1="D_B_{$rid}";
$random0="C{$rid}";

}

// ---------------------------------------------------
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
echo "Connected successfully";


$sql_1="INSERT INTO `transactions_record`(`RID`, `FROM`, `TO`, `AMOUNT`, `INTREST_RATE`, `INTREST_AMT`, `BROKERAGE_RATE`, `BROKERAGE_AMOUNT`, `CURR_DATE`, `DUE_DATE`, `VIA`, `DUE`,`DURATION`, `SECURITY_CHK` , `BROKERAGE_TO`) VALUES('$random','$to','$from',$diff_int,1,0,0,0,'$due_date','$due_date',' ','Y', ' ',' ' ,' ')";
if (mysqli_query($conn, $sql_1)) {
    echo "<center><h3>Record updated successfully (Intrest)<br>";
}

 else {
    echo "Error updating record  Intrest: " . mysqli_error($conn);
}

$sql_2="INSERT INTO `transactions_record`(`RID`, `FROM`, `TO`, `AMOUNT`, `INTREST_RATE`, `INTREST_AMT`, `BROKERAGE_RATE`, `BROKERAGE_AMOUNT`, `CURR_DATE`, `DUE_DATE`, `VIA`, `DUE`,`DURATION`, `SECURITY_CHK` , `BROKERAGE_TO`) VALUES('$random_1','$bro','$from',$diff_bro,1,0,0,0,'$due_date','$due_date',' ','Y', ' ',' ' ,' ')";
if (mysqli_query($conn, $sql_2)) {
    echo "<center><h3>Record updated successfully (Brokerage)<br>";
}

 else {
    echo "Error updating record  Brokerage: " . mysqli_error($conn);
}

// _________________________________

$sql1="INSERT INTO `transactions_record`(`RID`, `FROM`, `TO`, `AMOUNT`,  `CURR_DATE`,  `VIA`) VALUES ('$random0','$from','$to','$amount','$curr_date','$amount_via')";
if (mysqli_query($conn, $sql1)) {
    echo "<center><h3>Record updated successfully(PRINCIPAL RECVD.)<br>";
}

 else {
    echo "Error updating record : " . mysqli_error($conn);
}

$sql2= "UPDATE `transactions_record` SET `DUE`='$CLOSED' WHERE `RID`='$rid'";
// ---------------------------------------------------------------------
if (mysqli_query($conn, $sql2)) {
    echo "<center><h3>Record updated successfully(LOAN CLOSED)<br>";
}

 else {
    echo "Error updating record : " . mysqli_error($conn);
}


echo"  <form action='display.php'>
<input type='submit' value='Go to Display Screen'>
</form>
</body></html>";


    echo("<a href=''/> <h1>Home");
    




    include 'footer.php';

?>