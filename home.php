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
	<title>Quizmaster</title>
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
	<?php 
		$pages = array("profile", "create", "join", "new", "saved", "leaderboard");
		foreach($pages as $page) {
			echo "<a href = '".$page.".php"."'>";
				echo "<div class = 'tablet-grid-35 tablet-prefix-10 grid-parent' id = 'menu-card'>";
					echo "<div class = 'grid-50 prefix-25' id = 'card-title'>";
						echo "<h2>". ucwords($page)."</h2>";
					echo "</div>";
				echo "</div>";
			echo "</a>";
		}
	?>
</div>
</body>
</html>