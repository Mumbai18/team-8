<?php
  session_start();
  $donorname = $_POST['donor_name'];
  $_SESSION['donorname']= $donorname;
/*
  $source = $_FILES['profilePic']['tmp_name'];
  $name = $_FILES['profilePic']['name'];
  $dest_path = 'C:/fndfrancis_images/'.$donorname.'_'.$name;

  if(!move_uploaded_file($source,$dest_path)){
    die('Upload Failed');
  }*/
  $donoraddress = $_POST['donor_address'];
  $donorcontact = $_POST['donor_contact'];
  $_SESSION['donorcontact']=$donorcontact;
  $_SESSION['donoraddress']=$donoraddress;
  require "includes/dbconnect.php";
  if($conn -> connect_error){
    die($conn -> connect_error);
  } else{
    //echo('Connection successful');
    $query = "insert into donor (donor_name,donor_address,donor_contact,donor_foodpicpath) values('$donorname','$donoraddress','$donorcontact','$dest_path')";
    if($conn -> query($query)){
      header('Location: /team-8/WebApp/Website/donor_dashboard.php?regsuccess=1');
      #echo('Registration successful');
    } else {
      echo('Registration failed'.$conn -> error);
    }
  }
?>
