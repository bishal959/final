<?php
session_start();
include "db_conn.php";

$can_access_page = false;
if(isset($_SESSION['admin_id'])  || isset($_SESSION['teacher_id'])){
    $can_access_page = true;
}

if(!$can_access_page){
    header('location: index.php');
    exit();
}

$sql = "SELECT user_name FROM users WHERE role='user'";
$result = mysqli_query($conn, $sql);

include("teacher_header.php")

?>

<html>
<head>
<title>Attendance Management System</title>
<!-- <link rel="stylesheet" href="form.css" /> -->
    <link rel="icon" href="icon.png">
    <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">
    <script src="https://kit.fontawesome.com/385a42cb55.js" crossorigin="anonymous" defer="">
    <link rel="stylesheet" href="./sass/style.css">
    </script>
</head>
<body>

<main>
<h2 class="align-centre">Attendance Form</h2>
<form method="POST" action="attendance.php">
  <table>
    <tr>
      <th>User Name</th>
      <th>Attendance</th>
    </tr>
    <?php
    // Populate the table with user names and attendance inputs
    while ($row = mysqli_fetch_assoc($result)) {
      echo "<tr>";
      echo "<td>" . $row["user_name"] . "</td>";
      echo "<td>";
      echo "<label><input type='radio' name='attendance_status[" . $row["user_name"] . "]' value='Present' checked> Present</label>";
      echo "<label><input type='radio' name='attendance_status[" . $row["user_name"] . "]' value='Absent'> Absent</label>";
      echo "</td>";
      echo "</tr>";
    }

    mysqli_close($conn);
    ?>
  </table>

  <label>Subject:</label>
  <input type="text" name="subject" value="<?php echo $_SESSION['selectedSubject']; ?>" readonly>
  <label>Date:</label>
  <input type="date" id="date" name="date" required readonly>
  <button type="submit">Submit</button>
</form>

</main>
<script>
    // Get the current date
    var currentDate = new Date().toISOString().split('T')[0];

    // Set the current date as the default value for the date input field
    document.getElementById("date").value = currentDate;
  </script>
</html>
<?php include("footer.php");?>
