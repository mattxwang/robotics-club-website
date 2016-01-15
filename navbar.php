<!-- Navbar -->
<script src="nightmode.js"></script>
<nav class="navbar navbar-default navbar-fixed-top">
	<div class="container-fluid">
		<div class="navbar-header">
			<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse-func">
				<span class="glyphicon glyphicon-home" aria-hidden="true" style="color:white;"></span>
			</button>
			<a href="index.php" class="navbar-brand">Upper Canada College Robotics</a>
		</div>

		<div class="collapse navbar-collapse" id="navbar-collapse-func">
			<ul class="nav navbar-nav">
				<li class="dropdown">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button">About <span class="caret"></span></a>
					<ul class="dropdown-menu" role="menu">
						<li><a href="club_about.php">About Us</a></li>
						<li><a href="club_schedule.php">Schedule</a></li>
						<li><a href="club_resources.php">Resources</a></li>
						<li class="divider"></li>
						<li><a href="club_contact.php">Contact Us</a></li>
					</ul>
				</li>
				<li class="dropdown">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button">VEX <span class="caret"></span></a>
					<ul class="dropdown-menu" role="menu">
						<li><a href="vex_about.php">About VEX</a></li>
						<li><a href="vex_schedule.php">Competition Schedule</a></li>
						<li><a href="vex_resources.php">Competition Resources</a></li>
						<li class="divider"></li>
						<li><a href="http://www.vexrobotics.com/">VEX Website</a></li>
					</ul>
				</li>
				<li class="dropdown">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button">Horizons <span class="caret"></span></a>
					<ul class="dropdown-menu" role="menu">
						<li><a href="horizons_about.php">About Horizons</a></li>
						<li><a href="horizons_schedule.php">Horizons Schedule</a></li>
						<li><a href="horizons_curriculum.php">Horizons Curriculum</a></li>
						<li class="divider"></li>
						<li><a href="https://bluenet.ucc.on.ca/horizons">Horizons Website</a></li>
					</ul>
				</li>
				<li class="dropdown">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button">Projects <span class="caret"></span></a>
					<ul class="dropdown-menu" role="menu">
						<li><a href="projects_arduino.php">Arduino</a></li>
						<li><a href="projects_keyboard.php">Keyboards</a></li>
						<li><a href="projects_soldering.php">Soldering</a></li>
					</ul>
				</li>
			</ul>
					
			<ul class="nav navbar-nav navbar-right" style="padding-right:20px;">
				<li class="dropdown">
					<button type="button" class="btn btn-success navbar-btn" href="#" class="dropdown-toggle" data-toggle="dropdown">
					Welcome <b>User</b> <span class="caret"></span>
					</button>
					<ul class="dropdown-menu" role="menu">
						<li><a href="#">Notifications <span class="badge">42</span></a></li>
						<li class="divider"></li>
						<li><a href="#">Account Settings <span class="glyphicon glyphicon-cog" aria-hidden="true"></span></a></li>
						<li class="divider"></li>
						<li><a onclick="toggle_night()">Toggle Nightmode <span class="glyphicon glyphicon-adjust" aria-hidden="true"></span></a></li>
					</ul>
				</li>
			</ul>
		</div>
	</div>
</nav>