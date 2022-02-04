<!DOCTYPE html>
<html>
<head>
	<title>Login Page</title>
	<link rel="stylesheet" href="LoginCSS.css">
</head>
<body>
<style>
body {
	
  background-image: url('try3.jpg');
}
</style>
<div class="header">
	<h2>Client Login</h2>
</div>
<form method="post" action="loginPhp2.php">
	
	<div class="input-group">
		<label>Email</label>
		<input type="email" name="email" value="" required>
	</div>
	<div class="input-group">
		<label>Password</label>
		<input type="password" name="Password" required>
	</div>
	
	<div class="input-group">
		<button type="submit" class="btn" name="register_btn">Login</button>
	</div>
	<p>
		Not A Member? <a href="RegisterClient.php">Sign Up</a>
	</p>
	
	<div class="input-group">
	<p>Are You The Manager?</p>
	<a href="/labs/lab1/SE PROJECT/manager/loginManager.php" target="_self"><button type="button" class="btn">Manager Login</button></a>
	</div>
	<a href="resetSession.php">Delete All</a>
	
</form>
</body>
</html>

