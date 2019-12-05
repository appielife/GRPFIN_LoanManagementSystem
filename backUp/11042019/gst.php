<?php
 include 'header.php';
 include 'connection.php';

// $servername = "localhost";
// $username = "root";
// $password = "password";
// $dbname="fincorp";


echo"<html><body><center style='margin-top:150'><table  cellspacing='40'>

<form  method='post'>
<tr><td>From:
<input type='date' name='from'/>
</td>
<td>
To:<input type='date' name='to'/><br>
</td></tr>
<tr>
</tr>
<tr>
<td align='center'>

<input type='submit' formaction='all_gst_bill.php' name ='invoices' value ='Print Invoices'>
</td>
<td align='center' >

<input type='submit' formaction='gst_report.php' name='report' value ='Print Report'>

</td>
</tr>

</table>
<br><br>
	</form>





";

include 'footer.php';
?>