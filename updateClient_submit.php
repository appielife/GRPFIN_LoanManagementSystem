<?php
 include 'connection.php';
// $servername = "localhost";
// $username = "root";
// $password = "password";
// $dbname="fincorp";
$uid = $_POST['uid'];
$name = $_POST['name'];
$address = $_POST['address'];
$comp = $_POST['comp'];
$phone = $_POST['phone'];
$pan = $_POST['pan'];
$ref = $_POST['ref'];
$email = $_POST['email'];
		
	
	
	

// Create connection
$conn = new mysqli($servername, $username, $password,$dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
	
}


 
echo "Connected successfully Name ".$name."<br> Address:".$address."<br>Company Name : ".$comp."<br> Phone: ".$phone."<br>PAN: ".$pan."<br>Email: ".$email."<br>Refrence :".$ref."<br>";
 $SQL="UPDATE `clients_info` SET `NAME`='$uid',`ADDRESS`='$address',`COMPANY`='$comp',`PHONE`='$phone',`PAN`='$pan',`REFERENCE`='$ref',`EMAIL`='$email' WHERE `UID`='$uid'";
if (mysqli_query($conn,$SQL)) {
    echo "<center><h3>Record updated successfully";
}	
 else {
    echo "Error updating record  saa: " . mysqli_error($conn);
}


	echo("<a href=''/> <h1>Home");


?>