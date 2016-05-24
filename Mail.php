<?php
	include('phpmailer/PHPMailerAutoload.php');
	include('constants.php');
	class Mail {
		public $to, $subject, $body;
		
		public function sendMail($sendCopy) {
			$mail = new PHPMailer;
			$mail->isSMTP();
			$mail->Host = MAIL_HOST;
			$mail->SMTPAuth = true;
			$mail->Username = MAIL_USERNAME;
			$mail->Password = MAIL_PASSWORD;
			$mail->SMTPSecure = MAIL_SMTP_SECURE;
			$mail->Port = MAIL_PORT;
			$mail->isHTML(true);
			$mail->setFrom(MAIL_FROM, MAIL_FROM_NAME);
			$mail->addAddress($this->to);
			if($sendCopy) $mail->addAddress(MAIL_FROM);
			$mail->Subject = $this->subject;
			$mail->Body = $this->body;
			if(!$mail->send()) {
				//echo 'Message could not be sent.';
				echo 'Mailer Error: ' . $mail->ErrorInfo;
				return false;
			} else {
				//echo 'Message has been sent';
				return true;
			}
		}
	}
?>