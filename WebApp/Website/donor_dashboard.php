<?php
  session_start();
  $donorname=$_SESSION['$donorname'];
  echo($donorname);
  require "includes/dbconnect.php";
  if($conn -> connect_error){
    die($conn -> connect_error);
  } else{
    //echo('Connection successful');
    $query = "select donor_id from donor where donor_name = '$donorname'";
    $results = $conn -> query($query);
    $row = $results -> fetch_assoc();

  }
?>
<!DOCTYPE html>
<html>
<title>Annadhan Donor Dashboard</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="/team-8/WebApp/Website/CSS/request.css">

<script
  src="https://code.jquery.com/jquery-3.3.1.min.js"
  integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
  crossorigin="anonymous"></script>

<script type="text/javascript" src></script>
<style>
html,body,h1,h2,h3,h4,h5 {font-family: "Raleway", sans-serif}
</style>
<body class="w3-light-grey">


<!-- Top container -->
<div class="w3-bar w3-top w3-black w3-large" style="z-index:4">
  <button class="w3-bar-item w3-button w3-hide-large w3-hover-none w3-hover-text-light-grey" onclick="w3_open();"><i class="fa fa-bars"></i> &nbsp;Menu</button>
  <span class="w3-bar-item w3-center">Annadhan</span>
</div>

<!-- Sidebar/menu -->
<nav class="w3-sidebar w3-collapse w3-white w3-animate-left" style="z-index:3;width:300px;" id="mySidebar"><br>
  <div class="w3-container w3-row">
    <div class="w3-col s4">
<!--       <img src="/w3images/avatar2.png" class="w3-circle w3-margin-right" style="width:46px"> -->
    </div>
    <div class="w3-col s8 w3-bar">
      <span>Welcome, <strong>Donor</strong></span><br>
      <!-- <a href="#" class="w3-bar-item w3-button"><i class="fa fa-envelope"></i></a>
      <a href="#" class="w3-bar-item w3-button"><i class="fa fa-user"></i></a>
      <a href="#" class="w3-bar-item w3-button"><i class="fa fa-cog"></i></a> -->
    </div>
  </div>
  <hr>
  <div class="w3-container">
    <h5>Dashboard</h5>
  </div>
  <div class="w3-bar-block">
    <a href="#" class="w3-bar-item w3-button w3-padding-16 w3-hide-large w3-dark-grey w3-hover-black" onclick="w3_close()" title="close menu"><i class="fa fa-remove fa-fw"></i>&nbsp; Close Menu</a>
    <a href="donor_dashboard.html" class="w3-bar-item w3-button w3-padding sidebar w3-blue" onclick="changeColor()"><i class="fa fa-users fa-fw"></i>&nbsp; Dashboard</a>
    <a href="/team-8/WebApp/Website/myprofile_donor.php" class="w3-bar-item w3-button w3-padding " ><i class="fa fa-comment fa-fw"></i>&nbsp;My Profile</a>
    <a href="/team-8/WebApp/Website/newreq.php" class="w3-bar-item w3-button w3-padding " ><i class="fa fa-eye fa-fw"></i>&nbsp; New Request</a>
  </div>
</nav>




<!-- Overlay effect when opening sidebar on small screens -->
<div class="w3-overlay w3-hide-large w3-animate-opacity" onclick="w3_close()" style="cursor:pointer" title="close side menu" id="myOverlay"></div>

<!-- !PAGE CONTENT! -->
<div class="w3-main" style="margin-left:300px;margin-top:43px;">


  <div class="w3-panel">
    <div class="w3-row-padding">
      <div>
        <h5>Feeds</h5>
        <table class="w3-table w3-striped w3-white">
          <tr>
            <th>Request ID</th>
            <th>Donor ID</th>
            <th>Food Description</th>
            <th>Packaged</th>
            <th>Type of food</th>
            <th>Timeslot</th>
            <th>Quantity</th>
          </tr>

            <?php require "includes/dbconnect.php";
            if($conn -> connect_error){
              die($conn -> connect_error);
            } else{
              $query= "select * from newrequest";
              $results = $conn->query($query);
              for($i=0;$i<$results->num_rows;$i++)
              {
                $row = $results -> fetch_assoc();?>
                <tr>
                  <td><?php echo($row['req_id']); ?></td>
                  <td><?php echo($row['donor_id']); ?></td>
                  <td><?php echo($row['food_des']); ?></td>
                  <td><?php echo($row['package']); ?></td>
                  <td><?php echo($row['type_of_food']); ?></td>
                  <td><?php echo($row['time_slot']); ?></td>
                  <td><?php echo($row['Quantity']); ?></td>
                </tr>
                <?php
              }
          }?>
        </table>
      </div>
    </div>
  </div>
  <hr>




</div>

<script>
// Get the Sidebar
var mySidebar = document.getElementById("mySidebar");

// Get the DIV with overlay effect
var overlayBg = document.getElementById("myOverlay");

// Toggle between showing and hiding the sidebar, and add overlay effect
function w3_open() {
    if (mySidebar.style.display === 'block') {
        mySidebar.style.display = 'none';
        overlayBg.style.display = "none";
    } else {
        mySidebar.style.display = 'block';
        overlayBg.style.display = "block";
    }
}

// Close the sidebar with the close button
function w3_close() {
    mySidebar.style.display = "none";
    overlayBg.style.display = "none";
}
</script>
<script type="text/javascript" src="/team-8/WebApp/Website/js/request.js"></script>

</body>
</html>
