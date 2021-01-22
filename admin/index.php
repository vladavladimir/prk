<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<link rel="stylesheet" href="../admin/assets/css/style.css">
</head>
<body id="body">
	<center><img src="../img/logo.PNG" id="logo"></center>

<?php if (isset($_SESSION['uid'])): ?>

	<center>
		<h1 id="title">Select csv file to import it to database</h1>
		<form method="post" action="csv.php" enctype="multipart/form-data" id="form">

			<p id="chose">Please choose language to select where to import CSV</p>

			<input type="radio" id="lang" name="lang" value="english" checked="checked">
			<label for="eng" id="eng">English</label>

			<input type="radio" id="lang" name="lang" value="french">
			<label for="fr" id="fr">French</label>

			<input type="radio" id="lang" name="lang" value="germany">
			<label for="ger" id="ger">Germany</label>

			<input type="radio" id="lang" name="lang" value="rusian">
			<label for="ru" id="ru">Rusian</label>

			<input type="radio" id="lang" name="lang" value="italian">
			<label for="it" id="it">Italian</label>

			<input type="radio" id="lang" name="lang" value="spanish">
			<label for="es" id="es">Spanish</label><br>

		    <input type="file" name="file" id="loginbtn">
		    <input type="submit" name="sub" value="Import" id="loginbtn"><br><br>
		</form>

		<form action="logout.php" method="post">
			<input type="submit" name="logout" value="Logout" id="loginbtn">
		</form>
	</center>

<?php else: ?>

	<title>Admin Page</title>
	<center><h1 id="title">Admin login</h1></center>
	<center><form action="../admin/login.php" method="post" class="login">
		<p>Enter username: </p>
		<input type="text" name="username" placeholder="Enter usename here"><br>

		<p>Enter password: </p>
		<input type="text" name="password" placeholder="Enter usename here"><br>
		
		<input type="submit" name="submit" value="Login" id="loginbtn">
	</form></center>

<?php endif ?>

</body>

<footer id="footer">
	<p>© 2021 All Rights Reserved by PointMars</p>
</footer>

</html>