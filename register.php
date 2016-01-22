<?php include_once("functions/import_info.php") ?>
<?php
	function register(){
		if (isset($_GET['register'])) {
			require("functions/common.php");

			if(!empty($_POST)) {
				if( empty($_POST['email'])     ||
					empty($_POST['password'])  ||
					empty($_POST['password2']) ||
					empty($_POST['first_name'])||
					empty($_POST['last_name']) ||
					empty($_POST['birthday'])

					) {
					die("You missed a field");
				}

				if($_POST['password'] != $_POST['password2']) {
					die("Password Mismatch");
				}

				if(!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
					die("Invalid Email Address");
				}

				$query = "
					SELECT
						1
					FROM users
					WHERE
						email = :email
				";

				$query_params = array(
					':email' => $_POST['email']
				);

				try {
					$stmt = $db->prepare($query);
					$result = $stmt->execute($query_params);
				}
				catch(PDOException $ex) {
					die("Failed to run query: " . $ex->getMessage());
				}

				$row = $stmt->fetch();

				if($row) {
					die("This email address is already registered");
				}

				$query = "
					INSERT INTO users (
						password,
						salt,
						email,
						admin
					) VALUES (
						:password,
						:salt,
						:email,
						0
					);
				";

				$salt = dechex(mt_rand(0, 2147483647)) . dechex(mt_rand(0, 2147483647));

				$password = hash('sha256', $_POST['password'] . $salt);

				for($round = 0; $round < 65536; $round++) {
					$password = hash('sha256', $password . $salt);
				}

				$query_params = array(
					':password' => $password,
					':salt' => $salt,
					':email' => $_POST['email']
				);

				try {
					$stmt = $db->prepare($query);
					$result = $stmt->execute($query_params);
				}
				catch(PDOException $ex) {
					die("Failed to run query: " . $ex->getMessage());
				}
				$email = $_POST['email'];
				$first_name = $_POST['first_name'];
				$last_name = $_POST['last_name'];
				$birthday = $_POST['birthday'];

				$query = "
				INSERT INTO info (
					email,
					first_name,
					last_name,
					birthday
				) VALUES (
					'$email',
					'$first_name',
					'$last_name',
					'$birthday'
				);";

				try {
					$stmt = $db->prepare($query);
					$stmt->execute();

					header("Location: login.php");
				}

				catch(PDOException $ex)
				{
					die("Failed to run query: " . $ex->getMessage());
					header("Location: login.php");
				}
			}
		}
	}
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
		<meta name="description" content="UCC Robotics">
		<title>Register | UCC Robotics</title>
		<link rel="icon" href="css/favicon.ico" />
		<?php include_once("functions/stylesheet.php") ?>
		<link href='css/bootstrap-datepicker3.css' rel='stylesheet'>
	</head>

	<body>
		<?php include_once("navbar.php")  ?>
		<?php include_once("footer.php")  ?>
		<div class="container" style="text-align:center;">
			<?php include_once("site_wide.php") ?>
			<h1 class="page-header">Register</h1>
			<h3>Already have an account? <a href="login.php">Login</a>.
			<form class="form-signin" action="?register" method="post">
				<div class = "row">
					<div class = "col-md-3">
						<h2>Email</h2>
					</div>
					<div class = "col-md-9">
						<input type="email" id="email" class="form-control" placeholder="john.smith@ucc.on.ca" name="email" required="" autofocus="">
					</div>
				</div>
				<div class = "row">
					<div class = "col-md-3">
						<h2>Password</h2>
					</div>
					<div class = "col-md-9">
						<input type="password" id="password" name="password" class="form-control" placeholder="Password" required="">
					</div>
				</div>
				<div class = "row">
					<div class = "col-md-3">
						<h2>Confirm Password</h2>
					</div>
					<div class = "col-md-9">
						<input type="password" id="password2" name="password2" class="form-control" placeholder="Confirm Password" required="">
					</div>
				</div>
				<div class = "row">
					<div class = "col-md-3">
						<h2>First Name</h2>
					</div>
					<div class = "col-md-9">
						<input type="text" id="first_name" name="first_name" class="form-control" placeholder="John" required="">
					</div>
				</div>
				<div class = "row">
					<div class = "col-md-3">
						<h2>Last Name</h2>
					</div>
					<div class = "col-md-9">
						<input type="text" id="last_name" name="last_name" class="form-control" placeholder="Smith" required="">
					</div>
				</div>
				<div class = "row">
					<div class = "col-md-3">
						<h2>Birthday</h2>
					</div>
					<div class = "col-md-9">
						<div class="input-group date" data-provide="datepicker">
							<input type="text" id="birthday" name="birthday" class="form-control" placeholder="2000-01-01"required="">
							<div class="input-group-addon">
								<span class="glyphicon glyphicon-th"></span>
							</div>
						</div>
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
		<script src="js/bootstrap-datepicker.js"></script>
		<script type="text/javascript">
			$('.input-group.date').datepicker({
				format: "yyyy-mm-dd",
				startView: 1
			});
		</script>

	</body>
</html>
