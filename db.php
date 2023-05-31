<?php
include "db_conn.php";

$can_access_page = false;
if(isset($_SESSION['admin_id'])  || isset($_SESSION['teacher_id'])){
    $can_access_page = true;
}

if(!$can_access_page){
    header('location: index.php');
    exit();
}
$subject = "Scripting Language"; // Specify the subject for which you want to display the attendance

$sql = "SELECT user_name, date, status FROM attendance WHERE subject = '$subject'";
$result = $conn->query($sql);

// Create an empty array to store the attendance data
$attendanceData = array();

// Check if there are any rows returned from the query
if ($result->num_rows > 0) {
    // Loop through each row of the result set
    while ($row = $result->fetch_assoc()) {
        // Create a new associative array for each attendance record
        $attendanceRecord = array(
            'user_name' => $row['user_name'],
            'date' => $row['date'],
            'status' => $row['status']
        );

        // Add the attendance record to the $attendanceData array
        $attendanceData[] = $attendanceRecord;
    }
}

// Create an array to store the attendance status for each day of the month
$attendanceByDay = array();
foreach ($attendanceData as $data) {
    $date = date('j', strtotime($data['date'])); // Extract the day from the date
    $user_Name = $data['user_name'];
    $status = $data['status'];

    // Store the attendance status in the attendanceByDay array
    $attendanceByDay[$user_Name][$date] = $status;
}

// Define the file path where you want to save the CSV file
$filePath = 'csv/os.csv';

// Open the file in write mode using fopen() function
$file = fopen($filePath, 'w');

// Write the column headers to the CSV file
$headerRow = ['S/L', 'Student Name'];
for ($day = 1; $day <= 31; $day++) {
    $headerRow[] = $day;
}
fputcsv($file, $headerRow);

// Iterate over the student attendance data
$serialNumber = 1;
foreach ($attendanceByDay as $user_Name => $attendance) {
    $rowData = [$serialNumber++, $user_Name];

    for ($day = 1; $day <= 31; $day++) {
        if (isset($attendance[$day])) {
            $status = $attendance[$day];
            $rowData[] = $status;
        } else {
            $rowData[] = ''; // No attendance data available for this day
        }
    }

    fputcsv($file, $rowData);
}

// Close the file using fclose() function
fclose($file);

echo 'CSV file exported successfully';

$conn->close();


?>

