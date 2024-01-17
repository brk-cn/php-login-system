<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>User Page</title>
  <link rel="stylesheet" href="style.css">
</head>

<?php
session_start();
if (!isset($_SESSION["email"])) {
  header("Location: /php-login-system/sign-up.html");
  exit();
}
echo "<p class='hi'>Hi, {$_SESSION['email']}</p>";
?>
<a href="#">Log out</a>

</body>

</html>