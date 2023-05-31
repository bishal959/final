<?php
session_start();
include_once("teacher_header.php");
echo '<pre>';
    var_dump($_SESSION);
    echo '</pre>';
    if (!isset($_SESSION['selectedSubject']))
    header('location:teacher.php');
        
?>
<script>
if ("<?php echo $_SESSION['selectedSubject']; ?>" === "Numerical Methods") {
  // Create a dynamic anchor element
  var link = document.createElement("a");
  link.href = "nm.csv"; // Replace with the actual file path
  link.download = "nm.csv"; // Replace with the desired file name

  // Trigger a click event on the anchor element
  link.click();
} else if ("<?php echo $_SESSION['selectedSubject']; ?>" === "Operating System") {
  // Create a dynamic anchor element for the 'Operating System' case
  var link = document.createElement("a");
  link.href = "csv/os.csv"; // Replace with the actual file path for 'Operating System'
  link.download = "csv/os.csv"; // Replace with the desired file name for 'Operating System'

  // Trigger a click event on the anchor element for 'Operating System'
  link.click();
} else if ("<?php echo $_SESSION['selectedSubject']; ?>" === "Database Management System") {
  // Create a dynamic anchor element for the 'Operating System' case
  var link = document.createElement("a");
  link.href = "csv/db.csv"; // Replace with the actual file path for 'Operating System'
  link.download = "csv/db.csv"; // Replace with the desired file name for 'Operating System'

  // Trigger a click event on the anchor element for 'Operating System'
  link.click();
}
</script>

