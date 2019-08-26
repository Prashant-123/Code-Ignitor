<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href= <?php echo $this->config->item('assets')."css/style.css" ?>>
    <title>Login Page</title>
</head>
<body>
    
<div class="w3-bar w3-border w3-card-4 w3-light-grey">
    <span class="nav-heading">SignUp Form</span>
</div>


<div class="main">
    <form id="login-form" class="form1" action="<?php echo base_url()."signup/submit"?>" method="POST">
        <p class="heading" align="center">Enter your Details</p>

        <input placeholder="Name" class="email" type="text" name="name" required><br>
        <span class="error" id="email-error"></span>
        <input placeholder="Email" class="email" type="email" name="email" required><br>
        <span class="error" id="email-error"></span>
        <input placeholder="Password" class="pass" minlength="6" type="password" name="password" required><br>
        <span class="error" id="pwd-error"></span>
        <br>
        <input placeholder="Sign Up" class="submit ripple" name="submit" type="submit">
    </form>
    <!-- <label id="signup" class="signup-btn"> New User? SignUp here</label> -->
</div>
</body>
<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
<script src="<?php echo base_url()."assets/js/login.js"?>"></script>
</html>