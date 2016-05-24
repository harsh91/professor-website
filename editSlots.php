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
		<div class="container update-container">
			<form class="update-slots-form" action="saveSlots.php" method="post">
				<?php
					if(isset($_GET) && !empty($_GET) &&
					array_key_exists("saved", $_GET)) {
						$class = "btn-success";
						$message = "Slots saved successfully!!";
						if($_GET["saved"] == "false") {
							$class = "btn-danger";
							$message = "Slots not saved please try again!!";
						}
				?>
					<div class="row btn <?php echo $class; ?>"><?php echo $message; ?></div>
				<?php 
					}					
					//echo "<pre>";print_r($timeSlots);die;
					foreach($timeSlots as $k => $v) {
						?>
							<div class="row" day="<?php echo $k; ?>">
								<label class="day"><?php echo $k; ?></label>
								<?php
									if(!empty($timeSlots[$k])) {
										$counter = 1;
										foreach($timeSlots[$k] as $slot) {
											?>
												<div class="slot">
													<input type="text" value="<?php echo $slot; ?>" name="<?php echo $k.'_'.$counter++; ?>" />
													<button class="remove btn btn-danger">X</button>
												</div>
											<?php
										}
									}
								?>
								<button class="add btn btn-success">Add</button>
							</div>
							<br/>
						<?php
					}
				?>
				<input type="submit" class="btn btn-default" value="Save New Slots"/>
			</form>
		</div>
		<?php include("footer.html");?>
	</body>
</html>