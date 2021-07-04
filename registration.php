<?php 

      if($_SERVER['REQUEST_METHOD'] == "POST")
      {          // for name
        $name_error ="";
         $temp_name = trim($_POST['nname']);
         if( empty($temp_name) )
            { $name_error = "Please Enter Name" ;}
         if( preg_match("/[^a-zA-Z\s]/", $temp_name))
            { $name_error = "Please Enter Valid Name";
               echo " ok" ;}
         if(empty($name_error))
           { $name = $temp_name; }

    
                     // For Email
              $temp_email = trim($_POST['email']);
              if(empty($temp_email))
              {  $email_error = "please Enater Email Address";}

              else if( filter_var($temp_email , FILTER_VALIDATE_EMAIL) )
              {  $email = $temp_email; }
              else
              {  $email_error = "Enter Vaild Email";}  

                 // BirthDate
          $date = trim($_POST['birthdate']);
          
          
        
                    // password
          
          $temp_password=trim($_POST['pwd']);
          $password_error ="Password may not contain at least ";
          if(empty($temp_password))
            { $password_error = "Please Enter Password";}
          if(  strlen($temp_password) < 8)
            { $password_error =$password_error." 8 Characters ";}
           if(! preg_match("/[\d]+/", $temp_password))
             { $password_error =$password_error." one Digit";}
           if(! preg_match("/[a-z]+/", $temp_password))
            {  $password_error = $password_error." one Lowercase letter ";}
            if(! preg_match("/[A-Z]+/", $temp_password))
            {  $password_error = $password_error." one Uppercase letter ";}
           if(!preg_match("/[\W]+/", $temp_password))
            {  $password_error= $password_error." one Special Character ";}
         if(  strlen($password_error) == 34)
         {
                    $password = $temp_password;
         } 

                  // Mobile number
           $temp_number = trim($_POST['nb']);
           if(strlen($temp_number) != 10)
            {
                $number_error = "Mobile Number is not contain 10 digits.";
            }  
            else{
                $number = $temp_number;
            }      

            $temp_number = trim($_POST['aa']);
           if(strlen($temp_number) != 12)
            {
                $adharnumber_error = "Adhar Number is not contain 12 digits.";
            }  
            else{
                $adharnumber = $temp_number;
            }         
           
      }

?>
<?php
    if(!empty($name) & !empty($email) & !empty($password) & !empty($number) & !empty($adharnumber)){
require_once "config.php";
   
    

    
    $sql =  " INSERT INTO user(name , password , birthdate ,email , mobilenumber , adhar) VALUES(?,?,?,?,?,?)";

    if($stmt = mysqli_prepare($link, $sql))
    {
         mysqli_stmt_bind_param($stmt,"ssssii", $param_name, $param_password,$param_birthdate, $param_email, $param_mobilenumber , $param_adhar);
          $param_name = $name;
          $param_password = $password;
          $param_birthdate = trim($date);
          $param_email = $email;  
          $param_mobilenumber = $number;
          $param_adhar = $adharnumber;
         if( mysqli_execute($stmt ))
          {mysqli_stmt_close($stmt);
           mysqli_close($link);
              header('location:index.php') ;}
    } 
    else {
    echo " some thing wrong tyr letter"; }

    
 }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
          @import url('https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@1,500&display=swap');
           *{
              margin: 0;
               padding: 0;
              box-sizing: border-box;
            }
            html{
               font-size: 10px;
             font-family:'montserrat' ,sans-serif;
            }
            input {
                min-width : 300px;
                transition : width 1s ease-in-out;
                height:22.5px;
            }
            .cont{
                min-height: 100vh;
                width: 100%;
                 display: flex;
                align-items: center;
                justify-content: center;
            }
            .submit{
                width:200px;
                height:25px;
            }
            .submit:hover{
              background-color: white;
            }
            input:focus{
              
              width:100%;
            }

            #hero{
                 background-image:url("b2.php");
                 background-size:cover;
                 position:relative;
                 z-index:1;
            }
            #hero::after{
                content:"";
                height:100%;
                width:100%;
                position:absolute;
                top:0;
                left:0;
                background-color:black;
                opacity:0.2;
                z-index:-1;
            }
            #hero h1{
                font-size:4rem;
                color:red;
            }
            #hero h4{
                font-size:1.5rem;
                color:yellow;
            }
            #hero .hk{
    
                padding:20px 80px;
                background:rgba(0,0,0,0.6);
            }
            
    </style>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="stylesheet" type="text/css" href="footer.css">
</head>
<body style="background-image: url(cover9.jpg); width: 100%;">
    <section id="hero">
    <div class="hero cont">
    <div class="hero hk">
    <form action="#" method="post">

    <h1>RESISTRATION FORM</h1>
    
    <br>
    <label for="a"><h4> *NAME</h4></label>
      
    <input type="text" name="nname" id="a"  size="30" placeholder="<?php if(isset($name_error)){if(!empty($name_error)){ echo $name_error ;}} else echo "first-middle-last"  ?>" value="<?php if(isset($name)){ if(!empty($name)) { echo $name ;}}?>"required><br><br>
    
    <label for="b"><h4>*BIRTH-DATE</h4></label>
    <input type="text" name="birthdate" onfocus="(this.type='date')" id="b"  size="30" value="<?php if(isset($date)){ if(!empty($date)) { echo $date ;}}?>" required><br><br>
    
    <label for="c"><h4>*E-MAIL</h4></label>
    <input type="email" name="email" id="c"  size="30" placeholder="<?php if(isset($email_error)){if(!empty($email_error)){ echo 
        $email_error;}} ?>" value="<?php if(isset($email)){ if(!empty($email)) { echo $email ;}}?>"required><br><br>
    
    <label for="d"><h4>*PASSWORD</h4></label>
    <input type="password" name="pwd" id="d"  size="30" minlength="5" placeholder="<?php if(isset($password_error)){if(!empty($password_error)){ echo  $password_error;}} ?>" value="<?php if(isset($password)){ if(!empty($password)) { echo $password ;}}?>"required><br><br>
    
    <label for="e"><h4>*MOBILE NO.</h4></label>
    <input type="number" name="nb" id="e"   size="10"  maxlength="10" minlength="10" placeholder="<?php if(isset($number_error)){if(!empty($number_error)){ echo 
        $number_error;}} ?>" value="<?php if(isset($number)){ if(!empty($number)) { echo $number ;}}?>"required><br><br>
    
    <label for="f"><h4>*AADHAAR NO.</h4></label>
    <input type="number" name="aa" id="f"   size="12" maxlength="12" minlength="12" placeholder="<?php if(isset($adharnumber_error)){if(!empty($adharnumber_error)){ echo 
        $adharnumber_error;}} ?>" value="<?php if(isset($adharnumber)){ if(!empty($adharnumber)) { echo $adharnumber ;}}?>"required><br><br><br>

    <button><input type="submit" class="submit"></button><br><br>
    <button><a href="bookticket.php?">Already Have a account ?</a></button>
    </form><br><br>
    <label for="f"><h2 style="color: orange; font-size: 22px;"><li>
        Password must contain <br>atleast one special , one digit <br>and one Upper case letter.
    </li></h2></label>
    </div>
    </div>
    </section>
</body>
</html>