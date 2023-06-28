<?php
  session_start();

  // Check if the user is logged in, else redirect to the login page
  if (!isset($_SESSION["username"])) {
    header("Location: login.html");
    exit();
  }
?>

<!DOCTYPE html>
<html>
<head>
  <title>Main Page</title>
</head>
<body>
  <h1>Welcome, <?php echo $_SESSION["username"]; ?>!</h1>
  <p>This is the main page. You can add your content here.</p>
</body>
</html>
