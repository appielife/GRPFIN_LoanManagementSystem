<?php

include 'header.php';
include 'connection.php';
// $servername = "localhost";
// $username = "root";
// $password = "password";
// $dbname="fincorp";
$counter = 1;
$msg     = 'Are you sure ?';

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
// $sql="SELECT * FROM `clients_info` ORDER BY `NAME` ";
$sql = "SELECT *  FROM `clients_info` ORDER BY `NAME` asc ";

$result = $conn->query($sql);
if ($result->num_rows == 0) {
    echo "error";
} else { {
        echo ("
<style type='text/css'>
    .tableData{font-size:16px;font-color:#3e3e3e;font-weight:bold;display:inline;},
    .myTable { border-collapse:collapse;}
    .myTable th { }
    .myTable td, .myTable th {border-collapse:collapse; padding:5px;border:1px dotted #505050;font-size:12px }
    </style>

<H2>
    CONTACT DETAILS <hr>
<font size='4'>
    <center>
            <table class='myTable'BORDER='0' style='font-size:    14px; ' CELLPADDING='3' CELLSPACING='5'>
            <tr  style='background-color:'#2c4055'>
                    
            <th>UID</th>
            <th>NAME</th>
            <th>ADDRESS</th>
            <th>COMPANY NAME</th>
            <th WIDTH='13%'>CONTACT </th>
            <th WIDTH='13%'>PAN </th>
            <th WIDTH='13%'>EMAIL </th>
            <th WIDTH='13%'>REFERENCE </th>
            <th WIDTH='13%'>GST Available 0-NO 1-YES</th>
            <th WIDTH='13%'>GST</th>            
            <th>UPDATE</th>      
            </tr>");
    }
    
    while ($row1 = $result->fetch_assoc()) {
        echo ('<B>
            <tr>
            <form method="post" action="updateClient_submit.php"  onsubmit="return confirm(\'Are you sure you want to update  record id: ' . $row1["UID"] . '?\');">
                <td><b>' . $row1["UID"] . '</b></td>    
                <td><input  name="name" type="text" value="' . $row1["NAME"] . '"></input></td>
                <td><input name="address" "type="text" value="' . $row1["ADDRESS"] . '"></input></td>
                <td><input name="comp" type="text" value="' . $row1["COMPANY"] . '"></input></td>
                <td><input name="phone" type="text" value="' . $row1["PHONE"] . '"></input></td>
                <td><input name="pan" type="text" value="' . $row1["PAN"] . '"></input></td>
                <td><input name="email" type="text" value="' . $row1["EMAIL"] . '"></input></td>
                <td><input name="ref" type="text" value="' . $row1["REFERENCE"] . '"></input></td>
                <td><input name="gst_billing" type="text" value="' . $row1["GST_BILLING"] . '"></input></td>
                <td><input name="gst" type="text" value="' . $row1["GST"] . '"></input></td>            
                <td>
                    <input type="hidden" name="uid" value=' . $row1["UID"] . '>
                    <input type="submit" value="Update Record" name="button1" >
                </td>
            </form>
           
       
            </tr> 
             <script>
            function show_alert() {
               alert("xxxxxx");
            }
            </script>
    
');
        
        $counter++;
        
    }
    echo('</table>');
}
include 'footer.php';

?>