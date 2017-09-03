<?php
$servername = "localhost";
$username = "root";
$password = "password";

// Create connection
$conn = new mysqli($servername, $username, $password);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
echo "Connected successfully";

echo"<html><body>
<CENTER>
<FONT SIZE='6'>G.R. PARWAL & CO. </FONT><BR>
214-A,CITY CENTER,S.C.ROAD,JAIPUR-302001 <BR>
01412355026 <T> support@parwalfincorp.in
<br>
<hr>
<br>
<br>
<br>
<form action='http://127.0.0.1/parwalfincorp/enter.php' method='post'>
<table>
<tr>
<td>UID</td>
<td> <input type='varchar' name='uid' size='100'/><br></td>
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
 
 <input type='submit' value='Submit!' width='100' height='20' size='100'/>
  
  

</form>
</body></html>";







?>