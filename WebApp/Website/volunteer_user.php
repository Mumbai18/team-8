<?php
  session_start();
  $volunteername = $_POST['volunteer_name'];
  $_SESSION['volunteername']= $volunteername;
/*
  $source = $_FILES['profilePic']['tmp_name'];
  $name = $_FILES['profilePic']['name'];
  $dest_path = 'C:/fndfrancis_images/'.$donorname.'_'.$name;

  if(!move_uploaded_file($source,$dest_path)){
    die('Upload Failed');
  }*/
  $volunteeraddress = $_POST['volunteer_address'];
  $volunteercontact = $_POST['volunteer_contact'];
  $volunteervehicle = $_POST['volunteer_vehicle'];
  $_SESSION['volunteercontact']=$volunteercontact;
  $_SESSION['volunteeraddress']=$volunteeraddress;
  $_SESSION['volunteervehicle']=$volunteervehicle;
  require "includes/dbconnect.php";
  if($conn -> connect_error){
    die($conn -> connect_error);
  } else{
    //echo('Connection successful');
    $query = "insert into volunteer (volunteer_name,volunteer_address,volunteer_contact,volunteer_vehicle) values('$volunteername','$volunteeraddress','$volunteercontact','$volunteervehicle')";
    if($conn -> query($query)){
      header('Location: /team-8/WebApp/Website/volunteer_dashboard.php?regsuccess=1');
      #echo('Registration successful');
    } else {
      echo('Registration failed'.$conn -> error);
    }
  }
?>
