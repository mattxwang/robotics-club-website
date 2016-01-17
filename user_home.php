<?php include_once("functions/import_info.php") ?>
<?php
	require("functions/common.php");
	if(empty($_SESSION['user'])){ 
		header("Location: login.php"); 
		die("Redirecting to login.php"); 
	}
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
		<meta name="description" content="UCC Robotics">
		<title><?php echo $row_info['first_name'] ?> | UCC Robotics</title>
		<link rel="icon" href="css/favicon.ico" />
		<?php include_once("stylesheet.php") ?>
		

		<link href='css/bootstrap-night.css' rel='stylesheet'>
		<link href='css/bootstrap.css' rel='stylesheet'>
	</head>

	<body>
		<?php include_once("navbar.php")  ?>
		<?php include_once("footer.php")  ?>
		<div class="container">
			<?php include_once("site_wide.php") ?>
			<h1 class="page-header">Welcome <b><?php echo $row_info['first_name']; echo " "; echo $row_info['last_name']; ?></b> <small>to your account homepage</small></h1>
			<h5>Here, you can check in for attendance, see your achievements, and get personalized club news!</h3>
			<div class="row">
				<div class="col-md-4">
					<div class="panel panel-primary">
						<div class="panel-heading">
							<h3>Messages & Notifications <span class="glyphicon glyphicon-envelope"></span></h3>
						</div>
						 <ul class="list-group">
							<li class="list-group-item list-group-item-success">Message #1: Matt is Awesome.</li>
							<li class="list-group-item list-group-item-danger">Message #2: Robotics is cool!</li>
							<li class="list-group-item list-group-item-warning">Message #3: We're amazing!</li>
							<li class="list-group-item list-group-item-info">Message #4: All the good chem jokes...</li>
							<li class="list-group-item list-group-item-primary">Message #5: Argon!</li>
						</ul>
					</div>
					<div class="panel panel-info">
						<div class="panel-heading">
							<h3>Achievements <span class="glyphicon glyphicon-certificate"></span></h3>
						</div>
						<div class="panel-body">
							Sample text sample text sample text.
						</div>
					</div>
				</div>
				<div class="col-md-8">
					<div class="well well-lg">
						<form class="form-signin" action="functions/attendance.php" method="post">
							<div class="row">
								<div class="col-sm-4">
									<h5>Attendance Code: </h5>
								</div>
								<div class="col-sm-8">
									<input type="text" id="attendance" name="attendance" class="form-control" placeholder="Blank Space." required="">
									<span class="input-group-btn">
										<button class="btn btn-default" type="submit" id="submitbutton" value="Login">Go!</button>
									</span>
								</div>
						</form>
					</div>
					<div class="well well-lg">
						<h3>Track your attendance!</h3>
						<ul class="nav nav-tabs" role="tablist">
							<li role="presentation" class="active"><a href="#daily" role="tab" data-toggle="tab">Daily</a></li>
							<li role="presentation"><a href="#weekly" role="tab" data-toggle="tab">Weekly</a></li>
							<li role="presentation"><a href="#monthly" role="tab" data-toggle="tab">Monthly</a></li>
						</ul>

						<div class="tab-content">
							<div role="tabpanel" class="tab-pane active fade in" id="daily">...</div>
							<div role="tabpanel" class="tab-pane fade" id="weekly">...</div>
							<div role="tabpanel" class="tab-pane fade" id="monthly">...</div>
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