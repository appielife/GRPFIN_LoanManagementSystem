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
$gst_billing = $_POST['gst_billing'];
$gst = $_POST['gst'];

		 
	
	
	

// Create connection
$conn = new mysqli($servername, $username, $password,$dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
	
}


 
echo "Connected successfully Name ".$name."<br> Address:".$address."<br>Company Name : ".$comp."<br> Phone: ".$phone."<br>PAN: ".$pan."<br>Email: ".$email."<br>Refrence :".$ref."<br>GST_billing(0-NO, 1-YES) :".$gst_billing."<br>GST :".$gst."<br>";
 $SQL="UPDATE `clients_info` SET `NAME`='$name',`ADDRESS`='$address',`COMPANY`='$comp',`PHONE`='$phone',`PAN`='$pan',`REFERENCE`='$ref',`EMAIL`='$email', `GST_BILLING`= $gst_billing, `GST`= '$gst' WHERE `UID`='$uid'";
if (mysqli_query($conn,$SQL)) {
    echo "<center><h3>Record updated successfully";
}	
 else {
    echo "Error updating record  saa: " . mysqli_error($conn);
}


	
    include 'footer.php';


?>