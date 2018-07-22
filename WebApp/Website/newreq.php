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
      <ul class="nav navbar-nav navbar-right">
        <li><a href="/team-8/WebApp/Website/newreq.php">MyProfile<i class="fa fa-user"></i></a></li>
        <li><a href="login">AddNeedy<i class="fa fa-user"></i></a></li>
        <li><a href="signup">NewRequest<i class="fa fa-user-plus"></i></a></li>
        <li><a href="login">Invite<i class="fa fa-user-plus"></i></a></li>


      </ul>
    </div>
  </div>
 </nav>
 <div class="container">
 <form id="contact" method="post" action="newreq_user.php" enctype="multipart/form-data">
   <h3>New Request</h3>


   <div class="input-group">
     <label>Food Description</label>
     <input type="text" name="fooddescription" value="">
   </div>
   <div class="input-group">
     <label>Location</label>
     <input type="text" name="location" value="">
   </div>
   <div class="input-group">
     <label>Quantity</label>
     <input type="text" name="quantity" value="" placeholder="Number of people served">
   </div>
   <div class="input-group">
     <label>Packaging</label>
     <input type="radio" name="packaged" value="0">Yes
     <input type="radio" name="packaged" value="1">No
   </div>
   <div class="input-group">
     <label>Type of Food</label>
     <input type="radio" name="typeoffood" value="0">Perishable
     <input type="radio" name="typeoffood" value="1">Not Perishable
   </div>
   <div class="input-group">
     <label>Appropriate Pickup Time</label>
     <input type="time" name="donor_time">
   </div>
  <!--
  <script type="text/javascript"
     src="http://cdnjs.cloudflare.com/ajax/libs/jquery/1.8.3/jquery.min.js">
    </script>
    <script type="text/javascript"
     src="http://netdna.bootstrapcdn.com/twitter-bootstrap/2.2.2/js/bootstrap.min.js">
    </script>
    <script type="text/javascript"
     src="http://tarruda.github.com/bootstrap-datetimepicker/assets/js/bootstrap-datetimepicker.min.js">
    </script>
    <script type="text/javascript"
     src="http://tarruda.github.com/bootstrap-datetimepicker/assets/js/bootstrap-datetimepicker.pt-BR.js">
    </script>
    <script type="text/javascript">
      $('#datetimepicker').datetimepicker({
        format: 'dd/MM/yyyy hh:mm:ss',
        language: 'pt-BR'
      });
    </script>
    -->
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





 <script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>




</body>
</html>
