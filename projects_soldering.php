<?php include_once("functions/import_info.php") ?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
		<meta name="description" content="UCC Robotics">
		<title>Projects - Soldering | UCC Robotics</title>
		<link rel="icon" href="css/favicon.ico" />
		<?php include_once("functions/stylesheet.php") ?>
	</head>

	<body>
		<?php include_once("navbar.php")  ?>
		<?php include_once("footer.php")  ?>
		<div class="container">
			<?php include_once("site_wide.php") ?>
			<div class="jumbotron">
				<h1 class="page-header"><span class="glyphicon glyphicon-scale" aria-hidden="true"></span> Soldering Workshops<small> creating budding engineers</small></h1>
			</div>
			<div class="row">
				<div class="col-md-6">
					<h2>Soldering Overview</h2>
					<div class="panel-group" id="accordion1" role="tablist" aria-multiselectable="true">
						<div class="panel panel-primary">
							<div class="panel-heading" role="tab" id="headingOne">
								<h4 class="panel-title">
								<a role="button" data-toggle="collapse" data-parent="#accordion1" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
								What is Soldering?
								</a>
								</h4>
							</div>
							<div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
								<div class="panel-body">
								Soldering <a href="https://en.wikipedia.org/wiki/Soldering">(sädər)</a> is the process of connecting two wires using a third medium, often called solder.
								This medium is heated up with a soldering iron, and carefully placed on the connection between two wires.
								An invaluable electrical engineering skill, soldering has many applications: connecting electrical joints, fix broken wires, and more recently, computer engineering and electronics.
								In the modern production world, most industry-level products use machine soldering; hand soldering still remains popular among hobbyists and small companies.
								Soldering is extremely popular because, unlike welding, soldering doesn't melt any of the working parts; instead, only the filler metal (solder) is melted.
								</br>
								</br>
								While soldering itself isn't too hard, learning it properly and safely with proper guidance is rare. That's why UCC Robotics holds periodical soldering workshops;
								we believe that teaching kids how to solder, not only efficiently but safely, is a core fundamental of electrical engineering and hands-on procedures.

								</div>
							</div>
						</div>
						<div class="panel panel-primary">
							<div class="panel-heading" role="tab" id="headingTwo">
								<h4 class="panel-title">
								<a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion1" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
								What Happens in Soldering Workshops?
								</a>
								</h4>
							</div>
							<div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
								<div class="panel-body">
									Experienced robotics instructors will go over technique, safety rules, and the task at hand for the workshop.
									After that, attendees are split into groups, where they will be working on a specific task (such as wiring a speaker to a breadboard).
									Throughout the workshop, instructors will supervise the attendees, ensuring they are following safety procedure and are completing the task at hand.
									</br>
									</br>
									Activities that will be part of workshops will include:
									<ul>
										<li>Connecting two wires.</li>
										<li>Connecting wires to breadboards.</li>
										<li>Connecting electronic components to breadboards.</li>
										<li>Desoldering components from breadboards.</li>
									</ul>
								</div>
							</div>
						</div>
						<div class="panel panel-primary">
							<div class="panel-heading" role="tab" id="headingThree">
								<h4 class="panel-title">
								<a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion1" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
								When is the Next Soldering Workshop?
								</a>
								</h4>
							</div>
							<div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
								<div class="panel-body">
								While we don't have a definitve date yet, the club plans to hold two more soldering workshops in the year: one for general students,
								and one for more advanced soldering work. A tentative date has been set for 2 weeks after March Break, but that is yet to be confirmed.
								</div>
							</div>
						</div>
					</div>
				</div>

				<div class="col-md-6">
					<h2>Futher Learning</h2>
					<div class="panel-group" id="accordion2" role="tablist" aria-multiselectable="true">
						<div class="panel panel-info">
							<div class="panel-heading" role="tab" id="headingOne">
								<h4 class="panel-title">
								<a role="button" data-toggle="collapse" data-parent="#accordion2" href="#collapseFour" aria-expanded="true" aria-controls="collapseFour">
								Lorem Ipsum.
								</a>
								</h4>
							</div>
							<div id="collapseFour" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
								<div class="panel-body">
								Lorem Ipsum.
								</div>
							</div>
						</div>
						<div class="panel panel-info">
							<div class="panel-heading" role="tab" id="headingTwo">
								<h4 class="panel-title">
								<a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion2" href="#collapseFive" aria-expanded="false" aria-controls="collapseTwo">
								Lorem Ipsum.
								</a>
								</h4>
							</div>
							<div id="collapseFive" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
								<div class="panel-body">
								Lorem Ipsum.
								</div>
							</div>
						</div>
						<div class="panel panel-info">
							<div class="panel-heading" role="tab" id="headingThree">
								<h4 class="panel-title">
								<a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion2" href="#collapseSix" aria-expanded="false" aria-controls="collapseThree">
								Lorem Ipsum.
								</a>
								</h4>
							</div>
							<div id="collapseSix" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
								<div class="panel-body">
								Lorem Ipsum.
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
