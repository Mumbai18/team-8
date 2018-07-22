<?php
  $invalid = false;
  if(array_key_exists('invalid',$_GET))
  {
    $invalid=true;
  }

  $regsuccess=false;
  if(array_key_exists('regsuccess',$_GET))
  {
    $regsuccess=true;
  }

?>
<!DOCTYPE html>
<html>
<head>
	<title>Login Page</title>
	<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
	<link href="http://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">

	<link rel="stylesheet" type="text/css" href="/team-8/WebApp/Website/CSS/login.css">

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
      <ul class="nav navbar-nav navbar-right">
        <li><a href="/team-8/WebApp/Website/newreq.php">NewRequest<i class="fa fa-user"></i></a></li>
        <li><a href="login">AddNeedy<i class="fa fa-user"></i></a></li>
        <li><a href="signup">MyProfile<i class="fa fa-user-plus"></i></a></li>
        <li><a href="login">Invite<i class="fa fa-user-plus"></i></a></li>


      </ul>
    </div>
  </div>
 </nav>




<!--  <div class="container">
 	<div class="row">
 		<div class="col-lg-12">
 			<div class="content">
 				<h1>Annadhan</h1>
 				<h3>What's left is not over</h3>
 				<hr>
 				<button class="btn btn-default btn-lg"><i class="fa fa-paw fa-fw"></i> Get Started!</button>
 			</div>
 		</div>
 	</div>
 </div>
 -->

 <script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>


</body>
</html>
