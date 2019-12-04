<?php
 include 'connection.php';
 include 'header.php';
// $servername="localhost";
// 	$username="root";
// 	$password="password";
// 	$dbname="fincorp";
	$name=$_POST['due_name'];
	$date=$_POST['curr_date'];
	$count=1;
	$total=0;
	$TEXT1=" ";
		$total1=0;
			$total2=0;
	
	$conn = new mysqli($servername,$username,$password,$dbname);
		
if ($conn->connect_error)
{
	die("Connection failed: ". $conn->connect_error);
} 
$sql0= "SELECT * FROM `clients_info` WHERE `NAME` LIKE '$name'";

$result0=$conn->query($sql0);
while($row = $result0->fetch_assoc())
{
$PHONE=$row["PHONE"];
}
$conn1 = new mysqli($servername,$username,$password,$dbname);
		
if ($conn1->connect_error)
{
	die("Connection failed: ". $conn->connect_error);
} 

$sql1= "SELECT *  FROM `transactions_record` WHERE `TO` LIKE '$name' AND DUE LIKE 'Y' AND DUE_DATE <= '$date' ORDER BY `transactions_record`.`DUE_DATE`  ASC";
$result1=$conn1->query($sql1);
while($row1 = $result1->fetch_assoc())
{
	
	
	
	$date = new DateTime($row1['DUE_DATE']);
	$date1=$date->format('d-m-Y');
$TEXT1 .= '\n'.$row1["FROM"].'('.$date1.') -> '.$row1["INTREST_AMT"].'/- ,';
$total=$total+$row1["BROKERAGE_AMOUNT"];	
;

}



$TEXT="Dear $name,\nReminder for Int. payment to$TEXT1 \n& BROK_AMT->$total/- \nRegards, \nRamesh Parwal";

$TEXT = str_replace('_',' ',$TEXT);

 


$message1 = urlencode($TEXT);
echo($TEXT);


ECHO("<BR> <br><br>");
$message0=str_replace('%5Cn','%0A',$message1);
ECHO($message0);

 

//Your authentication key
$authKey = "14263AIGRQVCrMdJ58cb7595";


//Multiple mobiles numbers separated by comma
$mobileNumber = $PHONE;

//Sender ID,While using route4 sender id should be 6 characters long.
$senderId = "GRPFIN";

//Your message to send, Add URL encoding here.
$message = $message0;
//Define route 
$route = "4";
//Prepare you post parameters
$postData = array(
    'authkey' => $authKey,
    'mobiles' => $mobileNumber,
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

include 'footer.php';

?>