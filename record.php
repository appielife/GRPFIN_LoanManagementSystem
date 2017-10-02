<?php
 include 'header.php';
 include 'connection.php';
// $servername = "localhost";
// $username = "root";
// $password = "password";
// $dbname="fincorp";
$rid = $_POST['rid'];
$from = $_POST['from'];
$to = $_POST['to'];
$amount = $_POST['amount'];
$int_rate = $_POST['intrest_rate'];
$int_amt = $_POST['intrest_amount'];
$bro_rate = $_POST['brokerage_rate'];
$bro_amt = $_POST['brokerage_amount'];
$curr_date = $_POST['curr_date'];
$due_date = $_POST['due_date'];
$via = $_POST['via'];
$bro_to=$_POST['bro_to'];
$bro_via=$_POST['bro_via'];	
$int_via=$_POST['int_via'];	

// Function for nuber to currecny format 
function moneyFormatIndia($num) {
    $num=round($num);
    $explrestunits = "" ;
    if(strlen($num)>3) {
        $lastthree = substr($num, strlen($num)-3, strlen($num));
        $restunits = substr($num, 0, strlen($num)-3); // extracts the last three digits
        $restunits = (strlen($restunits)%2 == 1)?"0".$restunits:$restunits; // explodes the remaining digits in 2's formats, adds a zero in the beginning to maintain the 2's grouping.
        $expunit = str_split($restunits, 2);
        for($i=0; $i<sizeof($expunit); $i++) {
            // creates each of the 2's group and adds a comma to the end
            if($i==0) {
                $explrestunits .= (int)$expunit[$i].","; // if is first value , convert into integer
            } else {
                $explrestunits .= $expunit[$i].",";
            }
        }
        $thecash = $explrestunits.$lastthree;
    } else {
        $thecash = $num;
    }
    return $thecash; // writes the final format where $currency is the currency symbol.
}
		
//  Function for number to text 

function convertNumberToWordsForIndia($number){
    
    $no = round($number);
    $point = round($number - $no, 2) * 100;
    $hundred = null;
    $digits_1 = strlen($no);
    $i = 0;
    $str = array();
    $words = array('0' => '', '1' => 'one', '2' => 'two',
     '3' => 'three', '4' => 'four', '5' => 'five', '6' => 'six',
     '7' => 'seven', '8' => 'eight', '9' => 'nine',
     '10' => 'ten', '11' => 'eleven', '12' => 'twelve',
     '13' => 'thirteen', '14' => 'fourteen',
     '15' => 'fifteen', '16' => 'sixteen', '17' => 'seventeen',
     '18' => 'eighteen', '19' =>'nineteen', '20' => 'twenty',
     '30' => 'thirty', '40' => 'forty', '50' => 'fifty',
     '60' => 'sixty', '70' => 'seventy',
     '80' => 'eighty', '90' => 'ninety');
    $digits = array('', 'hundred', 'thousand', 'lakh', 'crore');
    while ($i < $digits_1) {
      $divider = ($i == 2) ? 10 : 100;
      $number = floor($no % $divider);
      $no = floor($no / $divider);
      $i += ($divider == 10) ? 1 : 2;
      if ($number) {
         $plural = (($counter = count($str)) && $number > 9) ? 's' : null;
         $hundred = ($counter == 1 && $str[0]) ? ' and ' : null;
         $str [] = ($number < 21) ? $words[$number] .
             " " . $digits[$counter] . $plural . " " . $hundred
             :
             $words[floor($number / 10) * 10]
             . " " . $words[$number % 10] . " "
             . $digits[$counter] . $plural . " " . $hundred;
      } else $str[] = null;
   }
   $str = array_reverse($str);
   $result = implode('', $str);
  
   return ' '.ucfirst($result).'only' ;
    }





// Create connection
$conn = new mysqli($servername, $username, $password,$dbname);
$conn1 = new mysqli($servername, $username, $password,$dbname);
$conn2 = new mysqli($servername, $username, $password,$dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
	
}


$sql0="SELECT * FROM `transactions_record`";
$result0=$conn->query($sql0);
if($result0->num_rows==0)
{ echo "error";}
else {	$count=$result0->num_rows;

$random="I{$count}";
$random1="B{$count}";
}

 
echo "Connected successfully <CENTER>
<br>
<br>
<br>";

 $SQL="INSERT INTO `transactions_record`(`RID`, `FROM`, `TO`, `AMOUNT`, `INTREST_RATE`, `INTREST_AMT`, `BROKERAGE_RATE`, `BROKERAGE_AMOUNT`, `CURR_DATE`, `DUE_DATE`, `VIA`, `DUE`) VALUES('$rid','$from','$to',$amount,$int_rate,$int_amt,$bro_rate,$bro_amt,'$curr_date','$due_date','.$via.','Y')";
