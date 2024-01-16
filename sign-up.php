<?php
require_once("db.php");

echo "test test";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  echo "post";
  $email = $_POST["email"];
  $password = $_POST["password"];

  $hashed_password = password_hash($password, PASSWORD_DEFAULT);
  echo "test" . $hashed_password;
  $sql = "INSERT INTO users (email, password) VALUES (?, ?)";
  $stmt = $conn->prepare($sql);
  $stmt->bind_param("ss", $email, $hashed_password);

  if (!$stmt->execute()) {
    echo $sql . "<br>" . $stmt->error;
  } else {
    header("Location: index.html");
  }

  $stmt->close();
}

$conn->close();
