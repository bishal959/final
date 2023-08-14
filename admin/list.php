
<?php
include"db_conn.php";
$sql = "SELECT user_name, subject, date, status FROM attendance";

$can_access_page = false;
if(isset($_SESSION['admin_id'])  || isset($_SESSION['teacher_id'])){
    $can_access_page = true;
}

if(!$can_access_page){
    header('location: index.php');
    exit();
}
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  echo "<table>";
  echo "<tr><th>S/L</th><th>Student Name</th><th>Subject</th><th>Date</th><th>Status</th></tr>";
  
  $sl = 1; // Counter for serial number
  
  while ($row = $result->fetch_assoc()) {
    echo "<tr>";
    echo "<td>" . $sl . "</td>";
    echo "<td>" . $row["user_name"] . "</td>";
    echo "<td>" . $row["subject"] . "</td>";
    echo "<td>" . $row["date"] . "</td>";
    echo "<td>" . $row["status"] . "</td>";
    echo "</tr>";
    
    $sl++; // Increment serial number
  }
  
  echo "</table>";
} else {
  echo "No results found";
}

$conn->close();
?>