<?php
       if($_SERVER["REQUEST_METHOD"] == "POST"){
        
         require_once "config.php";

         $sql = "INSERT INTO route (pickup, destination, timing , bustype,rupee) VALUES ('".$_POST['pickup']."','".$_POST['destination']."', '".$_POST['time']."' , '".$_POST['bustype']."' , '".$_POST['rupee']."')";
         
        if( mysqli_query($link, $sql)){
            
           
            

           $sql =  "SELECT * FROM route " ; 
           if($result = mysqli_query($link, $sql))
           {    $num = mysqli_num_rows($result);
               
                $counter = 0;
                while($row = mysqli_fetch_array($result))
                {
                    $counter++;
                    if($counter == $num)
                    {
                        $id = $row['id'];
                    }
                }
              
    $sql = "CREATE TABLE busid".$id." (id INT(2) PRIMARY KEY, dates INT(2) NOT NULL  ";
   for($i = 1 ; $i <= 40 ; $i++)
   {
      $sql = $sql.", "."s".$i." INT(2) NOT NULL";
   }
   $sql = $sql." )";
   
   
 
  
   if(mysqli_query($link, $sql))
   {
     
   } 
   else{
    echo " error ";
   }
  for($i = 0 ; $i <= 7 ; $i++)
   {
        $sql = "INSERT INTO busid".$id."  ( id,dates, s1, s2, s3, s4, s5, s6, s7, s8, s9, s10, s11, s12, s13, s14, s15, s16, s17, s18, s19, s20, s21, s22, s23, s24, s25, s26, s27, s28, s29, s30, s31, s32, s33, s34, s35, s36, s37, s38, s39, s40)  VALUES ('".($i+1)."','".$i."' , '0' , '0' , '0' , '0' , '0' , '0' , '0' , '0' , '0' , '0' , '0' , '0' , '0' , '0' , '0' , '0' , '0' , '0' , '0' , '0' , '0' , '0' , '0' , '0' , '0' , '0' , '0' , '0' , '0' , '0' , '0' , '0' , '0' , '0' , '0' , '0' , '0' , '0' , '0' , '0'  ) ";
        if(mysqli_query($link, $sql))
   {
     echo "hello world";
     header('location:admin.php');
   }
   else{ echo " error " ;}
   }

           }
               
           }
        
        mysqli_close($link);
       }   
  ?>
<!DOCTYPE html>
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
    </style>

</head>
<body style="background-image: url(cover10.jpg);">
     <h1>XYZ bus service</h1>
    <div class=" w3l-login-form">
        <h2>Fill Details.</h2>
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST">
            <div class=" w3l-form-group">
                <label>Pickup Place</label>
                <div class="group">
                    <i class="fas fa-map-marker"></i>
                 <input type="text" name="pickup" placeholder="Enter Pickup Place" required="required">  
                    
                </div>
            </div>
            <div class=" w3l-form-group">
                <label>Destination Place</label>
                <div class="group">
                    <i class="fas fa-map-marker"></i>
                  <input type="text" name="destination" placeholder="Enter Destination Place" required="required">   
                </div>
            </div>
            <div class=" w3l-form-group">
                <label>Pickup Place Arriaval Time</label>
                <div class="group">
                    <i class="fas fa-clock"></i>
                 <input type="time" name="time" placeholder="Set Time For Pickup"required="required">  
                </div>
            </div>
            <div class=" w3l-form-group">
                <label>Bus Type</label>
                <div class="group">
                   <i class="fas fa-bus"></i>
                  <input type="text" name="bustype" placeholder="Enter Bus Type"required="required">  
                </div>
            </div>
            <div class=" w3l-form-group">
                <label>Rupee</label>
                <div class="group">
                    <i class="fas fa-rupee-sign"></i>
                  <input type="number" name="rupee" placeholder="Ticket Price" required="required">  
                </div>
            </div>
            <br>
            <<button type="submit">Add</button><br> <br> </form>
            <button><a href="admin.php">Back</a></button>
            
           
           

</body>
</html>