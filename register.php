<?php include('functions.php') ?>
<!DOCTYPE html>
<html>
<head>
<link rel='stylesheet' href='format/sqlp.css'>
	<title>The Sql injection Prevention project</title>
</head>
<body>
<div class="header">
	<h2>Register</h2>
</div>
<form method="post" action="register.php">
	<div class="input-group">
		<label>Username</label>
		<input type="text" name="username" value="">
	</div>
	<div class="input-group">
		<label>Email</label>
		<input type="email" name="email" value="">
	</div>
	<div class="input-group">
		<label>Password</label>
		<input type="password" name="password_1">
	</div>
	<div class="input-group">
		<label>Confirm password</label>
		<input type="password" name="password_2">
	</div>
	<div class="input-group">
		<button type="submit" class="btn" name="register_btn">Register</button>
	</div>
	<p>
		Already a member? <a href="login.php">Sign in</a>
	</p>
</form>
</body>
</html>
<?php include('functions.php') ?>
<form method="post" action="register.php">
<input type="email" name="email" value="<?php echo $email; ?>">
<input type="text" name="username" value="<?php echo $username; ?>">
</form>