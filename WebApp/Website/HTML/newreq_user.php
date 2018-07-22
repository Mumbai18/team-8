<?php

$fooddescription = $_POST['fooddescription'];
$location = $_POST['location'];
$quantity = $_POST['quantity'];
$packaged = $_POST['packaged'];
$typeoffood = $_POST['typeoffood'];
$donor_time = $_POST['donor_time'];
echo(gettype($fooddescription));
echo(gettype($location));
echo(gettype($quantity));
echo(gettype($packaged));
echo(gettype($typeoffood));
echo(gettype($donor_time));
echo($fooddescription);
echo($location);
echo($quantity);
echo($packaged);
echo($typeoffood);
echo($donor_time);
require "includes/dbconnect.php";
if($conn -> connect_error){
  die($conn -> connect_error);
} else{
  $query = "insert into newrequest (food_des,package,type_of_food,time_slot,Quantity) values('$fooddescription','$packaged','$typeoffood','$donor_time','$quantity')";
  if($conn -> query($query)){
    header('Location: /team-8/WebApp/Website/donor_dashboard.php?reqsuccess=1');
    #echo('Registration successful');
  } else {
    echo('Registration failed'.$conn -> error);
}
}
?>
