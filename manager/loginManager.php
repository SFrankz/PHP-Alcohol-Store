<!DOCTYPE html>
<html>
<head>
	<title>Login Page</title>
	<link rel="stylesheet" href="LoginCSS.css">
</head>
<body>
<style>
body {
	
  background-image: url('try9.jpg');
}
</style>
<div class="header">
	<h2>Manager Login</h2>
</div>
<form method="post" action="loginPhp.php">
	
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
	
	
	<div class="input-group">
	<a href="resetSession.php">Delete All</a>
	<p>Are You A Client?</p>
	<a href=" /labs/lab1/SE PROJECT/client/Client.php" target="_parent"><button type="button" class="btn">Client Login</button></a>
	</div>
	
	
</form>
</body>
</html>

