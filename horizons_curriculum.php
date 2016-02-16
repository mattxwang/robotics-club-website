<?php include_once("functions/import_info.php") ?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
		<meta name="description" content="UCC Robotics">
		<title>Horizons Curriculum | UCC Robotics</title>
		<link rel="icon" href="css/favicon.ico" />
		<?php include_once("functions/stylesheet.php") ?>
		<script src="js/jquery.js"></script>
	</head>

	<body>
		<?php include_once("navbar.php")  ?>
		<?php include_once("footer.php")  ?>
		<div class="container">
			<?php include_once("site_wide.php") ?>
			<h1 class="page-header"><span class="glyphicon glyphicon-blackboard" aria-hidden="true"></span> Horizons Curriculum <small>2016</small></h1>
			<h6>
				Horizons sessions are held in Room 304, with snacks in room CC3 beforehand. Every session starts at 3:30, and ends at 4:30. Our Schedule is <a href="horizons_schedule.php">here</a>.
				</br>
				</br>
				The same curriculum is run for both sessions.
			</h6>

			<div class="panel-group" id="accordion1" role="tablist" aria-multiselectable="true">
				<div class="panel panel-primary">
					<div class="panel-heading" role="tab" id="headingOne">
						<h4 class="panel-title">
						<a role="button" data-toggle="collapse" data-parent="#accordion1" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
						Week One: Robotics 101!
						</a>
						</h4>
					</div>
					<div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
						<div class="panel-body">
							<div class="row">
								<div class="col-lg-4">
									<img src="img/placeholder.png">
								</div>
								<div class="col-lg-8">
									The Robotics Horizons Mentees and Mentors get to know each other, and after brainstorming on whiteboards discuss major ideas of robotics. Before the discussion, <a href="https://docs.google.com/presentation/d/1GiFKaW-LMAiWC_KkBrnbGocS1rLxWmSkZMHn5EA-tDY/edit?usp=sharing"> a presentation on "cool robots"</a> is shown to the mentees. The mentors guide this conversation, weaving in important vocabulary and ideas, such as the the <a href="https://en.wikipedia.org/wiki/Three_Laws_of_Robotics">the Three Laws of Robotics</a> and an <a href="https://en.wikipedia.org/wiki/Autonomous_robot"> "autonomous robot"</a>.
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="panel panel-primary">
					<div class="panel-heading" role="tab" id="headingTwo">
						<h4 class="panel-title">
						<a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion1" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
						Week Two: Makey-Makeys and User Input!
						</a>
						</h4>
					</div>
					<div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
						<div class="panel-body">
							<div class="row">
								<div class="col-lg-4">
									<img src="img/horizons/makey.jpg" height="128px">
								</div>
								<div class="col-lg-8">
									Horizons students learn how to create buttons that can control user input, such as key presses! Using Makey-Makeys, Playdoh, and <a href="http://jack.antinode.ca/asteroids">a game of Asteroids</a>, the students learn about electrical circuits and input concepts.
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="panel panel-primary">
					<div class="panel-heading" role="tab" id="headingThree">
						<h4 class="panel-title">
						<a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion1" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
						Week Three: Create an mBot!
						</a>
						</h4>
					</div>
					<div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
						<div class="panel-body">
							<div class="row">
								<div class="col-lg-4">
									<img src="img/horizons/mbot.jpg" height="128px">
								</div>
								<div class="col-lg-8">
									Students work together to create an mBot, a moveable Arduino-powered car. Mentees learn about assembly etiquette, how to use mechanical tools, using instruction resources, and the components of an electrical car.
									</br>
									</br>
									In addition to the instruction manual included with the kit, a slideshow containing photos of each step will be projected to the board, which can be found <a href="https://docs.google.com/presentation/d/1LvC0mSOVVTLJn28_7iAjtWjzSpRUnXzez3Pl7zegY54/edit?usp=sharing">here</a>. Through the building process, mentors will be assisting the mentees on constructing the mBot properly.
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="panel panel-primary">
					<div class="panel-heading" role="tab" id="headingFour">
						<h4 class="panel-title">
						<a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion1" href="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
						Week Four: Program Mbot
						</a>
						</h4>
					</div>
					<div id="collapseFour" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFour">
						<div class="panel-body">
							<div class="row">
								<div class="col-lg-4">
									<img src="img/placeholder.png" style="80%">
								</div>
								<div class="col-lg-8">
									Coming Soon!
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>


		<script src="js/jquery.easing.min.js"></script>
		<script src="js/bootstrap.js"></script>
		<script src="js/nav-collapse.js"></script>
	</body>
</html>
