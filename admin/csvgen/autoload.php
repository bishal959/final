<?php
$directory = 'csvgen'; // Specify the directory path

// Get the list of files in the directory
$files = scandir($directory);

// Iterate over the files
foreach ($files as $file) {
  // Check if the file has a .php extension
  if (pathinfo($file, PATHINFO_EXTENSION) === 'php') {
    // Include or require the PHP file
    require_once $directory . '/' . $file;
  }
}
?>