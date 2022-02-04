<html> 
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<title> Client Register </title>
<link rel="stylesheet" href="Reg.css">
</head>  
<body>  
<style>
body {
	
  background-image: url('try4.jpg');
}
</style>

  <div class="header">
	<h2>Hello,Register Please!</h2>
</div>

	<form method="post" action="">
	
	<div class="input-group">
		<label>Your Name:</label>
		<input type="text" name="name" value="" required>
	</div>
	<div class="input-group">
		<label>Last Name:</label>
		<input type="text" name="lastName" required>
	</div>
	<div class="input-group">
		<label>ID:</label>
		<input type="text" name="Id" required>
	</div>
	<div class="input-group">
		<label>Birth Date:</label>
		<input type="date" name="age" required>
	</div>
	<div class="input-group">
		<label>Phone:</label>
		<input type="text" name="phone" required>
	</div>
	<div class="input-group">
		<label>Password:</label>
		<input type="password" name="Password" required>
	</div>
	<div class="input-group">
		<label>Email:</label>
		<input type="mail" name="email" required>
	</div>
	
	<div class="input-group">
		<button type="submit" class="btn" name="register_btn">Submit</button>
	</div>
	</html>
	<?php
	error_reporting(0);
		 $con=mysqli_connect("localhost","root","ester12sharon34","phpProject");

$re = mysqli_query($con,"SELECT * FROM user_ WHERE email ='".$_POST['email']."'");
$work = mysqli_fetch_all($re,MYSQLI_ASSOC);
$email = $work[0]['email'];
$re = mysqli_query($con,"SELECT * FROM user_ WHERE user_id ='".$_POST['Id']."'");
$work = mysqli_fetch_all($re,MYSQLI_ASSOC);
$Id = $work[0]['user_id'];

	if(isset($_POST['Id']) || isset($_POST['email'])){
		if($email == $_POST['email'] || $Id == $_POST['Id'] ){
				echo "'<script>alert('email or id exists')</script>'";
		}

		
	}
	
	else{
		if(isset($_POST['Id'])){
	 $date = date('Y-m-d',strtotime($_POST['age']));
		if(preg_match('/[A-Za-z]/', $_POST['name']) && preg_match('/[A-Za-z]/', $_POST['lastName'])){
			if(strpos($_POST['email'], '@') && strpos($_POST['email'],'.com')){
				if(preg_match('/[0-9]/', $_POST['phone'])&& preg_match('/[0-9]/', $_POST['Id'])){
					if(strlen($_POST['phone']) == 10 && strlen($_POST['Id'])==9){
				$month = date('m');
				$year = ($_POST['age']/10)*10;
				$currentYear = 2022;
				if(($currentYear-$year) == 18 ){
					 if($month <=2){
						 $result = mysqli_query($con,"INSERT into user_ values('".$_POST['name']."','".$_POST['lastName']."','".$date."','".$_POST['phone']."','".$_POST['Password']."','".$_POST['email']."')");
						echo "set successfully";
						header("Location: /labs/lab1/SE PROJECT/hometSE.php");
						return;
					}
				 }
				else if(($currentYear-$year) < 18){	
							echo "<script>alert('too young')</script>";
					
				}
				else{
					$result = mysqli_query($con,"INSERT into user_ values(".$_POST['Id'].",'".$_POST['name']."','".$_POST['lastName']."','".$date."','".$_POST['phone']."','".$_POST['Password']."','".$_POST['email']."')");
						echo "<html><center><span>set successfully</span></center></html>";
						header("Location: /labs/lab1/SE PROJECT/homeSE.php");
				}	
			}
			else 
				echo "worng phone number or Id1";
			}
			else
				echo "worng phone number or Id";
			}else 
				echo "invalid mail address";
				
			}else
				echo "Error! Please input characters only";
	
	}
	}
?>

<html>
	<p>
		Already A Member? <a href="Client.php">Login</a>
	</p>
</form> 
	
</body>   
</html>



