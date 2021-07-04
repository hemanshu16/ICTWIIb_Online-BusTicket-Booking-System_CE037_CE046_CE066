
<?php
error_reporting(0);
$uid = $_GET["id"];
$time =  60 * 20 + time() ;
setcookie('bus', $uid, 0,'/');
session_start();
$_SESSION['bus'] = $uid;
echo $_SESSION['bus'];

require_once "config.php";
if($_SERVER["REQUEST_METHOD"] == "POST"){ 
        $uname = $link -> real_escape_string($_POST['name']);
		$pass = $link -> real_escape_string($_POST['password']);
        $id = $link -> real_escape_string($_POST['id']);
        $sql = "SELECT * FROM user WHERE name= '".$uname."' AND password = '".$pass."'";
		if ($result =mysqli_query($link,$sql)) {
		

		if($row = $result->fetch_assoc()) 
        {
        
		$_SESSION['name'] = $row["name"];
		$_SESSION['password'] = $row["password"];
        $_SESSION['id'] = $row["id"];
        header("location:busseat.php?");
        exit();
        }
        else
        {
           
            header('location:index.php');
        }

    }
    else
    {
        echo " something went wrong!!!";
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
    <!-- /fontawesome css -->
    <!-- google fonts-->
    <link href="//fonts.googleapis.com/css?family=Raleway:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">
    <!-- /google fonts-->

</head>
<body style="background-image: url(cover11.jpg);">
	<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post"> 
     <marquee style="width: 75%;"><h1 style="color:tomato;text-shadow: 1px 2px yellow;">XYZ bus service</h1></marquee>
    <div class=" w3l-login-form">
        <h2>User's Login for Checkout</h2>
        <form action="includes/login.inc.php" method="POST">

            <div class=" w3l-form-group">
                <label>username:</label>
                <div class="group">
                    <i class="fas fa-user"></i>
                    <input type="text" class="form-control" name="name" autocomplete="off" placeholder="Your name" required="required" />
                </div>
            </div>
            <div class=" w3l-form-group">
                <label>Password:</label>
                <div class="group">
                    <i class="fas fa-unlock"></i>
                    <input type="password" class="form-control" name="password" placeholder="Password" required="required" />
                </div>
            </div>
            <div class=" w3l-form-group">
                <label>Your Bus Id:</label>
                <div class="group">
                    <i class="fas fa-bus"></i>
                    <label style="color:red; font-size: 20px" name="id">
                        <b><?php echo "<b>".$uid."</b>";
                        setcookie('bus', $uid, time()+3600 * 20);

                    ?><b></label>
                </div>
            </div>
            <!--<div class="forgot">
                <a href="#">Forgot Password?</a>
                <p><input type="checkbox">Remember Me</p>
            </div>-->
            <button type="submit" name="login-submit">Login</button><br><br>

     </form>
     <a href="registration.php">New User</a>
 </b>
</b>
</label></div></div></form>
</body>
</html>
<html>
<head>
     <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="stylesheet" type="text/css" href="footer.css">
</head>

<body >
     <section id="footer">
        <div class="footer container">
            <div class="brand"><h1><span>X</span>yz Bus  <span>S</span>ervice</h1></div>
            <h2>complete and perfect bus service</h2>
            <div class="social-icon">
                <div class="social-item">
                    <a href="#"><img src="web/images/cover5.jpg"></a>
                </div>
                <div class="social-item">
                    <a href="#"><img src="web/images/cover4.jpg"></a>
                </div>
                <div class="social-item">
                    <a href="#"><img src="web/images/cover6.jpg"></a>
                </div>
            </div>
            <p>copyright @ 2020 xyzbusservice.all rights reserved</p>
        </div>
    </section>
</body>
</html>



