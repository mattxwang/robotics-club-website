<?php include_once("functions/import_info.php") ?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
		<meta name="description" content="UCC Robotics">
		<title>Credits | UCC Robotics</title>
		<link rel="icon" href="css/favicon.ico" />
		<?php include_once("functions/stylesheet.php") ?>
		<script src="js/jquery.js"></script>
    <script src="js/marked.js"></script>
	</head>

	<body>
		<?php include_once("navbar.php")  ?>
		<?php include_once("footer.php")  ?>

		<div class="container">
			<?php include_once("site_wide.php") ?>
			<?php
			  $markdown = file_get_contents('CREDITS.md', FILE_USE_INCLUDE_PATH);
			?>
			<div class="jumbotron">
				<h3>Making a site is hard work.</h3>
				<h1>Here's everybody <small>and everything</small> that we've used to make the site awesome.</h1>
			</div>
			<div class="well well-lg">
				<div id="credit">
				</div>
			</div>

      <script type="text/javascript">
        document.getElementById('credit').innerHTML = marked(<?php echo json_encode($markdown); ?>);
      </script>
		</div>


		<script src="js/jquery.easing.min.js"></script>
		<script src="js/bootstrap.js"></script>
		<script src="js/nav-collapse.js"></script>
	</body>
</html>
