<?php
session_start();



?>

<!-- Your dashboard content goes here -->

<html>
<head>
<title>Attendance Management System</title>
<link rel="stylesheet" href="style2.css" />
  <link rel="icon" href="icon.png">
<script src="https://kit.fontawesome.com/385a42cb55.js" crossorigin="anonymous" defer="">
  </script>
</head>
<body>
<header class="header">
  <a href="html.php"><h1>Attendance Management System</h1></a>
<ul class="header-ul">
<li><a href="at.php">Attendance List</a></li>
<li><a href="about.php">piechart</a></li>
<li><a href="admin.php">Admin Dashboard</a></li>
<li><a href="logout.php" class="logout">logout</a></li>
</ul>
</header>
<main>
<h2>Attendance Form</h2>
<form method="POST" action="csv.php">
<label for="name">Name:</label>
<select name="name" required>
  <option value="">Please select a name</option>
<option value="ram">Ram</option>
<option value="shyam">Shyam</option>
<option value="bishal">Bishal</option>
<option value="hari">Hari</option>
<option value="sanu">Sanu</option>
<option value="maya">Maya</option>
<option value="crystal">Crystal</option>
<option value="yukesh">Yukesh</option>
<option value="shreejan">Shreejan</option>
<option value="kingo">Kingo</option>
  <option value="sayuj">sayuj</option>
  <option value="sanua">Sanua</option>
<option value="mayab">Mayab</option>
<option value="crystalc">Crystalc</option>
<option value="yukeshd">Yukeshd</option>
<option value="shreejane">Shreejane</option>
<option value="kingof">Kingof</option>
  <option value="sayujg">sayujg</option>
</select>
<input type="date" id="myDateInput" name="date"min="<?php echo date('Y-m-d'); ?>" max="<?php echo date('Y-m-d'); ?>" required>
<button type="submit">Submit</button>
</form>
</main>

<footer>
<ul>
<li>
<a href="https://www.facebook.com/bishal.luitel.12" target="_blank"><i class="fa-brands fa-facebook"></i
          ></a>
</li>
<li>
<a href="https://www.youtube.com/channel/UC1AQ6okXwLa3X2AYgbYrbpA" target="_blank"><i class="fa-brands fa-youtube"></i
          ></a>
</li>
<li>
<a href="https://www.instagram.com/bishal.luitel.12/" target="_blank"><i class="fa-brands fa-instagram"></i
          ></a>
</li>
</ul>
<p>&copy; 2023 Attendance Management System</p>
</footer>
<script defer src="https://static.cloudflareinsights.com/beacon.min.js/vb26e4fa9e5134444860be286fd8771851679335129114" integrity="sha512-M3hN/6cva/SjwrOtyXeUa5IuCT0sedyfT+jK/OV+s+D0RnzrTfwjwJHhd+wYfMm9HJSrZ1IKksOdddLuN6KOzw==" data-cf-beacon='{"rayId":"7acd194cee429e7a","version":"2023.3.0","r":1,"token":"0f06f782433a41649e6584e7774d1f8a","si":100}' crossorigin="anonymous"></script>
<script defer src="https://static.cloudflareinsights.com/beacon.min.js/vb26e4fa9e5134444860be286fd8771851679335129114" integrity="sha512-M3hN/6cva/SjwrOtyXeUa5IuCT0sedyfT+jK/OV+s+D0RnzrTfwjwJHhd+wYfMm9HJSrZ1IKksOdddLuN6KOzw==" data-cf-beacon='{"rayId":"7acd20b1ae629e80","version":"2023.3.0","r":1,"token":"0f06f782433a41649e6584e7774d1f8a","si":100}' crossorigin="anonymous"></script>
  <script>
  const today = new Date().toISOString().substr(0, 10);
document.getElementById("myDateInput").value = today;
  </script>
  </body>
</html>
