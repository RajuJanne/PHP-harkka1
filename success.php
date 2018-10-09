<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <meta charset="utf-8">
  <meta name="author" content="Janne Rajuvaara">
<title><?php echo "Welcome " . $_SESSION["logged_user"]; ?></title>
</head>
<body>
  <div id="success-confirm">
    <p> logged in as <?php echo $_SESSION["logged_user"]; ?>.</p>
    <a href="https://www.w3schools.com/php/default.asp" target="_blank">W3Schools PHP tutorial</a> <br />
    <a href="https://www.youtube.com/watch?v=dQw4w9WgXcQ" target="_blank">Great tutorial on PHP sessions</a>
  </div>
  <div id="logout-parent">
    <div id="logout">
      <form id="logout" action="logout.php" method="post">
        <input type="submit" name="logout" value=" Log out ">
      </form>
    </div>
  </div>
</body>
</html>
