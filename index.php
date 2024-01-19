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

if (isset($_COOKIE["remember-me"])) {
  $remember_me_email = $_COOKIE["remember-me"];
  if (isset($_SESSION["email"]) && $_SESSION["email"] == $remember_me_email) {
    echo "<p class='hi'>Hi, {$_SESSION['email']}.<p>";
    echo "<p>You are directed to the user page. Please wait.<p>";
    header("refresh:5; url=user.php");
    exit();
  }
} else {
  echo "<p class='hi'>Hi, unknown user!</p>";
  echo "<p>Don't have an account? <a href='/php-login-system/sign-up.html'>Sign up</a></p>";
  echo "<br>";
  echo "<p>Already have an account? <a href='/php-login-system/login.html'>Login</a></p>";
}
?>
</body>

</html>