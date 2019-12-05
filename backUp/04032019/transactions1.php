<?php
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
$result2=$conn->query($sql1);

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
<table>
<form action='record.php' method='post' oninput='intrest_amount.value=(parseInt(a.value)*(parseInt(b.value)/100)/6)'>

<td>Loan ID</td>
<td><input type='varchar' name='rid' size='100'/><br></td>
</tr>

<tr>
<td> FROM</td>
<td><select name='from' >";
  
  while($row = $result->fetch_assoc())
  {echo"

  <option value=".$row['NAME'].">".$row['NAME']."</option>
";
  }
echo"
</select><br></td>
</tr>

<tr>
<td> TO</td>
<td><select name='to'>";
    while($row1 = $result1->fetch_assoc())
  {echo"

  <option value=".$row1["NAME"].">".$row1["NAME"]."</option>
";
  }
echo"
</select><br>
  </td>
</tr>

<tr>
<td>AMOUNT</td>
<td><input id='a' type='number' name='amount' size='100'><br></td>
</tr>

<tr>
<td>INTREST RATE</td>
<td><input id='b' type='number' name='intrest_rate' size='100' ><br></td>
</tr>

 <tr>
 <td>INTREST AMOUNT</td>
 <td><input name='intrest_amount' for='a b'></td>
 </tr>
 <tr>
 <td>INTREST VIA</td>
 <td><input type='varchar' name='int_via' size='100'/><br></td>
 </tr>
  
  <tr>
 <td>BROKERAGE RATE</td>
 <td><input type='varchar' name='brokerage_rate' size='100' id='c'/><br></td>
 </tr>
 
  <tr>
 <td>BROKERAGE AMOUNT</td>
 <td><input type='varchar' name='brokerage_amount' size='100'/><br></td>
 </tr>
 <TR>
 </select><br></td>
 </TR>
<tr>
 <td>BROKERAGE VIA</td>
 <td><input type='varchar' name='bro_via' size='100'/><br></td>
 </tr>
  
 
  <tr>
 <td>CURRENT DATE</td>
 <td><input type='date' name='curr_date' size='100'/><br></td>
 </tr>
 
  <tr>
 <td>DUE DATE</td>
 <td><input type='date' name='due_date' size='100'/><br></td>
 </tr>
 
  <tr>
 <td> VIA</td>
 <td><input type='varchar' name='via' size='100'/><br></td>
 </tr>
  
 <tr>
 <td></td>
 <td></td>
 </tr>
</table>
  <input type='submit' value='Submit'>
  </form>


</body></html>";







?>