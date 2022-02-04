<?php
	
	$con=mysqli_connect("localhost","root","ester12sharon34","phpProject");
	$re = mysqli_query($con,"SELECT * FROM user_ WHERE email ='".$_SESSION['email']."'");
	$work = mysqli_fetch_all($re,MYSQLI_ASSOC);
	$password =  $work[0]['password'];
	$id =  $work[0]['user_id'];
			//$result = mysqli_query($con,"UPDATE user_  set password='".$tempPassword."' where user_id='".$work[0]['user_id']."' ");
	if($_POST['Password'] != $password ){
		if( $_POST['VerifyPassword'] == $_POST['Password']){
			$result = mysqli_query($con,"UPDATE user_  	set password='".$_POST['Password']."' where user_id=".$id." ");
			echo "<script>alert('is set successfuly')</script>";
			header("Location: /labs/lab1/SE PROJECT/client/emailSendClient.php");

			//Include 'Client.php';
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
		echo $_POST['Password']," deafult password. Please choose another password.";
		include 'resetManagerClient.php';
		// echo "<html>
					// <body>
						// <form  method = 'POST' action ='resetManagerClient.php'>
						// <input type = 'submit' value='Reset'/>
						// </form></body></html>";
	}
	
?>

