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
    $attendance_status = $_POST['attendance_status'];

    // Check if any user attendance is selected
    if (isset($_POST['attendance_status']) && !empty($_POST['attendance_status'])) {
        $userAttendances = $_POST['attendance_status'];

        // Iterate through the selected user attendances
        foreach ($userAttendances as $user => $status) {
            // Perform the necessary database operations to save the attendance record
            // For example, you can execute an SQL query to insert the attendance record into the database
            $sql = "INSERT INTO attendance (user_name, subject, date, attendance_status) 
                    VALUES ('$user', '$subject', '$date', '$status')";
            mysqli_query($conn, $sql);
        }

        // Redirect to a success page or perform additional actions
        header('location: success.php');
        exit();
    }
}

mysqli_close($conn);
?>
