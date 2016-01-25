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
							<h3 class="panel-title">What's the Horizons Program?</h3>
						</div>
						<div class="panel-body">
							Horizons, a peer tutoring program at Upper Canada College, gives students from all over Toronto the opportunity to use UCC's facilities, resources, and students to further expand their learning. Duirng this process, UCC students mentor younger students, refining their own mentorship skills, while providing younger students an older mentor and a resource to their education. Horizons is committed to giving students opportunities to further their education and skillset.
						</div>
					</div>
					<div class="panel panel-success">
						<div class="panel-heading">
							<h3 class="panel-title">What's Horizons Robotics?</h3>
						</div>
						<div class="panel-body">
							Horizons Robotics is one of the many Horizons programs that aims to bring important skills to students in Toronto. At Horizons Robotics, mentees learn about and build on computer science, electrical engineering, and teamwork skills to ultimately create a robot. Throughout the 4 week course, mentees learn about the makeup of a robot, creating user input, and how to assemble and program a car-based robot. The full curriculum can be found <a href="horizons_curriculum.php">here</a>.
						</div>
					</div>
					<div class="panel panel-success">
						<div class="panel-heading">
							<h3 class="panel-title">How do I participate?</h3>
						</div>
						<div class="panel-body">
							Contrary to the popular perception, UCC students don't need to be part of UCC Robotics to become a Horizons mentor (though we do recommend it). All students need to do is attend a Horizons training session, and sign up for the Horizons Robotics program at the session/by email. You can contact the Horizons Faculty heads Ms. Jyoti Sehgal and Ms. Elaine Ticzon at <a href="mailto:jsehgal@ucc.on.ca">jsehgal@ucc.on.ca</a> and <a href="mailto:eticzon@ucc.on.ca">eticzon@ucc.on.ca</a>.
							</br>
							</br>
							Horizons Robotics meets during the Winter Horizons period, every Thursday afterschool. Every session starts at 3:30 in room CC3, and ends at 4:30 in room 304. We recommend first-time mentors to attend preparation sessions on Wednesdays at 9:10 in room CL2, to familiarize themselves with the course material and resources.
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
												<img src="img/horizons/mbot+box.JPG" height="256px"></img>
											</div>
										</div>
										<div class="col-sm-4">
											A picture of the mBots that Horizons mentees build with their students. The mBots feature a robust Arduino-based CPU, ultrasonic and colour-detecting sensors, and motor configurations, allowing mentees to experience different parts of robotics.
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
