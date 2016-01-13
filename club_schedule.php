<?php include_once("import_info.php") ?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
		<meta name="description" content="UCC Robotics">
		<title>Schedule | UCC Robotics</title>
		<link rel="icon" href="css/favicon.ico" />
		<?php include_once("night_mode.php") ?>
		<link rel="stylesheet" href="css/style.css" />
	</head>

	<body>
		<?php include_once("navbar.php")  ?>
		<?php include_once("footer.php")  ?>
		<div class="container">
			<?php include_once("site_wide.php") ?>
			<h1 class="page-header">Club Calendar <small>2016</small></h1>
			<nav>
				<ul class="pagination">
					<li>
						<a href="#" aria-label="Previous">
						<span aria-hidden="true">&laquo;</span>
						</a>
					</li>
					<li><a href="#">January</a></li>
					<li><a href="#">February</a></li>
					<li><a href="#">March</a></li>
					<li><a href="#">April</a></li>
					<li><a href="#">May</a></li>
					<li>
						<a href="#" aria-label="Next">
						<span aria-hidden="true">&raquo;</span>
						</a>
					</li>
				</ul>
			</nav>
			<div class = "table-responsive">
				<table class = "table">
					<tr>
						<td></td>
						<td>Sunday</td>
						<td>Monday</td>
						<td>Tuesday</td>
						<td>Wednesday</td>
						<td>Thursday</td>
						<td>Friday</td>
						<td>Saturday</td>
					</tr>
					<tr>
						<td>Foyer</td>
						<td>
						<a tabindex="0" role="button" data-trigger="focus" data-toggle="popover" data-container="body" data-placement="auto top" title="Coat Check" data-content='The Foyer will have a complimentary coat check service.' data-html="true">Coat Check</a>
						</td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
					</tr>
					<tr> 
						<td></td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
					</tr>
					<tr> 
						<td></td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
					</tr>
					<tr> 
						<td></td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
					</tr>
				</table>
			</div>
			<!--
			<div class="embed-responsive embed-responsive-4by3" style="height:80%;">
				<iframe class="embed-responsive-item" src="https://www.google.com/calendar/embed?src=ucc.on.ca_r775k1cnuvvf95314vcbomcuuk%40group.calendar.google.com&ctz=America/Toronto"></iframe>
			</div>
			-->

		</div>

		<script src="js/jquery.js"></script>
		<script src="js/jquery.easing.min.js"></script>
		<script src="js/bootstrap.js"></script>
		<script src="js/nav-collapse.js"></script>
	</body>
</html>