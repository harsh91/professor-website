<html>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Admin</title>
	<head>
		<link rel="stylesheet" type="text/css" href="css/bootstrap.css" />
		<link rel="stylesheet" type="text/css" href="css/homepage.css" />
		<script src="js/jquery.js"></script>
		<script src="js/bootstrap.js"></script>
		<script src="https://maps.googleapis.com/maps/api/js"></script>
		<script src="js/contact.js"></script>
	</head>
	<body>
		<?php include("header.html"); ?>
		<!-- Body Content here -->
		<div class="col-lg-3 login-container center-block">
				<h4>Login</h4>
				 <form role="form" action="signin.php" method="post">
					<div class="form-group">
						<label for="email">Email:</label>
						<input type="text" class="form-control" id="email" name="email">
					</div>
					<div class="form-group">
						<label for="password">Password:</label>
						<input type="password" class="form-control" id="password" name="password">
					</div>
					<button type="submit" class="btn btn-default">Submit</button>
				</form>
			</div>
		<?php include("footer.html");?>
	</body>
</html>