<?php
include 'header.php';
include 'connection.php';
// $servername = "localhost";
// $username = "root";
// $password = "password";
// $dbname="fincorp";
$counter=1;
// Create connection
$conn = new mysqli($servername, $username, $password,$dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
// $sql="SELECT * FROM `clients_info` ORDER BY `NAME` ";
$sql="SELECT *  FROM `clients_info` WHERE `ADDRESS` LIKE 'NA' OR`COMPANY` LIKE 'NA' OR`PHONE` LIKE 'NA'  OR  `ADDRESS` LIKE '' OR`COMPANY` LIKE '' OR`PHONE` LIKE '' ";
$sql="SELECT *  FROM `clients_info` ORDER BY `NAME`";
$result=$conn->query($sql);
if ($result->num_rows == 0)
			{ echo "error";}
ELSE{
{echo ("
	<style type='text/css'>
	.myTable { border-collapse:collapse; }
	.myTable td {border-collapse:collapse; padding:5px;border:1px solid #aaa; font-size:12px; font-weight:500; }
	.myTable th {border-collapse:collapse;  padding:5px;padding-top:5px; border:1px solid #aaa; font-size:15px; font-weight:bold; }
	.myTable{margin-top:10px;}
	.myTable1 { border-collapse:collapse; }
	.myTable1 td {border-collapse:collapse; padding:5px !important;border:1px solid #aaa; font-size:12px; font-weight:500; }
	.myTable1 th {border-collapse:collapse;  padding:5px ; border:1px solid #aaa; font-size:15px; font-weight:bold; }
	.points{padding:3px;}
	.details{
		font-weight:bold !important;
		font-size:14px !important;
		
	}
	</style>
<H2>
	CONTACT DETAILS <hr>
<font size='4'>
	<center>
	
			<TABLE CLASS='myTable' BORDER='2' style='font-size:	12PX; 'CELLPADDING='3' CELLSPACING='3'>
			<tr>
			<th>S.NO.</th>			
			<th>UID</th>
			<th>NAME</th>
			<th>ADDRESS</th>
			<th>COMPANY NAME</th>
			<th WIDTH='13%'>CONTACT </th>
			<th WIDTH='13%'>PAN </th>
			<th WIDTH='13%'>EMAIL </th>
			<th WIDTH='13%'>GST</th>	
			
			</tr>"
	); 
}
	
		while($row1 = $result->fetch_assoc())
		{
		echo ('<B>
			<tr>
			<td>'.$counter.'</td>			
			<td class="team">'.$row1["UID"].'</td>
			<td class="points"><B>'.str_replace('_',' ',$row1["NAME"]).'</td>
			<td class="points">'.preg_replace('/(\b(NA)\b)/i',' ',$row1["ADDRESS"]).'</td>
			<td class="points"><B>'.preg_replace('/(\b(NA)\b)/i',' ',$row1["COMPANY"]).'</td>
			<td class="points"><B>'.preg_replace('/(\b(NA)\b)/i',' ',$row1["PHONE"]).'</td>
			<td class="points"><B>'.preg_replace('/(\b(NA)\b)/i',' ',$row1["PAN"]).'</td>
			<td class="points"><B>'.preg_replace('/(\b(NA)\b)/i',' ',$row1["EMAIL"]).'</td>
			<td class="points"><B>'.preg_replace('/(\b(NA)\b)/i',' ',$row1["GST"]).'</td>
	
			
		
							
			
			</tr>
	
'
			); 
		
		$counter++;
	}
}
	// echo(" </table> </B>");
	include 'footer.php';
?>