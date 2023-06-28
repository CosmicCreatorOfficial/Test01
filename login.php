<?php
  session_start();

  if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $username = $_POST["username"];
    $password = $_POST["password"];

    // Replace "desired_username" and "desired_password" with your chosen values
    $desired_username = "Jay";
    $desired_password = "123456";

    if ($username === $desired_username && $password === $desired_password) {
      $_SESSION["username"] = $username;
      header("Location: main.php");
      exit();
    } else {
      echo "Invalid username or password!";
    }
  }
?>
