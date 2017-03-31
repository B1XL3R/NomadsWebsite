<?php
  include('header.php');
?>

<div id="nav">
  <ul>
    <li><a class=active href="index.php">Home</a></li>
    <li><a href="roster.php">Roster</a></li>
    <li><a href="upcoming.php">Upcoming Tournaments</a></li>
    <li><a href="videos.php">Videos</a></li>
    <li><a href="practices.php">Practices</a></li>
    <li><a href="announcements.php">Announcements</a></li>
  </ul>
</div>

<h2>Login Form</h2>

<form action="/action_page.php">
  <div class="imgcontainer">
    <img src="img_avatar2.png" alt="Avatar" class="avatar">
  </div>

  <div class="container">
    <label><b>Username</b></label>
    <input type="text" placeholder="Enter Username" name="uname" required>

    <label><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="psw" required>

    <button type="submit">Login</button>
    <input type="checkbox" checked="checked"> Remember me
  </div>

  <div class="container" style="background-color:#f1f1f1">
    <button type="button" class="cancelbtn">Cancel</button>
    <span class="psw">Forgot <a href="#">password?</a></span>
  </div>
</form>

<?php
  include('footer.php');
?>
