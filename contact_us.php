<?php include_once("import_info.php") ?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
		<meta name="description" content="UCC Robotics">
		<title>Contact Us | UCC Robotics</title>
		<link rel="icon" href="css/favicon.ico" />
		<?php include_once("night_mode.php") ?>
		<link rel="stylesheet" href="css/style.css" />
	</head>

	<body>
		<?php include_once("navbar.php")  ?>
		<?php include_once("footer.php")  ?>
		<div class="container">
			<?php include_once("site_wide.php") ?>
			<div class="jumbotron">
				<h1 class="page-header"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span> Give us a shout!</h1>
				<h3>We're normally avaiable throughout the day.</h3>
			</div>	
				<div class="well well-lg">
					<h2>Contacts</h2>
					<table class="table">
						<tr>
							<th>Name</th>
							<th>Position</th>
							<th>Email</th>
						</tr>
						<tr> 
							<td><a href="http://jack.antinode.ca">Jack Sarick</a></td>
							<td><em>(Club Head and Developer)</em></td>
							<td><a href="mailto:jack.sarick@ucc.on.ca">jack.sarick@ucc.on.ca</a></td>	
						</tr>
						<tr>
							<td><a href="http://twitter.com/malsf21">Matthew Wang</a></td>
							<td><em>(Club Head and Developer)</em></td>
							<td><a href="mailto:matthew.wang@ucc.on.ca">matthew.wang@ucc.on.ca</a></td>
						</tr>
						<tr>
							<td>Camran Hansen</td>
							<td><em>(Club Head)</em></td>
							<td><a href="mailto:camran.hansen@ucc.on.ca">camran.hansen@ucc.on.ca</a></td>
						</tr>
						<tr>
							<td>John Mace</td>
							<td><em>(Club Head)</em></td>
							<td><a href="mailto:john.mace@ucc.on.ca">john.mace@ucc.on.ca</a></td>
						</tr>
						<tr>
							<td>Nicholas O'Brien</td>
							<td><em>(Developer)</em></td>
							<td><a href="mailto:nicholas.obrien@ucc.on.ca">nicholas.obrien@ucc.on.ca</a></td>
						</tr>

					</table>
				</div>
				
		</div>

		<script src="js/jquery.js"></script>
		<script src="js/jquery.easing.min.js"></script>
		<script src="js/bootstrap.js"></script>
		<script src="js/nav-collapse.js"></script>
	</body>
</html>