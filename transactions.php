<?php
 include 'header.php';
$servername = "localhost";
$username = "root";
$password = "password";
$dbname="fincorp";

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

echo"
<br>

<form action='http://127.0.0.1/parwalfincorp/record.php' method='post' oninput='intrest_amount.value=(parseFloat(a.value)*(parseFloat(b.value)/10)/60),brokerage_amount.value=(parseFloat(a.value)*(parseFloat(c.value)/10)/60)'>

<table>
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
<td><input id='a' type='varchar' name='amount' size='100'><br></td>
</tr>

<tr>
<td>INTREST RATE</td>
<td><input id='b' type='varchar' name='intrest_rate' size='100' ><br></td>
</tr>

 <tr>
 <td>INTREST AMOUNT</td>
 <td><input name='intrest_amount' for='a b' type='varchar'></td>
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
 <td><input type='varchar' name='brokerage_amount' size='100' for='a c'/><br></td>
 </tr>
 <TR>
 <TD>BROKERAGE TO</TD>
<td><select name='bro_to' >";
  
  while($row = $result2->fetch_assoc())
  {echo"

  <option value=".$row['NAME'].">".$row['NAME']."</option>
";
  }
echo"
</select><br></td>
 </TR>
<tr>
 <td>BROKERAGE VIA</td>
 <td><input type='varchar' name='bro_via' size='100'/><br></td>
 </tr>
  
 
  <tr>
 <td>CURRENT DATE</td>
 <td><input id='curr' type='date' name='curr_date' size='100'/><br></td>
 </tr>
 
  <tr>
 <td>DUE DATE</td>
 <td><input id='due'type='date' name='due_date' size='100'/><br></td>
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