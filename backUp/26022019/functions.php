<?php
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

?>