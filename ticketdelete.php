
<?php



require_once "config.php";
if($_SERVER["REQUEST_METHOD"] == "POST"){ 
       if(isset($_POST['login'])){
        $uname = $link -> real_escape_string($_POST['name']);
		$pass = $link -> real_escape_string($_POST['password']);
        
        $sql = "SELECT * FROM user WHERE name= '".$uname."' AND password = '".$pass."'";
		if ($result =mysqli_query($link,$sql)) {
		

		if($row = $result->fetch_assoc()) 
        {
        
		session_start();
                $_SESSION['email_user'] = $row['email'];
		$user = "logged" ;
                  
        }
        else
        {
           
            header('location:index.php');
        }

    }
    else
    {
        echo " something went wrong!!!";
    } }
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
	<?php if(isset($_POST['login'])) { echo "<!--" ; } ?><form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post"> 
     <marquee style="width: 75%;"><h1 style="color:tomato;text-shadow: 1px 2px yellow;">XYZ bus service</h1></marquee>
    <div class=" w3l-login-form">
        <h2>User's Login for Cancel Ticket</h2>
        <form action="includes/login.inc.php" method="POST">
                <input type="hidden" name="login" value="123">
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
           
            <!--<div class="forgot">
                <a href="#">Forgot Password?</a>
                <p><input type="checkbox">Remember Me</p>
            </div>-->
            <button type="submit" name="login-submit">Login</button><br><br>

     </form>
     
 </b>
</b>
</label></div></div></form> <?php if(isset($_POST['login'])){ echo "-->" ; } ?>
</body> 
</html>   
<html>
<head><?php if(isset($_POST['login'])) { echo "<!--" ; } ?>
     <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="stylesheet" type="text/css" href="footer.css">  <?php if(isset($_POST['login'])){ echo "-->" ; } ?>
</head>

<body > <?php if(isset($_POST['login'])) { echo "<!--" ; } ?>
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
    </section>  <?php if(isset($_POST['login'])){ echo "-->" ; } ?>
</body>
</html>





<?php
          

           if($_SERVER["REQUEST_METHOD"]=="POST"){
               if(isset($_POST['cancel'])){
               $date = date_create($_POST['date']);
               $current_date = date("Y-m-d");
               $current_date = date_create($current_date);
               $advanced_days = date_diff($date, $current_date);
               $advanced_days = $advanced_days->format('%d');
           

           require_once "config.php";

           $sql = "UPDATE busid".$_POST['busid']." set s".$_POST['seatnumber']." = '0' WHERE dates = '".$advanced_days."'";
           
           if(mysqli_query($link , $sql))
           {   session_start();
              
               $to = $_SESSION['email_user'];
              
               $sub = "Ticket Cancel";
               $message = "Your Ticket is Successfully canceld, within Next two days you will get refund." ;
              
               $header = "From: fhemanshu@gmail.com\r\n";
  
                if(mail($to , $sub , $message , $header))
                  {
  	            echo "success";
                      header('location:index.php');
                     unset($_SESSION['email_user']);  
                    }
               else 
               {
  	         echo " error";
                 }
               
              
           }
           }
           } 
?>

<?php if( ! isset($user)){ echo "<!-- " ; } ?>
<html>
<head>
	
<link href="web/css/style.css" rel="stylesheet" type="text/css" />
   
    <link href="web/css/fontawesome-all.css" rel="stylesheet" />
    
    <link href="//fonts.googleapis.com/css?family=Raleway:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">
    <style>
        *{
            font-size : 15px;
        }
        input{
            border :0px solid black;
            outline : none;   
        }
    </style>

</head>
<body >
     <h1>MYbus service</h1>
    <div class=" w3l-login-form">
        <h2>Cancel Ticket</h2>
        <form action="" method="POST">
           
            <input type="hidden" name="cancel" value="456">
            <div class=" w3l-form-group">
                <label>Bus Id</label>
                <div class="group">
                  <input type="number" name="busid" required="required">   
                    
                </div>
            </div>
            <div class=" w3l-form-group">
                <label>Seat Number</label>
                <div class="group">
                 <input type="number" name="seatnumber" required="required">  
                </div>
                 <div class=" w3l-form-group">
                <label>Date</label>
                <div class="group">
                 <input type="date" name="date" required="required">  
                </div>
            
            <br>
            <<button type="submit">Cancel</button><br> <br> </form>
            <button><a href="index.php">Back</a></button>
            
           
           

</body>
</html>
<?php if( ! isset($user)){ echo "--> " ; } ?>