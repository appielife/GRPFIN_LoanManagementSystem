
<?php
include 'connection.php';
session_start(); // Starting Session
$error=''; // Variable To Store Error Message
if (isset($_POST['submit'])) {
if (empty($_POST['uname']) || empty($_POST['otp'])) {
$error = "Username or Password is invalid";
}
else
{
// Define $username and $password
$uname=$_POST['uname'];
$otp=$_POST['otp'];
// Establishing Connection with Server by passing server_name, user_id and password as a parameter
$conn = new mysqli($servername,$username,$password,$dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
// To protect MySQL injection for Security purpose
// Selecting Database
// SQL query to fetch information of registerd users and finds user match.
$query ="SELECT * FROM user WHERE `OTP`='$otp' AND `USERNAME`='$uname'";
$result=$conn->query($query);
if (!($result->num_rows == 0)) {
   
$_SESSION['login_user']=$uname; // Initializing Session
header("location: index.php"); // Redirecting To Other Page
} else {
$error = "Username or Password is invalid";
}
}
}
?>