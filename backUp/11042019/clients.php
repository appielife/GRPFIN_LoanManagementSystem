<?php
 include 'connection.php';
 include 'header.php';
// $servername = "localhost";
// $username = "root";
// $password = "password";

// Create connection
$conn = new mysqli($servername, $username, $password,$dbname);
$count=0;
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql0="SELECT * FROM `clients_info`";
$result0=$conn->query($sql0);
if($result0->num_rows==0)
{ echo "error";}
else {	$count=$result0->num_rows;
};
$count=$count+5;

echo"<html><body>
<CENTER style='margin-top:40 ;'>
<form action='enter.php' method='post'>
<table>
<tr>
<td>UID</td>
<td> <input type='varchar' value='$count' name='uid' size='100'/><br></td>
</tr>
<tr>
<td>NAME</td>
<td><input type='varchar' name='name' size='100'/><br></td>
</tr>
<tr>
<td>ADDRESS</td>
<td><input type='varchar' name='add' size='100'/><br></td>
</tr>
<tr>
<td>COMPANY NAME</td>
<td><input type='varchar' name='comp' size='100'/><br></td>
</tr>
<tr>
<td>PHONE</td>
<td><input type='varchar' name='phone' size='100'/><br></td>
</tr>
<tr>
<td>PAN NUMBER</td>
<td><input type='varchar' name='pan' size='100'/><br></td>
</tr>
<tr>
<td>GST AVAILABLE</td>
<td border='1'><input type='radio' name='gst_billing' value=1> YES
<input type='radio' name='gst_billing' value=0>NO </td>
</tr>
<tr>
<td>GST NUMBER</td>
<td><input type='varchar' name='gst' size='100'/><br></td>
</tr>
<tr>
<td>REFERENCE</td>
<td><input type='varchar' name='ref' size='100'/><br></td>
</tr>
<tr>
<td>EMAIL</td>
<td><input type='varchar' name='email' size='100'/><br></td>
</tr>
</table>
 <br>
 <br>
 <input type='submit' value='Submit!' width='100' height='20' size='100'/>
  
  

</form>
</body></html>";



include 'footer.php';



?>