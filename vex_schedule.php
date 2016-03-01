<?php include_once("functions/import_info.php") ?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
		<meta name="description" content="UCC Robotics">
		<title>Vex Schedule | UCC Robotics</title>
		<link rel="icon" href="css/favicon.ico" />
		<?php include_once("functions/stylesheet.php") ?>
		<script src="js/jquery.js"></script>

	</head>

	<body>
		<?php include_once("navbar.php")  ?>
		<?php include_once("footer.php")  ?>
		<div class="container">
			<?php include_once("site_wide.php") ?>

			<h1 class="page-header"><span class="glyphicon glyphicon-calendar" aria-hidden="true"></span> Competition List <small>VEX 2016</small></h1>
			<a href="club_schedule.php"><h3>For a full schedule, visit our club schedule page.</h3>
			<div class="row">
				<div class="col-md-6">
					<div class="well well-lg">
						<a href="http://www.robotevents.com/re-vrc-16-3753.html"><h2>Holy Cross CS Robotics Tournament</h2></a>
						<h3>January 23rd</h3>
						<h4>Holy Cross Catholic Secondary School</h4>
						<a href="https://www.google.com/maps/place/Holy+Cross+Secondary+School/@43.2013027,-79.2197241,17z/data=!3m1!4b1!4m2!3m1!1s0x89d350b47b3a158d:0x4a84706f1d791bfc">460 Linwell Rd, St. Catharines</a>
						</br>
						We went to Holy Cross with high hopes, testing out a brand new and innovative ramp-bot design. Unfortunately, due to some faulty gear (mainly our cortex), our robot only started up three out of six matches; and we only winded up winning three out of six round robin matches. Only being a few spots away from qualifying, we took what we learned (bring a spare cortex!), and hopefully we'll take home some hardware at Rick Hansen!
					</div>
				</div>

				<div class="col-md-6">
					<div class="well well-lg">
						<a href="http://www.robotevents.com/re-vrc-16-4019.html"><h2>Rick Hansen SS Robotics Tournament</h2></a>
						<h3>February 27th</h3>
						<h4>Rich Hansen Secondary School</h4>
						<a href="https://www.google.com/maps/place/Rick+Hansen+Secondary+School/@43.5888336,-79.6851817,17z/data=!3m1!4b1!4m2!3m1!1s0x882b411cd6d735dd:0x4349d131f34e437">1150 Dream Crest Rd, Mississauga</a>
						</br>
						We went to Rick Hansen SS with a wonderful robot with a few functionality issues. Unfortunately, issues with VEX Net Keys made us only able to use our robot in two out of six possible matches. Nevertheless, we still got an award: our club faculty adviser, Mr. Kevin Olds, ended up winning the VEX Mentor of the Year Award, out of 60+ coaches in our region. Overall, it was a success for our club, and hopefully we'll be more successful next year!
					</div>
				</div>
			</div>

		</div>


		<script src="js/jquery.easing.min.js"></script>
		<script src="js/bootstrap.js"></script>
		<script src="js/nav-collapse.js"></script>
	</body>
</html>
