<?php
require_once("db.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {

  $email = $_POST["email"];
  $password = $_POST["password"];

  $sql = "SELECT * FROM users WHERE email = ?";

  $stmt = $conn->prepare($sql);
  $stmt->bind_param("s", $email);
  $stmt->execute();
  $result = $stmt->get_result();

  if ($result->num_rows > 0) {
    $user = $result->fetch_assoc();
    $hashed_password = $user["password"];

    if (password_verify($password, $hashed_password)) {
      session_start();
      $_SESSION["email"] = $user["email"];
      header("Location: user.php");
      exit();
    } else {
      echo "Wrong password!";
    }
  }

  $stmt->close();
}

$conn->close();
