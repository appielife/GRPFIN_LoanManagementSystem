<?php
 include 'header.php';
 include 'connection.php';
 include 'functions.php';
// $servername = "localhost";
// $username = "root";
// $password = "password";
$rid = $_POST['rid'];
$from = $_POST['from'];
$to = $_POST['to'];
$date_temp = $_POST['date_temp'];
$cheque='CHEQUE NO ';
$int_via = $_POST['intrest_via'];
$amount=$_POST['amount'];
$int_amt = $_POST['intrest_amount'];
$curr_date = $_POST['curr_date'];
$due_date = $_POST['due_date'];
$int_via =$cheque.$int_via;

ECHO($due_date);

	
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

$random="I{$count}";

}


if (mysqli_query($conn, $sql0)) {
    echo "<center><h3>Record updated successfully(due date shifted)<br>";
}

$sql1= "UPDATE `transactions_record` SET `DUE_DATE`='$due_date' WHERE `RID`='$rid'";
if (mysqli_query($conn, $sql1)) {
    echo "<center><h3>Record updated successfully(due date shifted)<br>";
}

 else {
    echo "Error updating record : " . mysqli_error($conn);
}

$sql2="INSERT INTO `transactions_record`(`RID`, `FROM`, `TO`, `AMOUNT`,  `CURR_DATE`,  `VIA`) VALUES ('$random','$from','$to','$int_amt','$curr_date','$int_via')";

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
    <td colspan="1"> Loan Reciept<br> <div class="tableData">#'.$rid.'/'.$random.'</div></td>
    <td colspan="1"> Curr. Date<br> <div class="tableData">'.date("M j, Y", strtotime($curr_date)).'</div></td>
    <td colspan="1"> Due Date<br> <div class="tableData">'.date("M j, Y", strtotime($due_date)).'</div></td>
    </tr>
    
    <tr>
    <td colspan="3">Borrower\'s Detail<br> <div class="tableData">'.str_replace("_"," ",$from).'</div></td>
    </tr>
    
    
    <tr>
    <td colspan="3">Lender\'s Detail<br> <div class="tableData">'.str_replace("_"," ",$to).'</div></td>
    </tr>
    
    
    <tr>
    <td colspan="2">Loan Amount(In Words)<br> <div class="tableData">'.convertNumberToWordsForIndia($amount).'</div></td>
    <td colspan="1">Loan Amount<br> <div class="tableData"> &#8377 '.moneyFormatIndia($amount).'</div></td>
    
    </tr>
    
    <tr>
   
    <td colspan="2">Intrest Amount (In words)<br> <div class="tableData"> &#8377 '.convertNumberToWordsForIndia($int_amt).'</div></td>
    <td colspan="1">Intrest Amount<br> <div class="tableData"> &#8377 '.moneyFormatIndia($int_amt).'</div></td>
    
    </tr>
    
   
    <tr>
    
    <tr>
    <th colspan="3"> Payment Information</th>
    </tr>
      
    <tr>
    <td> Intrest Payment </td>
    <td colspan="2"> <div class="tableData">'.($int_via).'</div></td>
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

<input type='submit' value='Go to Display Screen'>

</form>
</body></html>";


    echo("<a href=''/> <h1>Home");
    


    include 'footer.php';
?>