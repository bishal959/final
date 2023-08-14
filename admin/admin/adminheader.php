<?php
session_start();
$admin_id = $_SESSION['admin_id'];

if(!isset($admin_id)){
   header('location: ../index.php');
}
include("../db_conn.php");
?>
<html>
    <head>
        <link rel="stylesheet" href="../sass/header.css">
        <link rel="stylesheet" href="../style.css">
    </head>
    <body>
        <header class="header">
            <a href=""><h1>Attendance Management System</h1></a>
                <ul class="header-ul">
                <li><a href="adduser.php">ADD USER</a></li>
                <li><a href="edituser.php">EDIT USER</a></li>
                <li><a href="admin.php">Admin Dashboard</a></li>
                <li><a href="confirm.php">Export data to csv and delete db</a></li>
                <li><a href="" ><?php print_r($_SESSION['admin_name']); ?></a></li>
                <li><a href="../logout.php" class="logout">logout</a></li>
            </ul>
        </header>
    </body>
</html>