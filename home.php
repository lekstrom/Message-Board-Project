<!DOCTYPE html>



<html>
	<head>
		<title>A page to discuss web programming</title>
		<link rel="stylesheet" href="assets/style.css">
		<meta charset="utf-8">
	</head>
	<body>
		<div id="container">
			<div id="firstheader">
				<h1>The Programmer's Forum</h1>
			</div>
			<div id="secondheader">
				<h4>Welcome!<br/><br/>This is a page where people can discuss coding. If you would like to join the discussion, you need to create an account and then log in.</h4>
			</div> 
			<div id="registerForm" >
				<h4>Register:</h4>
				<form action="register.php" method="POST" name="registerForm" onSubmit="return valReg();">		
					<label>Username:</label><br/>
					<input type="text" id="regName" name="regName"><br/><br/>
					<label>Email-address:</label><br/>
					<input type="text" id="emailaddress"name="emailaddress"><br/><br/>
					<label>Password (must be at least 8 characters):</label><br/>
					<input type="password" id="regPassword" name="regPassword"></input><br/><br/>
					<input type="submit" value="Register" id="register">
				</form>
			</div>
			<div id="loginForm" >
				<h4>Log in:</h4>
				<form action="login.php" method="POST" name="loginForm" onSubmit="return valLogin();">		
					<label>Username:</label><br/>
					<input type="text" id="username" name="username"><br/><br/>
					<label>Password:</label><br/>
					<input type="password" id="loginPassword" name="loginPassword"></input><br/><br/>
					<input type="submit" value="Log in" id="login">
				</form>
			</div>
		</div>
		<script src="assets/jscr.js"></script>			
	</body>										
								
</html>