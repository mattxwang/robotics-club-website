<?php include_once("functions/import_info.php") ?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
		<meta name="description" content="UCC Robotics">
		<title>About Us | UCC Robotics</title>
		<link rel="icon" href="css/favicon.ico" />
		<?php include_once("stylesheet.php") ?>
		
	</head>

	<body>
		<?php include_once("navbar.php")  ?>
		<?php include_once("footer.php")  ?>
		<div class="container">
			<?php include_once("site_wide.php") ?>
			<div class="jumbotron">
				<h3>Upper Canada College Robotics</h3>
				<blockquote><h1>Robotics is more than just a science. It's an art.</h1></blockquote>
				<h4 style="text-align:right;">- Kevin Olds, Faculty Supervisor</h4>
			</div>
			<div class="row">
				<div class="col-lg-6">
					<div class="panel panel-primary">
						<div class="panel-heading">
							<h3 class="panel-title">About Our Club</h3>
						</div>
						<div class="panel-body">
							Upper Canada College Robotics is a dedicated group of students working together with the common goal of teaching robotics. Whether it be through the <a href="vex_about.php">VEX Competition</a>, 
							<a href="horizons_about.php">Horizons Robotics</a>, or <a href="projects_arduino.php">our</a> <a href="projects_keyboard.php">many</a> <a href="projects_soldering.php">projects</a>, our club teaches students 
							core Computer Science, Engineering, and Robotics skills. 
							</br>
							</br>
							Our club meets everyday afterschool, in room CL2. Members can come in whenever they want, though we suggest that members come in at least once a week. <a href="horizons_schedule.php">Horizons Robotics</a> is held on Thursdays in room CC3 during the winter, 
							with no robotics being held in room CL2. <a href="vex_schedule.php">VEX Competitions</a> happen thoughout the year on Saturdays.
						</div>
					</div>
					<div class="panel panel-primary">
						<div class="panel-heading">
							<h3 class="panel-title">About Our Team</h3>
						</div>
						<div class="panel-body">
							Our club is entirely student-run. In the 2015-2016 academic year, we have <a href="club_contact.php">four club heads:</a> <a href="http://jack.antinode.ca/"><b>Jack Sarick</b></a>, <a href="http://twitter.com/malsf21"><b>Matthew Wang</b></a>, 
							<b>Alex Roberts</b>, and <b>Camran Hansen</b>. John Mace acts as our secretary. Our club itself features over 50 student members, with many coming to competitions, workshops, and daily club meetings.
							</br>
							</br>
							Kevin Olds is our club supervisor: he ensures that our club is safe, organized, and successful. Without him, the club wouldn't be possible. We'd like to thank him for his service to the club, and to the school.
						</div>
					</div>
				</div>
				<div class="col-lg-6">
					<div class="panel-group" id="accordion1" role="tablist">
						<div class="panel panel-success">
							<div class="panel-heading" role="tab">
								<h4 class="panel-title">
									<a role="button" data-toggle="collapse" data-parent"accordion1" href="#thumbnailOne">
										Lorem Ipsum
									</a>
								</h4>
							</div>
							<div id="thumbnailOne" class="panel-collapse collapse in" role="tabpanel">
								<div class="panel-body">
									<div class="row">
										<div class="col-sm-8">
											<div class="thumbnail">
												<img src="img/placeholder.png"></img>
											</div>
										</div>
										<div class="col-sm-4">
											Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur ultrices, sapien sit amet vestibulum tincidunt, sapien arcu laoreet diam, vel convallis felis tellus a est.
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="panel panel-success">
							<div class="panel-heading" role="tab">
								<h4 class="panel-title">
									<a role="button" class="collapsed" data-toggle="collapse" data-parent"accordion1" href="#thumbnailTwo">
										Lorem Ipsum
									</a>
								</h4>
							</div>
							<div id="thumbnailTwo" class="panel-collapse collapse" role="tabpanel">
								<div class="panel-body">
									<div class="row">
										<div class="col-sm-8">
											<div class="thumbnail">
												<img src="img/placeholder.png"></img>
											</div>
										</div>
										<div class="col-sm-4">
											Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur ultrices, sapien sit amet vestibulum tincidunt, sapien arcu laoreet diam, vel convallis felis tellus a est.
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="panel panel-success">
							<div class="panel-heading" role="tab">
								<h4 class="panel-title">
									<a role="button" class="collapsed" data-toggle="collapse" data-parent"accordion1" href="#thumbnailThree">
										Lorem Ipsum
									</a>
								</h4>
							</div>
							<div id="thumbnailThree" class="panel-collapse collapse" role="tabpanel">
								<div class="panel-body">
									<div class="row">
										<div class="col-sm-8">
											<div class="thumbnail">
												<img src="img/placeholder.png"></img>
											</div>
										</div>
										<div class="col-sm-4">
											Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur ultrices, sapien sit amet vestibulum tincidunt, sapien arcu laoreet diam, vel convallis felis tellus a est.
										</div>
									</div>
								</div>
							</div>
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