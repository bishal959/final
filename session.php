<?php
session_start();
echo '<pre>';
var_dump($_SESSION);
echo '</pre>';

if ($_SESSION['selectedSubject'] === "Operating System") {
    header('Location: /subject/os.php');
}else if ($_SESSION['selectedSubject'] === "Numerical Methods") {
    header('Location: /subject/nm.php');
}else if ($_SESSION['selectedSubject'] === "Database Management System") {
    header('Location: /subject/db.php');
}else if ($_SESSION['selectedSubject'] === "Software Engineering") {
    header('Location: /subject/software.php');
}else if ($_SESSION['selectedSubject'] === "Scripting Language") {
    header('Location: /subject/script.php');
}else{
    header("Location:subject.php");
}

?>