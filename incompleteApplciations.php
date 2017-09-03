<?php

include 'header.php';
$servername = "localhost";
$username = "root";
$password = "password";
$dbname="fincorp";
$counter=1;

// Create connection
$conn = new mysqli($servername, $username, $password,$dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

// $sql="SELECT * FROM `clients_info` ORDER BY `NAME` ";
$sql="SELECT *  FROM `clients_info` WHERE `ADDRESS` LIKE 'NA' OR`COMPANY` LIKE 'NA' OR`PHONE` LIKE 'NA'  OR  `ADDRESS` LIKE '' OR`COMPANY` LIKE '' OR`PHONE` LIKE '' ";

$result=$conn->query($sql);

if ($result->num_rows == 0)
			{ echo "error";}
ELSE{
{echo ("


<H2>
	CONTACT DETAILS <hr>
<font size='4'>
	<center>

	



			<TABLE BORDER='2' style='font-size:	12PX; 'CELLPADDING='3' CELLSPACING='3'>
			<tr>
			<th>S.NO.</th>			
			<th>UID</th>
			<th>NAME</th>
			<th>ADDRESS</th>
			<th>COMPANY NAME</th>
			<th WIDTH='13%'>CONTACT </th>
			<th WIDTH='13%'>PAN </th>
			

			
			
			
			
			</tr>"
	); 
}
	
		while($row1 = $result->fetch_assoc())
		{
		echo ('<B>
			<tr>
			<td>'.$counter.'</td>			
			<td class="team">'.$row1["UID"].'</td>
			<td class="points"><B>'.$row1["NAME"].'</td>
			<td class="points">'.str_replace('NA',' ',$row1["ADDRESS"]).'</td>
			<td class="points">'.str_replace('NA',' ',$row1["COMPANY"]).'</td>
			<td class="points"><B>'.str_replace('NA',' ',$row1["PHONE"]).'</td>
			<td class="points"><B>'.str_replace('NA',' ',$row1["PAN"]).'</td>

			
			
		
							
			
			</tr>
	
'
			); 
		
		$counter++;

	}
}
	// echo(" </table><a href='http://127.0.0.1/parwalfincorp/'/> </font><h1>Home</B>");





?>