<?php include_once("functions/import_info.php") ?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
		<meta name="description" content="UCC Robotics">
		<title>Home | UCC Robotics</title>
		<link rel="icon" href="css/favicon.ico" />
		<?php include_once("functions/stylesheet.php") ?>

	</head>

	<body>
		<?php include_once("navbar.php")  ?>
		<?php include_once("footer.php")  ?>
		<div class="container">
			<?php include_once("site_wide.php") ?>
			<div class="jumbotron">
				<h2>Hello.</h2>
				<h1>Welcome to UCC Robotics.</h1>
			</div>

			<div class="row">
				<div class="col-md-4">
					<div class="panel panel-primary">
						<div class="panel-heading">
							<h3><span class="glyphicon glyphicon-blackboard" aria-hidden="true"></span> About Our Club</h3>
						</div>
						<div class="panel-body">
							<blockquote><h3>Robotics is more than just a science. It's an art.</h3></blockquote>
							<h5 style="text-align:right;">- Kevin Olds, </br>Faculty Supervisor</h5>
						</div>
						<div class="panel-footer">
							<a class="btn btn-primary" href="club_about.php" role="button">Learn why <span class="glyphicon glyphicon-menu-right" aria-hidden="true"></span></a>
						</div>
					</div>
				</div>
				<div class="col-md-4">
					<div class="panel panel-info">
						<div class="panel-heading">
							<h3><span class="glyphicon glyphicon-education" aria-hidden="true"></span> About Horizons Robotics</h3>
						</div>
						<div class="panel-body">
							<blockquote><h3>Every child deserves the right to an education.</h3></blockquote>
							<h5 style="text-align:right;">- Barack Obama, </br>44th President of the United States</h5>
						</div>
						<div class="panel-footer">
							<a class="btn btn-info" href="horizons_about.php" role="button">Learn how we spread that message <span class="glyphicon glyphicon-menu-right" aria-hidden="true"></span></a>
						</div>
					</div>
				</div>
				<div class="col-md-4">
					<div class="panel panel-success">
						<div class="panel-heading">
							<h3><span class="glyphicon glyphicon-user" aria-hidden="true"></span> About Our Projects</h3>
						</div>
						<div class="panel-body">
							<blockquote><h3>I do not fear computers. I fear the lack of them.</h3></blockquote>
							<h5 style="text-align:right;">- Isaac Asimov, </br>Science Fiction Writer</h5>
						</div>
						<div class="panel-footer">
							<a class="btn btn-success" href="projects_arduino.php" role="button">Learn how we make that happen <span class="glyphicon glyphicon-menu-right" aria-hidden="true"></span></a>
						</div>
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
