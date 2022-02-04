<?php
	session_start();
	$con=mysqli_connect("localhost","root","ester12sharon34","phpProject");
	$result = mysqli_query($con,"SELECT * FROM user_ ");
		//$row = mysqli_fetch_array($result);//מכניס למערך מדפיס שורות

	$re = mysqli_query($con,"SELECT * FROM user_ WHERE email ='".$_POST['email']."'");
	$work = mysqli_fetch_all($re,MYSQLI_ASSOC);
	$email = $work[0]['email'];
	$password =  $work[0]['password'];
	if(!isset($_SESSION['block'])){
		$_SESSION['block'] = 0;
		
	}
	if(!isset($_SESSION['flag'])){//האם הוא קיים
		$_SESSION['flag'] = 0;
		
	}
	if(!isset($_SESSION['helper'])){//האם הוא קיים
		$_SESSION['helper'] = 0;
		
	}
	if(!isset($_SESSION['counter'])){//יצרנו את זה בגלל שאנחנו לא רוצים לאתחל כל פעם את הסשיין אז אנחנו אומרים פה שהוא קיים כבר אז אל תגע בו
		$_SESSION['counter'] = 0;//זה יתבצע רק בתנאי שהסשיין באמת ריק 
	}
	
	if($_SESSION['flag'] == 1  && $_SESSION['helper'] == 0){
		if($_POST['email'] == $email && $_POST['Password'] == $password ){
			echo "click to reset";
			echo "<html>
					<body>
						<form  method = 'POST' action ='resetManagerClient.php'>
						<input type = 'submit' value='Reset'/>
						</form></body></html>";
		}
		$_SESSION['helper'] = 1;
	}
	
	else if(($_POST['email'] == $email) && ($_POST['Password'] == $password)){
		$_SESSION['userId'] = $work[0]['user_id'] ;
		header("Location:/labs/lab1/SE PROJECT/homeSE.php");

	}
	
	else{
		if($_POST['email'] != $email )
			echo "<script>alert('email does not exist')</script>";
		if($_POST['Password'] != $password)
			echo "<script>alert('password error')</script>";
		if($_SESSION['block'] == 0){
			$_SESSION['counter']++;
		if($_SESSION['counter'] == 3){
			echo "<span >",$work[0]['user_name'] ," is blocked</span><br>";
			$_SESSION['block'] = 1;
			$_SESSION['flag'] = 1;		
			include 'setEmail.php';
		}
		 
			
						
		}
		if($_SESSION['counter'] >=3 && $_SESSION['flag'] == 0)
			$_SESSION['counter'] = 0;
		
			Include 'Client.php';
	}
?>
