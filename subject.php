<?php
session_start();

include "db_conn.php";
include "teacher_header.php";

$can_access_page = false;
if(isset($_SESSION['admin_id'])  || isset($_SESSION['teacher_id'])){
    $can_access_page = true;
}

if(!$can_access_page){
    header('location: index.php');
    exit();
}
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $selectedSubject = $_POST['whichcourse'];
  
    // Set the selected subject in the session
    $_SESSION['selectedSubject'] = $selectedSubject;
   if ($_SESSION['selectedSubject']) {
    header('Location:teacher.php');
    
   }
}
?>
<html>
<link rel="stylesheet" type="text/css" href="style.css">
<form method="POST">
<label>Select Subject</label>
      <select name="whichcourse" id="input1">
        <option  value="Operating System">Operating System </option>
        <option  value="Numerical Methods">Numerical Methods</option>
        <option  value="Database Management System">Database Management System</option>
        <option  value="Software Engineering">Software Engineering</option>
        <option  value="Scripting Language"> Scripting Language</option>
      </select>
      <button type="submit">Submit</button>
</form>
</html>
