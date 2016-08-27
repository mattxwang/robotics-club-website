<?php include_once("functions/import_info.php") ?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
		<meta name="description" content="UCC Robotics">
		<title>Home | UCC Robotics</title>
		<link rel="icon" href="css/favicon.ico" />
		<?php include_once("functions/stylesheet.php") ?>
		<script src="js/jquery.js"></script>

	</head>

	<body>
		<?php include_once("navbar.php")  ?>
		<?php include_once("footer.php")  ?>
		<div class="container">
			<?php include_once("site_wide.php") ?>
			<div class="jumbotron">
				<h1>Welcome to UCC Robotics.</h1>
				<h3>We hope you enjoy your stay.</h3>
			</div>

			<div class="row">
				<div class="col-md-4">
					<div class="panel panel-primary">
						<div class="panel-heading">
							<h3><span class="glyphicon glyphicon-blackboard" aria-hidden="true"></span> About Our Club</h3>
						</div>
						<div class="panel-body">
							<blockquote><h3>Robotics is more than just a science. It's an art.</h3></blockquote>
							<h5 style="text-align:right;">- Kevin Olds, </br>Faculty Supervisor</h5>
						</div>
						<div class="panel-footer">
							<a class="btn btn-primary" href="club_about.php" role="button">Learn why <span class="glyphicon glyphicon-menu-right" aria-hidden="true"></span></a>
						</div>
					</div>
				</div>
				<div class="col-md-4">
					<div class="panel panel-info">
						<div class="panel-heading">
							<h3><span class="glyphicon glyphicon-education" aria-hidden="true"></span> About Horizons Robotics</h3>
						</div>
						<div class="panel-body">
							<blockquote><h3>Every child deserves the right to an education.</h3></blockquote>
							<h5 style="text-align:right;">- Barack Obama, </br>44th President of the United States</h5>
						</div>
						<div class="panel-footer">
							<a class="btn btn-info" href="horizons_about.php" role="button">Learn how we spread that message <span class="glyphicon glyphicon-menu-right" aria-hidden="true"></span></a>
						</div>
					</div>
				</div>
				<div class="col-md-4">
					<div class="panel panel-success">
						<div class="panel-heading">
							<h3><span class="glyphicon glyphicon-wrench" aria-hidden="true"></span> About Our Projects</h3>
						</div>
						<div class="panel-body">
							<blockquote><h3>I do not fear computers. I fear the lack of them.</h3></blockquote>
							<h5 style="text-align:right;">- Isaac Asimov, </br>Science Fiction Writer</h5>
						</div>
						<div class="panel-footer">
							<a class="btn btn-success" href="projects_arduino.php" role="button">Learn how we make that happen <span class="glyphicon glyphicon-menu-right" aria-hidden="true"></span></a>
						</div>
					</div>
				</div>
			</div>
			<div class="jumbotron">
				<div id="student-spotlight-carousel" class="carousel slide" data-ride="carousel">
					<h2 style="text-align:center;">Student Spotlight</h2>
					<div class="carousel-inner" role="listbox">
				    <div class="item active">
							<div class="row">
								<div class="col-md-8">
									<h1>Matthew Wang</h1>
									<h3>Operations and Media Head</h3>
									<p>
										"I love Robotics. It's so fascinating: not the moving parts, or electronics, or computer program, even though they're awesome; but seeing the faces of the kids light up after they learn, for the first time, how electronics, or robots, or computers work. That's a job well done."
										</br>
										</br>
										Matthew is a Robotics Club Head, as well as an avid debater and Model UN delegate. He is currently in Foundation Year. You can contact him by <a href="mailto:matthew.wang@ucc.on.ca">email</a>, <a href="http://matthewwang.me">website</a>, or on <a href="http://twitter.com/malsf21">twitter</a>.
									</p>
								</div>
								<div class="col-md-4">
									<div class="thumbnail">
										<img src="img/members/matt_1.JPG" height="256px"></img>
									</div>
								</div>
							</div>
				    </div>
				    <div class="item">
							<div class="row">
								<div class="col-md-8">
									<h1>Jack Sarick</h1>
									<h3>Mechanics and Competition Head</h3>
									<p>
										Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut molestie molestie purus non convallis. Pellentesque erat augue, dignissim non leo eu, mollis vulputate nibh. Nullam varius maximus libero, ac consequat ante sollicitudin sit amet. Mauris at tincidunt eros. Ut fermentum metus vel leo laoreet aliquam. Aliquam fermentum lacinia metus. Aliquam nec tellus nulla.
										</br>
										</br>
										Jack is a Robotics Club Head, as well as a Computer Science club head and a hobbyist web developer/programmer. Jack is an IB1 boarder at UCC. You can contact him by <a href="mailto:jack.sarick@ucc.on.ca">email</a> or on <a href="http://jack.antinode.ca">his website</a>.
									</p>
								</div>
								<div class="col-md-4">
									<div class="thumbnail">
										<img src="img/members/sarick_1.jpg" height="256px"></img>
									</div>
								</div>
							</div>
				    </div>
						<div class="item">
							<div class="row">
								<div class="col-md-8">
									<h1>Nicholas O'Brien</h1>
									<h3>Assistant Developer and Builder</h3>
									<p>
										"Robotics is beyond fascinating. I've learned so much since I came here in Year 1, not just in the field of robotics but also in computer science, physics, engineering, you name it! This is the most amazing way to get involved in UCC and I will never forget the hours I've spent there."
										</br>
										</br>
										Nick is a Robotics Club Assistant Developer, Builder, and Programmer, as well as a competitive rower and sailor. Nick is currently in Year 2. You can contact him by <a href="nicholas.obrien@ucc.on.ca">email</a>.
									</p>
								</div>
								<div class="col-md-4">
									<div class="thumbnail">
										<img src="img/members/nick_2.JPG" height="256px"></img>
									</div>
								</div>
							</div>
				    </div>
				  </div>
					<!--
					<a class="left carousel-control" href="#student-spotlight-carousel" role="button" data-slide="prev">
				    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
				    <span class="sr-only">Previous</span>
				  </a>
				  <a class="right carousel-control" href="#student-spotlight-carousel" role="button" data-slide="next">
				    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
				    <span class="sr-only">Next</span>
				  </a>
				-->
				</div>
			</div>
			<div class="row">
				<div class="col-md-7">
					<div class ="well">
						<h2><span class="glyphicon glyphicon-bullhorn"></span> Bulletin Board</h2>
						<div class="bulletin">
							<?php include_once("functions/import_bulletin.php"); ?>
						</div>
					</div>
				</div>
				<div class="col-md-5">
					<div class="well">
						<h2>What's this website for?</h2>
						<p>Well, this website obviously gives information. But not only that! You can sign up for an account, which you'll use to check into the club, receive club news, possible email blasts, possible achievements, and a whole other realm of more features coming soon!
						</br>
						</br>
						Want to know how we made this site? Click <a href="https://github.com/malsf21/robotics-club-website">here</a>.
						</p>
					</div>
				</div>
			</div>
		</div>


		<script src="js/jquery.easing.min.js"></script>
		<script src="js/bootstrap.js"></script>
		<script src="js/nav-collapse.js"></script>
	</body>
</html>
