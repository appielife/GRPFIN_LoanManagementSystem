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
<style type='text/css'>
.myTable { border-collapse:collapse; }
.myTable td {border-collapse:collapse; padding:10px;border:1px dotted #333; font-size:12px; font-weight:bold; }
.myTable th {border-collapse:collapse;  padding:10px;padding-top:20px; border:0px dotted #333; font-size:15px; font-weight:bold; font-style:italic; }
</style>
<CENTER>
<form action='enter.php' method='post'>

<table class='myTable'>
<th colspan='2'>
Enter client details
</th>
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