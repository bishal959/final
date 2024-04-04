<?php
session_start();
if (isset($_SESSION['admin_name']) && isset($_SESSION['admin_id'])) {
    header('Location: /admin/admin.php');
    exit();
} elseif (isset($_SESSION['user_name']) && isset($_SESSION['user_id'])) {
    header('Location: html.php');
    exit();
} elseif (isset($_SESSION['teacher_name']) && isset($_SESSION['teacher_id'])) {
    header('Location: subject.php');
    exit();
}
	
?>
<!DOCTYPE html>
<html>
<head>
	<title>LOGIN</title>
	<link rel="stylesheet" type="text/css" href="sass/style.css">
	<script src="namevalid.js"></script>
</head>
<body>
     <form action="login.php" method="post">
     	<h2>LOGIN</h2>
		 <?php if (isset($_GET['error'])) { ?>
   <p class="error"><?php echo $_GET['error']; ?></p>
<?php } ?>
     	<label>User Name</label>
     	<input type="text" name="uname" placeholder="User Name"><br>
     	<label>password</label>
     	<input type="password" name="password" placeholder="Password"><br>
	<input type="password" name="password" placeholder="Password"><br>
     	<button type="submit">Login</button>
     </form>
</body>
</html>
