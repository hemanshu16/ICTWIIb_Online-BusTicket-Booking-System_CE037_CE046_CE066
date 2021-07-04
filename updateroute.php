<?php

     session_start();
    if(isset($_SESSION['BUSid'])){
     $id = $_SESSION['BUSid'];
     unset($_SESSION['BUSid']);
     }
     else if($_SERVER["REQUEST_METHOD"] == "POST"){
     	if(isset($_POST['id']))
     	{
     		$id = $_POST['id'];
     	}
     }
    

     $pickup = $destination = $arriaval_time = $bustype = "";
     require_once "config.php";
    
    
     if($_SERVER["REQUEST_METHOD"] == "POST"){
          
           $update = "UPDATE route set pickup='".$_POST['pickup']."' , destination='".$_POST['destination']."',timing='".$_POST['time']."', bustype='".$_POST['bustype']."', rupee='".$_POST['rupee']."' WHERE id='".$id."' "; 
           
               if(mysqli_query($link, $update))
               {
               	header("location:admin.php");
               }
               else{
               	echo "error" ;
               }
   

         }

    $sql = "SELECT * FROM route WHERE id = ?";
    
    if($stmt = mysqli_prepare($link, $sql)){
        
        mysqli_stmt_bind_param($stmt, "i", $param_id);
        
        $param_id = $id;
        
       
        if(mysqli_stmt_execute($stmt)){
            $result = mysqli_stmt_get_result($stmt);
    
            if(mysqli_num_rows($result) == 1){
               
                $result = mysqli_fetch_array($result, MYSQLI_ASSOC);
                 
                 $pickup = $result['pickup'];
     		     $destination = $result['destination'];
     			 $arriaval_time = $result['timing'];
     			 $bustype = $result['bustype'];
     		     $rupee = $result['rupee'];
            } else{
                header("location: error.php");
                exit();
            }
            
        } else{
            echo "Oops! Something went wrong. Please try again later.";
        }
    }
     
    
    mysqli_stmt_close($stmt);
    
    
    mysqli_close($link);
     
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <title>Update Date</title>
   <style>
        
        *{
            box-sizing: border-box;
            margin: 0px;
            padding: 0px;
        }
        body {
             margin: 0;
             padding: 0;
             background: url(web/images/img.jpg) no-repeat 0px 0px;
             min-height: 100vh;
             background-size: cover;
             font-family: 'Raleway', sans-serif;
}
        #ref{
            min-height: 100vh;
            background-image: url("buspic2.jpg");
            background-position: center;
            background-size: cover;
            z-index: 1;
            position: relative;
        }
        #ref::after
        {
            content: "";
            position: absolute;
            left: 0;
            top: 0;
            height: 100%;
            width: 100%;
            background-color: black;
            opacity: 0.5;
            z-index: -1;
        }
        .referance{
            color: white;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            font-size: 1.5rem;
        }
        .box{
            margin:50px auto;
            padding:30px;
        }
        table, th, td {
         border: 4px groove rgb(21, 106, 133);
         border-collapse: collapse;
         vertical-align: top;
         table-layout: auto;
         padding: 10px;
         font-size: 1.2rem;
         text-align: center;
         color: white;
         text-transform:uppercase;
        }
        th{
            background: linear-gradient(45deg,red,yellow);
        }
        td{
            background: radial-gradient(red,green);
        }
        table{
            box-shadow: 0 0 20px 10px purple;
            margin-top:18px;
            margin-bottom:20px;
        }
        a{
            text-align:center;
            color:red;
            text-decoration:none;
            border:2px solid #eee;
            padding:2px 18px;
            background-color:white;
        }
        a:hover{
            color:white;
            background-color:red;
        }
        input[type="text"]{
            width:140px;
            height:30px;
            background-color:lightgray;
            font-size:1rem;
            text-transform:uppercase;
            
        }
        input[type="submit"]{
            width:140px;
            height:30px;
            background-color:lightgray;
            color:rgb(16, 27, 126);
            font-size:1rem;
            text-transform:uppercase;
        }
        input[type="time"]{
            width:140px;
            height:30px;
            background-color:lightgray;
            font-size:1rem;
            text-transform:uppercase;
            
        }

    </style>
</head>
<body>
<center><h2>Update Route of Busid <?php echo$id ; ?></h2></center>


<center>
<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST">
    <input type="hidden" name="id" value="<?php echo trim($id); ?>">
    <table border="1">
    <tr> 
     <td> <label for="pickup">PickUp </label> </td>
     <td> <input type="text" name="pickup" id="pickup" required="required" value="<?php echo $pickup ; ?>"> </td> </tr>
    
     <tr> 
     <td> <label for="destination">Destination </label> </td>
     <td> <input type="text" name="destination" id="destination" required="required" value="<?php echo $destination ; ?>" > </td> </tr> 
     
     <tr> 
     <td> <label for="time">Arriaval Time </label> </td>
     <td>  <input type="time" name="time" id="time" required="required" value="<?php echo $arriaval_time;  ?>"> </td> </tr> 
    

     <tr> 
     <td> <label for="bustype">Bus Type </label> </td>
     <td>   <input type="text" name="bustype" id="bustype" required="required" value="<?php echo $bustype; ?>" > </td> </tr> 
    
     <tr> 
     <td> <label for="rupee">Rupees </label> </td>
     <td>   <input type="number" name="rupee" id="rupee" required="required" value="<?php echo $rupee; ?>" > </td> </tr> 
     <tr >
     <td colspan="2" id="last">	
     <input type="submit" value="Submit"> </td></tr>
</label>
    
</form>
   </table>  
   <center><a href="admin.php">Back</a></center>           
</body>
</html>