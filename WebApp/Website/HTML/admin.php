
<!DOCTYPE html>
<html>
<title>Annadhan Admin</title>
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
  <span class="w3-bar-item w3-right">Annadhan</span>
</div>

<!-- Sidebar/menu -->
<nav class="w3-sidebar w3-collapse w3-white w3-animate-left" style="z-index:3;width:300px;" id="mySidebar"><br>
  <div class="w3-container w3-row">
    <div class="w3-col s4">
<!--       <img src="/w3images/avatar2.png" class="w3-circle w3-margin-right" style="width:46px"> -->
    </div>
    <div class="w3-col s8 w3-bar">
      <span>Welcome, <strong>Admin</strong></span><br>
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
    <a href="admin.php" class="w3-bar-item w3-button w3-padding sidebar w3-blue" onclick="changeColor()"><i class="fa fa-users fa-fw"></i>&nbsp; Dashboard</a>
    <a href="#donors" class="w3-bar-item w3-button w3-padding " ><i class="fa fa-comment fa-fw"></i>&nbsp; Donors</a>
    <a href="#volunteers" class="w3-bar-item w3-button w3-padding " ><i class="fa fa-eye fa-fw"></i>&nbsp; Volunteers</a>
    <a href="#needy" class="w3-bar-item w3-button w3-padding " ><i class="fa fa-users fa-fw"></i>&nbsp; Needy People</a>
    <a href="#wip" class="w3-bar-item w3-button w3-padding " ><i class="fa fa-bullseye fa-fw"></i>&nbsp; WIP</a>
    <!-- <a href="#" class="w3-bar-item w3-button w3-padding"><i class="fa fa-bell fa-fw"></i>&nbsp; News</a>
    <a href="#" class="w3-bar-item w3-button w3-padding"><i class="fa fa-bank fa-fw"></i>&nbsp; General</a>
    <a href="#" class="w3-bar-item w3-button w3-padding"><i class="fa fa-history fa-fw"></i>&nbsp; History</a>
    <a href="#" class="w3-bar-item w3-button w3-padding"><i class="fa fa-cog fa-fw"></i>&nbsp; Settings</a><br><br> -->
  </div>
</nav>




<!-- Overlay effect when opening sidebar on small screens -->
<div class="w3-overlay w3-hide-large w3-animate-opacity" onclick="w3_close()" style="cursor:pointer" title="close side menu" id="myOverlay"></div>


<!-- !DONOR CONTENT! -->

<div class="w3-main" style="margin-left:300px;margin-top:43px;">
  <a name="donors"></a>
  <div class="w3-panel">
    <div class="w3-row-padding">
      <div>
        <h5>Donor Table</h5>
        <table class="w3-table w3-striped w3-white">
          <tr>
            <th>DID</th>
            <th>Donor Name</th>
            <th>Address</th>
            <th>Contact</th>
          </tr>
          <tr>
          </tr>
        </table>
      </div>
    </div>
  </div>
  <hr>
</div>


<!-- !VOLUNTEER CONTENT! -->

<div class="w3-main" style="margin-left:300px;margin-top:43px;">
  <a name="#volunteers"></a>
  <div class="w3-panel">
    <div class="w3-row-padding">
      <div>
        <h5>Volunteer Table</h5>
        <table class="w3-table w3-striped w3-white">
          <tr>
            <th>VID</th>
            <th>Volunteer Name</th>
            <th>Address</th>
            <th>Contact</th>
            <th>Vehicle Availability</th>
            <th>Preference</th>
          </tr>
          <tr>
          </tr>
        </table>
      </div>
    </div>
  </div>
  <hr>
</div>


<!-- !NEEDY CONTENT! -->

<div class="w3-main" style="margin-left:300px;margin-top:43px;">
  <a name="#needy"></a>
  <div class="w3-panel">
    <div class="w3-row-padding">
      <div>
        <h5>Needy People Table</h5>
        <table class="w3-table w3-striped w3-white">
          <tr>
            <th>Area</th>
            <th>Approx Needy Population</th>
          </tr>
          <tr>
          </tr>
        </table>
      </div>
    </div>
  </div>
  <hr>
</div>





  <!-- Footer -->
  

  
</div>

  <footer class="w3-container w3-padding-16 w3-light-grey">
<!--     <h4>FOOTER</h4>-->  
  <p>What's left is not over</p>
  </footer>
  <!-- End page content -->
  
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