<?php
require_once 'web/pdf/fpdf/fpdf.php';
require_once 'config.php';
$name = $date = "";
session_start();
 $uid =  $_SESSION['id'];
 if(isset($_COOKIE['bus']))
 {
 $busid = $_COOKIE['bus'];
 $date = $_COOKIE['date'];


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
if(isset($_POST['btn_pdf']))
{
	$pdf = new FPDF('l', 'mm', 'a3');
	$pdf->addpage();
	$pdf->SetFont('arial', 'b', 20);
	$pdf->cell('70','10','Your full name','1','0','c');
	$pdf->cell('60','10','Date of journey','1','0','c');
	$pdf->cell('66','10','Bus Arriaval Time','1','0','c');
	$pdf->cell('70','10','Your Pickup place','1','0','c');
	$pdf->cell('80','10','Your Destination place','1','0','c');
	$pdf->cell('50','10','Your Payment','1','1','c');
    $pdf->SetFont('arial', 'i', 20);
	$pdf->cell('70','10', $name,'1','0','c');
	$pdf->cell('60','10', $date,'1','0','c');
	$pdf->cell('66','10', $time,'1','0','c');
	$pdf->cell('70','10', $pickup,'1','0','c');
	$pdf->cell('80','10', $destination,'1','0','c');
	$pdf->cell('50','10', $rupee ,'1','1','c');
	$pdf->cell('396','10', '' ,'1','1','c');
	$pdf->SetFont('arial', 'b', 25);
	$pdf->cell('196','10', 'HAVE a GREAT JOURNEY !!' ,'1','0','c');
	$pdf->cell('200','10', 'XYZ bus service    : contact : +91 025256456' ,'1','1','c');
	$pdf->SetFont('arial', 'b', 25);
	$pdf->cell('396','10', '' ,'1','1','c');
	$pdf->cell('396','10', '!! VISIT AGAIN !!' ,'1','1','C');
	$pdf->Output();
}

}
else{
echo "not found";
}
mysqli_close($link);

?>