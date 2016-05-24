<html>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Contact</title>
	<head>
		<link rel="stylesheet" type="text/css" href="css/bootstrap.css" />
		<link rel="stylesheet" type="text/css" href="css/homepage.css" />
		<script src="js/jquery.js"></script>
		<script src="js/bootstrap.js"></script>
		<script src="https://maps.googleapis.com/maps/api/js"></script>
		<script src="js/contact.js"></script>
	</head>
	<body>
		<?php
			include("header.html");
			include('constants.php');
		?>
		<!-- Body Content here -->
		<section class="main-container container section-1">
			<div class="col-lg-12 address address-contact-page">
				<div class="col-lg-5">
					<?php
					if(isset($_GET) && !empty($_GET) &&
						array_key_exists("mailSend", $_GET)) {
							$class = "btn btn-success";
							$message = THANKS_FEEDBACK;
							if($_GET["mailSend"] == "false") {
								$class = "btn btn-danger";
								$message = ERROR_FEEDBACK;
							}
							?>
						<label class="<?php echo $class; ?>"><?php echo $message; ?></label>
					<?php } ?>
					<img class="responsive img-responsive circle-image" src="imgs/tarak-elarabi.jpg" alt="Tarak Elarabi"/>
					<address>
						<h4>Dr. Tarak Elarabi</h4>
						Assistant Professor</br>
						Department of Electrical and Computer Engineering</br>
						California State University, Fresno</br></br>
						<strong>Address:</strong><br>
						2320 E. San Ramon Ave., M/S EE94, Fresno, CA 93740
						<br>
						<abbr title="Phone">P:</abbr> 559.278.4823 | <abbr title="Phone">C:</abbr>559.345.5123
					</address>
					<address>
						<strong>E-Mail:</strong>
						<a href="mailto:tarek_elarabi@csufresno.edu" class="email">tarek_elarabi@csufresno.edu</a>
					</address>
					<div class="row btn-appointment-feedback">
						<button class="btn btn-success btn-appointment" href="bookAppointment.php">Book An Appointment</button>
						<button class="btn btn-default btn-feedback" data-toggle="modal" data-target="#feedbackModal">Send Feedback</button>
					</div>
				</div>
				<!--
					<div class="col-lg-7 slider">
						<h4>Make an appointment:</h4>
						 <form role="form">
							<div class="form-group">
								<label for="name">Name:</label>
								<input type="text" class="form-control" id="name" name="name">
							</div>
							<div class="form-group">
								<label for="studentid">Student ID:</label>
								<input type="text" class="form-control" id="studentid" name="studentid">
							</div>
							<div class="form-group">
								<label for="day">Select day:</label>
								<select class="form-control" id="day" name="day">
									<option value="monday">Monday</option>
									<option value="tuesday">Tuesday</option>
									<option value="wednesday">Wednesday</option>
									<option value="thursday">Thursday</option>
									<option value="friday">Friday</option>
									<option value="saturday">Saturday</option>
									<option value="sunday">Sunday</option>
								</select>
							</div>
							<button type="submit" class="btn btn-default">Submit</button>
						</form>
					</div>
				-->
				<div class="column maps col-lg-7 slider" id="map"></div>
			</div>
		</section>
		<!-- Body content ends here -->
		<?php include("footer.html"); ?>
		<?php include("feedbackModal.php"); ?>
	</body>
</html>