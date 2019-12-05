<?php
 include 'header.php';
 include 'connection.php';
// $servername = "localhost";
// $username = "root";
// $password = "password";
$rid = $_POST['rid'];
$from = $_POST['from'];
$to = $_POST['to'];
// $bro= $_POST['bro'];
$amount=$_POST['amount'];
$amount_via=$_POST['amount_via'];
// $int_via = $_POST['intrest_via'];
// $int_amt = $_POST['intrest_amount'];
// $bro_via = $_POST['brokerage_via'];
// $bro_amt = $_POST['brokerage_amount'];
$curr_date = $_POST['curr_date'];

// ECHO($due_date);
// $random0=rand();
// $random=rand();
// $random1=rand();
$CLOSED="CLOSED";
	
// $dbname="fincorp";



// Create connection

    $conn = new mysqli($servername,$username,$password,$dbname);
    
    $sql_1="SELECT * FROM `transactions_record` where `INTREST_RATE`<> 0";
    $result0=$conn->query($sql_1);
    if($result0->num_rows==0)
    { echo "error";}
    else {	$count=$result0->num_rows;
    
    // $random=$count+31;
    $random="I{$rid}";
    
    }

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
echo "Connected successfully";

$sql0="INSERT INTO `transactions_record`(`RID`, `FROM`, `TO`, `AMOUNT`,`INTREST_RATE`,  `CURR_DATE`,  `VIA`) VALUES ('$random','$from','$to','$amount',0,'$curr_date','$amount_via')";
if (mysqli_query($conn, $sql0)) {
    echo "<center><h3>Record updated successfully(PRINCIPAL RECVD.)<br>";
}

 else {
    echo "Error updating record : " . mysqli_error($conn);
}
$sql1= "UPDATE `transactions_record` SET `DUE`='$CLOSED' WHERE `RID`='$rid'";
// $sql2="INSERT INTO `transactions_record`(`RID`, `FROM`, `TO`, `AMOUNT`,  `CURR_DATE`,  `VIA`) VALUES ('$random','$from','$to','$int_amt','$curr_date','$int_via')";
// $sql3="INSERT INTO `transactions_record`(`RID`, `FROM`, `TO`, `AMOUNT`,  `CURR_DATE`,  `VIA`) VALUES ('$random1','$from','$bro','$bro_amt','$curr_date','$bro_via')";

if (mysqli_query($conn, $sql1)) {
    echo "<center><h3>Record updated successfully(LOAN CLOSED)<br>";
}

 else {
    echo "Error updating record : " . mysqli_error($conn);
}


// if (mysqli_query($conn, $sql2)) {
//     echo "<center><h3>Record updated successfully(Intrest)<br>";
// }

// 	 else {
//     echo "Error updating record  saa: " . mysqli_error($conn);
// }
// if (mysqli_query($conn, $sql3)) {
//     echo "<center><h3>Record updated successfully(Brokerage)<br>";
// }

// 	 else {
//     echo "Error updating record  saa: " . mysqli_error($conn);
// }

echo"  <form action='display.php'>
<input type='submit' value='Go to Display Screen'>
</form>
</body></html>";


    
    




    include 'footer.php';

?>