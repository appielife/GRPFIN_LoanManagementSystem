<?php



echo("<CENTER>
<style>
@media print
{    
    .no-print, .no-print *
    {
        display: none !important;
    }
}
</style>
<br><br><br>
<div class=no-print style='position: fixed;
bottom: 0;
width: 100%; background:#fff;'>
<hr>
<center>
<table style='background:#fff;' width='50%'>
<td>
<a href='index.php'>Home</a>
</td>
<td>
<a href='clients.php'>Add Client</a><br>
</td>
<td>
<a href='updateClient.php'>Update Client</a><br>
</td>
<td>
<a href='transactions.php'>New Loan</a><br>
</td>
<td>
<a href='account.php'>Accounts</a>
</td>
<td>
<a href='gst.php'>GST Report</a>
</td>

</table>
</div>
");


?>