<?php
	
	$con=mysqli_connect("localhost","root","ester12sharon34","phpProject");
	$result = mysqli_query($con,"SELECT * FROM manager_ ");
	$work = mysqli_fetch_all($result,MYSQLI_ASSOC);
	$password =  $work[0]['manager_id'];
	if($_POST['Password'] != $password ){
		if( $_POST['VerifyPassword'] == $_POST['Password']){
			$result = mysqli_query($con,"UPDATE manager_  set password='".$_POST['Password']."' where manager_id=1 ");
			echo "<script>alert('is set successfuly')</script>";
			include 'emailSendPass.php';
			//include 'loginManager.php';
		}
		else {
			print " Passwords are not the same, try again";
			echo "<html>
					<body>
						<form  method = 'POST' action ='resetManagerClient.php'>
						<input type = 'submit' value='Reset'/>
						</form></body></html>";
		}
	}
	else{
		echo $_POST['Password']." deafult password. Please choose another password.";
		include 'resetManagerClient.php';
	
	}
	
?>

