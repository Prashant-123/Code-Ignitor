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


<div class="container-fluid">
	<form id="loginForm">
		<p class="my-5 font-weight-bold" align="center">Log In</p>

		<div class="form-group row justify-content-center">
			<div class="form-row col-sm-3 col align-self-start">
				<label for="email-input">Email address</label>
				<input type="email" minlength="5" class="form-control" id="email-input" placeholder="Enter email">
			</div>
		</div>

		<div class="form-group row justify-content-center">
			<div class="form-row col-sm-3 col align-self-end">
				<label for="pass-input">Password</label>
				<input type="password" class="form-control" id="pass-input" placeholder="Enter Password">
			</div>
		</div>
		<div class="row justify-content-center">
			<input class="btn btn-primary" type="submit" value="Submit">
		</div>
	</form>
	<label id="signup" class="signup-btn btn btn-link col-sm-12 my-4"><a href="signup">New User? SignUp here</a></label>
</div>
</body>
<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
<script src="<?php echo base_url() . "assets/plugins/jquery.validate.min.js" ?>"></script>
<script src="<?php echo base_url() . "assets/js/login.js" ?>"></script>
</html>
