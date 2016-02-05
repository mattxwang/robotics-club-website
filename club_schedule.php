<?php include_once("functions/import_info.php") ?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
		<meta name="description" content="UCC Robotics">
		<title>Schedule | UCC Robotics</title>
		<link rel="icon" href="css/favicon.ico" />
		<?php include_once("functions/stylesheet.php") ?>
		<script src="js/jquery.js"></script>

		<link rel="stylesheet" type="text/css" href="css/calendar_style.css">
	</head>

	<body>
		<?php include_once("navbar.php")  ?>
		<?php include_once("footer.php")  ?>
		<div class="container">
			<?php include_once("site_wide.php") ?>
			<h1 class="page-header"><span class="glyphicon glyphicon-calendar" aria-hidden="true"></span> Club Calendar <small>2016</small></h1>

			<div class="alert alert-dismissible alert-danger fade in">
				<button type="button" class="close close-1" data-dismiss="alert">x</button>
				<p><span class="glyphicon glyphicon-remove"></span> <b>Uh-oh!</b></br>This part of the website is still a Work in Progress. In the meantime, shoot our <a href="club_contact.php" class="alert-link">club heads</a> an email for when we have robotics.
			</div>

			<!--
			<div class="embed-responsive embed-responsive-4by3" style="height:80%;">
				<iframe class="embed-responsive-item" src="https://www.google.com/calendar/embed?src=ucc.on.ca_r775k1cnuvvf95314vcbomcuuk%40group.calendar.google.com&ctz=America/Toronto"></iframe>
			</div>
			-->

		</div>


		<script src="js/jquery.easing.min.js"></script>
		<script src="js/bootstrap.js"></script>
		<script src="js/nav-collapse.js"></script>
		<script src="js/schedule_switch.js"></script>
	</body>
</html>
