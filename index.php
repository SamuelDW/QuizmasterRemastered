<?php 
	session_start(); 
	require_once("requires/connection.php");
?>

<!DOCTYPE html>
<html>
<head>
	<title>Quizmaster</title>
	<!-- Stylesheets -->
	<link rel = "stylesheet" href = "assets/css/unsemantic.css">
	<link rel = "stylesheet" href = "assets/css/styles.css">
	<link rel = "stylesheet" href = "assets/css/forms.css">
	<!-- Meta -->
	<meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1,maximum-scale=1"/>
	<meta name = "author" content = "Samuel Durrant-Walker">
	<meta name = "charset" content = "UTF-8">
	<meta name = "description" content = "A quiz hosting system">
	<!-- Scripts -->
</head>
	<body>
		<!-- Title Section -->
		<div class = "grid-container">
			<div class = "tablet-grid-50 grid-50 prefix-25 tablet-prefix-25" id = "title">
				<h1>Quizmaster</h1>
			</div>
		</div>
		<div class = "clear"></div>
		
		<!-- Login and Signup -->
		<div class = "grid-container">
			<div class = "tablet-grid-50 grid-50 prefix-25 tablet-prefix-25" id = "signup-container">
				<h2>Signup</h2>
			</div>
			<!-- Signup Form -->
			<div class = "tablet-grid-50 grid-50 prefix-25 tablet-prefix-25 grid-parent" id ="signup-form">
				<form>
				<label for="Username">Username:</label><br>
				<input type ="text" name="Username" id="Uname" required><br>
				<label for="Password">Password:</label><br>
				<input type="password" name = "Password" id ="Pword" required><br>
				<label for="Submit">Submit</label><br>
				<input type="submit" name="Submit" value = "Login"><br>
				</form>
			</div>
		</div>

	</body>
</html>