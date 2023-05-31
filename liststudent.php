<?php
session_start();
include("teacher_header.php");
include "db_conn.php";

$sql = "SELECT * FROM users WHERE role='user' ";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  echo "<table><tr><th>Name</th></tr>";
  while($row = $result->fetch_assoc()) {
    echo "<tr><td>".$row["user_name"]."";
  }
  echo "</table>";
} else {
  echo "0 results";
}
$conn->close();

?>