<?php
 include 'header.php';
 include 'connection.php';
// require("easyPDFPrinter.php");
// $argv=["","./abc.html","abc.pdf"];
// if(count($argv) != 3)
// {
//    echo "Please pass input file name and output file name.\n";
//    return;
// }
// $inputFileName = realpath($argv[1]);
// if(!file_exists(dirname($argv[2])))
// {
//    echo "Invalid output file name.\n";
// 	return;
// }
// $outputFileName = rtrim(realpath(dirname($argv[2])), DIRECTORY_SEPARATOR) . DIRECTORY_SEPARATOR . basename($argv[2]);
// $printer = new BCL\easyPDF\Printer\Printer();
// try
// {
//    $printjob = $printer->getHTMLPrintJob();
//    $printjob->PrintOut($inputFileName, $outputFileName);
// }
// catch(BCL\easyPDF\Printer\PrinterException $ex)
// {
//    echo $ex->getMessage(), "\n";
// }
$servername = "localhost";
$username = "root";
$password = "password";
$dbname="fincorp";
echo"<html><body><center style='margin-top:150'><table  cellspacing='40'>
<form  method='post'>
<tr><td colspan='3'>From:
<input type='date' name='from'/>


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
<td align='center' >
<input type='submit' formaction='email_bill.php' name='email' value ='Email Invoice'>
</td>
</tr>
</table>
<br><br>
	</form>
";
include 'footer.php';
?>