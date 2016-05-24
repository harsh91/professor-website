<?php
	include("Mail.php");
	if(!isset($_POST) || empty($_POST)) {
		header("Location: contact.php");
	}
	$post = $_POST;
	if(array_key_exists("name", $post) && !empty($post["name"]) &&
		array_key_exists("email", $post) && !empty($post["email"]) &&
		array_key_exists("feedback", $post) && !empty($post["feedback"])) {
		$mail = new Mail();
		$mail->to = MAIL_FROM;
		$mail->subject = SUBJECT_FEEDBACK;
		$mail->body = '
			<html>
				<body>
					<b>User: ' . $post["name"] . '</b><br/>
					<p>Email: ' . $post["email"] . '</p><br/>
					<p>Feedback: ' . $post["feedback"] . '</p><br/>
				</body>
			</html>';
		$isMailSend = $mail->sendMail(false);
		if($isMailSend) {
			header("Location: contact.php?mailSend=true");
		} else {
			header("Location: contact.php?mailSend=false");
		}
	} else {
		header("Location: contact.php");
	}
?>