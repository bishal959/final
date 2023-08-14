<?php
session_start();
include "db_conn.php";

$can_access_page = false;
if (isset($_SESSION['admin_id']) || isset($_SESSION['teacher_id'])) {
    $can_access_page = true;
}

if (!$can_access_page) {
    header('location: index.php');
    exit();
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $subject = $_POST['subject'];
    $date = $_POST['date'];
    $status = $_POST['status'];

    // Check if any user attendance is selected
    if (isset($_POST['status']) && !empty($_POST['status'])) {
        $userAttendances = $_POST['status'];

        // Iterate through the selected user attendances
        foreach ($userAttendances as $user => $status) {
            // Perform the necessary database operations to save the attendance record
            // For example, you can execute an SQL query to insert the attendance record into the database
            $sql = "INSERT INTO attendance (user_name, subject, date, status) 
                    VALUES ('$user', '$subject', '$date', '$status')";
            mysqli_query($conn, $sql);
        }

        // Redirect to a success page or perform additional actions
        header('location: test.php');
        exit();
    }
}

mysqli_close($conn);
?>
