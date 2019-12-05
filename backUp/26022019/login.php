<?php

 include 'login_script.php';
 $user_mobile=$_SESSION['login_mobile'];

 if(isset($_SESSION['login_user'])){
    header("location: index.php");
    
   
    }
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
    <label>UserName :</label>
    <input readonly id="uname" name="uname" placeholder="username" value="<?php echo $user_mobile ?>" type="text">
    <label>Password :</label>
    <input id="otp" name="otp" placeholder="**********" type="password">
    <br>
    <br>
    <br>
    <input name="submit" type="submit" value=" Login ">
    <span><?php echo $error;  ?></span>
    </form>
    </div>
    </div>
    </body>
    </html>


