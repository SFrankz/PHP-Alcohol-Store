<?php

	$con=mysqli_connect("localhost","root","ester12sharon34","phpProject");
//	$result = mysqli_query($con,"insert into manager_ values(1,'sharon','frank','054-8798595','12g34','sharon@gmail.com')");
	$result = mysqli_query($con,"SELECT * FROM manager_ ");
	$row = mysqli_fetch_array($result);//מכניס למערך מדפיס שורות

	
	if($_SESSION['flag'] == 1  && $_SESSION['helper'] == 0){
		if($_POST['email'] == $row['email'] && $_POST['Password'] == $row['password'] ){
			echo "click to reset";
			echo "<html>
					<body>
							<form  method = 'POST' action ='resetManagerClient.php'>
						<input type = 'submit' value='Reset'/>
						</form></body></html>";
			$_SESSION['helper'] = 1;
		}
		else{
			echo "the wrong password or user";
			include 'loginManager.php';
		}
		
	}
	
	else if($_POST['email'] == $row['email']  && $_POST['Password'] == $row['password']){
		//echo " Welcome ",$row['manager_name'] ;
		header("Location: /labs/lab1/SE PROJECT/manager/homeSE.php");

	}
	
	else{
		if($_POST['email'] != $row['email'] )
			echo "<script>alert('email does not exist')</script>";
		if($_POST['Password'] != $row['password'])
			echo "<script>alert('password error')</script>";
		if($_SESSION['block'] == 0){
			$_SESSION['counter']++;
		if($_SESSION['counter'] == 3){
			echo "<span >",$row['manager_name']," is blocked</span><br>";
			$_SESSION['block'] = 1;
			$_SESSION['flag'] = 1;		
			include 'setEmail.php';
		}
		 
			
						
		}
		if($_SESSION['counter'] >=3 && $_SESSION['flag'] == 0)
			$_SESSION['counter'] = 0;
			Include 'loginManager.php';
	}
	
?>
