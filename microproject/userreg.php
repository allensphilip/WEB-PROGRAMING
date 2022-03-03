<html>
<head>
	<title>Signup-login</title>
	<link rel="stylesheet" type="text/css" href="reg.css">
	<link rel="stylesheet" href="style.css">
</head>
<body>

	<div class="main" align="center">  	
		<input type="checkbox" id="chk" aria-hidden="true">

			<div class="signup">
				<form method="POST" action="regaction.php">
					<label id="headlabel"for="" aria-hidden="false">Sign up</label>
					<input type="text" name="username" placeholder="User name" required="">
					<input type="email" name="email" placeholder="Email" required="">
					<input type="password" name="pass" placeholder="Pass" required="">
					<input type="password" name="confirmpassword" placeholder="confirm password" required="">
					<button type="submit" name="submit">sign up</button>
				</form>
	
			</div>
	</div>
</body>
</html>
