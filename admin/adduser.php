<?php

include("adminheader.php");

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  $user_name = $_POST['username'];
  $password = $_POST['password'];
  $role = $_POST['role'];

  $sql = "INSERT INTO users (user_name, role, password) VALUES ( '$user_name', '$role', '$password')";
  if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
  } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
  }
}
// $conn->close();
?>