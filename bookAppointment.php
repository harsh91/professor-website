<html>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Edit Slots</title>
	<head>
		<link rel="stylesheet" type="text/css" href="css/bootstrap.css" />
		<link rel="stylesheet" type="text/css" href="css/homepage.css" />
		<script type="text/javascript" src="js/jquery.js"></script>
		<script type="text/javascript" src="js/bootstrap.js"></script>
		<script type="text/javascript" src="js/slots.js"></script>
	</head>
	<body>
		<?php
			include("header.html");
			include("NewSlots.php");
			$newSlots = new NewSlots();
			$timeSlots = $newSlots->getAllSlots();
			?>
		<!-- Body Content here -->
		<!-- Body Content ends here -->
		<?php include("footer.html"); ?>
	</body>
</html>