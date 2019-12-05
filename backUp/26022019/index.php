<?php
 ob_start();
 include 'connection.php';
 include 'header.php';

// $servername = "localhost";
// $username = "root";
// $password = "password";


// Create connection
$conn = new mysqli($servername, $username, $password);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

echo"
<center  style='margin-top: 150;'>


<FONT SIZE='6'>
 <br>

<table border='0' cellspacing='40'>
<td><form action='clients.php'><input type='submit'  value='Add Client'/></form></td>
<td><form action='updateClient.php'><input type='submit'  value='Update Client'/></form></td>
<td><form action='transactions.php'><input type='submit'  value='Loan Entry'/></form></td>
<td>
<table>
<form action='display.php' method='post'>
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

<td><form action='account.php'><input type='submit'  value='Account'/></form></td>
</table>



";




include 'footer.php';


?>