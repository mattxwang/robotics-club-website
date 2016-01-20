<?php include_once("functions/import_info.php") ?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
		<meta name="description" content="UCC Robotics">
		<title>Resources | UCC Robotics</title>
		<link rel="icon" href="css/favicon.ico" />
		<?php include_once("functions/stylesheet.php") ?>

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
									C, one of the foundation languages of Computer Science, is the language used to program the VEX robots, as well as Arduinos. Learning C will give students an understanding of basic modern-day programming concepts. Here are some good resources to learn C!
									</br>
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
								</br>
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
								Learn Computer Science: <b>Learning Languages</b>
								</a>
								</h4>
							</div>
							<div id="collapseFour" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
								<div class="panel-body">
									<h2>Programming Languages</h2>
									Adding more languages to a student's arsenal allows them to tackle problems easier, especially after getting C under their belt. Here are some other languages we recommend learning:
									</br>
									<ul>
										<li><a href="https://www.python.org">Python</a> is a robust, but easy to learn interpreted language with elegant, easy to read syntax and a variety of libraries.</li>
										<li><a href="https://www.java.com">Java</a> is the world's most used language; it's utility is used in Android devices, Desktop apps, and a variety of other platforms. </li>
										<li><a href="https://php.net">PHP</a> is a widely used server-side scripting language used in web developement. Even this website uses PHP! </li>
										<li><a href="https://www.javascript.com">Javascript</a>, while unrelated to Java, is a web-based scripting language used to perfect user interfaces. </li>
										<li>Javascript also features two major libraries, <a href="https://jquery.com">jQuery</a> and <a href="nodejs.org">Node.js</a>, widely used to enhance user experience. </li>
									</ul>
									<h2>Learning Resources</h2>
									Learning languages may be tough, but with some documented resources, and some mentorship, picking up languages will be a breeze.
									</br>
									<ul>
										<li><a href="https://www.codecademy.com">Codecademy</a> is one of the most well-known and used websites to learn code, featuring a vast amount of languages to learn, including <b>Python, HTML/CSS, Javascript, PHP, and Ruby.</b></li>
										<li><a href="https://learnxinyminutes.com">Learn X in Y Minutes</a> is a great reference resource to brush up programming skills. </li>
									</ul>
									<h2>Programming Resources</h2>
									Programming resources to make computer science easier.
									</br>
									<ul>
										<li><a href="http://brew.sh/">Homebrew</a> makes installing mac libraries a walk in the park.</li>
										<li><a href="http://github.com/">Github</a> is the most widely used <a href="https://en.wikipedia.org/wiki/Version_control">version control</a> software that makes working with others a breeze. </li>
										<li><a href="https://www.sublimetext.com/">Sublime Text</a> is an all-in-one text-editor with a robust <a href="https://packagecontrol.io/">addons</a> to supercharge your text editor.</li>
										<li><a href="https://atom.io/">Atom</a> is a heavily modifiable text-editor with a variety of personalized <a href="">packages</a>, and with lots of support for <a href="http://github.com/">Github</a>.</li>
									</ul>
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
						<div class="panel panel-info">
							<div class="panel-heading" role="tab" id="headingThree">
								<h4 class="panel-title">
								<a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion2" href="#collapseSix" aria-expanded="false" aria-controls="collapseThree">
								Further Education: <b>Self-Teaching</b>
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
