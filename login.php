<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Login Page</title>
	<link rel="stylesheet" href="style.css">
</head>
<body>
	<div id="frm">
		<form action="process.php" method="POST">
			<input type="hidden" name="id">
			<p>
				<label>Username</label>
				<input type="text" id="user" name="username">
			</p>
			<p>
				<label>Password</label>
				<input type="password" id="pass" name="password">
			</p>
			<p>
				<button type="submit" id="btn" value="login" name="login">Log in</button> 
			</p>
		</form>
	</div>
</body>
</html>