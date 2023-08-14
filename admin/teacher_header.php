<?php


   
?>
<html>
    <head>
        <link rel="stylesheet" href="./sass/header.css">
    </head>
    <body>
        <header class="header">
            <a href="html.php"><h1>Attendance Management System</h1></a>
                <ul class="header-ul">
                <li><a href="download.php">download attendance</a></li>
                <li><a href="test.php">Attendance</a></li>
                <li><a href="listattendance.php">list attendance</a></li>
                <li><a href="liststudent.php">list student</a></li>
                <li><a href="session.php" >Hello, <?php print_r($_SESSION['teacher_name']); ?></a></li>
                <li><a href="logout.php" class="logout">logout</a></li>
            </ul>
        </header>
    </body>
</html>