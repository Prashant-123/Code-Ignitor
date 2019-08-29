<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
	<link rel="stylesheet" href= <?php echo $this->config->item('assets') . "css/style.css" ?>>
	<title>Dashboard</title>
</head>
<style>
	* {
		font-size: 100%;
		font-family: 'Raleway';
	}
</style>
<body>

<nav class="navbar navbar-light bg-light shadow">
	<a class="navbar-brand" href="#">SignUp Form</a>
</nav>
<!--    -->
<!--<div class="main">-->
<!--<p class="heading" align="center">User Information</p>-->
<!---->
<!---->
<!--<label class="email_label row">Name: </label>-->
<!--<span class="email" id="name"></span>-->
<!---->
<!--<label class="email_label row">Email: </label>-->
<!--<span class="email"></span>-->
<!---->
<!--<label class="pass_label row">Password: </label>-->
<!--<span class="pass"></span>-->
<!--	-->
<!--	-->
<!---->
<!--</div>-->

<div class="container flex justify-content-center">
	<form id="login-form" method="POST">
		<p class="my-5 font-weight-bold" align="center">User Information</p>

		<div class="form-group">
			<div class="form-row">
				<label for="name-input">Name</label>
				<input disabled type="text" class="form-control" id="name-input" placeholder="Your Name">
			</div>
		</div>

		<div class="form-group">
			<div class="form-row">
				<label for="email-input">Email Id</label>
				<input disabled type="email" class="form-control" id="email-input" placeholder="Your Email" email">
			</div>
		</div>

		<div class="form-group">
			<div class="form-row">
				<label for="pass-input">Password</label>
				<input disabled type="text" class="form-control center-block" id="pass-input"
					   placeholder="Your Password">
			</div>
		</div>
	</form>
	<a href=<?php echo base_url() . "login/logout" ?>>
		<button class="logout-btn btn btn-danger">LogOut</button>
	</a>
</div>

</body>
<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
<script src="<?php echo base_url() . "assets/js/dashboard.js" ?>"></script>
</html>
