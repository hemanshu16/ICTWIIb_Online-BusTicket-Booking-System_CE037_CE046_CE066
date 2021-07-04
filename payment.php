<?php
 require_once "config.php";
 session_start();
 if($_SERVER["REQUEST_METHOD"] == "POST"){
    $validate = 0;
    $year = $_POST['exp_year'];
    $mon = $_POST['exp_month'];
    $cur_year = date("Y");
    $cur_month = date("M");
    if(!ctype_digit($_POST['card_num']) || !ctype_digit($_POST['cvc']))
    {
        $validate = 2;
    }
    else if($year > $cur_year)
    {
        $validate = 1;
    }
    else if($mon > $cur_month)
    {
        $validate = 1;
    }
    else
    {
        $validate = 0;
    }
 if($validate == 1){
 $uid =  $_SESSION['id'];
 $result = mysqli_query($link,"SELECT * FROM user where id='" . $uid . "'");
    $row = mysqli_fetch_assoc($result); 
  $name=$row['name'];
  $email=$row['email'];

  $sql = mysqli_query($link,"SELECT * FROM totp where id=$uid or id='1'");
  $col = mysqli_fetch_assoc($sql);
  $otp = $col['otp'];
  
  if(!empty($email) && !empty($otp)) {
    $to = $email;
    $txt = "Hi, $name. this is OTP for your payment verification. $otp (Do Not Share With Anyone !!)";
    $headers = "From:fhemanshu@gmail.com\r\n";
    $subject = "Payment Verification";
     $msg=mail($to,$subject,$txt,$headers);
    if($msg){
      $_SESSION['msg'] = 'OTP has been Sent';
      header("location:otp.php");
    }
    else{
    echo "OTP was not sent!!";     }
  }
  }
  else{
    if($validate == 0){
    echo "<center><b><h2>"."Your Card has been Expired"."</h2></center></b>";}
    if($validate == 2)
    {
        echo "<center><b><h2>"."please enter appropite detail.<br>card number / cvv can not contain alphabet or symbol."."</h2></center></b>";
    }
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
</body>
<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post" id="paymentform">
	<h1 style="color:black; border: 3px solid pink; padding: 20px; text-shadow: 2px 2px red; background-color:rgba(255,195,255,0.7);">XYZ bus service</h1>
    <div class=" w3l-login-form">
        <h2> Enter Your Credit / Debit Card Detail</h2>
	<div class=" w3l-form-group">
                <label>Card Number:</label>
                <div class="group">
                    <i class="fas fa-unlock"></i>
                    <input type="text" name="card_num" size="16" maxlength="16" minlength="16" required="required" autocomplete="off" class="card-number"/>
                </div>
            </div>
	<div class=" w3l-form-group">
		<label>CVC / CVV :</label>
		<div class="group">
             <i class="fas fa-unlock"></i>
		     <input type="password" name="cvc" size="4" maxlength="4" minlength="3" required="required" autocomplete="off" class="card-cvc"/>
	</div>
	</div>
	<div class=" w3l-form-group">
		<label>Expiration(MM/YYYY) :</label>
		<div class="group">
             <i class="fas fa-calendar"></i>
		<input type="text" name="exp_month" size="2" maxlength="2" minlength="2" required="required" class="card-expiry-month"/>
		<span>/</span>
		<input type="text" name="exp_year" size="4" maxlength="4"minlength="4" required="required" class="card-expiry-year"/>
	</div>
	</div>
	<div class=" w3l-form-group">
		<label>Rupees Payable:</label>
		<div class="group">
             <i class="fas fa-rupee-sign"></i>
             <?php 
              echo $_SESSION['rupee'];
              ?>
	</div>
	</div>
	<button type="submit">Submit Payment</button><br><Br>
	<button><a href="paytoupi.php"> UPI / Net Banking</a></button>
</form>
</div>
</html>
