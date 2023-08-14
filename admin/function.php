<?php
include("db_conn.php");
function countUsersWithRole($conn) {
    $sql = "SELECT COUNT(*) AS user_count FROM users WHERE role = 'user'";
    $result = $conn->query($sql);
  
    if ($result->num_rows == 1) {
        $row = $result->fetch_assoc();
        return $row['user_count'];
    } else {
        return 0;
    }
  }
  $userCount = countUsersWithRole($conn);
  $conn->close();
?>