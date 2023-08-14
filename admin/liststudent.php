<?php
session_start();
include("teacher_header.php");
include "db_conn.php";
$can_access_page = false;
if(isset($_SESSION['admin_id'])  || isset($_SESSION['teacher_id'])){
    $can_access_page = true;
}

if(!$can_access_page){
    header('location: index.php');
    exit();
}
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