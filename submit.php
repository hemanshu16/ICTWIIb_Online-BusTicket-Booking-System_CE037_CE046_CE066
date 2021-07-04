<?php
 session_start();
 $uid =  $_SESSION['id'];
 if(isset($_COOKIE['bus']))
 {
 $busid = $_COOKIE['bus'];
 $date = $_COOKIE['date'];
}
else{
echo "not found";}
require_once "config.php";
$sql = "SELECT * FROM user where id = '$uid'";
if($result = mysqli_query($link,$sql))
{
	if(mysqli_num_rows($result) > 0)
	{
		$row = $result->fetch_assoc();
        $name = $row['name'];   
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
        $rupee = $row['rupee'];
    }
}
mysqli_close($link);


?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>download pdf of ticket</title>
    <link rel="stylesheet" type="text/css" href="web/css/bootstrap.css">
</head>
<body style="background: #cccccc;">

<center><h1>Your Payment Has Been Done succesfully...</h1></center>
	<div class="row">
		<div class="col">
			<div class="container">
				<div class="card mt-5">
				<div class="card-header">
					<form action="pdf_gen.php" method="post">
					<button  type="submit" name="btn_pdf" class="btn btn-success">PDF</button>
					 </form>
				</div>
				<div class="card-body">
					<table class="table table-striped">
						<tr>
							<th>Your name:</th>
							<th>Date of journey:</th>
							<th>Bus Arriaval Time:</th>
							<th>Your Pickup place:</th>
							<th>Your Destination place:</th>
							<th>Your Payment / Status:</th>
						</tr>
						<tr>
							<th><?php echo $name ?></th>
							<th><?php echo $date ?></th>
							<th><?php echo $time ?></th>
							<th><?php echo $pickup ?></th>
							<th><?php echo $destination ?></th>
							<th><?php echo $rupee. " / ". "succesfull" ?></th>
						</tr>
					</table>
				</div>
			</div>
				
			</div>
		</div>
	</div><br><br>
<h2><center><button><a href="index.php">LOGOUT</a></h2></button></center>
</body>
</html>