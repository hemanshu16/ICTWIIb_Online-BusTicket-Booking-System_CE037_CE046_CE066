<?php
if($_SERVER["REQUEST_METHOD"] == "POST"){ 
    $pass = $_POST['password'];
    if($pass == "xyzbus" )
    {
        header('location:admin.php');
    }
    else
    {
        echo "<h2><center><b>"."YOU HAVE ENTERED WRONG DETAILS !"."<B></center></B></h2>";
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
        <h2>Admin's Login</h2>
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
            
            <button type="submit" name="login-submit">Login</button><br><br>
            <button type="submit" ><a href="index.php">Back</button><br><br>
     </form>
     
 </b>
</b>
</label></div></div></form>
</body>
</html>
