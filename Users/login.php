<?php
if (!isset($_SESSION)) {
	session_start();
}

include "../app/connectionCtrl.php";

?>
<!DOCTYPE html>
<html>
<head>
	<title>User</title>
</head>
<body>
	<fieldset>Register</fieldset>
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
<form>
	<fieldset>
	Login
</fieldset>
<label>email</label>
		<input type="email" name="email" required="">
			<label>password</label>
		<input type="password" name="password" required=""><br>
		<button type="submit">Acess</button>	
		<input type="hidden" name="action" value="login">

</form>
</body>
</html>