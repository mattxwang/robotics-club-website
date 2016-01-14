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

			<div class="row">
				<div class="col-md-6">
					<div class="panel panel-success">
						<div class="panel-heading">
							<h2>Session 1</h2>
						</div>
						<div class="panel-body">
							Lorem Ipsum Lorem Ipsum.
						</div>
					</div>
				</div>

				<div class="col-md-6">
					<div class="panel panel-success">
						<div class="panel-heading">
							<h2>Session 1</h2>
						</div>
						<div class="panel-body">
							Lorem Ipsum Lorem Ipsum.
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