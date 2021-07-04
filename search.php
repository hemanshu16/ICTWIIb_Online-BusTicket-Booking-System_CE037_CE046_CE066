<html>
<head>
	
<link href="web/css/style.css" rel="stylesheet" type="text/css" />
    <!-- /externel style sheet -->
    <!-- fontawesome css -->
    <link href="web/css/fontawesome-all.css" rel="stylesheet" />
    <!-- /fontawesome css -->
    <!-- google fonts-->
    <link href="//fonts.googleapis.com/css?family=Raleway:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">
    <!-- /google fonts-->

</head>
<body style="background-image: url(cover9.jpg);">
	<h2 style="color:yellow;font-size: 35px; font-weight: 500;">
        <i class="fas fa-search"></i>
<?php
session_start();
$pickup = $_SESSION['pickup'];
$desti = $_SESSION['destination'];
$date = $_SESSION['date'];
setcookie('date',$date);
echo "  ";
echo $pickup ." -TO- ". $desti ."<hr>";
?>
</h2>
<h2 style="color:fuchsia; font-size:30px; font-family: verdana;">
<?php
if(!empty($pickup) && !empty($desti))
{
	require_once "config.php";
	
    $sql = "SELECT * FROM route WHERE pickup = '".$pickup."' AND destination = '".$desti."' or (pickup = '".$desti."' AND destination = '".$pickup."')";
    if($result = mysqli_query($link, $sql))
    {
    	if(mysqli_num_rows($result) > 0)
    	{
    		error_reporting(0);
    		echo "<i>"."Avaiable Buses for Your Journey !! <br><br>"."</i>";
    		for($i=0; $i < 5; $i++)
    		{
    		if($row = mysqli_fetch_array($result, MYSQLI_ASSOC));
    		{
    			if(!empty($row['pickup']))
    			{
    			//echo $row['pickup']." to ".$row["destination"]. " ";
                
                echo $row['timing'] . "----". $row['bustype']." ---";
    			echo "  <td>"."<b><u>"."<a href='bookticket.php?id=" . $row['id'] . "'>book ticket now</a>"."</b></u>"."</td>";
    	      	}
    		}
    		
    		echo "<br>";
    		}
    		

    	}
    	else
    	{
    		echo " no bus found". "<br>";
            echo "<u><h1><a href='index.php'>search again</a></h1></u>";
    	}
    }
}
?>   
</h2>

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
     <section id="footer" style="margin: 255px 0px 0px 0px;">
        <div class="footer container">
            <div class=" w3l-form-group">
                <div class="group">
                    <i class="fas fa-search"></i>
                    <button><a href='index.php'>click here to search New route</a></button>;
                    </b>
                </div>
            </div>
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
            <p>copyright@2021 xyzbusservice.all rights reserved</p>
        </div>
    </section>
</body>
</html>