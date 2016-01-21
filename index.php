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
							<h3><span class="glyphicon glyphicon-blackboard" aria-hidden="true"></span> About Our Club</h3>
						</div>
						<div class="panel-body">
							<blockquote><h3>Robotics is more than just a science. It's an art.</h3></blockquote>
							<h5 style="text-align:right;">- Kevin Olds, Faculty Supervisor</h5>
						</div>
						<div class="panel-footer"
							<a class="btn btn-primary" href="club_about.php" role="button">Learn why <span class="glyphicon glyphicon-menu-right" aria-hidden="true"></span></a>
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
							Robotics and Computer Science are some of the most innovative and sought-after careers, simply due to the ever-changing needs of companies, institutions, and society. UCC Robotics provides this experience to our
							club members, through three core fundamentals that are carried on to their professional lives. Firstly, our club encourages creative problem solving. Through the <a href="vex_about.php">VEX competition</a>,
							we provide students with a problem to solve (scoring points), restrictions (regulations as well as money and time), and a planning methodology (prototyping, testing, and bug fixing). Through in-house Computer Science
							problems and tasks, we force members to utilise their brain's creative side to jump over numerous logical hurdles.
							These skills not only help club members with creating awesome robots now, but gives them valuable problem solving skills for future careers.
							</br>
							</br>
							Secondly, our club gives students opportunities to adapt to new technology.
							Through projects such as our <a href="projects_arduino.php">Arduino sessions</a>, we give our members the ability to learn about innovative technologies, how to use them, and how to apply them in the real world.
							In the future, club members will be better suited to use this type of technology, as well as learning how to quickly integrate new technology into their current workflow.
							</br>
							</br>
							Finally, we teach students valuable work management, organisation, and leadership skills. Modelling our club's project system after <a href="https://investor.google.com/corporate/2004/ipo-founders-letter.html">Google's 20%  Time</a>, we let students run and present their own projects to the club, while still contributing to club events. Examples include <a href="https://github.com/malsf21/robotics-club-website">this very own website</a>,
							<a href="horizons_about.php">Horizons Robotics</a>, and <a href="projects_arduino.php">Arduino sessions</a>, all of which are completely student organized and student run. This gives members better understand how
							professional workflow functions: gathering materials, creating a sales pitch, organizing and managing human resources, setting goals and plans, and ultimately polishing them up for release. The use of resources such as
							<a href="http://github.com">github</a> get members accquainted with real-world code-management software, immersing them into a true work environment. Ultimately, we create the new engineers, coders, and project managers of tomorrow.
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
