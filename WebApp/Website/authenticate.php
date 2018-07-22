<?php
  $donorname = $_POST['donor_name'];
  session_start();
  $_SESSION["dname"]=$donorname;
  //$donoraddress = $_POST['donor_address'];

  require "includes/dbconnect.php";
  if($conn -> connect_error){
    die($conn -> connect_error);
  } else{
    //echo('Connection successful');
    $query = "select donor_id from donor where donor_name = '$donorname'";
    $results = $conn -> query($query);
    if($results -> num_rows === 0){
      header('Location: /team-8/WebApp/Website/login.php?invalid=1');
    }else {
      header('Location: /team-8/WebApp/Website/home.php?username='.$donorname);

    }
  }
?>
