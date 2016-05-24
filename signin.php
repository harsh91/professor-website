<?php
	
	if(isset($_POST) && !empty($_POST)) {
		$post = $_POST;
		if(!array_key_exists("email", $post) || !array_key_exists("password", $post)
			|| $post["email"] == "" || $post["password"] == "") {
			header("Location: " . "admin.php");
		}
		// validations for email client and server side
		// after successful login redirect to make new appointment slots.
		
		header("Location: newslots.php");
	}
	
?>