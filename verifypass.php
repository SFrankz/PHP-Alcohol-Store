<?php
	
	$con=mysqli_connect("localhost","root","ester12sharon34","phpProject");
		$result = mysqli_query($con,"SELECT * FROM manager_ ");
	$row = mysqli_fetch_array($result);//מכניס למערך מדפיס שורות
	if($_POST['Password'] != $row['password'] ){
		if( $_POST['VerifyPassword'] == $_POST['Password']){
			echo $_POST['Password'];
			$result = mysqli_query($con,"UPDATE manager_  set password='".$_POST['Password']."' where manager_id = 1 ");
			$mail=$row['email'];
			$subject="Rest password";
			$msg="Your new password is ". $_POST['Password'] ;
			$header="From:peretz398@gmail.com\r\n";
			$header .="MIME-Version:1.0\r\n";
			$header .="Content-type:text/html\r\n";
			$sender=mail($mail,$subject,$msg,$header);
			if ($sender==true){
				echo "good";
			}
			else	
				echo "not good";
			echo "<span style='color:white'>",$_POST['Password'],"is set successfuly</span>";
			Include 'loginManager.php';
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
		echo "<html>
					<body>
						<form  method = 'POST' action ='resetManagerClient.php'>
						<input type = 'submit' value='Reset'/>
						</form></body></html>";
	}
	
?>

