<?php
 include 'header.php';
 include 'connection.php';
 include 'functions.php';
// $servername = "localhost";
// $username = "root";
// $password = "password";

$from = $_POST['from'];
$bro = $_POST['bro'];
$date_temp = $_POST['date_temp'];
$cheque='CHEQUE NO ';

$curr_date = $_POST['curr_date'];
$bro_via = $_POST['brokerage_via'];
$bro_via =$cheque.$bro_via;
$bro_amt = $_POST['bro_amt'];


	
// $dbname="fincorp";



// Create connection

	$conn = new mysqli($servername,$username,$password,$dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
echo "Connected successfully";

$sql0="SELECT * FROM `transactions_record`";
$result0=$conn->query($sql0);
if($result0->num_rows==0)
{ echo "error";}
else {	$count=$result0->num_rows;

    $random1="B{$count}";

}


if (mysqli_query($conn, $sql0)) {
    echo "<center><h3>Comission Recieved Successfully.<br>";
}


$sql2="INSERT INTO `transactions_record`(`RID`, `FROM`, `TO`, `AMOUNT`,  `CURR_DATE`,  `VIA`) VALUES ('$random1','$from','$bro','$bro_amt','$curr_date','$bro_via')";

if (mysqli_query($conn, $sql2)) {
    echo '<center>
    
    <style type="text/css">
    .tableData{font-size:16px;font-color:#3e3e3e;font-weight:bold;display:inline;},
    .myTable { border-collapse:collapse;}
    .myTable th { }
    .myTable td, .myTable th {border-collapse:collapse; padding:5px;border:1px dotted #505050;font-size:12px }
    </style>
    <table class="myTable" >
    <tr>
    <td colspan="1"> Loan Reciept<br> <div class="tableData">#'.$random1.'</div></td>
    <td colspan="2"> Curr. Date<br> <div class="tableData">'.date("M j, Y", strtotime($curr_date)).'</div></td>
    
    </tr>
    
    <tr>
    <td colspan="3">Comission\'s To<br> <div class="tableData">'.str_replace("_"," ",$bro).'</div></td>
    </tr>
    
    
    <tr>
    <td colspan="3">Lender\'s Detail<br> <div class="tableData">'.str_replace("_"," ",$from).'</div></td>
    </tr>
    
      
    
    <tr>
   
    <td colspan="2">Intrest Amount (In words)<br> <div class="tableData"> &#8377 '.convertNumberToWordsForIndia($bro_amt).'</div></td>
    <td colspan="1">Intrest Amount<br> <div class="tableData"> &#8377 '.moneyFormatIndia($bro_amt).'</div></td>
    
    </tr>
    
   
    <tr>
    
    <tr>
    <th colspan="3"> Payment Information</th>
    </tr>
      
    <tr>
    <td> Comission Payment </td>
    <td colspan="2"> <div class="tableData">'.($bro_via).'</div></td>
    </tr>
   
    
    
    
    
    
    
    </tr>
    
    
    
    </table>'
    
    
    ;
}

	 else {
    echo "Error updating record  saa: " . mysqli_error($conn);
}

echo"  <form action='dues_collect.php' method='post'>

<input type='hidden' name='curr_date' value='$date_temp'>
<input type='hidden' name='due_name' value='$from'>

<input type='submit' value='Back'>

</form>
</body></html>";


	echo("<a href=''/> <h1>Home");



    include 'footer.php';

?>