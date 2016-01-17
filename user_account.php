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
		<title><?php echo $row_info['first_name'] ?>'s Account | UCC Robotics</title>
		<link rel="icon" href="css/favicon.ico" />
		<?php include_once("functions/stylesheet.php") ?>
	</head>

	<body>
		<?php include_once("navbar.php")  ?>
		<?php include_once("footer.php")  ?>
		<div class="container">
			<?php include_once("site_wide.php") ?>

			<div class="modal fade" tabindex="-1" role="dialog" id="changePassword">
				<div class="modal-dialog">
					<div class="modal-content">
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">x</span></button>
							<h4 class="modal-title">Change Password</h4>
						</div>
						<div class="modal-body">
							<p>	
							<form action="functions/update_users.php" method="post">
								<h4>Old Password</h4>
								<label for="inputPassword" class="sr-only">Old Password</label>
								<input type="password" id="password" name="password" class="form-control" placeholder="Old Password" required="" autofocus="">
								<h4>New Password</h4>
								<label for="inputPassword" class="sr-only">New Password</label>
								<input type="password" id="password_new_1" name="password_new_1" class="form-control" placeholder="New Password" required="">
								<h4>Confirm New Password</h4>
								<label for="inputPassword" class="sr-only">Confirm New Password</label>
								<input type="password" id="password_new_2" name="password_new_2" class="form-control" placeholder="Confirm New Password" required="">
						</div>
						<div class="modal-footer">
								<button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
								<button type="submit" class="btn btn-success" id="submitbutton" value="Login">Change Password</button>
							</form>
						</div>
					</div>
				</div>
			</div>

			<div class="panel panel-primary">
				<div class="panel-heading">
				Account Features:
				</div>

				<div class="panel-body">
				</div>
				<li class="list-group-item">
					<form class="form-signin" action="functions/account_nightmode.php" method="post">
						<div class="col-md-4">
							Set Nightmode State: 
						</div>
						<div class="col-md-8">
							<select class="form-control" id="nightmode_state" name="nightmode_state" required="">
								<option value="0">Choose an Option.</option>
								<option value="3">Per Session (Defaults to light mode)</option>
								<option value="4">Per Session (Defaults to dark mode)</option>
								<option value="1">Always Light Mode</option>
								<option value="2">Always Dark Mode</option>
							</select>
						</div>
						<button type="submit" class="btn btn-success" id="submitbutton" value="Login" >Save Changes</button>
					</form>
				</li>
			</div>
			<div class="panel panel-danger">
				<div class="panel-heading">
				Account Settings
				</div>

				<div class="panel-body">
				</div>
				<li class="list-group-item">
					<button class="btn btn-danger" type="button" data-toggle="modal" data-target="#changePassword">Change Password</button>
				</li>
			</div>
		</div>

		<script src="js/jquery.js"></script>
		<script src="js/jquery.easing.min.js"></script>
		<script src="js/bootstrap.js"></script>
		<script src="js/nav-collapse.js"></script>
	</body>
</html>