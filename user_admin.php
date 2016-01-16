<?php include_once("functions/import_info.php") ?>
<?php
	require("functions/common.php");
	if(empty($_SESSION['user'])){ 
		header("Location: login.php"); 
		die("Redirecting to login.php"); 
	}
	elseif($_SESSION['user']['admin'] != 1){
		header("Location: user_account.php"); 
		die("Redirecting to user_account.php");
	}
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
		<meta name="description" content="UCC Robotics">
		<title>Admin Panel | UCC Robotics</title>
		<link rel="icon" href="css/favicon.ico" />
		<?php include_once("night_mode.php") ?>
		<link rel="stylesheet" href="css/style.css" />
		<link href='css/bootstrap-night.css' rel='stylesheet'>
		<link href='css/bootstrap.css' rel='stylesheet'>
		<script src="js/chart.js"></script>
	</head>

	<body>
		<?php include_once("navbar.php")  ?>
		<?php include_once("footer.php")  ?>
		<div class="container">
			<?php include_once("site_wide.php") ?>
			<div class="row">
				<div class="col-md-4">
					<div class="panel panel-primary">
						<div class="panel-heading">
							<h3>Messages, Alerts, and Notifications <span class="glyphicon glyphicon-envelope"></span></h3>
						</div>
						 <ul class="list-group">
							<li class="list-group-item list-group-item-info">Create a new message. <span class="glyphicon glyphicon-inbox"></span></li>
							<li class="list-group-item list-group-item-warning">Create a new alert. <span class="glyphicon glyphicon-bullhorn"></span></li>
							<li class="list-group-item list-group-item-danger">Create a new notifications. <span class="glyphicon glyphicon-bell"></span></li>
						</ul>
					</div>
					<div class="panel panel-info">
						<div class="panel-heading">
							<h3>Achievements <span class="glyphicon glyphicon-certificate"></span></h3>
						</div>
						<div class="panel-body">
							Sample text sample text sample text.
						</div>
					</div>
				</div>
				<div class="col-md-8">
					<div class="well well-lg">
						<form class="form-signin" action="functions/attendance.php" method="post">
							<div class="row">
								<div class="col-sm-4">
									<h5>Set New Attendance Code: </h5>
								</div>
								<div class="col-sm-8">
									<input type="text" id="new_attendance" name="new_attendance" class="form-control" required="">
								</div>
						</form>
					</div>
					<div class="well well-lg">
						<h3>Track member attendance.</h3>
						<div class="input-group">
							<span class="input-group-btn">
								<button class="btn btn-default" type="button"><span class="glyphicon glyphicon-search"></span></button>
							</span>
							<input type="text" class="form-control" placeholder="john.smith@ucc.on.ca">
						</div>
						<ul class="nav nav-tabs" role="tablist">
							<li role="presentation" class="active"><a href="#daily" role="tab" data-toggle="tab">Daily</a></li>
							<li role="presentation"><a href="#weekly" role="tab" data-toggle="tab">Weekly</a></li>
							<li role="presentation"><a href="#monthly" role="tab" data-toggle="tab">Monthly</a></li>
							<li role="presentation"><a href="#spreadsheet" role="tab" data-toggle="tab">Spreadsheet</a></li>
						</ul>

						<div class="tab-content">
							<div role="tabpanel" class="tab-pane active fade in" id="daily">
								Here, there will be a graph of attendance of all members per day.
								<div style="width:100%">
									<div>
										<canvas id="daily" height="450" width="600"></canvas>
									</div>
								</div>
							</div>
							<div role="tabpanel" class="tab-pane fade" id="weekly">
								Here, there will be a graph of attendance of all members per week.
							</div>
							<div role="tabpanel" class="tab-pane fade" id="monthly">
								Here, there will be a graph of attendance of all members per month.
							</div>
							<div role="tabpanel" class="tab-pane fade" id="spreadsheet">
								Here, there will be a table with every single attendance record.
							</div>
							<div role="tabpanel" class="tab-pane fade" id="search">
								
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<script>
			var lineChartData = {
				labels : ["Monday", "Tuesday", "Wednesday", "Thursday", "Friday"],
				datasets : [
					{
						label: "This Week",
						fillColor : "rgba(220,220,220,0.2)",
						strokeColor : "rgba(220,220,220,1)",
						pointColor : "rgba(220,220,220,1)",
						pointStrokeColor : "#fff",
						pointHighlightFill : "#fff",
						pointHighlightStroke : "rgba(220,220,220,1)",
						data : [1,1,0,1,0]
					},
					{
						label: "Weekly Average",
						fillColor : "rgba(151,187,205,0.2)",
						strokeColor : "rgba(151,187,205,1)",
						pointColor : "rgba(151,187,205,1)",
						pointStrokeColor : "#fff",
						pointHighlightFill : "#fff",
						pointHighlightStroke : "rgba(151,187,205,1)",
						data : [0.2,0.6,0.1,1,0.3]
					}
				]

			}

			window.onload = function(){
				var ctx = document.getElementById("daily").getContext("2d");
				window.myLine = new Chart(ctx).Line(lineChartData, {
					responsive: true
				});
			}


		</script>
		<script src="js/jquery.js"></script>
		<script src="js/jquery.easing.min.js"></script>
		<script src="js/bootstrap.js"></script>
		<script src="js/nav-collapse.js"></script>
	</body>
</html>