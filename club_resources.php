<?php include_once("functions/import_info.php") ?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
		<meta name="description" content="UCC Robotics">
		<title>Resources | UCC Robotics</title>
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
				<h1 class="page-header"><span class="glyphicon glyphicon-wrench" aria-hidden="true"></span> Resources <small>for robotics and other things</small></h1>
			</div>
			<div class="row">
				<div class="col-md-6">
					<h2>Recommended Resources</h2>
					<div class="panel-group" id="accordion1" role="tablist" aria-multiselectable="true">
						<div class="panel panel-primary">
							<div class="panel-heading" role="tab" id="headingOne">
								<h4 class="panel-title">
								<a role="button" data-toggle="collapse" data-parent="#accordion1" href="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
								Learn Computer Science: <b>C</b>
								</a>
								</h4>
							</div>
							<div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
								<div class="panel-body">
									<h2>C</h2>
									C, one of the foundation languages of Computer Science, is the language used to program the VEX robots. A flavor of C, ArduinoC, is used to program Arduinos. Learning C will give students an understanding of basic modern-day programming, and a useful skillset in all forms of Computer Science.
									<ul>
										<li><a href="http://www.learn-c.org">Learn C</a> is a good, but short tutorial that gives a strong foundation and understanding of the language.</li>
										<li><a href="http://aelinik.free.fr/c/">Teach Yourself C in 24 hours</a> is an in-depth guide on the language, but isn't as user-friendly.</li>
										<li><a href="https://learnxinyminutes.com">Learn X in Y Minutes</a> is a useful C reference, and also features resources for other programming languages.</li>
									</ul>
								</div>
							</div>
						</div>
						<div class="panel panel-primary">
							<div class="panel-heading" role="tab" id="headingTwo">
								<h4 class="panel-title">
								<a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion1" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
								Prepare for Engineering: <b>Toolkit</b>
								</a>
								</h4>
							</div>
							<div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
								<div class="panel-body">
								<h2>Tools</h2>
								Engineering often requires a lot of math, physics, and materials. Here are some tools that you can use to your advantage!
								<ul>
									<li><a href="http://www.wolframalpha.com/">Wolfram Alpha</a> is a robust search engine that can be used for cacluations, proofs, and formulas! It's a great resource to use along side studying, learning, or experimenting.</li>
									<li><a href="https://en.wikipedia.org/wiki/Kinematics">Wikipedia</a>, while often ostracized, has some in-depth explanations for many concepts. The linked Kinematics page can help students understand basic concepts used in Robotics.</li>
									<li><a href="http://www.printfreegraphpaper.com/">Free Graph Paper</a>. Self-explanatory, but graph paper can help students create better diagrams and express their thoughts clearly.</li>
									<li><a href="http://p-fst1.pixstatic.com/5165b2c374c5b60d0a005ccf._w.540_s.fit_.jpg">Fastener and Nut Identification chart</a>. Useful for budding engineers having trouble following instructions or knowing what parts are which.</li>
								</ul>
								</div>
							</div>
						</div>
						<div class="panel panel-primary">
							<div class="panel-heading" role="tab" id="headingThree">
								<h4 class="panel-title">
								<a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion1" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
								Learning
								</a>
								</h4>
							</div>
							<div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
								<div class="panel-body">
									Pay attention is physics class, and ask good questions.
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
								<a role="button" data-toggle="collapse" data-parent="#accordion2" href="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
								Learn to code
								</a>
								</h4>
							</div>
							<div id="collapseFour" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
								<div class="panel-body">
								Talk to a club member, or check out the Digital Media and Computer Science club for more information about coding.<br>
								<h4>Learn a language</h4>
								<a href="https://www.codecademy.com/"> codecademy.com</a> Start Here! Choose python, unless you have a reason.<br>
								<a href="https://learnxinyminutes.com/"> learnxinyminutes.com</a> Use this once you know a language, or just as a reference sheet<br>
								<a href="https://www.khanacademy.org/computing/computer-programming"> kahnacademy.com</a> Not the best for learning languages, bu decent CS section)<br>
								<h4>Python Libraries</h2>
								<a href="http://brew.sh/">Homebrew</a> is used for installing pretty much any library.<br>
								<a href="http://www.sympy.org/en/index.html">SymPy library</a>. Awesome python library for doing hard equations.<br>
								<a href="http://matplotlib.org/">Matplotlib</a> is by far the best library for graphing and plotting data in Python.<br>

								</div>
							</div>
						</div>
						<div class="panel panel-info">
							<div class="panel-heading" role="tab" id="headingTwo">
								<h4 class="panel-title">
								<a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion2" href="#collapseFive" aria-expanded="false" aria-controls="collapseTwo">
								Electrical Engineering Resources
								</a>
								</h4>
							</div>
							<div id="collapseFive" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
								<div class="panel-body">
									<a href="https://learn.sparkfun.com/tutorials/resistors/decoding-resistor-markings">Read a resistor</a>. Not exactly life saving, but a neat thing to know.<br>

									<a href="http://www.sengpielaudio.com/FormulaWheelElectronics.gif">Handy electrical equations chart.</a><br>

									<a href="http://www.asciitohex.com/">Binary/hex/decimal conversion tool</a>. Also some stuff. If you're on OSX, just use the default calculator set to "Programmer".<br>
								</div>
							</div>
						</div>
						<div class="panel panel-info hidden">
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