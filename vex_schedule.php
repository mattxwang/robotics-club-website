<?php include_once("import_info.php") ?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
		<meta name="description" content="UCC Robotics">
		<title>Vex Schedule | UCC Robotics</title>
		<link rel="icon" href="css/favicon.ico" />
		<?php include_once("night_mode.php") ?>
		<link rel="stylesheet" href="css/style.css" />
	</head>

	<body>
		<?php include_once("navbar.php")  ?>
		<?php include_once("footer.php")  ?>
		<div class="container">
			<?php include_once("site_wide.php") ?>
			
			<h1 class="page-header">Competition List <small>VEX 2016</small></h1>
			<a href="club_schedule"><h3>For a full schedule, visit our club schedule page.</h3>
			<div class="row">
				<div class="col-md-6">
					<div class="well well-lg bg-primary">
						<a href="http://www.robotevents.com/re-vrc-16-3753.html"><h2>Holy Cross Robotics Tournament</h2></a>
						<h3>January 23rd</h3>
						<h4>Holy Cross Catholic Secondary School</h4>
						Lorem Ipsum.
					</div>
				</div>

				<div class="col-md-6">
					<div class="well well-lg bg-success">
						<a href="http://www.robotevents.com/re-vrc-16-4019.html"><h2>Rick Hansen SS Robotics Tournament</h2></a>
						<h3>February 27th</h3>
						<h4>Rich Hansen Secondary School</h4>
						Lorem Ipsum.
					</div>
				</div>
			</div>

		</div>

		<script src="js/jquery.js"></script>
		<script src="js/jquery.easing.min.js"></script>
		<script src="js/bootstrap.js"></script>
		<script src="js/nav-collapse.js"></script>
	</body>
</html>