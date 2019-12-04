<?php
include 'header.php';
ini_set( 'max_execution_time', 0 );
include 'connection.php';
include 'functions.php';
require __DIR__ . '/vendor/autoload.php';
require( "easyPDFPrinter.php" );
// Import PHPMailer classes into the global namespace
// These must be at the top of your script, not inside a function
// use PHPMailer;
// use Exception;
$name2   = $_POST[ 'nameArray' ];
$gst_ids = array_values( array_unique( $name2 ) );
$date  = $_POST[ 'curr_date' ];

$due_3='';
$html_due_final='';

// $name1=["SHARAD_ELECTRONICS"];
$len     = count( $gst_ids );
echo ( '
   
   <style type="text/css">
   .myTable { border-collapse:collapse; }
   .myTable th { }
   .myTable td, .myTable th {border-collapse:collapse; padding:5px;border:1px dotted #505050; }
   </style>
   <center>
   <table class="myTable">
   <tr>
   <th>Date </th>
   <th>Recipient Name</th>
   <th>Email</th>

   <th>Status</th>
   </tr>
   
   ' );
$conn = new mysqli( $servername, $username, $password, $dbname );
////header
if ( $conn->connect_error ) {
    die( "Connection failed: " . $conn->connect_error );
}
for ( $i = 0; $i < $len; $i++ ) {
    $gst_uid = $gst_ids[ $i ];
    $sql_gst = "SELECT *  FROM `gst_info` WHERE `uid` = $gst_uid";
    $result0 = $conn->query( $sql_gst );
    if ( $result0->num_rows == 0 ) {
        echo "No Records for GST data";
    } else
        while ( $gst_data = $result0->fetch_assoc() ) {
            $client_id  = $gst_data[ "fk_clients_info_uid" ];
            $sql_client = "SELECT *  FROM `clients_info` WHERE `UID` LIKE $client_id ";
            $result1    = $conn->query( $sql_client );
            if ( $result1->num_rows == 0 ) {
                echo "Error fetching client data";
            } else {
                $clientData      = $result1->fetch_assoc();

                $html_due_final='';
                $due_3='';
                $count           = 1;
                $total_brokerage = 0;


                 $due_1='<B><font size="4">RAMESH PARWAL</b><BR> </FONT>214-A, City Center, S.C.Road, Jaipur-302001 (P)0141-2374431 (E)parwal.ramesh@yahoo.co.in<br><HR><font size="4"> <B>' . str_replace( '_', ' ', $clientData["NAME"] ) . '</B></font><br><div style="font-size:14px">C/O SHRI
                        ' . $clientData[ "COMPANY" ] . ',' . $clientData[ "ADDRESS" ] . '. Phone:' . $clientData[ "PHONE" ] . ' PAN: ' . $clientData[ "PAN" ] . ' Email: ' . $clientData[ "EMAIL" ] . ' 
                        </div>
                            <table ><tr><td><div style="font-size:14px">Your A/C have following intrest due(s) as in<B> ' . date( "M,Y", strtotime( $date ) ) . '</B>.
                            <br>Kindly issue cheque(s) in the name of bearer & mention TDS amount deducted(if any) behind . 
                            <br></td></tr>
                            </table>
                            <style type="text/css">
                        .myTable { border-collapse:collapse; }
                        .myTable th { }
                        .myTable td, .myTable th {border-collapse:collapse; padding:5px;border:1px dotted #505050; }
                        </style>
                            <table class="myTable"cellspacing="2"  width="625px" 	 style="font-size:13px  ;">
                            <tr>
                            <th>No. </th>
                            <th>Due Date </th>
                            <th>Bearer Name </th>
                            <th>Amount</th>
                            <th>Intrest</th>
                            <th>Brokerage</th>                     
                                                 
                            </tr>
                            ';
                            $name=$clientData["NAME"];
                            $sql_client    = "SELECT *  FROM `transactions_record` WHERE `TO` LIKE '$name' AND DUE LIKE 'Y' AND DUE_DATE <= '$date' ORDER BY `transactions_record`.`DUE_DATE`  ASC";

            if ( $conn->connect_error ) {
                die( "Connection failed: " . $conn->connect_error );
            }
            $result0 = $conn->query( $sql_client );
            if ( $result0->num_rows == 0 ) {
                echo "LENDER";
            } else {
                while ( $clientTransactions = $result0->fetch_assoc() ) {       

            $due_2='<tr>
            <td>' . $count . '</td>
            
            <td>' . date( "M j, Y", strtotime( $clientTransactions[ "DUE_DATE" ] ) ) . '</td>
            
            <td><B>' . str_replace( '_', ' ', $clientTransactions[ "FROM" ] ) . '</B></td>
            <td>' . $clientTransactions[ "AMOUNT" ] . '/-</td>		
            <td><B>' . $clientTransactions[ "INTREST_AMT" ] . '/-</B></td>
            <td>' . $clientTransactions[ "BROKERAGE_AMOUNT" ] . '/-</td>
            </tr>
            ';
                $due_3=$due_3.$due_2;
                // $total        = $total + $clientTransactions[ "BROKERAGE_AMOUNT" ];
                // $total1       = $total1 + $clientTransactions[ "AMOUNT" ];
                // $total2       = $total2 + $clientTransactions[ "INTREST_AMT" ];
                $brokerage_to='G.R. PARWAL AND CO.';
                $brokerage_to = str_replace( '_', ' ', $brokerage_to );    
                $count           = $count + 1;
                $total_brokerage = $total_brokerage + $clientTransactions[ "BROKERAGE_AMOUNT" ];
                $total_brokerage = number_format( (float) $total_brokerage, 2, '.', '' );
                $cgst            = number_format( (float) $total_brokerage * 0.09, 2, '.', '' );
                $sgst            = number_format( (float) $total_brokerage * 0.09, 2, '.', '' );
                $total_tax       = number_format( (float) $sgst + $cgst, 2, '.', '' );
                $total_amount    = number_format( (float) $total_brokerage + $cgst + $sgst, 2, '.', '' );
                $round_off       = number_format( (float) ceil( $total_amount ) - $total_amount, 2, '.', '' );
                if ( $round_off > 0.50 ) {
                    $round_off = number_format( (float) floor( $total_amount ) - $total_amount, 2, '.', '' );
                }
                $total_amount = $total_amount + $round_off;
                
                }





                $due_4="<tr >
             
                <td colspan='3'<b> <style type='text/css'>
                   input {font-weight:bold; FONT-SIZE:14PX;	}
                </style>
                    
                    
                Brokerage<b><h3>$brokerage_to</h3></b></b></td>
                <td colspan='1' align='left'><I>TOTAL<br>GST @ 18%<br>R/O<br>NET TOTAL</td>
            
                <td colspan='2' align='right'>$total<br>$total_tax<br>$round_off <br><b>$total_amount/-</b></td>
                </tr>";


                $html_due_final=$due_1.$due_3.$due_4;
            }

                $invoice_no      = $gst_data[ 'uid' ];
                $invoice_date    = $gst_data[ 'invoice_date' ];
                $total_brokerage = number_format( (float) $gst_data[ 'bro_amount' ], 2, '.', '' );
                $cgst            = number_format( (float) $gst_data[ 'cgst' ], 2, '.', '' );
                $sgst            = number_format( (float) $gst_data[ 'sgst' ], 2, '.', '' );
                $total_tax       = number_format( (float) $sgst + $cgst, 2, '.', '' );
                $round_off       = number_format( (float) $gst_data[ 'round_off' ], 2, '.', '' );
                $total_amount    = number_format( (float) $total_brokerage + $cgst + $sgst + $round_off, 2, '.', '' );
                //    $total_amount=ceil($total_amount);
                // Gst Bill printing
                $html            = '<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
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
				colspan=10 height="24" align="center" valign=top sdnum="1033;0;@"><b>
					<img src="http://grpfinance.in/grpfin/images/logo.png" style=" -webkit-transform:rotate(-45deg);
					-moz-transform: rotate(-45deg);
					-ms-transform: rotate(-45deg);
					-o-transform: rotate(-45deg);
					transform: rotate(-45deg);
					height: 25;
					width: 25;
					display: -webkit-inline;
					padding:7;
					">
				</b></td>
		</tr>
		<tr>
			<td style=" border-left: 1px solid #000000; border-right: 1px solid #000000"
				colspan=10 height="16" align="center" valign=top sdnum="1033;0;@"><b>
					<font face="Times New Roman" size=4 color="#000000">G.R. PARWAL AND CO.</font>
				</b></td>
		</tr>
		<tr>
			<td style=" border-left: 1px solid #000000; border-right: 1px solid #000000"
				colspan=10 height="16" align="center" valign=top sdnum="1033;0;@"><b>
					<font face="Times New Roman"color="#000000">FINANCIAL SOLUTIONS </font>
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
					<font face="Arial" color="#000000">' . str_replace( '_', ' ', $clientData[ "NAME" ] ) . '</font>
				</b></td>
			<td style="border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000"
				colspan=4 align="left" valign=top sdnum="1033;0;@"><b>
					<font face="Arial" color="#000000">' . $invoice_no . '</font>
				</b></td>
		</tr>
		<tr>
			<td style="border-left: 1px solid #000000" colspan=6 height="20" align="left" valign=top sdnum="1033;0;@">
				<font face="Arial" color="#000000">' . $clientData[ "COMPANY" ] . ',' . $clientData[ "ADDRESS" ] . '</font>
			</td>
			<td style=" border-left: 1px solid #000000; border-right: 1px solid #000000"
				colspan=4 align="left" valign=top sdnum="1033;0;@">
				<font face="Arial" color="#000000">Dated</font>
			</td>
		</tr>
		<tr>
			<td style="border-left: 1px solid #000000" colspan=6 height="20" align="left" valign=top sdnum="1033;0;@">
				<font face="Arial" color="#000000">Phone:' . $clientData[ "PHONE" ] . ' PAN: ' . $clientData[ "PAN" ] . ' Email: ' . $clientData[ "EMAIL" ] . '</font>
			</td>
			<td style="border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000"
				colspan=4 align="left" valign=top sdnum="1033;0;@"><b>
					<font face="Arial" color="#000000">' . date( "M j, Y", strtotime( $invoice_date ) ) . '</font>
				</b></td>
		</tr>
		<tr>
			<td style="border-left: 1px solid #000000; " colspan=6 height="20"
				align="left" valign=top sdnum="1033;0;@">
				<font face="Arial" color="#000000">GSTIN:<b>' . $clientData[ "GST" ] . '</b></font>
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
					<font face="Arial" color="#000000">Brokerage</font>
				</b></td>
			<td style=" border-right: 1px solid #000000"
				rowspan=4 align="center" valign=middle sdnum="1033;0;@"><b>
					<font face="Arial" color="#000000">997159</font>
				</b></td>
			<td style=" border-right: 1px solid #000000"
				rowspan=4 align="right" valign=middle sdval="10000" sdnum="1033;0;&quot;&quot;0.00"><b>
					<font face="Arial" color="#000000">' . $total_brokerage . '</font>
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
					<font face="Arial" color="#000000">' . $cgst . '</font>
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
					<font face="Arial" color="#000000">' . $sgst . '</font>
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
					<font face="Arial" color="#000000">' . $round_off . '</font>
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
					<font face="Rupakara" size=3 color="#000000">₹ ' . moneyFormatIndia( $total_amount ) . '</font>
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
					<font face="Arial" color="#000000">' . convertToIndianCurrency( $total_amount ) . '</font>
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
				<font color="#000000">' . $cgst . '</font>
			</td>
			<td style=" border-bottom: 1px solid #000000;  border-right: 1px solid #000000"
				align="right" valign=bottom sdval="0.09" sdnum="1033;0;0%">
				<font color="#000000">9%</font>
			</td>
			<td style=" border-bottom: 1px solid #000000;  border-right: 1px solid #000000"
				align="right" valign=bottom sdval="225" sdnum="1033;">
				<font color="#000000">' . $sgst . '</font>
			</td>
			<td style=" border-bottom: 1px solid #000000; border-right: 1px solid #000000"
				align="right" valign=bottom sdval="450" sdnum="1033;">
				<font color="#000000">' . $total_tax . '</font>
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
				<font color="#000000">' . $cgst . '</font>
			</td>
			<td style=" border-bottom: 1px solid #000000;  border-right: 1px solid #000000"
				align="left" valign=bottom>
				<font color="#000000"><br></font>
			</td>
			<td style=" border-bottom: 1px solid #000000;  border-right: 1px solid #000000"
				align="right" valign=bottom sdval="225" sdnum="1033;">
				<font color="#000000">' . $sgst . '</font>
			</td>
			<td style=" border-bottom: 1px solid #000000; border-right: 1px solid #000000"
				align="right" valign=bottom sdval="450" sdnum="1033;"><b>
				<font color="#000000">' . $total_tax . '</font>
				</b></td>
		</tr>
		<tr>
			<td style="border-left: 1px solid #000000; border-right: 1px solid #000000" height="20" align="left"
				valign=top sdnum="1033;0;@">
				<font face="Arial" color="#000000">Tax Amount (in words) : </font>
			</td>
			<td style="border-right: 1px solid #000000" colspan=9 align="left" valign=top sdnum="1033;0;@"><b>
					<font face="Arial" color="#000000">' . convertToIndianCurrency( $total_tax ) . '</font>
				</b></td>
		</tr>
		<tr>
			<td style="border-top: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000"
				colspan=6 height="20" align="left" valign=top sdnum="1033;0;@">
				<font face="Arial" color="#000000">Bank Details</font>
			</td>
			<td style="border-top: 1px solid #000000; border-right: 1px solid #000000" colspan=4 align="right"
				valign=top sdnum="1033;0;@"><b>
					<font face="Arial" color="#000000">for G.R. PARWAL AND CO.</font>
				</b></td>
		</tr>
		<tr>
			<td style="border-left: 1px solid #000000" height="20" align="left" valign=top sdnum="1033;0;@">
				<font face="Arial" color="#000000">Title</font>
			</td>
			<td style="border-right: 1px solid #000000" colspan=5 align="left" valign=top sdnum="1033;0;@"><b>
					<font face="Arial" color="#000000">G.R. Parwal &amp; Co.</font>
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
					<font face="Arial" color="#000000">021805300004682</font>
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
	</body>
</html> 
';
                $html_mail       = '
<!doctype html>
<html>
  <head>
    <meta name="viewport" content="width=device-width" />
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <title>Simple Transactional Email</title>
    <style>
      /* -------------------------------------
          GLOBAL RESETS
      ------------------------------------- */
      
      /*All the styling goes here*/
      
      img {
        border: none;
        -ms-interpolation-mode: bicubic;
        max-width: 100%; 
      }
      body {
        background-color: #f6f6f6;
        font-family: sans-serif;
        -webkit-font-smoothing: antialiased;
        font-size: 14px;
        line-height: 1.4;
        margin: 0;
        padding: 0;
        -ms-text-size-adjust: 100%;
        -webkit-text-size-adjust: 100%; 
      }
      table {
        border-collapse: separate;
        mso-table-lspace: 0pt;
        mso-table-rspace: 0pt;
        width: 100%; }
        table td {
          font-family: sans-serif;
          font-size: 14px;
          vertical-align: top; 
      }
      /* -------------------------------------
          BODY & CONTAINER
      ------------------------------------- */
      .body {
        background-color: #f6f6f6;
        width: 100%; 
      }
      /* Set a max-width, and make it display as block so it will automatically stretch to that width, but will also shrink down on a phone or something */
      .container {
        display: block;
        margin: 0 auto !important;
        /* makes it centered */
        max-width: 580px;
        padding: 10px;
        width: 580px; 
      }
      /* This should also be a block element, so that it will fill 100% of the .container */
      .content {
        box-sizing: border-box;
        display: block;
        margin: 0 auto;
        max-width: 580px;
        padding: 10px; 
      }
      /* -------------------------------------
          HEADER, FOOTER, MAIN
      ------------------------------------- */
      .main {
        background: #ffffff;
        border-radius: 3px;
        width: 100%; 
      }
      .wrapper {
        box-sizing: border-box;
        padding: 20px; 
      }
      .content-block {
        padding-bottom: 10px;
        padding-top: 10px;
      }
      .footer {
        clear: both;
        margin-top: 10px;
        text-align: center;
        width: 100%; 
      }
        .footer td,
        .footer p,
        .footer span,
        .footer a {
          color: #999999;
          font-size: 12px;
          text-align: center; 
      }
      /* -------------------------------------
          TYPOGRAPHY
      ------------------------------------- */
      h1,
      h2,
      h3,
      h4 {
        color: #000000;
        font-family: sans-serif;
        font-weight: 400;
        line-height: 1.4;
        margin: 0;
        margin-bottom: 30px; 
      }
      h1 {
        font-size: 35px;
        font-weight: 300;
        text-align: center;
        text-transform: capitalize; 
      }
      p,
      ul,
      ol {
        font-family: sans-serif;
        font-size: 14px;
        font-weight: normal;
        margin: 0;
        margin-bottom: 15px; 
      }
        p li,
        ul li,
        ol li {
          list-style-position: inside;
          margin-left: 5px; 
      }
      a {
        color: #3498db;
        text-decoration: underline; 
      }
      /* -------------------------------------
          BUTTONS
      ------------------------------------- */
      .btn {
        box-sizing: border-box;
        width: 100%; }
        .btn > tbody > tr > td {
          padding-bottom: 15px; }
        .btn table {
          width: auto; 
      }
        .btn table td {
          background-color: #ffffff;
          border-radius: 5px;
          text-align: center; 
      }
        .btn a {
          background-color: #ffffff;
          border: solid 1px #3498db;
          border-radius: 5px;
          box-sizing: border-box;
          color: #3498db;
          cursor: pointer;
          display: inline-block;
          font-size: 14px;
          font-weight: bold;
          margin: 0;
          padding: 12px 25px;
          text-decoration: none;
          text-transform: capitalize; 
      }
      .btn-primary table td {
        background-color: #3498db; 
      }
      .btn-primary a {
        background-color: #3498db;
        border-color: #3498db;
        color: #ffffff; 
      }
      /* -------------------------------------
          OTHER STYLES THAT MIGHT BE USEFUL
      ------------------------------------- */
      .last {
        margin-bottom: 0; 
      }
      .first {
        margin-top: 0; 
      }
      .align-center {
        text-align: center; 
      }
      .align-right {
        text-align: right; 
      }
      .align-left {
        text-align: left; 
      }
      .clear {
        clear: both; 
      }
      .mt0 {
        margin-top: 0; 
      }
      .mb0 {
        margin-bottom: 0; 
      }
      .preheader {
        color: transparent;
        display: none;
        height: 0;
        max-height: 0;
        max-width: 0;
        opacity: 0;
        overflow: hidden;
        mso-hide: all;
        visibility: hidden;
        width: 0; 
      }
      .powered-by a {
        text-decoration: none; 
      }
      hr {
        border: 0;
        border-bottom: 1px solid #f6f6f6;
        margin: 20px 0; 
      }
      /* -------------------------------------
          RESPONSIVE AND MOBILE FRIENDLY STYLES
      ------------------------------------- */
      @media only screen and (max-width: 620px) {
        table[class=body] h1 {
          font-size: 28px !important;
          margin-bottom: 10px !important; 
        }
        table[class=body] p,
        table[class=body] ul,
        table[class=body] ol,
        table[class=body] td,
        table[class=body] span,
        table[class=body] a {
          font-size: 16px !important; 
        }
        table[class=body] .wrapper,
        table[class=body] .article {
          padding: 10px !important; 
        }
        table[class=body] .content {
          padding: 0 !important; 
        }
        table[class=body] .container {
          padding: 0 !important;
          width: 100% !important; 
        }
        table[class=body] .main {
          border-left-width: 0 !important;
          border-radius: 0 !important;
          border-right-width: 0 !important; 
        }
        table[class=body] .btn table {
          width: 100% !important; 
        }
        table[class=body] .btn a {
          width: 100% !important; 
        }
        table[class=body] .img-responsive {
          height: auto !important;
          max-width: 100% !important;
          width: auto !important; 
        }
      }
      /* -------------------------------------
          PRESERVE THESE STYLES IN THE HEAD
      ------------------------------------- */
      @media all {
        .ExternalClass {
          width: 100%; 
        }
        .ExternalClass,
        .ExternalClass p,
        .ExternalClass span,
        .ExternalClass font,
        .ExternalClass td,
        .ExternalClass div {
          line-height: 100%; 
        }
        .apple-link a {
          color: inherit !important;
          font-family: inherit !important;
          font-size: inherit !important;
          font-weight: inherit !important;
          line-height: inherit !important;
          text-decoration: none !important; 
        }
        .btn-primary table td:hover {
          background-color: #34495e !important; 
        }
        .btn-primary a:hover {
          background-color: #34495e !important;
          border-color: #34495e !important; 
        } 
      }
    </style>
  </head>
  <body class="">
    <span class="preheader">Your GST invoice for recent services.</span>
    <table role="presentation" border="0" cellpadding="0" cellspacing="0" class="body">
      <tr>
        <td>&nbsp;</td>
        <td class="container">
          <div class="content">
            <!-- START CENTERED WHITE CONTAINER -->
            <table role="presentation" class="main">
              <!-- START MAIN CONTENT AREA -->
              <tr>
                <td class="wrapper">
                  <table role="presentation" border="0" cellpadding="0" cellspacing="0">
                     <tr><td style="text-align: center"> 
                          <img src="http://grpfinance.in/grpfin/images/logo.png" style=" -webkit-transform:rotate(-45deg);
                          -moz-transform: rotate(-45deg);
                          -ms-transform: rotate(-45deg);
                          -o-transform: rotate(-45deg);
                          transform: rotate(-45deg);
                          max-height: 10%;
                          max-width: 1;
                          display: -webkit-inline;
                          padding:7;
                          ">                          
                         <br>
                         
                          <div style="   font-size: x-large;
                          display: -webkit-inline-box;
                          font-weight: bold;">
                           G.R. PARWAL &amp; CO. </div> <br>
                          
                          <div style="  display: -webkit-inline-box;
                          padding-bottom: 5 ;">
                          <b>FINANCIAL SOLUTIONS </b></div>
                       </td>
                       </tr>
                    <tr>
                      
                      <td>
                       <br>
                        <p>Dear ' . str_replace( '_', ' ', $clientData[ "NAME" ] ) . ',</p>
                        <p> 
                            Please find generated GST reciept attched in pdf format  for your reference.<br> In case of any discrepancy, kindly report at the earliest
                            </p>
                        <table role="presentation" border="0" cellpadding="0" cellspacing="0" class="btn btn-primary">
                          <tbody>
                            <tr>
                            
                            </tr>
                          </tbody>
                        </table>
                        <p>Sincerely,</p>
                        <p>Accounts Department</p>
                      
                        
                        
                      </td>
                    </tr>
                  </table>
                  <center>
                      <div style=" font-size:small; display: -webkit-inline-box;
                      padding-bottom: 5 ;">
                      214-A, City Center, Sansar Chandra Road, Jaipur-302021 <br> (P) 0141 -2374431 || (M)+91-98290-53431 || (E) support@grpfinance.in</div></center>
                </td>
              </tr>
            <!-- END MAIN CONTENT AREA -->
            </table>
            <!-- END CENTERED WHITE CONTAINER -->
            <!-- START FOOTER -->
            <div class="footer">
              <table role="presentation" border="0" cellpadding="0" cellspacing="0">
                <tr>
                  <td class="content-block">                 
                     The content of this email is confidential and intended for the recipient
                    specified in message only. It is strictly forbidden to share any part of
                    this message with any third party, without a written consent of the sender.
                    If you received this message by mistake, please reply to this message and
                    follow with its deletion, so that we can ensure such a mistake does not
                    occur in the future.</a>.
                  </td>
                </tr>
                
              </table>
            </div>
            <!-- END FOOTER -->
          </div>
        </td>
        <td>&nbsp;</td>
      </tr>
    </table>
  </body>
</html>';


                // echo($html_mail);
                $myfile = fopen( "./gst_bills/Bill_".$gst_uid."_".$clientData["NAME"].".html", "w" ) or die( "Unable to open file!" );
                fwrite( $myfile, $html );
                fclose( $myfile );
               
                // echo($html_mail);
                $myfile_dues = fopen( "./temp_dues.html","./DUES/Dues_".$gst_uid."_".$clientData["NAME"].".html", "w" ) or die( "Unable to open file!" );
                fwrite( $myfile_dues, $html_due_final );
                fclose( $myfile_dues );
              
                // Instantiation and passing `true` enables exceptions
                $mail = new PHPMailer( true );
                try {
                    //Server settings
                    $mail->SMTPDebug = 0; // Enable verbose debug output
                    $mail->isSMTP(); // Set mailer to use SMTP
                    $mail->Host       = 'smtp.hostinger.in'; // Specify main and backup SMTP servers
                    $mail->SMTPAuth   = true; // Enable SMTP authentication
                    $mail->Username   = 'accounts@grpfinance.in'; // SMTP username
                    $mail->Password   = 'Arpit007'; // SMTP password
                    $mail->SMTPSecure = 'tls'; // Enable TLS encryption, `ssl` also accepted
                    $mail->Port       = 587; // TCP port to connect to
                    //Recipients
                    $mail->setFrom( 'accounts@grpfinance.in', 'G.R. PARWAL AND CO.' );
                    $mail->addAddress( $clientData[ "EMAIL" ], $clientData[ "NAME" ] ); // Add a recipient
                    // $mail->addAddress('ellen@example.com');               // Name is optional
                    $mail->addReplyTo( 'accounts@grpfinance.in', 'G.R. PARWAL AND CO.' );
                    $mail->addBCC('accounts@grpfinance.in');
                    // $mail->addBCC('bcc@example.com');
                    // Attachments
                    $mail->addAttachment( "./gst_bills/Bill_".$gst_uid."_".$clientData["NAME"].".html" ); // Add attachments
                    $mail->addAttachment( "./DUES/Dues_".$gst_uid."_".$clientData["NAME"].".html" ); // Add attachments


                    // $argv=["","./temp_dues.html","./DUES/Dues_".$gst_uid."_".$clientData["NAME"].".html"];


                    // $argv=["","./temp_dues.html","./dues/Dues_".$gst_uid."_".$clientData["NAME"].".pdf"];

                    // $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name
                    $mail->AddCustomHeader( "Importance: High" );
                    // Content
                    $mail->isHTML( true ); // Set email format to HTML
                    $mail->Subject = 'Your GST invoice-' . $gst_uid . '';
                    $mail->Body    = $html_mail;
                    $mail->AltBody = 'Please find generated GST reciept attched in pdf format for your reference. In case of any discrepancy, kindly report at the earliest';
                    $mail->send();
                    // echo 'Message has been sent';
                    echo ( '   <tr>
             <td>' . $gst_uid . ' </td>
             <td>' . str_replace( '_', ' ', $clientData[ "NAME" ] ) . '</td> 
             <td>' . str_replace( '_', ' ', $clientData[ "EMAIL" ] ) . '</td>            
           
             <td>Success</td>                
                          </tr>' );
                }
                catch ( Exception $e ) {
                    echo ( '   <tr>
    <td>' . $gst_uid . ' </td>
    <td>' . str_replace( '_', ' ', $clientData[ "NAME" ] ) . '</td>            
    <td>$mail->ErrorInfo</td>    
</tr>' );
                }
            }
        }
}
echo('</table></center>');
include 'footer.php';

?>
   
  
