<?php

include("adminheader.php");

?>

<!DOCTYPE html>
<html>
<head>
    <title>Confirmation Page</title>
</head>
<body>
    <h2>Confirm Data Export and Deletion</h2>
    <p>Are you sure you want to export the attendance data to a CSV file and delete all data from the database?</p>
    <form method="post" action="month.php">
        <input type="hidden" name="confirmation" value="true">
        <input type="submit" value="Confirm">
    </form>
</body>
</html>
