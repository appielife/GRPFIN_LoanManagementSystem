<?php
 include 'header.php';
 include 'connection.php';

// $servername = "localhost";
// $username = "root";
// $password = "password";
// $dbname="fincorp";

// Create connection
$conn = new mysqli($servername, $username, $password,$dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
echo "Connected successfully";
$sql="SELECT * FROM `clients_info`";
$sql1="SELECT * FROM `clients_info`";
$result=$conn->query($sql);
$result1=$conn->query($sql1);

echo"<html><body><center><table><tr><td>

<form action='account_det.php' method='post'>

  
   <br>Search For</td><td><select name='name'>";
  
  while($row = $result->fetch_assoc())
  {echo"

  <option value=".$row["NAME"].">".$row["NAME"]."</option>
";
  }
echo"
</select></td></tr>
<tr><td>From:</td>
<td><input type='date' name='from'/>
</td></tr>
<tr>
<td>
To:</td>
<td>
<input type='date' name='to'/><br>
</td></tr>



</table>
<br><br>
<input type='submit' value ='Submit'>	</form>

";
?>