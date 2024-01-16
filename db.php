<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "user_db";

$conn = mysqli_connect($servername, $username, $password, $dbname);

if ($conn->connect_error) {
  die($conn->connect_error);
}
