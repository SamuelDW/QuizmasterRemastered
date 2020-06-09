<?php 
	ini_set('display_errors', '1');
	ini_set('display_startup_errors', '1');
	error_reporting(E_ALL);
	session_start(); 
	require_once("requires/connection.php");
?>

<!DOCTYPE html>
<html>
<head>
	<title>Quizmaster | Profile</title>
	<!-- Stylesheets -->
	<link rel = "stylesheet" href = "assets/css/unsemantic.css">
	<link rel = "stylesheet" href = "assets/css/styles.css">
	<link rel = "stylesheet" href = "assets/css/forms.css">
	<link rel = "stylesheet" href = "assets/css/animations.css">
	<link href="https://fonts.googleapis.com/css?family=ZCOOL+KuaiLe&display=swap" rel="stylesheet"> 
	<!-- Meta -->
	<meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1,maximum-scale=1"/>
	<meta name = "author" content = "Samuel Durrant-Walker">
	<meta name = "charset" content = "UTF-8">
	<meta name = "description" content = "A quiz hosting system">
	<!-- Scripts -->
</head>
<body>
<?php include 'includes/header.php';?>

	<div class = "grid-container">
		<div class = "tablet-grid-50 grid-parent" id = "user-details">
			<div class = "grid-70 prefix-15" id = "details-title">
				<h2><?php echo $_SESSION["Username"] . " Information"; ?></h2>
			</div>
			<div class = "grid-90 prefix-5" id = "change-details">
				<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="POST">
					<br><label for="Username">Username:</label><br>
					<input type = "text" name = "Username" maxlength = "15">
					<br><label for="Email">Email:</label><br>
					<input type = "email" name = "Email">
				</form>
			</div>
		</div>
	</div>
</body>
</html>