$sql2="INSERT INTO `transactions_record`(`RID`, `FROM`, `TO`, `AMOUNT`,  `CURR_DATE`,  `VIA`) VALUES ('$random','$to','$from','$int_amt','$curr_date','$int_via')";
 $sql3="INSERT INTO `transactions_record`(`RID`, `FROM`, `TO`, `AMOUNT`,  `CURR_DATE`,  `VIA`) VALUES ('$random1','$to','$bro_to','$bro_amt','$curr_date','$bro_via')";
 if (mysqli_query($conn,$SQL)) {
    if (mysqli_query($conn1,$sql3)) {
        if (mysqli_query($conn2, $sql2)) {
            echo('
            <style type="text/css">
            .tableData{font-size:16px;font-color:#3e3e3e;font-weight:bold;display:inline;},
            .myTable { border-collapse:collapse;}
            .myTable th { }
            .myTable td, .myTable th {border-collapse:collapse; padding:5px;border:1px dotted #505050;font-size:12px }
            </style>
            <table class="myTable" >
            <tr>
            <td colspan="1"> Loan Reciept<br> <div class="tableData">#'.$rid.'</div></td>
            <td colspan="1"> Loan Date<br> <div class="tableData">'.date("M j, Y", strtotime($curr_date)).'</div></td>
            <td colspan="1"> Due Date<br> <div class="tableData">'.date("M j, Y", strtotime($due_date)).'</div></td>
            </tr>
            
            <tr>
            <td colspan="3">Lender\'s Detail<br> <div class="tableData">'.str_replace("_"," ",$from).'</div></td>
            </tr>
            
            
            <tr>
            <td colspan="3">Borrower\'s Detail<br> <div class="tableData">'.str_replace("_"," ",$to).'</div></td>
            </tr>
            
            
            <tr>
            <td colspan="2">Loan Amount(In Words)<br> <div class="tableData">'.convertNumberToWordsForIndia($amount).'</div></td>
            <td colspan="1">Loan Amount<br> <div class="tableData"> &#8377 '.moneyFormatIndia($amount).'</div></td>
            
            </tr>
            
            <tr>
            <td colspan="1">Intrest Rate(p.a)<br> <div class="tableData">'.($int_rate).'%</div></td>
            <td colspan="1">Intrest Amount (In words)<br> <div class="tableData"> &#8377 '.convertNumberToWordsForIndia($int_amt).'</div></td>
            <td colspan="1">Intrest Amount<br> <div class="tableData"> &#8377 '.moneyFormatIndia($int_amt).'</div></td>
            
            </tr>
            
            <tr>
            <td colspan="1">Commision Rate(p.a)<br> <div class="tableData">'.($bro_rate).'%</div></td>
            <td colspan="1">Commision Amount (In words)<br> <div class="tableData"> &#8377 '.convertNumberToWordsForIndia($bro_amt).'</div></td>
            <td colspan="1">Commision Amount<br> <div class="tableData"> &#8377 '.moneyFormatIndia(round($bro_amt)).'</div></td>
            
            </tr>
            <tr>
            
            <tr>
            <th colspan="3"> Payment Information</th>
            </tr>
            <tr>
            <td> Loan Payment </td>
            <td colspan="2"> <div class="tableData">'.($via).'</div></td>
            </tr>
            <tr>
            <td> Security Payment </td>
            <td colspan="2"> <div class="tableData">'.($via).'</div></td>
            </tr>
            <tr>
            <td> Intrest Payment </td>
            <td colspan="2"> <div class="tableData">'.($int_via).'</div></td>
            </tr>
            <tr>
            <td> Commision Payment </td>
            <td colspan="2"> <div class="tableData">'.($bro_via).'</div></td>
            </tr>
            
            
            
            
            
            
            </tr>
            
            
            
            </table>');
        }
        
             else {
            echo "Error creating Intrest Record: " . mysqli_error($conn);
        }
    }
    
         else {
        echo "Error creating commision record: " . mysqli_error($conn);
    }
}	
 else {
    echo "Error creating loan record: " . mysqli_error($conn);
}




	echo("<a href=''");

?>