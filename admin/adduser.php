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

<html>
  <head>
    <title>Admin Dashboard</title>
    <link rel="stylesheet" href="./sass/add-edituser.css">
    <script src="namevalid.js"></script>
  </head>
  <body>
    <main >    
      <form method="post" class="form">
          <input type="text" id="username" name="username" placeholder="username" required>
          <input type="password" id="password" name="password" placeholder="password" required>
          <select id="role" name="role" required>
            <option value="#">Please select a role</option>
            <option value="user">User</option>
            <option value="admin">Admin</option>
            <option value="teacher">Teacher</option>
          </select>
        <input type="submit" value="Submit">
      </form>
    </main>
  </body>
</html> 