<?php include_once("import_info.php") ?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
		<meta name="description" content="UCC Robotics">
		<title>Horizons Schedule| UCC Robotics</title>
		<link rel="icon" href="css/favicon.ico" />
		<?php include_once("night_mode.php") ?>
		<link rel="stylesheet" href="css/style.css" />
	</head>

	<body>
		<?php include_once("navbar.php")  ?>
		<?php include_once("footer.php")  ?>
		<div class="container">
			<?php include_once("site_wide.php") ?>
			<h1 class="page-header"><span class="glyphicon glyphicon-wrench" aria-hidden="true"></span> Horizons Schedule <small>2016</small></h1>
			<h6>
				Horizons sessions are held in Room 304, with snacks in room CC3 beforehand. Every session starts at 3:30
			</h6>
			<div class="row">
				<div class="col-md-6">
					<div class="panel panel-success">
						<div class="panel-heading">
							<h2>Session 1</h2>
						</div>
						<div class="panel-body">
							Lesson 1: <b>Jan 7</b>,  </br>
							Lesson 2: <b>Jan 14</b>, </br>
							Lesson 3: <b>Jan 21</b>, </br>
							Lesson 4: <b>Jan 28</b>  </br>
						</div>
					</div>
				</div>

				<div class="col-md-6">
					<div class="panel panel-success">
						<div class="panel-heading">
							<h2>Session 2</h2>
						</div>
						<div class="panel-body">
							Lesson 1: <b>Feb 11</b>, </br>
							Lesson 2: <b>Feb 18</b>, </br>
							Lesson 3: <b>Feb 25</b>, </br>
							Lesson 4: <b>Mar 3</b>   </br>
						</div>
					</div>
				</div>
			</div>
			

		</div>

		<script src="js/jquery.js"></script>
		<script src="js/jquery.easing.min.js"></script>
		<script src="js/bootstrap.js"></script>
		<script src="js/nav-collapse.js"></script>
		<script>
			$(function () {
				$('[data-toggle="popover"]').popover()
			})
		</script>
	</body>
</html>