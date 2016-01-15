<?php include_once("functions/import_info.php") ?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
		<meta name="description" content="UCC Robotics">
		<title>Register | UCC Robotics</title>
		<link rel="icon" href="css/favicon.ico" />
		<?php include_once("night_mode.php") ?>
		<link rel="stylesheet" href="css/style.css" />

		<link href='css/bootstrap-night.css' rel='stylesheet'>
		<link href='css/bootstrap.css' rel='stylesheet'>
	</head>

	<body>
		<?php include_once("navbar.php")  ?>
		<?php include_once("footer.php")  ?>
		<div class="container" style="text-align:center;">
			<?php include_once("site_wide.php") ?>
			<h1 class="page-header">Register</h1>
			<form class="form-signin" action="register_function.php" method="post">
				<div class = "row">
					<div class = "col-md-12">
						<input type="email" id="email" class="form-control" placeholder="john.smith@ucc.on.ca" name="email" required="" autofocus="">
					</div>
				</div>
				<div class = "row">
					<div class = "col-md-12">
						<input type="password" id="password" name="password" class="form-control" placeholder="Password" required="">
					</div>
				</div>
				<div class = "row">
					<div class = "col-md-12">
						<input type="password" id="password2" name="password2" class="form-control" placeholder="Confirm Password" required="">
					</div>
				</div>
				</br>
				<div class = "row">
					<div class = "col-md-12">
						<button class="btn btn-lg btn-primary btn-block" type="submit" value="Login">Register</button>
					</div>
				</div>
			</form>
			</div>

		<script src="js/jquery.js"></script>
		<script src="js/jquery.easing.min.js"></script>
		<script src="js/bootstrap.js"></script>
		<script src="js/nav-collapse.js"></script>
	</body>
</html>