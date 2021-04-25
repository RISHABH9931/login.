<?php

session_start();
if(!isset($_SESSION['username']))
header('location:login1.php')



?>

<!DOCTYPE html>
<html>
<head>
	<title>Welcome To Moneypay</title>
</head>
<body>
	<div class="container">
	<h2 class="text-center text-success">Welcome <?php echo $_SESSION['username']; ?></h2>
	<a href="logout.php">LOGOUT </a>

</body>
</html>