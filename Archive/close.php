<?php
 include 'header.php';
 include 'connection.php';
// $servername = "localhost";
// $username = "root";
// $password = "password";
$var_value = $_POST['varname'];
// $dbname="fincorp";
echo($var_value);


// Create connection

	$conn = new mysqli($servername,$username,$password,$dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
echo "Connected successfully";

$sql1= 'SELECT * FROM `transactions_record` WHERE `RID` ='.$var_value;

$result=$conn->query($sql1);

while($row = $result->fetch_assoc())
{

echo"<html><body>


<form action='continue1.php' method='post'>

  RID:<input type='varchar' name='rid' size='100' value=".$row["RID"]."><br> 
  FROM:<input type='varchar' name='from' size='100' value=".$row["TO"]."><br>
  TO<input type='varchar' name='to' size='100'value=".$row["FROM"]."><br>
  PRINCIPAL AMOUNT:<input type='varchar' name='amount' size='100'value=".$row["AMOUNT"]."><br>
  VIA:<input type='varchar' name='amount_via' size='100'><br>
  INTREST:<input type='varchar' name='intrest_amount' size='100'value=".$row["INTREST_AMT"]."><br>
  VIA:<input type='varchar' name='intrest_via' size='100'><br>
  BROKERAGE:<input type='varchar' name='brokerage_amount' size='100'value=".$row["BROKERAGE_AMOUNT"]."><br>
   BROKERAGE A/C:<input type='varchar' name='bro' size='100'><br>
   VIA:<input type='varchar' name='brokerage_via' size='100'><br>
 CURRENT_DATE:<input type='date' name='curr_date' size='100'value=".$row["DUE_DATE"]."><br> 
 

  
<input type='submit' value='CLOSE LOAN '>
</form>
</body></html>";


}




?>