<?php
if (!isset($_SESSION)) {
	session_start();
}

include "../app/connectionCtrl.php";

<?php


?>
<!DOCTYPE html>
<html>
<head>
	<title>User</title>
		<style type="text/css">
		fieldset{
			width: 50%;
			margin: auto;
			background-color: lightblue;
			
			padding: 20px;
		}
	</style>
</head>
<body>

	<fieldset>Register
	<form method="POST" action="app/authController.php.">
		<legend>Register</legend>
		<label>name</label>
		<input type="text" name="name" required="">
		<label>email</label>
		<input type="email" name="email" required="">
			<label>password</label>
		<input type="password" name="password" required=""><br>
		<button type="submit">Save use</button>	
		<input type="hidden" name="action" value="register">
		
	</form>
	</fieldset>
<form><br>
	<fieldset>
	Login

<label>email</label>
		<input type="email" name="email" required="">
			<label>password</label>
		<input type="password" name="password" required=""><br>
		<button type="submit">Acess</button>	
		<input type="hidden" name="action" value="login">
</fieldset>
</form>
</body>
</html>
