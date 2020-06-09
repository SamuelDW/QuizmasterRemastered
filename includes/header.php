<header>
<div class = "grid-container">
<!--Profile Information -->
	<a href = "profile.php">
		<div class = "grid-33 tablet-grid-33 grid-parent">
			<div class = "grid-20 tablet-grid-20">
				<img src = "<?php echo $_SESSION['Profile']; ?>" alt = "User Profile Image" id = "profile-img">
			</div>
			<div class = "grid-80 tablet-grid-80" id= "profile-name">
				<h4><?php echo $_SESSION["Username"]; ?></h4>
				<p>Quote</p>
			</div>
		</div>
	</a>
<!-- Title -->
	<a href = "home.php">
		<div class = "grid-33 tablet-grid-33" id = "header-title">
			<h1>Quizmaster</h1>
		</div>
	</a>
<!-- Logout -->
	<a href = "logout.php">
		<div class = "grid-33 tablet-grid-33 grid-parent" id = "header-logout">
			<h4>Logout</h4>
		</div>
	</a>
</div>
</header>