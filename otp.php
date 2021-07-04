    <?php
 require_once "config.php";
 if($_SERVER["REQUEST_METHOD"] == "POST"){
    session_start();
    $uid =  $_SESSION['id'];
     $submit_otp = $_POST['otp'];
     $sql = mysqli_query($link,"SELECT * FROM totp where id=$uid or id='1'");
     $col = mysqli_fetch_assoc($sql);
     $otp = $col['otp'];
     if($otp == $submit_otp)
     {
       header("location:submit.php");
     }
     else
     {
        echo "<center><b>". " you have entered wrong OTP !"."</b></center>";
     }
 }
 ?>
<!DOCTYPE html>
<html>
<head>
    <link href="web/css/style.css" rel="stylesheet" type="text/css" />
    <!-- /custom style sheet -->
    <!-- fontawesome css -->
    <link href="web/css/fontawesome-all.css" rel="stylesheet" />
    <!-- /custom style sheet -->
    <!-- fontawesome css -->
    
</head>
<body style="background-image: url(web/images/cover6.jpg);background-repeat: no-repeat; background-size: 100%;">

<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post" id="paymentform">
    <h1 style="color:black; border: 3px solid pink; padding: 20px; text-shadow: 2px 2px red; background-color:rgba(255,195,255,0.7);">XYZ bus service</h1>
    <div class=" w3l-login-form">
        <h2> Enter OTP / TOTP<br><ins style="color:chocolate">which we have sent on your mail.</ins></h2>
           <div class=" w3l-form-group">
                <label>OTP :</label>
                <div class="group">
                    <i class="fas fa-unlock"></i>
                    <input type="text" name="otp" size="4" maxlength="6" minlength="4" required="1" autocomplete="off" class="card-number"/>
                </div>
            </div>
            <button type="submit">Submit</button>
        </div>

    </form>
    </body>
    </html>