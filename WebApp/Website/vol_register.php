<!doctype html>
<html>
  <head>
    <meta charset=utf-8>
    <title>Register Dead Poolites</title>
    <link rel="stylesheet" href="/team-8/WebApp/Website/CSS/register.css">
  </head>
  <body>
    <h1>Register Here!</h1>
    <img src="/team-8/WebApp/Website/images/Annadhan.jpg" alt="">
    <form method="post"  action="/team-8/WebApp/Website/volunteer_user.php">
      <div class="form-element">
        <span>
          Name
          <input type="text" placeholder="Name" name="volunteer_name">
        </span>
      </div>
      <div class="form-element">
        <span>
          Address
          <input type="text" placeholder="Address" name="volunteer_address">
        </span>
      </div>
      <div class="form-element">
        <span>
          Contact
          <input type="text" placeholder="Contact" name="volunteer_contact">
        </span
      </div>
      <div>
        <span>
          <label>Vehicle owned or not?</label>
          <input type="radio" name="vehicleowned" value="yes">Yes
          <input type="radio" name="vehicleowned" value="no">No
        </span>
      </div>

      <!--
      <div class="form-element">
        <label for="profilePic">Profile Pic</label>
        <input type="file" name="profilePic" id="profilePic">
      </div>-->
      <div class="form-element">
        <span>
          <button type="submit">Register as Volunteer</button>
        </span>

      </div>
    </form>
  </body>
</html>
