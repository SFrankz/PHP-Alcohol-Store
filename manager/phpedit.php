<?php
	$con=mysqli_connect("localhost","root","ester12sharon34","phpProject");	
if(isset($_POST['Drink_stock'])){
	$result = mysqli_query($con,"UPDATE drink SET  drink_stock=".$_POST['Drink_stock']."  WHERE drink_id=".$_SESSION['id']."");
	
	echo '<script>alert("Set Successfully")</script>';

}
if(isset($_POST['Price'])){
	$result = mysqli_query($con,"UPDATE drink SET  price=".$_POST['Price']."  WHERE drink_id=".$_SESSION['id']."");
	
	echo '<script>alert("Set Successfully")</script>';

}
include 'manProduct.php';
?>
