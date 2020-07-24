<?php include('server.php');?>
<html>
<body>
<link rel="stylesheet" type="text/css" href="system.css">
	<div class="header">
		<h2>Login<h2>
	</div>
	<form method="post" action="login.php">
		<?php include('errors.php');?>
		<div class="input-group">
		<div class="input-group">
			<label>Username</label>
			<input type="text" name="username">
		</div>
		
		<div class="input-group">
			<label>Password</label>
			<input type="password" name="password">
		</div>
		<div class="input-group">
			<button type="submit" name="login" class="btn">Login</button>
		</div>
		<p>
			Not a member?<a href="registration.php">Sign Up</a>
		</p>
	</form>
		
</body>
</html>