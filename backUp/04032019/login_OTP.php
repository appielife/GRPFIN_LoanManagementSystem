
<?php

include 'connection.php';

session_start(); // Starting Session
$error=''; // Variable To Store Error Message
if (isset($_POST['submit_mobile'])) {
if ( empty($_POST['otp_set'])) {
$error = "invalid";
}
else
{
// Define $username and $password
$mobile=$_POST['mobile'];
$otp=$_POST['otp_set'];
// Establishing Connection with Server by passing server_name, user_id and password as a parameter

$conn = new mysqli($servername,$username,$password,$dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
// To protect MySQL injection for Security purpose

// Selecting Database
// SQL query to fetch information of registerd users and finds user match.

$query_usernameChk ="SELECT *  FROM `user` WHERE `USERNAME` = '$mobile';";
$query ="UPDATE `user` SET `OTP`=$otp WHERE `USERNAME` = '$mobile';";
$result=$conn->query($query_usernameChk);

if (($result->num_rows != 0)) {

    if (mysqli_query($conn,$query)) {
        $message1="\n".$mobile." is trying to access the system.\nOTP for the same is:".$otp." \nThank You";
            $message0=str_replace('%5Cn','%0A',$message1);

        //Your authentication key
        $authKey = "14263AIGRQVCrMdJ58cb7595";


        //Multiple mobiles numbers separated by comma
        $mobileNumber =7742186069;
        $mobileNumber1 =9829053431;
        

        //Sender ID,While using route4 sender id should be 6 characters long.
        $senderId = "GRPFIN";

        //Your message to send, Add URL encoding here.
        $message = $message0;
        //Define route 
        $route = "4";
        //Prepare you post parameters
        $postData = array(
            'authkey' => $authKey,
            'mobiles' => $mobileNumber,$mobileNumber1,
            'message' => $message,
            'sender' => $senderId,
            'route' => $route
        );

        //API URL
        $url="http://sms.ssdindia.com/api/sendhttp.php";

        // init the resource
        $ch = curl_init();
        curl_setopt_array($ch, array(
            CURLOPT_URL => $url,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_POST => true,
            CURLOPT_POSTFIELDS => $postData
            //,CURLOPT_FOLLOWLOCATION => true
        ));


        //Ignore SSL certificate verification
        curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);


        //get response
        $output = curl_exec($ch);

        //Print error if any
        if(curl_errno($ch))
        {
            echo 'error:' . curl_error($ch);
        }

        curl_close($ch);

        echo $output;


            $_SESSION['login_mobile']=$mobile; // Initializing Session
            header("location: login.php"); // Redirecting To Other Page
            
        }

        else {
            $error = "Username or Password is invalid";
        }

}	

else{
    $error = "Username Invalid";
}

}
}
?>