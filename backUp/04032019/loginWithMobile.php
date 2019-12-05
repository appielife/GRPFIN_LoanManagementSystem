<?php

 include 'login_OTP.php';


 if(isset($_SESSION['login_user'])){
    header("location: index.php");
    }
    $otp=rand(100000,999999);

    ?>
<div  style='margin-top: 150;'>
<?php
    include "LogoAndName.php";
    ?>
    </div >
    <!DOCTYPE html>
    <html>
    <head>
    <title>G.R. Parwal and Co.</title>
    <link href="style.css" rel="stylesheet" type="text/css">
    </head>
    <body>
    <div id="main">
    <center>
    

    <div id="login">
    
    <form action="" method="post">
    <label> Username:</label>
    <input id="mobile" name="mobile" placeholder="Name/Mobile Number" type="text">
   
    <input  name="otp_set" type="hidden" value="<?php echo $otp?>">
    <input name="submit_mobile" type="submit" value=" Login ">
    <span><?php echo $error;  ?></span>
    </form>
    </div>
    </div>
    </body>
    </html>


