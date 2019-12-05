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
<style type='text/css'>
.myTable { border-collapse:collapse; }
.myTable td {border-collapse:collapse; padding:10px;border:1px dotted #333; font-size:12px; font-weight:bold; }
.myTable th {border-collapse:collapse;  padding:10px;padding-top:20px; border:0px dotted #333; font-size:15px; font-weight:bold; font-style:italic; }
</style>

<script>
function myFunction() {
    var x =new Date(document.getElementById('a').value);
    var y = new Date(document.getElementById('b').value);
    var x_date =document.getElementById('a').value;
    var y_date = document.getElementById('b').value;
    var r_int =document.getElementById('r_intrest').value;
    var amt =document.getElementById('amt').value;
    var r_bro = document.getElementById('r_bro').value;
    var diff = new Date(y - x);
    var days  = diff/1000/60/60/24;  
    var d_int=Math.round((amt*(r_int/100))*(days/360));
    var d_bro=Math.round((amt*(r_bro/100))*(days/360));

    var rid =document.getElementById('_rid').value;
    var from =document.getElementById('_from').value;
    var to =document.getElementById('_to').value;
    var amount_via =document.getElementById('_amount_via').value;
    var bro =document.getElementById('_bro').value;


    document.getElementById('rid').value = rid;
    document.getElementById('from').value = from;
    document.getElementById('to').value = to;
    document.getElementById('amount_via').value = amount_via;
    document.getElementById('bro').value = bro;
    document.getElementById('amount').value = amt;
    document.getElementById('diff_day').value = days;
    document.getElementById('diff_int').value = d_int;
    document.getElementById('diff_bro').value = d_bro;
    document.getElementById('curr_date').value = y_date;
    document.getElementById('due_date').value = x_date;
  




   
}
</script>
<form action='continue1.php' method='post' oninput='myFunction()'>
<input type='hidden' id='r_intrest'  value=".$row["INTREST_RATE"].">
<input type='hidden' id='r_bro' value=".$row["BROKERAGE_RATE"].">

  <table class='myTable'>
    <tr>
      <td>RID</td>
       <td  COLSPAN='3'><input type='varchar' id='_rid' name='rid' size='100' value=".$row["RID"]."></td>
    </tr>

    <tr>
    <td>FROM</td>
     <td COLSPAN='3'><input type='varchar'   id='_from' name='from' size='100' value=".$row["TO"]."></td>
    </tr>


    <tr>
    <td>TO</td>
    <td COLSPAN='3'><input type='varchar'  id='_to' name='to' size='100'value=".$row["FROM"]."></td>
    </tr>

    <tr>
    <td>PRINCIPAL AMOUNT</td>
    <td><input type='varchar' name='amount' id='amt' size='50' value=".$row["AMOUNT"]."></td>
    
    <td>VIA</td>
    <td><input type='varchar'  id='_amount_via' name='amount_via' size='50' value=".$row["SECURITY_CHK"]."></td>
    </tr>


    <tr>
    <td> BROKERAGE A/C</td>
    <td COLSPAN='3'><input type='varchar'  id='_bro' name='bro' size='100' value=".$row["BROKERAGE_TO"]."></td>
    </tr>
    <tr>
    <td>DUE DATE</td>
    <td><input type='date' id='a' readonly name='due_date' size='50'value=".$row["DUE_DATE"]."></td>
   
    <td>CURRENT DATE</td>
    <td><input type='date' id='b' name='curr_date' size='50'value=".$row["DUE_DATE"]."></td>
    </tr>
        
  </table>


  <BR>
<input type='submit' value='CLOSE LOAN '>
</form>

<form action='due_close_continue1.php' method='post'>

  <input type='hidden' id='rid' name='rid' >
  <input type='hidden'  id='from'name='from' >
  <input type='hidden' id='to' name='to' >
  <input type='hidden' id='amount' name='amount'>
  <input type='hidden'  id='amount_via'name='amount_via' >
  <input type='hidden'  id='bro'name='bro'>
  <input type='hidden'  id='due_date' readonly name='due_date'>
  <input type='hidden'  id='curr_date' name='curr_date'>

  
  <table class='myTable'>
  <th colspan='6'>DIFFERENCE DETAILS</th>

  <tr>
  
  <td>DAYS</td>
  <td><input type='varchar' name='diff_day' id='diff_day'></td>
  <td>INTREST AMOUNT</td>
  <td><input type='varchar' name='diff_int' id='diff_int'></td>
  <td>COMISSION AMOUNT</td>
  <td><input type='varchar' name='diff_bro' id='diff_bro'></td>
  
  
  </tr>
  
  </table>

<input type='submit' value='RAISE DUE & CLOSE '>
</form>
</body></html>";


}



include 'footer.php';

//   RID:<br> 
//   FROM:<input type='varchar' name='from' size='100' value=".$row["TO"]."><br>
//   TO<input type='varchar' name='to' size='100'value=".$row["FROM"]."><br>
//   PRINCIPAL AMOUNT:<input type='varchar' name='amount' size='100'value=".$row["AMOUNT"]."><br>
//   VIA:<input type='varchar' name='amount_via' size='100'><br>
//   INTREST:<input type='varchar' name='intrest_amount' size='100'value=".$row["INTREST_AMT"]."><br>
//   VIA:<input type='varchar' name='intrest_via' size='100'><br>
//   BROKERAGE:<input type='varchar' name='brokerage_amount' size='100'value=".$row["BROKERAGE_AMOUNT"]."><br>
//    BROKERAGE A/C:<input type='varchar' name='bro' size='100'><br>
//    VIA:<input type='varchar' name='brokerage_via' size='100'><br>
//  :<input type='date' name='curr_date' size='100'value=".$row["DUE_DATE"]."><br> 
?>