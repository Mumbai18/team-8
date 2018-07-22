/*echo('Connection successful');

$query1 = "select donor_id from donor where donor_name='$donorname'";
$results = $conn -> query($query1);
echo($results);

$query = "insert into newrequest (,donor_address,donor_contact,donor_foodpicpath) values('$donorname','$donoraddress','$donorcontact','$dest_path')";
if($conn -> query($query)){
  header('Location: /team-8/WebApp/Website/login.php?regsuccess=1');
  #echo('Registration successful');
} else {
  echo('Registration failed'.$conn -> error);
}/*
