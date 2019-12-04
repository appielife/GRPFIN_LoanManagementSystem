<?php
 include 'header.php';
 include 'connection.php';
// $servername = "localhost";
// $username = "root";
// $password = "password";
// $dbname="fincorp";

// Create connection
$conn = new mysqli($servername, $username, $password,$dbname);
$count=0;
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql="SELECT * FROM `clients_info`  ORDER BY `NAME`";
$sql1="SELECT * FROM `clients_info` ORDER BY `NAME`";
$result=$conn->query($sql);
$result1=$conn->query($sql1);
$result2=$conn->query($sql1);


$sql0="SELECT * FROM `transactions_record` where `INTREST_RATE`<> 0  ";
$result0=$conn->query($sql0);
if($result0->num_rows==0)
{ echo "error";}
else {	$count=$result0->num_rows;
};
$count=$count+31;
$date = date('Y-m-d');


echo"

<style type='text/css'>
.myTable { border-collapse:collapse; }
.myTable td {border-collapse:collapse; padding:10px;border:1px dotted #333; font-size:12px; font-weight:bold; }
.myTable th {border-collapse:collapse;  padding:10px;padding-top:20px; border:0px dotted #333; font-size:15px; font-weight:bold; font-style:italic; }
</style>

<form action='record.php' method='post' oninput='intrest_amount.value=parseInt((parseFloat(a.value)*(parseFloat(b.value)/100)/(12/parseFloat(month.value)))),brokerage_amount.value=parseInt((parseFloat(a.value)*(parseFloat(c.value)/100)/(12/parseFloat(month.value))))'>

<table class='myTable'  cellspacing='2'>
<th colspan='4'>
Loan Details
</th>

<tr>
<td>Loan ID</td>
<td><input size='50' type='varchar' VALUE ='$count'name='rid'/><br></td>
<td>CURRENT DATE</td>
<td><input id='curr' type='date' value='$date' name='curr_date' size='100'/><br></td>
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
<td><input id='a' size='50' type='varchar' name='amount' ><br></td>

<td>DURATION MONTH(s)</td>
<td><input id='month' type='varchar' value='2' name='duration' size='50'><br></td>
</tr>
<tr>
<td> VIA</td>
<td><input type='varchar' name='via' size='50'/><br></td>
<td> SECURITY CHK</td>
<td><input type='varchar' name='security_chk' size='50'/><br></td>
</tr>
<th colspan='4'>
Intrest Details
</th>
<tr>
<td>INTREST RATE</td>
<td><input id='b' type='varchar' name='intrest_rate'  ><br></td>

 <td>INTREST AMOUNT</td>
 <td><input name='intrest_amount' for='a b' type='varchar'></td>
 </tr>
 <th colspan='4'>
 Commission Details
 </th>

 <TR>
 <TD>BROKERAGE TO</TD>
<td colspan='3'><select name='bro_to' >";
  
  while($row = $result2->fetch_assoc())
  {echo"

  <option value=".$row['NAME'].">".$row['NAME']."</option>
";
  }
echo"
</select><br></td>
 </TR>
  <tr>
 <td>BROKERAGE RATE</td>
 <td><input type='varchar' name='brokerage_rate'  id='c'/><br></td>

 <td>BROKERAGE AMOUNT</td>
 <td><input type='varchar' name='brokerage_amount'  for='a c'/><br></td>
 </tr>
  
 
</table>
<br>
<br>
  <input type='submit' value='Submit'>
  </form>


</body></html>";




include 'footer.php';


?>