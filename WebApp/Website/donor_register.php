<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
	<title>Sign Up as a Donor</title>
	<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
	<link href="http://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">

	<link rel="stylesheet" type="text/css" href="/team-8/WebApp/Website/CSS/app.css">
	<link rel="stylesheet" type="text/css" href="/team-8/WebApp/Website/CSS/custom.css">
</head>
<body>
<nav class="navbar navbar-default navbar-fixed-top">
	<div class="container">
		<div class="navbar-header">
			<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			<a class="navbar-brand" href="#">Annadhan</a>
			</div>
			<div id="navbar" class="collapse navbar-collapse">
			<ul class="nav navbar-nav">
			<li class="active"><a href="#">Home</a></li>
			<li><a href="#about">About</a></li>
			<li><a href="#contact">Contact</a></li>
			</ul>
		</div>
	</div>
</nav>
	<div class="container">
	<form id="contact" method="post" action="register.php" enctype="multipart/form-data">
		<h3>Sign Up</h3>
		<?php include('errors.php'); ?>

		<div class="input-group">
			<label>Username</label>
			<input type="text" name="username" value="">
		</div>
		<div class="input-group">
			<label>Address</label>
			<input type="text" name="address" value="">
		</div>
		<div class="input-group">
			<label>Email</label>
			<input type="email" name="email" value="">
		</div>
		<div class="input-group">
			<label>Password</label>
			<input type="password" name="password_1">
		</div>
		<div class="input-group">
			<label>Confirm password</label>
			<input type="password" name="password_2">
		</div>
		<div class="input-group">
			<label>Upload Image</label>
			<input type="file" name="fileToUpload" id="fileToUpload">
		</div>
		<div class="input-group">
			<button type="submit" class="btn" name="reg_user">Register</button>
		</div>
		<p>
			Already a member? <a href="login.php">Sign in</a>
		</p>
	</form>
	</div>
</body>
</html>
