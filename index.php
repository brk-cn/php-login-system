<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Index Page</title>
  <link rel="stylesheet" href="style.css">
</head>

<?php
session_start();

if (isset($_COOKIE["remember_me"]) && isset($_SESSION["email"])) {
  $username = $_SESSION["email"];

  echo "Hi, $username. You are directed to the user page. Please wait.";
  header("refresh:3; url=user.php");
  exit();
} else {
  echo "<p class='hi'>Hi, unknown user!</p>";
  echo "<p>Don't have an account? <a href='/php-login-system/sign-up.html'>Sign up</a></p>";
  echo "<br>";
  echo "<p>Already have an account? <a href='/php-login-system/login.html'>Login</a></p>";
}
?>
</body>

</html>