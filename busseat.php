
<?php
   session_start();
 $uid =  $_SESSION['id'];
 //echo   $uid . " userid". "<br>";
 $date =  $_SESSION['date'] ;
 
 $date = date_create($date);
 $current_date = date("Y-m-d");
 $current_date = date_create($current_date);
 $advanced_days = date_diff($date, $current_date);
 $advanced_days = $advanced_days->format('%d');
 
 if($advanced_days > 7)
 { header('index.php?msg="You can only book ticket within Next 7 days"');
  }
 if(isset($_COOKIE['bus']))
 {
 $busid = $_COOKIE['bus'];
 }
else
 { echo "not set";  }
    if($_SERVER['REQUEST_METHOD'] == "POST"){
        if(isset($_POST['seat']))
        {
            if(!empty($_POST['seat']))
            {
                $num = $_POST['seat'];
               
            }
        }
    }
           
    if(isset($num))

    {   
        

        require_once "config.php";
             $id = $uid;      // here id is user id.
             $seat =  "s".$num ;
             
        $sql = "UPDATE busid".$busid." set  ".$seat." =".$id. " WHERE dates='".$advanced_days."' ";
        if( mysqli_query($link, $sql))
        {
            echo " ok your job is done";
            header('location:checkout.php');
      }
      else{
        echo "error";
      }
    }
    else{
         require_once "config.php";
    }
  
   
   {
       

        // here we get which date ticket book  or we can use hidden input item with html form
        // by get method so that 
        $sql = "SELECT * FROM busid".$busid." WHERE dates='".$advanced_days."' ";

        if($result = mysqli_query($link, $sql)){
            
            $seat = mysqli_fetch_array($result);
           
            

        }
        else {
            echo " error";
        }

        mysqli_close($link);
   }

?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <style>
        

            body{
                background-image: url('web/images/cover4.jpg');
                background-repeat: no-repeat;
                background-size: cover;
                background-position: center;
            }
            .bus-cabin{
                float:left;
                border : 1px solid blue;
                border-right: 1px solid red;
                height:400px;
                width:150px;
                margin-top:35px;
                margin-left:200px;
                background-color : whitesmoke;
            }
            .seatsection{
                float:left;
                margin-top:35px;

            }
            .bus-cabin img{
                width:85px;
                height:85px;
            }
            .seats{
                border : 1px solid blue;
                border-right: 1px solid red;
                width:fit-content; 
                display: grid;
                grid-template-columns: repeat(10, 80px);
                grid-template-rows: repeat(5 , 80px) ;
                background-color : whitesmoke;
            }
            input{
			display:none;
            }
            img{
                margin : 10px 10px;
                width:60px;
                height:60px;
            }
            .gap{
               
                grid-column-start: 1;
                grid-column-end: 11;
            }
            .seat{
                width:80px;
                height:80px;
               
            }

            :checked + .not-book {
             border-color: #ddd;
            }
             :checked + .not-book img {
              transform: scale(1.1);
              box-shadow: 0 0 10px 3px rgb(97, 223, 255); }
              .book img{
                 box-shadow: 0 0 10px 2px rgb(97, 223, 0);
                 height:60px;
              }
              input[type=submit]
              {
                display: block;
                width:10%;
                margin-left: 35%;
                margin-top:10px;
                background-image: linear-gradient(to left, aqua , lightblue) ;
                outline : none;
                border: none;
              }
           
         </style>    
    </head>
    <body style="background-image:url(cover10.jpg);">
        <center><h1>Select Your Seat</h1></center>
        <div class="bus-cabin">
              <img src="web/images/steering.jpg"> 
        </div>
        <div class="seatsection">
            <form action="" method="POST">
            <div class="seats">
             <?php 
                for( $i=2 ; $i <=21 ; $i++ )
                {    
                    echo '<div class="seat">';
                     if($seat[$i] == 0){ echo '<input type="radio" id="s'.($i-1).'"  name="seat" value="'.($i-1).'" >';} 
                    echo '<label '; if($seat[$i] != 0){ echo ' class="book" ';} else {echo ' class="not-book" ';}echo ' for="s'.($i-1).'" ><img src="web/images/tempimage3.png" /></label></div> ' ;
                }   ?>
                <div class="gap"></div>
                <?php 
                for( $i=22 ; $i <=41 ; $i++ )
                {
                    echo '<div class="seat">';
                     if($seat[$i] == 0){ echo '<input type="radio" id="s'.($i-1).'"  name="seat" value="'.($i-1).'" >';} 
                    echo '<label '; if($seat[$i] != 0){ echo ' class="book" ';} else {echo ' class="not-book" ';}echo ' for="s'.($i-1).'" ><img src="web/images/tempimage3.png" /></label></div> ' ;
                }   ?>
                

             
            
        </div><input type="submit" value="Next" style="font-size: 25px;"></form>
    </div>
    </body>

</html>
<?php
    
    $row = mysqli_fetch_array($result); 

 
?>