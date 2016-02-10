<?php include_once("functions/import_info.php") ?>
<?php
	function login(){
		if (isset($_GET['login'])){
			require("functions/common.php");

			$submitted_email = '';
			$correction = 'none';

			if(!empty($_POST))
			{
				$query = "
					SELECT *
					FROM users
					WHERE
						email = :email";

				$query_params = array(
					':email' => $_POST['email']
				);

				try
				{
					$stmt = $db->prepare($query);
					$result = $stmt->execute($query_params);
				}
				catch(PDOException $ex)
				{
					die("Failed to run query: " . $ex->getMessage());
				}

				$login_ok = false;

				$row = $stmt->fetch();
				if($row)
				{
					$check_password = hash('sha256', $_POST['password'] . $row['salt']);
					for($round = 0; $round < 65536; $round++)
					{
						$check_password = hash('sha256', $check_password . $row['salt']);
					}

					if($check_password === $row['password'])
					{
						$login_ok = true;
					}
				}

				if($login_ok)
				{
					unset($row['salt']);
					unset($row['password']);

					$_SESSION['user'] = $row;

					header("Location: user_home.php");
					die("Redirecting to: user_home.php");
				}
				else
				{
					$correction = 'block';

					$submitted_email = htmlentities($_POST['email'], ENT_QUOTES, 'UTF-8');

					header("Location: login.php");
					die("Redirecting to: login.php");
				}
			}
		}
	}
	login();
?>
<!DOCTYPE html>
<html>
	<head>
		<script type="text/javascript">
			console.log(<?php echo json_encode($_SESSION['user']); ?>);
		</script>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
		<meta name="description" content="UCC Robotics">
		<title>Login | UCC Robotics</title>
		<link rel="icon" href="css/favicon.ico" />
		<?php include_once("functions/stylesheet.php") ?>
		<script src="js/jquery.js"></script>
	</head>

	<body>
		<?php include_once("navbar.php")  ?>
		<?php include_once("footer.php")  ?>
		<div class="container" style="text-align:center;">
			<?php include_once("site_wide.php") ?>
			<h1 class="page-header">Login</h1>
			<h3>Don't have an account? <b><a href="register.php">Register</a></b>.</h3>
			<form class="form-signin" action="?login" method="post">
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
				</br>
				<div class = "row">
					<div class = "col-md-12">
						<button class="btn btn-lg btn-primary btn-block" type="submit" value="Login">Login</button>
					</div>
				</div>
			</form>
			</div>


		<script src="js/jquery.easing.min.js"></script>
		<script src="js/bootstrap.js"></script>
		<script src="js/nav-collapse.js"></script>
	</body>
</html>
