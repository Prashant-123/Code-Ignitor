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

<div class="container mx-auo" style="width: 100%; max-width: 400px">
	<form id="loginForm" method="post">
		<p class="my-5 font-weight-bold" align="center">Log In</p>

		<div class="row">
			<div class="form-group col-sm-12">
				<div class="form-row">
					<label for="email-input">Email address</label>
					<input type="email" class="form-control" id="email-input" name="email" placeholder="Enter email"
						   required>
				</div>
			</div>

			<div class="form-group col-sm-12">
				<div class="form-row ">
					<label for="pass-input">Password</label>
					<input type="text" class="form-control" id="pass-input" name="password" placeholder="Enter Password"
						   required>
				</div>
			</div>
		</div>

		<div class="row">

			<div class="col-lg-4 offset-lg-2">
				<input class="btn btn-primary submit col my-2" type="submit" value="Submit">
			</div>

			<div class="col-lg-4">
				<input class="btn btn-warning col my-2" id="signup" type="button" value="Signup">
			</div>

		</div>
	</form>
</div>
</body>
<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
<script src="<?php echo base_url() . "assets/plugins/jquery.validate.min.js" ?>"></script>
<script>
    // $('#loginForm').validate();
</script>
<script src="<?php echo base_url() . "assets/js/login.js" ?>"></script>
</html>
