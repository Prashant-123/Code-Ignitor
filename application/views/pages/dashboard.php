<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href= <?php echo $this->config->item('assets')."css/style.css" ?>>
    <title>Dashboard</title>
</head>
<body>  

<div class="w3-bar w3-border w3-card-4 w3-light-grey">
    <span class="nav-heading">Dashboard</span>
</div>
    
<div class="main">
<p class="heading" align="center">User Information</p>
<label class="email_label row">Email: </label>
<span class="email"><?php echo $email ?></span>


<label class="pass_label row">Password: </label>
<span class="pass"><?php echo $password ?></span>

<a href=<?php echo base_url() . "login/logout" ?>><button class="logout ripple">LogOut</button></a>
</div>

</body>
</html>