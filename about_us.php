<?php include_once("import_info.php") ?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
		<meta name="description" content="UCC Robotics">
		<title>About Us | UCC Robotics</title>
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
				<h3>Upper Canada College Robotics</h3>
				<blockquote><h1>"Robotics is more than just a science. It's an art."</h1></blockquote>
				<h4 style="text-align:right;">- Kevin Olds, Faculty Supervisor</h4>
			</div>
			<div class="row">
				<div class="col-lg-6">
					<div class="panel panel-primary">
						<div class="panel-heading">
							<h3 class="panel-title">About Our Club</h3>
						</div>
						<div class="panel-body">
							Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur ultrices, sapien sit amet vestibulum tincidunt, sapien arcu laoreet diam, vel convallis felis tellus a est. Nunc in sagittis quam. Aliquam ac ipsum eu velit tempor egestas eget vel leo. Aliquam erat volutpat. Suspendisse lacinia dui at libero tincidunt accumsan. Morbi laoreet dui quam, eu volutpat sapien condimentum ut. Nam cursus aliquet dolor varius cursus. In ut magna augue. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Praesent vehicula est quam, ac luctus dui iaculis sit amet. Sed tincidunt elementum dui, at molestie turpis feugiat ac. Etiam quis nisi sit amet eros placerat interdum eu vitae tortor. Duis sollicitudin nisi id purus bibendum, sed tempor arcu tempus. Morbi pellentesque fermentum lectus et vehicula.
						</div>
					</div>
					<div class="panel panel-primary">
						<div class="panel-heading">
							<h3 class="panel-title">About Our Team</h3>
						</div>
						<div class="panel-body">
							Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur ultrices, sapien sit amet vestibulum tincidunt, sapien arcu laoreet diam, vel convallis felis tellus a est. Nunc in sagittis quam. Aliquam ac ipsum eu velit tempor egestas eget vel leo. Aliquam erat volutpat. Suspendisse lacinia dui at libero tincidunt accumsan. Morbi laoreet dui quam, eu volutpat sapien condimentum ut. Nam cursus aliquet dolor varius cursus. In ut magna augue. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Praesent vehicula est quam, ac luctus dui iaculis sit amet. Sed tincidunt elementum dui, at molestie turpis feugiat ac. Etiam quis nisi sit amet eros placerat interdum eu vitae tortor. Duis sollicitudin nisi id purus bibendum, sed tempor arcu tempus. Morbi pellentesque fermentum lectus et vehicula.
						</div>
					</div>
				</div>
				<div class="col-lg-6">
					<div class="panel-group" id="information" role="tablist">
						<div class="panel panel-success">
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
						<div class="panel panel-success">
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
						<div class="panel panel-success">
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