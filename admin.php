



<?php
        if($_SERVER["REQUEST_METHOD"] == "POST")
      {
          if(isset($_POST['operation']) && $_POST['operation'] == "delete")
          { require_once "config.php";
          	$sql ="DELETE FROM route WHERE id='".$_POST['id']."'";
            
            if(mysqli_query($link, $sql)){
            	 $id = $_POST['id'];
                  $sql = "DROP TABLE busid".$id."";
                    
                 if(mysqli_query($link, $sql))
                   {
                   }
                  else{ echo " error ";}
            }
          } 

          if(isset($_POST['operation']) && $_POST['operation'] == "update")
          {
          	session_start();
              	$_SESSION['BUSid'] = $_POST['id'] ;
              	
          	header('location:updateroute.php');
          }
    
      }

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Admin</title>
    <style>
    	*{
    		margin : 0px;
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
            background-image: url("buspic.jpg");
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
			margin-top:50px;
			border:3px solid rgb(75, 11, 11);
			padding:20px 120px;
			box-shadow: 0 0 20px 10px purple;
			background:linear-gradient(60deg ,#29323c 0%,#485563 100%);
			font-size:1.4rem;
		}
		a{
			text-align:center;
			color:white;
			text-decoration:none;
			background-color: black;
		}
		a:hover{
			color:red;
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
			margin-top:15px;
		}
		input[type="number"]{
			width:120px;
            height:30px;
			font-size:1rem;
			background-color:lightgray;
			text-transform:uppercase;
			
		}
		input[type="submit"]{
			width:120px;
            height:30px;
			font-size:1rem;
			background-color:lightgray;
			color:rgb(16, 27, 126);
			text-transform:uppercase;
		}
		select[name="operation"]{
			width:120px;
            height:30px;
			font-size:1rem;
			background-color:lightgray;
			color:rgb(16, 27, 126);
			text-transform:uppercase;
		}
	   button{
	   	color: blue;
	   	border: 1px solid green;
	   }
    </style>
</head>
<body>
	<center><div class="box">
			<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST">
			<label>Enter Bus Id </label>
			<input type="number" name="id"  maxlength="3" >
			<select name="operation" >
				<option value="delete">Delete</option>
				<option value="update">Update</option>
			</select>
			<input type="submit" Value="Go">&nbsp;
			<label><button style="color: blue; font-size: 25px;"><a href="index.php">HOME</button></label>
			<br><?php if(isset($name)){ if(!empty($name)){echo $name."  ".$msg ; }}?>
		</div></center><br>
		<center>  
<center>
	<a href="newbusroute.php">Add New Bus Route</a>
<?php
// Include config file
require_once "config.php";

// Attempt select query execution
$sql = "SELECT * FROM route";
if($result = mysqli_query($link, $sql)){
	if(mysqli_num_rows($result) > 0){
		echo "<table border='2'>";
			echo "<thead>";
				echo "<tr>";
					echo "<th>Bus Id</th>";
					echo "<th>Pickup</th>";
					echo "<th>Destination</th>";
					echo "<th>Timing</th>";
					echo "<th>BusType</th>";
					echo "<th>Rupees</th>";
				echo "</tr>";
			echo "</thead>";
			echo "<tbody>";
			while($row = mysqli_fetch_array($result)){   // return array corresponding to the fatche 
			                                            //row 
				echo "<tr>";
					echo "<td>" . $row['0'] . "</td>";//in this case we use numeric index insted name
					echo "<td>" . $row['1'] . "</td>";
					echo "<td>" . $row['2'] . "</td>";
					echo "<td>" . $row['3'] . "</td>";
					echo "<td>" . $row['4'] . "</td>";
					echo "<td>" . $row['5'] . "</td>";
				echo "</tr>";
			}
			echo "</tbody>";                            
		echo "</table>";
		// Free result set
		mysqli_free_result($result);
	} else{
		echo "<p><em>No records were found.</em></p>";
	}
} else{
	echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}

// Close connection
mysqli_close($link);
?></center>

</body>
</html>