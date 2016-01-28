<?php include_once("functions/import_info.php") ?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
		<meta name="description" content="UCC Robotics">
		<title>Schedule | UCC Robotics</title>
		<link rel="icon" href="css/favicon.ico" />
		<?php include_once("functions/stylesheet.php") ?>
		
		<link rel="stylesheet" type="text/css" href="css/calendar_style.css">
	</head>

	<body>
		<?php include_once("navbar.php")  ?>
		<?php include_once("footer.php")  ?>
		<div class="container">
			<?php include_once("site_wide.php") ?>
			<h1 class="page-header"><span class="glyphicon glyphicon-calendar" aria-hidden="true"></span> Club Calendar <small>2016</small></h1>
			
			<div class= "calendar-div table-responsive">
				<table class= "table calendar-table">
			<nav>
				<ul class="pagination">
					<li>
						<a href="#" aria-label="Previous">
						<span aria-hidden="true">&laquo;</span>
						</a>
					</li>
					<li><a id="JanButton" href="#">January</a></li>
						<script>
							if (JanButton.onClick == true){ 
								JanClicked(); 
							}
						</script>
					<li><a id="FebButton" href="#">February</a></li>
						<script>
							if (FebButton.onClick == true){ 
								FebClicked(); 
							}
						</script>
					<li><a id="MarButton" href="#">March</a></li>
						<script>
							if (MarButton.onClick == true){ 
								MarClicked(); 
							}
						</script>
					<li><a id="AprButton" href="#">April</a></li>
						<script>
							if (AprButton.onClick == true){ 
								AprClicked(); 
							}
						</script>
					<li><a id="MayButton" href="#">May</a></li>
						<script>
							if (MayButton.onClick == true){ 
								MayClicked(); 
							}
						</script>
					<li>
						<a href="#" aria-label="Next">
						<span aria-hidden="true">&raquo;</span>
						</a>
					</li>
				</ul>
			</nav>
			<div id="Calendar" class = "table-responsive ">
				
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
		<script src="js/schedule_switch.js"></script>
		<script>
			$(function () {
				$('[data-toggle="popover"]').popover()
			})
		</script>
	</body>
</html>