<?php
ini_set('max_execution_time', 0); 
include 'connection.php';
include 'functions.php';
$from=$_POST['from'];
$to=  $_POST['to'];
$uid= $_POST['uid'];
 echo($from.' '.' '.$to.' '.$uid);
$conn = new mysqli($servername,$username,$password,$dbname);
if ($conn->connect_error)
{
die("Connection failed: ". $conn->connect_error);
} 
$sql_gst= "SELECT *  FROM `gst_info_rent` WHERE `fk_clients_info_uid` = $uid AND `invoice_date` BETWEEN  '$from' and '$to'  ";
$result0=$conn->query($sql_gst);
if ($result0->num_rows == 0)
		{ echo "No Records for GST data";}
else
while($gst_data = $result0->fetch_assoc())
{
$client_id=$gst_data["fk_clients_info_uid"];
$sql_client = "SELECT *  FROM `clients_info` WHERE `UID` LIKE $client_id ";
$result1=$conn->query($sql_client);
if ($result1->num_rows == 0)
           { echo "Error fetching client data";}
else
{
   $clientData = $result1->fetch_assoc();
   $invoice_no=$gst_data['uid'];
   $invoice_date=$gst_data['invoice_date'];
   $total_brokerage= number_format((float)$gst_data['bro_amount'], 2, '.', '');
   $cgst= number_format((float)$gst_data['cgst'], 2, '.', '');
   $sgst= number_format((float)$gst_data['sgst'], 2, '.', '');
   $total_tax= number_format((float)$sgst+$cgst, 2, '.', '');
   $round_off=number_format((float)$gst_data['round_off'], 2, '.', '');
   $total_amount=number_format((float)$total_brokerage+$cgst+$sgst+$round_off, 2, '.', ''); 
//    $total_amount=ceil($total_amount);
// Gst Bill printing
echo('<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<html>
<head>
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<title></title>
	<meta name="generator" content="LibreOffice 6.0.7.3 (Linux)" />
	<meta name="author" content="admin" />
	<meta name="created" content="2019-02-16T12:12:33" />
	<meta name="changedby" content="ARPIT PARWAL" />
	<meta name="changed" content="2019-02-16T17:12:35" />
	<meta name="AppVersion" content="12.0000" />
	<meta name="DocSecurity" content="0" />
	<meta name="HyperlinksChanged" content="false" />
	<meta name="LinksUpToDate" content="false" />
	<meta name="ScaleCrop" content="false" />
	<meta name="ShareDoc" content="false" />
	<style type="text/css">
		body,
		div,
		table,
		thead,
		tbody,
		tfoot,
		tr,
		th,
		td,
		p {
			font-family: "Calibri";
			font-size: x-small
		}
		a.comment-indicator:hover+comment {
			background: #ffd;
			position: absolute;
			display: block;
			border: 1px solid black;
			padding: 0.5em;
		}
		a.comment-indicator {
			background: red;
			display: inline-block;
			border: 1px solid black;
			width: 0.5em;
			height: 0.5em;
		}
		comment {
			display: none;
		}
		.pagebreak { page-break-before: always; } 
	</style>
</head>
<body>
	<table cellspacing="0" border="0">
		<colgroup width="151"></colgroup>
		<colgroup width="107"></colgroup>
		<colgroup width="80"></colgroup>
		<colgroup width="285"></colgroup>
		<colgroup width="107"></colgroup>
		<colgroup width="39"></colgroup>
		<colgroup width="60"></colgroup>
		<colgroup width="39"></colgroup>
		<colgroup width="60"></colgroup>
		<colgroup width="97"></colgroup>
		<tr>
			<td style="border-bottom: 1px solid #000000" colspan=10 rowspan=2 height="40" align="center" valign=middle
				sdnum="1033;0;@"><b><u>
						<font face="Arial" color="#000000">Tax Invoice</font>
					</u></b></td>
		</tr>
		<tr>
		</tr>
	
		<tr>
			<td style=" border-left: 1px solid #000000; border-right: 1px solid #000000"
				colspan=10 height="16" align="center" valign=top sdnum="1033;0;@"><b>
					<font face="Times New Roman" size=4 color="#000000">RAMESH KUMAR PARWAL</font>
				</b></td>
		</tr>
		<tr>
			<td style=" border-left: 1px solid #000000; border-right: 1px solid #000000"
				colspan=10 height="16" align="center" valign=top sdnum="1033;0;@"><b>
					<font face="Times New Roman"color="#000000">G.R. PARWAL AND CO.</font>
				</b></td>
		</tr>
	
		<tr>
			<td style="border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=10 height="20"
				align="center" valign=top sdnum="1033;0;@">
				<font face="Arial" color="#000000">214 A, CITY CENTRE, S.C. ROAD, JAIPUR-21 (P) 0141-2374431 || (M)
					+91-9829053431 || (E) parwal.ramesh@yahoo.co.in </font>
			</td>
		</tr>
		<tr>
			<td style="border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=10 height="20"
				align="center" valign=top sdnum="1033;0;@">
				<font face="Arial" color="#000000">GSTIN/UIN: <b>08ACXPP8207F1Z2</b> || State Name: RAJASTHAN, Code: 08 </font>
			</td>
		</tr>
		<tr>
			<td style="border-top: 1px solid #000000; border-left: 1px solid #000000" colspan=6 height="20" align="left"
				valign=top sdnum="1033;0;@">
				<font face="Arial" color="#000000">Receipient of Services:</font>
			</td>
			<td style="border-top: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000"
				colspan=4 align="left" valign=top sdnum="1033;0;@">
				<font face="Arial" color="#000000">Invoice No.</font>
			</td>
		</tr>
		<tr>
			<td style="border-left: 1px solid #000000" colspan=6 height="20" align="left" valign=top sdnum="1033;0;@">
				<b>
					<font face="Arial" color="#000000">'.str_replace('_',' ',$clientData["NAME"]).'</font>
				</b></td>
			<td style="border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000"
				colspan=4 align="left" valign=top sdnum="1033;0;@"><b>
					<font face="Arial" color="#000000">R/'.$invoice_no.'</font>
				</b></td>
		</tr>
		<tr>
			<td style="border-left: 1px solid #000000" colspan=6 height="20" align="left" valign=top sdnum="1033;0;@">
				<font face="Arial" color="#000000">C/O'.$clientData["COMPANY"].','.$clientData["ADDRESS"].'</font>
			</td>
			<td style=" border-left: 1px solid #000000; border-right: 1px solid #000000"
				colspan=4 align="left" valign=top sdnum="1033;0;@">
				<font face="Arial" color="#000000">Dated</font>
			</td>
		</tr>
		<tr>
			<td style="border-left: 1px solid #000000" colspan=6 height="20" align="left" valign=top sdnum="1033;0;@">
				<font face="Arial" color="#000000">Phone:'.$clientData["PHONE"].' PAN: '.$clientData["PAN"].' Email: '.$clientData["EMAIL"].'</font>
			</td>
			<td style="border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000"
				colspan=4 align="left" valign=top sdnum="1033;0;@"><b>
					<font face="Arial" color="#000000">'.date("M j, Y", strtotime($invoice_date)).'</font>
				</b></td>
		</tr>
		<tr>
			<td style="border-left: 1px solid #000000; " colspan=6 height="20"
				align="left" valign=top sdnum="1033;0;@">
				<font face="Arial" color="#000000">GSTIN:<b>'.$clientData["GST"].'</b></font>
			</td>
			<td style=" border-left: 1px solid #000000; border-right: 1px solid #000000"
				colspan=4 align="left" valign=top sdnum="1033;0;@">
				<font face="Arial" color="#000000">Place of supply</font>
			</td>
		</tr>
		<tr>
			<td style="border-bottom: 1px solid #000000; border-left: 1px solid #000000; "
				colspan=6 height="20" align="left" valign=top sdnum="1033;0;@">
				<font face="Arial" color="#000000">State Name : RAJASTHAN ,Code : 08</font>
			</td>
			<td style="border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000"
				colspan=4 align="left" valign=top sdnum="1033;0;@"><b>
					<font face="Arial" color="#000000">Rajasthan</font>
				</b></td>
		</tr>
		<tr>
			<td style=" border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000"
				rowspan=2 height="40" align="center" valign=middle sdnum="1033;0;@">
				<font face="Arial" color="#000000">Sl No</font>
			</td>
			<td style="border-bottom: 1px solid #000000;  border-right: 1px solid #000000"
				colspan=7 rowspan=2 align="center" valign=middle sdnum="1033;0;@">
				<font face="Arial" color="#000000">Description of Services</font>
			</td>
			<td style=" border-bottom: 1px solid #000000;  border-right: 1px solid #000000"
				rowspan=2 align="center" valign=middle sdnum="1033;0;@">
				<font face="Arial" color="#000000">SAC</font>
			</td>
			<td style=" border-bottom: 1px solid #000000;  border-right: 1px solid #000000"
				rowspan=2 align="center" valign=middle sdnum="1033;0;@">
				<font face="Arial" color="#000000">Amount</font>
			</td>
		</tr>
		<tr>
		</tr>
		<tr>
			<td style=" border-left: 1px solid #000000;border-right: 1px solid #000000; "
				rowspan=2 height="50" align="center" valign=middle sdval="1" sdnum="1033;0;&quot;&quot;0">
				<font face="Arial" color="#000000">1</font>
			</td>
			<td style="border-right: 1px solid #000000; "
				colspan=7 rowspan=4 align="center" valign=middle sdnum="1033;0;@"><b>
					<font face="Arial" color="#000000">RENT (for the month of '.date("M , Y", strtotime($invoice_date)).')</font>
				</b></td>
			<td style=" border-right: 1px solid #000000"
				rowspan=4 align="center" valign=middle sdnum="1033;0;@"><b>
					<font face="Arial" color="#000000">997212</font>
				</b></td>
			<td style=" border-right: 1px solid #000000"
				rowspan=4 align="right" valign=middle sdval="10000" sdnum="1033;0;&quot;&quot;0.00"><b>
					<font face="Arial" color="#000000">'.$total_brokerage.'</font>
				</b></td>
		</tr>
		<tr>
		</tr>
		<tr>
		</tr>
		<tr>
		</tr>
		<tr>
			<td style="border-left: 1px solid #000000; border-right: 1px solid #000000" height="20" align="left"
				valign=top sdnum="1033;0;&quot;&quot;0">
				<font face="Arial" color="#000000"><br></font>
			</td>
			<td style=" border-right: 1px solid #000000" colspan=7 align="right"
				valign=top sdnum="1033;0;@"><b><i>
						<font face="Arial" color="#000000">Output CGST @9%</font>
					</i></b></td>
			<td style="border-right: 1px solid #000000" align="left" valign=top sdnum="1033;0;@">
				<font face="Arial" color="#000000"><br></font>
			</td>
			<td style=" border-right: 1px solid #000000" align="right" valign=top
				sdval="900" sdnum="1033;0;&quot;&quot;0.00"><b>
					<font face="Arial" color="#000000">'.$cgst.'</font>
				</b></td>
		</tr>
		<tr>
			<td style=" border-left: 1px solid #000000; border-right: 1px solid #000000" height="20" align="left"
				valign=top sdnum="1033;0;&quot;&quot;0">
				<font face="Arial" color="#000000"><br></font>
			</td>
			<td style=" border-right: 1px solid #000000" colspan=7 align="right"
				valign=top sdnum="1033;0;@"><b><i>
						<font face="Arial" color="#000000">Output SGST @9%</font>
					</i></b></td>
			<td style="border-right: 1px solid #000000" align="left" valign=top sdnum="1033;0;@">
				<font face="Arial" color="#000000"><br></font>
			</td>
			<td style=" border-right: 1px solid #000000" align="right" valign=top
				sdval="900" sdnum="1033;0;&quot;&quot;0.00"><b>
					<font face="Arial" color="#000000">'.$sgst.'</font>
				</b></td>
		</tr>
		<tr>
			<td style=" border-left: 1px solid #000000; border-right: 1px solid #000000" height="20" align="left"
				valign=top sdnum="1033;0;@">
				<font face="Arial" color="#000000"><br></font>
			</td>
			<td style=" border-right: 1px solid #000000" colspan=7 align="right"
				valign=top sdnum="1033;0;@"><b>
					<font face="Arial" color="#000000">R/o</font>
				</b></td>
			<td style="border-right: 1px solid #000000" align="left" valign=top sdnum="1033;0;@">
				<font face="Arial" color="#000000"><br></font>
			</td>
			<td style=" border-right: 1px solid #000000" align="right" valign=top
				sdval="0" sdnum="1033;0;&quot;&quot;0.00"><b>
					<font face="Arial" color="#000000">'.$round_off.'</font>
				</b></td>
		</tr>
		<tr>
			<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000"
				colspan=8 height="21" align="center" valign=top sdnum="1033;0;@"><b>
					<font face="Arial" color="#000000">Total</font>
				</b></td>
			<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-right: 1px solid #000000"
				align="center" valign=top sdnum="1033;0;@">
				<font face="Arial" color="#000000"><br></font>
			</td>
			<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-right: 1px solid #000000"
				align="right" valign=top sdval="11800" sdnum="1033;0;&quot;₹ &quot;0.00"><b>
					<font face="Rupakara" size=3 color="#000000">₹ '.moneyFormatIndia($total_amount).'</font>
				</b></td>
		</tr>
		<tr>
			<td style=" border-left: 1px solid #000000" colspan=6 height="20" align="left"
				valign=top sdnum="1033;0;@">
				<font face="Arial" color="#000000"><br></font>
			</td>
			<td style=" border-right: 1px solid #000000" colspan=4 align="right"
				valign=top sdnum="1033;0;@"><i>
					<font face="Arial" color="#000000">E. &amp; O.E</font>
				</i></td>
		</tr>
		<tr>
			<td style="border-top: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000"
				colspan=10 height="20" align="left" valign=top sdnum="1033;0;@">
				<font face="Arial" color="#000000">Amount Chargeable (in words):</font>
			</td>
		</tr>
		<tr>
			<td style="border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=10 height="20"
				align="left" valign=top sdnum="1033;0;@"><b>
					<font face="Arial" color="#000000">'.convertToIndianCurrency($total_amount).'</font>
				</b></td>
		</tr>
		<tr>
			<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000"
				colspan=4 rowspan=2 height="40" align="center" valign=middle>
				<font color="#000000">SAC</font>
			</td>
			<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-right: 1px solid #000000"
				rowspan=2 align="center" valign=middle>
				<font color="#000000">Taxable Value</font>
			</td>
			<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-right: 1px solid #000000"
				colspan=2 align="center" valign=bottom>
				<font color="#000000">Central tax</font>
			</td>
			<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000;  border-right: 1px solid #000000"
				colspan=2 align="center" valign=bottom>
				<font color="#000000">State Tax</font>
			</td>
			<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-right: 1px solid #000000"
				rowspan=2 align="center" valign=middle>
				<font color="#000000">Total</font>
			</td>
		</tr>
		<tr>
			<td style="border-bottom: 1px solid #000000;  border-right: 1px solid #000000"
				align="left" valign=bottom>
				<font color="#000000">Rate</font>
			</td>
			<td style=" border-bottom: 1px solid #000000; border-right: 1px solid #000000"
				align="left" valign=bottom>
				<font color="#000000">Amount</font>
			</td>
			<td style=" border-bottom: 1px solid #000000;  border-right: 1px solid #000000"
				align="left" valign=bottom>
				<font color="#000000">Rate</font>
			</td>
			<td style=" border-bottom: 1px solid #000000;  border-right: 1px solid #000000"
				align="left" valign=bottom>
				<font color="#000000">Amount</font>
			</td>
		</tr>
		<tr>
			<td style=" border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000"
				colspan=4 height="20" align="right" valign=bottom sdval="997159" sdnum="1033;">
				<font color="#000000">997159</font>
			</td>
			<td style=" border-bottom: 1px solid #000000;  border-right: 1px solid #000000"
				align="right" valign=bottom sdval="2500" sdnum="1033;">
				<font color="#000000">'.$total_brokerage.'</font>
			</td>
			<td style=" border-bottom: 1px solid #000000; border-right: 1px solid #000000"
				align="right" valign=bottom sdval="0.09" sdnum="1033;0;0%">
				<font color="#000000">9%</font>
			</td>
			<td style=" border-bottom: 1px solid #000000;  border-right: 1px solid #000000"
				align="right" valign=bottom sdval="225" sdnum="1033;">
				<font color="#000000">'.$cgst.'</font>
			</td>
			<td style=" border-bottom: 1px solid #000000;  border-right: 1px solid #000000"
				align="right" valign=bottom sdval="0.09" sdnum="1033;0;0%">
				<font color="#000000">9%</font>
			</td>
			<td style=" border-bottom: 1px solid #000000;  border-right: 1px solid #000000"
				align="right" valign=bottom sdval="225" sdnum="1033;">
				<font color="#000000">'.$sgst.'</font>
			</td>
			<td style=" border-bottom: 1px solid #000000; border-right: 1px solid #000000"
				align="right" valign=bottom sdval="450" sdnum="1033;">
				<font color="#000000">'.$total_tax.'</font>
			</td>
		</tr>
		<tr>
			<td style=" border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000"
				colspan=4 height="20" align="right" valign=bottom><b>
					<font color="#000000">Total</font>
				</b></td>
			<td style=" border-bottom: 1px solid #000000; border-right: 1px solid #000000"
				align="right" valign=bottom sdval="2500" sdnum="1033;">
				<font color="#000000">'.$total_brokerage.'</font>
			</td>
			<td style=" border-bottom: 1px solid #000000;  border-right: 1px solid #000000"
				align="left" valign=bottom>
				<font color="#000000"><br></font>
			</td>
			<td style=" border-bottom: 1px solid #000000;  border-right: 1px solid #000000"
				align="right" valign=bottom sdval="225" sdnum="1033;">
				<font color="#000000">'.$cgst.'</font>
			</td>
			<td style=" border-bottom: 1px solid #000000;  border-right: 1px solid #000000"
				align="left" valign=bottom>
				<font color="#000000"><br></font>
			</td>
			<td style=" border-bottom: 1px solid #000000;  border-right: 1px solid #000000"
				align="right" valign=bottom sdval="225" sdnum="1033;">
				<font color="#000000">'.$sgst.'</font>
			</td>
			<td style=" border-bottom: 1px solid #000000; border-right: 1px solid #000000"
				align="right" valign=bottom sdval="450" sdnum="1033;"><b>
				<font color="#000000">'.$total_tax.'</font>
				</b></td>
		</tr>
		<tr>
			<td style="border-left: 1px solid #000000; border-right: 1px solid #000000" height="20" align="left"
				valign=top sdnum="1033;0;@">
				<font face="Arial" color="#000000">Tax Amount (in words) : </font>
			</td>
			<td style="border-right: 1px solid #000000" colspan=9 align="left" valign=top sdnum="1033;0;@"><b>
					<font face="Arial" color="#000000">'.convertToIndianCurrency($total_tax).'</font>
				</b></td>
		</tr>
		<tr>
			<td style="border-top: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000"
				colspan=6 height="20" align="left" valign=top sdnum="1033;0;@">
				<font face="Arial" color="#000000">Bank Details</font>
			</td>
			<td style="border-top: 1px solid #000000; border-right: 1px solid #000000" colspan=4 align="right"
				valign=top sdnum="1033;0;@"><b>
					<font face="Arial" color="#000000">Ramesh Kumar Parwal</font>
				</b></td>
		</tr>
		<tr>
			<td style="border-left: 1px solid #000000" height="20" align="left" valign=top sdnum="1033;0;@">
				<font face="Arial" color="#000000">Title</font>
			</td>
			<td style="border-right: 1px solid #000000" colspan=5 align="left" valign=top sdnum="1033;0;@"><b>
					<font face="Arial" color="#000000">Ramesh Kumar Parwal</font>
				</b></td>
			<td style=" border-right: 1px solid #000000" colspan=4 rowspan=5
				align="right" valign=bottom sdnum="1033;0;@">
				<img src="http://grpfinance.in/grpfin/images/sign.png" style="
				width: 50%;
				/* height: 12%; */
				margin-left: 42%;
				margin-bottom: 10%;
			">
				<font face="Arial" color="#000000">Authorised Signatory</font>
			</td>
		</tr>
		<tr>
			<td style="border-left: 1px solid #000000" height="20" align="left" valign=top sdnum="1033;0;@">
				<font face="Arial" color="#000000">Account No.</font>
			</td>
			<td style="border-right: 1px solid #000000" colspan=5 align="left" valign=top sdnum="1033;0;@"><b>
					<font face="Arial" color="#000000">021801400001041</font>
				</b></td>
		</tr>
		<tr>
			<td style="border-left: 1px solid #000000" height="20" align="left" valign=top sdnum="1033;0;@">
				<font face="Arial" color="#000000">IFSC Code</font>
			</td>
			<td style="border-right: 1px solid #000000" colspan=5 align="left" valign=top sdnum="1033;0;@"><b>
					<font face="Arial" color="#000000">DLXB0000218</font>
				</b></td>
		</tr>
		<tr>
			<td style="border-bottom: 1px solid #000000; border-left: 1px solid #000000" height="20" align="left"
				valign=top sdnum="1033;0;@">
				<font face="Arial" color="#000000">Bank Name &amp; Branch</font>
			</td>
			<td style="border-bottom: 1px solid #000000; border-right: 1px solid #000000" colspan=5 align="left" valign=top sdnum="1033;0;@"><b>
					<font face="Arial" color="#000000">Dhanlaxmi Bank, S.C. Road, Jaipur</font>
				</b></td>
		</tr>
		<tr>
			<td style=" border-left: 1px solid #000000; border-right: 1px solid #000000"
				colspan=6 height="20" align="center" valign=bottom sdnum="1033;0;@">
				<font face="Arial" color="#000000">Declration: We declare that this invoice shows the actual price of the
					services described and that all particulars are true and correct.</font>
			</td>
		</tr>
		<tr>
			<td style="border-top: 1px solid #000000" colspan=10 height="20" align="center" valign=top sdnum="1033;0;@">
				<font face="Arial" color="#000000">This is a Computer Generated Invoice</font>
			</td>
		</tr>
	</table>
	<!-- ************************************************************************** -->
	<div class="pagebreak"> </div>
	</body>
</html> 
');
	
	
}
} 
include 'footer.php';

?>
   
   
