<?php
session_start();
if (!isset($_SESSION["email"])) {
  header("Location: index.html");
  exit();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>User Page</title>
</head>

<body>

  <?php
  echo "Hello " . $_SESSION["email"];
  ?>

</body>

</html>