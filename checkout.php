<?php
//echo "<h1>"."hello checkout"."</h1><br>"; 
// error_reporting(0);
 session_start();
 $uid =  $_SESSION['id'];
 //echo   $uid . " userid". "<br>";
 if(isset($_COOKIE['bus']))
 {
 $busid = $_COOKIE['bus'];
}
else
echo "not set";
?>
<?php
require_once "config.php";
$sql = "SELECT * FROM user where id = '$uid'";
if($result = mysqli_query($link,$sql))
{
	if(mysqli_num_rows($result) > 0)
	{
		$row = $result->fetch_assoc();
                	$name = $row['name'];
        	$age = date_diff(  date_create($row['birthdate']) , date_create(date("Y-m-d")));

            $age = $age->format('%Y');    
	}
}
else
{
	echo "something went wrong". " please try again later";
}
$sql = "SELECT * FROM route where id='".$busid."'";
if($result = mysqli_query($link, $sql))
{
    if(mysqli_num_rows($result) > 0)
    {
    	$row = $result->fetch_assoc();
    	$pickup = $row['pickup'];
    	$destination = $row['destination'];
    	$time = $row['timing'];
        $_SESSION['rupee'] = $row['rupee'];
    }
}
mysqli_close($link);

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
<body style="background-image:url(cover10.jpg);">
     <h1>XYZ bus service</h1>
    <div class=" w3l-login-form">
        <h2>You Have Successfully Logged in.</h2>
            <div class=" w3l-form-group">
                <label>Your name:</label>
                <div class="group">
                    <i class="fas fa-user"></i>
                    <b><?php echo $name; ?></b>
                </div>
            </div>
            <div class=" w3l-form-group">
                <label>Age :</label>
                <div class="group">
                    <i class="fas fa-user"></i>
                    <b><?php echo $age; ?></b>
                </div>
            </div>
            <div class=" w3l-form-group">
                <label>Your Bus pickup - destination:</label>
                <div class="group">
                    <i class="fas fa-bus"></i>
                    <b><?php
                    echo $pickup. "- to -". $destination;
                    ?></b>
                </div>
            </div>
            <div class=" w3l-form-group">
                <label>Your Bus arrival time:</label>
                <div class="group">
                    <i class="fas fa-clock"></i>
                    <b><?php
                    echo $time;
                    ?></b>
                </div>
            </div>
             <div class=" w3l-form-group">
                <label>Date of Journey:</label>
                <div class="group">
                    <i class="fas fa-calendar"></i>
                    <b><?php
                    echo $_COOKIE['date'];
                    ?></b>
                </div>
            </div><br>
            <button ><a href="payment.php">proceed for payment</a></button><br><br>
            <button><a href="index.php">logout</a></button>

            <p style="color:white; font-family: verdana"><i class="fas fa-angle-double-right" style="color:yellow;"></i>Please Verify Your Detail and Then Proceed. Thank you...</p>
           

</body>
</html>
