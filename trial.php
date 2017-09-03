	<?php


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
<form action='http://127.0.0.1/parwalfincorp/record.php' method='post'oninput='intrest_amount.value=(parseInt(a.value)*(parseInt(b.value)/100)/6),brokerage_amt.value=(parseInt(a.value)*(parseInt(c.value)/100)/6)'>

<td>Loan ID</td>
<td><input type='varchar' name='rid' size='100'/><br></td>
</tr>

<tr>
<td> FROM</td>
<td><select name='from' >";
  
echo"
</select><br></td>
</tr>

<tr>
<td> TO</td>
<td><select name='to'>";
   
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


";
?>
