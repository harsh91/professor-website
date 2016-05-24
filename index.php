<html>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Home</title>
	<head>
		<link rel="stylesheet" type="text/css" href="css/bootstrap.css" />
		<link rel="stylesheet" type="text/css" href="css/homepage.css" />
		<link href="css/jquery.bxslider.css" rel="stylesheet" />
		
		<script src="js/jquery.js"></script>
		<script src="js/bootstrap.js"></script>
		<script src="js/jquery.bxslider.min.js"></script>
		<script src="js/home.js"></script>
	</head>
	<body>
		<?php include("header.html"); ?>
		<section class="main-container container section-1">
			<div class="col-lg-12 address">
				<div class="col-lg-5">
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
				</div>
				<div class="col-lg-7 slider">
					<ul class="bxslider">
						<li><img class="responsive img-responsive" src="imgs/slider1.jpg" /></li>
						<li><img class="responsive img-responsive" src="imgs/slider2.jpg" /></li>
						<li><img class="responsive img-responsive" src="imgs/slider3.jpg" /></li>
						<li><img class="responsive img-responsive" src="imgs/slider4.jpg" /></li>
					</ul>
				</div>
			</div>
		</section>
		<section class="main-container container section-2">
			<!--<div class="biography">
				<h3>Biographic Sketch</h3>
				<p>
					Dr. Elarabi has received his Doctor of Philosophy Degree in the field of 
					Computer Engineering from the Center for Advanced Computer Studies (CACS), 
					University of Louisiana at Lafayette. Dr. Elarabi has been a faculty member
					of Department of Electrical and Computer Engineering at California State University,
					Fresno since 2014. His expertise is in digital video processing with particular interest
					in video compression algorithms, and heterogeneous video transcoding for IoT real-time video applications.
				</p>				
			</div>-->
			<div class="col-lg-6 col-sm-6 col-xs-12 achievements">
				<h2>Honors & Awards</h2>
				<ul><br/>
					<li>CSU- Fresno DISCOVERe Faculty Fellow</li>
					<li>CSU- Fresno eScholars Faculty Fellow</li>
					<li>ASEE Faculty Active Member</li>
					<li>IEEE Faculty Active Member</li>
					<li>Member and Web Master for IEEE Computer Society Chapter at ULL</li>
					<li>Member of the honor society PHI KAPPA PHI</li>
					<li>Organizing Member and Web Master in the UCSWSN2012 workshop</li>
					<li>Organizing Member and Web Master in the IEEE SiPS2011 workshop</li>
					<li>Awarded Certificate of Achievement for Academic Excellent by UL Lafayette, May 2012</li>
					<li>Recognized as Honor Student [2010, 2011 and 2012] by the University of Louisiana at Lafayette</li>
					<li>Awarded the University of Louisiana at Lafayette Assistantship [2009 - 2012]</li>
					<li>Awarded the Academy for Science &Technology Substantial Student Scholarship [2004 - 2008]</li>
					<li>Awarded The Academy for Science &Technology Distinguished Students Award [2004 - 2008]</li>
				</ul>
			</div>
			<div class="col-lg-6 col-sm-6 col-xs-12 achievements">
				<div class="">
					<h2>Publications</h2>
					<ul>
						<li>
							Efficient 45nm ASIC Architecture for Full-Search Free Intra Prediction for Real-Time H.264/AVC Decoder
							<br>
							Springer Journal SI:SiPS
							<br>
							August 1, 2012
						</li>
						<li>
							Hardware Architecture For Fast Intra Mode and Direction Prediction in Real-Time MPEG-2 to H.264/AVC Transcoder
							<br>
							IEEE WoWMoM 2012 /VidEv, San Francesco CA [Acceptance Rate %18]
							<br>
							June 25, 2012
						</li>
						<li>
							Full-Search Free Intra Prediction Algorithm for Real-Time H.264/AVC Decoder
							<br>
							SIP2012 Jeju, South Korea
							<br>
							September 11, 2012
						</li>
						<li>
							Hybrid Wavelet- DCT Intra Prediction for H.264/AVC Interactive Encoder
							<br>
							ChinaSIP
							<br>
							April 21, 2014
						</li>
						<li>
							Optimal Hardware Design of State-of-Art ZigBee Transmitter for IoT Wireless Devices
							<br>
							IEEE International Symposium on Signal Processing and Information Technology, ISSPIT- 2015
							<br>
							December 7, 2015
						</li>
						<li>
							Orientation and Displacement Detection for Smartphone-Device Based Inertial Measurement Units<br>
							IEEE International Symposium on Signal Processing and Information Technology, ISSPIT- 2015
							<br>
							December 7, 2015
						</li>
					</ul>
				</div>
			</div>
		</section>
		<?php include("footer.html"); ?>
	</body>
</html>