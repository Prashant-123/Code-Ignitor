<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
	<link rel="stylesheet" href= <?php echo $this->config->item('assets') . "css/style.css" ?>>
	<title>Login Page</title>
</head>
<body>

<div class="w3-bar w3-border w3-card-4 w3-light-grey">
	<span class="nav-heading">SignUp Form</span>
</div>


<div class="main">
	<form id="signUp">
		<p class="heading" align="center">Enter your Details</p>
		<input placeholder="Name" id="name" class="name" type="text" name="name" required><br>
		<span class="error" id="email-error"></span>
		<input placeholder="Email" id="email" class="email" type="email" name="email" required><br>
		<span class="error" id="email-error"></span>
		<input placeholder="Password" id="pass" class="pass" minlength="6" type="password" name="password" required><br>
		<span class="error" id="pwd-error"></span>
		<br>
		<input placeholder="Sign Up" class="submit ripple" name="submit" type="submit">
	</form>
	<label id="signup" class="signup-btn"><a href="signup.php">New User? SignUp here</a></label>
</div>
</body>
<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
<script src="<?php echo base_url() . "assets/plugins/jquery.validate.min.js" ?>"></script>
<script src="<?php echo base_url() . "assets/js/sign_up.js" ?>"></script>
</html>
