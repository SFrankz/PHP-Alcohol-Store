<html>
<head>
<title>Sending HTML email using PHP</title>
</head>
<body>
<?php

$con=mysqli_connect("localhost","root","ester12sharon34","phpProject");
function randomPassword() {
    $alphabet = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890';
    $pass = array(); //remember to declare $pass as an array
    $alphaLength = strlen($alphabet) - 1; //put the length -1 in cache
    for ($i = 0; $i < 8; $i++) {
        $n = rand(0, $alphaLength);
        $pass[] = $alphabet[$n];
    }
    return implode($pass); //turn the array into a string
}
	$tempPassword = randomPassword();
	$_SESSION['manEmail'] = $_POST['Email'];
	$mail=$_POST['Email'];
	$subject="Rest password";
	$msg="Your new password is ". $tempPassword ;
	$header="From:FOB2387@gmail.com\r\n";
	$header .="MIME-Version:1.0\r\n";
	$header .="Content-type:text/html\r\n";
	$sender=mail($mail,$subject,$msg,$header);
	if ($sender==true){
		echo $_POST['Email'];
		if($_POST['Email'] == "FOB2387@gmail.com"){
		$result = mysqli_query($con,"UPDATE manager_  set password='".$tempPassword."' where manager_id=1 ");
		echo "Your new password sent to your email";
		echo "click to return Home";
			echo "<html>
					<body>
						<form  method = 'POST' action ='loginManager.php'>
						<input type = 'submit' value='Login'/>
						</form></body></html>";
		}
		
	}
	else{
		echo "Your new password failed to sent";
		echo "click to return Home";
			echo "<html>
					<body>
						<form  method = 'POST' action ='resetManagerClient.php'>
						<input type = 'submit' value='Login'/>
						</form></body></html>";
		
		
	}
?>
</body>
</html>