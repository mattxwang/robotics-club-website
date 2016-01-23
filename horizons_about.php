<?php include_once("functions/import_info.php") ?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
		<meta name="description" content="UCC Robotics">
		<title>About Horizons | UCC Robotics</title>
		<link rel="icon" href="css/favicon.ico" />
		<?php include_once("functions/stylesheet.php") ?>
		
	</head>

	<body>
		<?php include_once("navbar.php")  ?>
		<?php include_once("footer.php")  ?>
		<div class="container">
			<?php include_once("site_wide.php") ?>
			<div class="jumbotron bg-success">
				<h3>Horizons Robotics</h3>
				<blockquote><h1>Every child deserves the right to an education.</h1></blockquote>
				<h4 style="text-align:right;">- Barack Obama, 44th President of the United States</h4>
			</div>
			<div class="row">
				<div class="col-lg-6">
					<div class="panel panel-success">
						<div class="panel-heading">
							<h3 class="panel-title">What's Horizons?</h3>
						</div>
						<div class="panel-body">
							Horizons is a program hosted at UCC that allows the students of outside schools that may not have as many opportunities to learn an a skill while fostering an important mentor-mentee relationship. Horizons is committed to allowing students to have equal opportunity to learn skills. 
						</div>
					</div>
					<div class="panel panel-success">
						<div class="panel-heading">
							<h3 class="panel-title">What's Horizons Robotics?</h3>
						</div>
						<div class="panel-body">
							Horizons Robotics is a program at UCC in which the mentees learn and utilize the skills of computer science, electrical engineering and teamwork to create the final product of a robot. The full curriculum is described in the <a href="horizons_curriculum.php">curriculum tab</a> .
						</div>
					</div>
					<div class="panel panel-success">
						<div class="panel-heading">
							<h3 class="panel-title">How do I participate?</h3>
						</div>
						<div class="panel-body">
							As a student of UCC it is very easy to participate as a mentor. You must respond to an email sent out by Ms. Sehgal or Ms. Ticzon that requests mentors for Horizons Robotics. Horizons robotics meets every Thursday after school from 3:30 to 4:30. There will be a short preparation session the Wednesday before at 9:10 in room CL2. During that meeting the Club Head will ensure that all of the mentors are up to speed with the upcoming lesson plan. 
						</div>
					</div>
				</div>
				<div class="col-lg-6">
					<div class="panel-group" id="information" role="tablist">
						<div class="panel panel-primary">
							<div class="panel-heading" role="tab">
								<h4 class="panel-title">
									<a role="button" data-toggle="collapse" data-parent"#information" href="#thumbnailOne">
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
						<div class="panel panel-primary">
							<div class="panel-heading" role="tab">
								<h4 class="panel-title">
									<a role="button" class="collapsed" data-toggle="collapse" data-parent"#information" href="#thumbnailTwo">
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
						<div class="panel panel-primary">
							<div class="panel-heading" role="tab">
								<h4 class="panel-title">
									<a role="button" class="collapsed" data-toggle="collapse" data-parent"#information" href="#thumbnailThree">
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
