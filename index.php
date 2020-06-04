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
				<h2>Login</h2>
			</div>
			<?php 
				// defining variables and set to empty values
				$username = $pass = "";
				$usernameErr = $passErr = "";
				$LoginBool = true;
				
				if($_SERVER["REQUEST_METHOD"] == "POST") {

					//Checking Username Input
					if(empty($_POST["Username"])) {
						$usernameErr = "Username is Required";
						$LoginBool = false;
					} else {
						$username = $_POST["Username"];
						if(!preg_match("/^[\w_+]*$/", $username)) {
							$usernameErr = "Only Letters, Numbers and Underscores Allowed";
							$LoginBool = false;
						} else {
							$username = $_POST["Username"];
						}
					}
					//Checking Password Input
					if(empty($_POST["Password"])) {
						$passErr = "Please enter a Password";
						$LoginBool = false;
					} else {
						$pass = $_POST["Password"];
						if(!preg_match("/^[\w_+]*$/", $pass)) {
							$passErr = "Only Letters, Numbers and Underscores Allowed";
							$LoginBool = false;
						} else {
							$pass = $_POST["Password"];
						}
					}
					//Preparing and binding Statement
					if(!$stmt = $link->prepare("SELECT Username, Pass FROM users WHERE Username = ?")) {
						echo "Prepare Failed";
					}
					
					if(!$stmt->bind_param("s", $username)) {
						echo "Bind Failed";
					}
					
					//Executing Statement
					if($LoginBool = true) {
						$stmt->execute();
						
						$result = $stmt->get_result();
						while($row = $result->fetch_array(MYSQLI_ASSOC)) {
							if(password_verify($pass, $row["Pass"])) {
								echo "Password is Valid";
								
								header("Location: home.php");
							} else {
								echo "Invalid Password";
							}
						}
					}
					
					
				}
			?>
			<!-- Signup Form -->
			<div class = "tablet-grid-50 grid-50 prefix-25 tablet-prefix-25 grid-parent" id ="signup-form">
				<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="POST">
				<br><label for="Username">Username:</label>
				<br><input type ="text" name="Username" id="Uname" maxlength="15" required><br><span id = "error"> * <?php echo $usernameErr;?></span>
				<br><label for="Password">Password:</label>
				<br><input type="password" name = "Password" id ="Pword" required><br><span id = "error"> * <?php echo $passErr;?></span>
				<br><label for="Submit">Submit</label>
				<br><input type="submit" name="Submit" value = "Login"><br>
				<p>Don't have an account? <a href = "signup.php">Sign up here!</a></p>
				</form>
			</div>
		</div>

	</body>
</html>