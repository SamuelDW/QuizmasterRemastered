<?php 
	$link = mysqli_connect('localhost','Supertester', 'Pizzaham13', 'quizmaster'); 
	if($link -> connect_errno) {
		echo "Failed to connect to MySQL: " . $link -> connect_error;
		exit();
	} else {
		//echo "Successfully connected";
	}
?>