<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
	<link href="<? echo base_url() . "assets/css/style.css" ?>">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
	<title>Login Page</title>
</head>
<style>
	* {
		font-size: 100%;
		font-family: 'Raleway';
	}
</style>
<body>

<nav class="navbar navbar-light bg-light shadow">
	<a class="navbar-brand" href="#">SignIn Form Demo</a>
</nav>


<div class="container flex justify-content-center">
	<form id="login-form" method="POST">
		<p class="my-5 font-weight-bold" align="center">Log In</p>

		<div class="form-group">
			<div class="form-row">
				<label for="email-input">Email address</label>
				<input type="email" class="form-control" id="email-input" placeholder="Enter email">
			</div>
		</div>

		<div class="form-group">
			<div class="form-row">
				<label for="pass-input">Password</label>
				<input type="password" class="form-control" id="pass-input" placeholder="Enter Password">
			</div>
		</div>
		<input id="submit" class="ripple btn btn-primary col-sm-12" name="submit" type="submit">
	</form>
	<label id="signup" class="signup-btn btn btn-link col-sm-12 my-4"> New User? SignUp here</label>
</div>
</body>
<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
<script src="<?php echo base_url() . "assets/js/login.js" ?>"></script>
</html>
