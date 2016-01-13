<?php
session_start(); 
include_once("import_info.php") 
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
		<meta name="description" content="UCC Robotics">
		<title>Home | UCC Robotics</title>
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
				<h2>Hello.</h2>
				<h1>Welcome to UCC Robotics.</h1>
			</div>

			<div class="row">
				<div class="col-md-4">
					<div class="panel panel-primary">
						<div class="panel-heading">
							<h3><span class="glyphicon glyphicon-link" aria-hidden="true"></span> Building Foundations</h3>
						</div>
						<div class="panel-body">
							<p>
							UCC Robotics provides students a foundation for engineering, computer science, and the applied sciences. 
							Building upon what is taught in the school curriculum, club members learn in the fields of math, physics, chemistry, and computer science, as well as skillsets including creating and presenting ideas, documentation and reports, and teamwork skills. We offer an extensive education program, through lessons, mentoring, club workshops, and competitions. Our education program goes beyond simply robotics: basic engineering skills such as soldering, and introductory computer science are a cornerstone of our club. Club members become immersed into the worlds of computer science, engineering, and robotics; and with that, all of the invaluable skills that go along with it.
							</br>
							</br>
							Furthermore, our club provides students with the experience of mentorship and leadership. The club is entirely student-run, which requires members to step up and take leadership roles. Our club teaches students how to manage projects, students, and responsibilities of an orgnaisation. Through these ideals, robotics club members aren't only well-versed in the world of robotics; they also become strong leaders in the process.
							</p>
						</div>
					</div>
				</div>
				<div class="col-md-4">
					<div class="panel panel-info">
						<div class="panel-heading">
							<h3><span class="glyphicon glyphicon-home" aria-hidden="true"></span> Building Communities</h3>
						</div>
						<div class="panel-body">
							<p>
							Our Robotics Club isn't just vehicle for kids to learn; robotics club is a community. Club members work with each other, mentor each other, and create long-lasting friendships. We emphasize learning how to work as a cohesive team, a skill that presents itself many times in careers througout the world. This includes skills such as communication, leadership, and organisation. Furthermore, we encourage members to mentor each other. Every single member has something to bring to the table; we just want students to share it. Our club also features a strong community. Our club heads, club alumni, as well as our faculty advisors, present a multitude of opportunities to further enrich each student's learning experiences, especially when looking forward to University. We have graduates at Carnegie-Mellon University, Waterloo Mechatronics, and UofT Engineering. Ultimately, our robotics club allows students to join and support a community that has much to offer.
							</br>
							</br>
							Upper Canada College Robotics isn't just a community: we strive to foster one. Through UCC'S Horizons program, we bring robotics to hundreds of under-privileged kids in Toronto. Not only do students gain the valuable experience of learning to teach, we give back to the community. We understand the joys and benefits of robotics. Why not spread them around?
							</p>
						</div>
					</div>
				</div>
				<div class="col-md-4">
					<div class="panel panel-success">
						<div class="panel-heading">
							<h3><span class="glyphicon glyphicon-road" aria-hidden="true"></span> Building Futures</h3>
						</div>
						<div class="panel-body">
							<p>
							Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur ultrices, sapien sit amet vestibulum tincidunt, sapien arcu laoreet diam, vel convallis felis tellus a est. Nunc in sagittis quam. Aliquam ac ipsum eu velit tempor egestas eget vel leo. Aliquam erat volutpat. Suspendisse lacinia dui at libero tincidunt accumsan. Morbi laoreet dui quam, eu volutpat sapien condimentum ut. Nam cursus aliquet dolor varius cursus. In ut magna augue. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Praesent vehicula est quam, ac luctus dui iaculis sit amet. Sed tincidunt elementum dui, at molestie turpis feugiat ac. Etiam quis nisi sit amet eros placerat interdum eu vitae tortor. Duis sollicitudin nisi id purus bibendum, sed tempor arcu tempus. Morbi pellentesque fermentum lectus et vehicula.
							</p>
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