<?php
  $username = $_GET['username'];

  require "includes/dbconnect.php";
  if($conn -> connect_error){
    die($conn -> connect_error);
  } else{
    $query = "select profile_pic_path from users where username='$username'";
    $results = $conn -> query($query);
    $row = $results->fetch_assoc();

    $profile_pic_path = $row['profile_pic_path'];
    $contents = file_get_contents($profile_pic_path);
    header('Content-Type: image/jpg');
    echo $contents;
  }
?>
