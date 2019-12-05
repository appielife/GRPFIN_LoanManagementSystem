<?php
ob_start();
include('connection.php');
// Establishing Connection with Server by passing server_name, user_id and password as a parameter
$conn = new mysqli($servername,$username,$password,$dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
session_start();// Starting Session
// Storing Session
$user_check=$_SESSION['login_user'];
// SQL Query To Fetch Complete Information Of User
$query ="SELECT `USERNAME` FROM user WHERE `USERNAME`='$user_check'";
$result=$conn->query($query);


if (($result->num_rows == 0)){
header('location: loginWithMobile.php'); // Redirecting To Home Page
// echo "<script>location='loginWithMobile.php'</script>";
}
?>