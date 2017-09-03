<?php

 include 'header.php';
$servername = "localhost";
$username = "root";
$password = "password";

// Create connection
$conn = new mysqli($servername, $username, $password);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

echo"
<center>


<FONT SIZE='6'>
Welcome! <br>
Select your options
<table border='0' cellspacing='40'>
<td><form action='http://127.0.0.1/parwalfincorp/clients.php'><input type='submit'  value='Add Client'/></form></td>
<td><form action='http://127.0.0.1/parwalfincorp/transactions.php'><input type='submit'  value='Loan Entry'/></form></td>
<td>
<table>
<form action='http://127.0.0.1/parwalfincorp/display.php' method='post'>
<tr>
<td><input type='date' name='curr_date'></td>
</tr>
<tr>
<td><FONT SIZE='4'><input type='submit' value='Dues'>
</td>
</tr>
</form>
</table>
</td>

<td><form action='http://127.0.0.1/parwalfincorp/account.php'><input type='submit'  value='Account'/></form></td>
</table>



";







?>