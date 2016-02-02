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
	require("functions/common.php");
	require("functions/import_info.php");
	$query = "SELECT * FROM attendance WHERE email='code@robotics.ucc.on.ca';";

	try
	{
		$stmt = $db->prepare($query);
		$stmt->execute();
	}

	catch(PDOException $ex)
	{
		die("Failed to run query: " . $ex->getMessage());
	}

	$code_info = $stmt->fetch();
	$today_code = $code_info['date'];
	$timestamp = getdate();
	$date = (string) $timestamp['year'] .  "-" . (string) $timestamp['mon'] . "-" . (string) $timestamp['mday'];
	$day = (string) $timestamp['weekday'] . " " . (string) $timestamp['month'] .  " " . (string) $timestamp['mday'] . " " . (string) $timestamp['year'];
	function changeCode(){
		if (isset($_GET['changeCode'])) {
			require("functions/common.php");
			require("functions/import_info.php");
			if(empty($_POST['new_code'])) {
				die("You forgot to enter a code!");
				header("Location: ".$_SERVER['SCRIPT_NAME']);
			}
			$_POST = filter_var_array($_POST, FILTER_SANITIZE_STRING);
			$new_code = $_POST['new_code'];
			$query = "
			REPLACE INTO attendance (
				email,
				date,
				id
			) VALUES (
				'code@robotics.ucc.on.ca',
				'$new_code',
				1
			);";
			try {
				$stmt = $db->prepare($query);
				$stmt->execute();
				header("Location: ".$_SERVER['SCRIPT_NAME']);
			}

			catch(PDOException $ex)
			{
				die("Failed to run query: " . $ex->getMessage());
				header("Location: ".$_SERVER['SCRIPT_NAME']);
			}
		}
	}
	changeCode();
	function newAnnouncement(){
		require("functions/common.php");
		require("functions/import_info.php");
		if (isset($_GET['newAnnouncement'])) {

			$_POST = filter_var_array($_POST, FILTER_SANITIZE_STRING);

			$first_name = $row_info['first_name'];
			$last_name = $row_info['last_name'];
			$title = $_POST['title'];
			$tag = $_POST['tag'];
			$content = $_POST['content'];
			$expire = time()+604800; //+ 2weeks of Unix time converted to YYYY MM DD

			$query = "
		 	INSERT INTO bulletin (
				first_name,
				last_name,
				title,
				tag,
				content,
				expire
			) VALUES (
				'$first_name',
				'$last_name',
				'$title',
				'$tag',
				'$content',
				'$expire'
			);";

			try {
				$stmt = $db->prepare($query);
				$stmt->execute();

				header("Location: ".$_SERVER['SCRIPT_NAME']);
			}

			catch(PDOException $ex)
			{
				die("Failed to run query: " . $ex->getMessage());
				header("Location: ".$_SERVER['SCRIPT_NAME']);
			}
		}
	}
	newAnnouncement();
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
		<meta name="description" content="UCC Robotics">
		<title>Admin Panel | UCC Robotics</title>
		<link rel="icon" href="css/favicon.ico" />
		<?php include_once("functions/stylesheet.php") ?>
	</head>

	<body>
		<?php include_once("navbar.php")  ?>
		<?php include_once("footer.php")  ?>
		<div class="container">
			<?php include_once("site_wide.php") ?>

			<!-- New Bulletin Announcement -->
			<div class="modal fade" tabindex="-1" role="dialog" id="newAnnouncement">
				<div class="modal-dialog">
					<div class="modal-content">
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">x</span></button>
							<h4 class="modal-title">New Announcement</h4>
						</div>
						<div class="modal-body">
							<p>
							<form action="?newAnnouncement" method="post">
								<h2>New Bulletin Announcement</h2>
								<p>
									Bulletin announcements are displayed on the <a href="user_home.php">bulletin board on the user homepage</a>. They stay active for two weeks, and then disappear.
								</p>
								<div class="row">
									<div class="col-md-8">
										<h4>Announcement Title</h4>
										<input type="text" id="title" name="title" class="form-control" placeholder="Bulletin Announcement!" required="">
									</div>
									<div class="col-md-4">
										<h4>Announcement Tag</h4>
										<select class="form-control" id="tag" name="tag" required="">
											<option value="default">News</option>
											<option value="primary">Club Events</option>
											<option value="warning">Horizons</option>
											<option value="danger">Administrative</option>
										</select>
									</div>
								</div>
								<h4>Announcement Content</h4>
								<textarea class="form-control" rows="4" id="content" name="content" required="">Hey guys, we have an announcement for you...</textarea>
						</div>
						<div class="modal-footer">
								<button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
								<button type="submit" class="btn btn-success" id="submitbutton" value="Login">Submit Bulletin</button>
							</form>
						</div>
					</div>
				</div>
			</div>

			<!-- New Site Alert -->
			<div class="modal fade" tabindex="-1" role="dialog" id="newAlert">
				<div class="modal-dialog">
					<div class="modal-content">
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">x</span></button>
							<h4 class="modal-title">New Alert</h4>
						</div>
						<div class="modal-body">
							<p>
							<form action="?newAlert" method="post">
								<h2>New Site-wide Alert</h2>
								<p>
									Site-wide Alerts appear on a new Session. They can be dismissed.
									</br>
									Eventually, alerts will disappear after being closed for the session, or possibly forever if they're logged in.
									</br>
									</br>
									Alerts don't automatically expire, though you can take down alerts (WIP).
								</p>
								<div class="row">
									<div class="col-md-6">
										<h4>Alert Type</h4>
										<select class="form-control live-preview" id="type" name="type" required="">
											<option value="primary">Administrative/Default</option>
											<option value="<div class='alert alert-dismissible alert-info fade in'>">Information/Ads</option>
											<option value="<div class='alert alert-dismissible alert-warning fade in'>">Warning/Bugs</option>
											<option value="danger">Urgent/Security</option>
										</select>
									</div>
									<div class="col-md-6">
										<h4>Alert Glyphicon</h4>
										<select class="form-control live-preview" id="glyph" name="glyph" required="">
											<option value="<span class='glyphicon glyphicon-pushpin'></span>">Default (Pushpin)</option>
											<option value="<span class='glyphicon glyphicon-alert'></span>">Warning Alert</option>
										</select>
									</div>
								</div>
								<h4>Announcement Content</h4>
								<h6>You can use HTML tags directly in the text. It will display in the live preview.
								<textarea class="form-control live-preview" rows="2" id="content" name="content" required="">Hey, here's an alert...</textarea>
								</br>
								<h2>Alert Preview</h2>
								<h6>Use this to make sure everything looks right before you submit!</h6>
								<div class="alert alert-dismissible alert-warning fade in">
									<button type="button" class="close" data-dismiss="alert">x</button>
									<p><span class="glyph"></span><span class="content"></span></p>
								</div>
						</div>
						<div class="modal-footer">
								<button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
								<button type="submit" class="btn btn-success" id="submitbutton" value="Login">Submit Alert</button>
							</form>
						</div>
					</div>
				</div>
			</div>

			<!-- Actual Site Content -->
			<div class="row">
				<div class="col-md-4">
					<div class="panel panel-primary">
						<div class="panel-heading">
							<h4><span class="glyphicon glyphicon-envelope"></span> Messages, Alerts, and Notifications</h4>
						</div>
						 <ul class="list-group">
							<li class="list-group-item list-group-item-info"><button class="btn btn-info" type="button" data-toggle="modal" data-target="#newAnnouncement"><span class="glyphicon glyphicon-inbox"></span> Create a new message.</button></li>
							<li class="list-group-item list-group-item-warning"><button class="btn btn-warning" type="button" data-toggle="modal" data-target="#newAnnouncement"><span class="glyphicon glyphicon-bullhorn"></span> Create a new bulletin annoucement.</button></li>
							<li class="list-group-item list-group-item-danger"><button class="btn btn-danger" type="button" data-toggle="modal" data-target="#newAlert"><span class="glyphicon glyphicon-bell"></span> Create a new site alert.</button></li>
						</ul>
					</div>
					<div class="panel panel-info">
						<div class="panel-heading">
							<h4><span class="glyphicon glyphicon-certificate"></span> Achievement Control</h4>
						</div>
						<div class="panel-body">
							Sample text sample text sample text.
						</div>
					</div>
				</div>
				<div class="col-md-8">
					<div class="well well-lg">
						<h2>Today is <b><?php echo $day; ?></b></h2>
						<form class="form-signin" action="?changeCode" method="post">
							<div class="row">
								<div class="col-sm-4">
									<h4>The current code is: <b><?php echo $today_code; ?></b></h4>
								</div>
								<div class="col-sm-8">
									<div class="input-group">
										<input type="text" id="new_code" name="new_code" class="form-control" placeholder="Blank Space." required="">
										<span class="input-group-btn">
											<button class="btn btn-default" type="submit" id="submitbutton" value="Login">Set New Code</button>
										</span>
									</div>
								</div>
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
							<li role="presentation" class="active"><a href="#clubday" role="tab" data-toggle="tab">Daily </a></li>
							<li role="presentation"><a href="#clubmonth" role="tab" data-toggle="tab">Monthly</a></li>
							<li role="presentation"><a href="#clubstats" role="tab" data-toggle="tab">Statistics</a></li>
							<li role="presentation"><a href="#search" role="tab" data-toggle="tab">Individual</a></li>
							<li role="presentation"><a href="#clubtable" role="tab" data-toggle="tab">Attendance Table</a></li>
						</ul>

						<div class="tab-content">
							<div role="tabpanel" class="tab-pane active fade in" id="clubday">
  							<div id="graph_clubday" style="width:600px;height:250px;"></div>
							</div>
							<div role="tabpanel" class="tab-pane fade" id="clubmonth">
								<div id="graph_clubmonth" style="width:600px;height:250px;"></div>
							</div>
							<div role="tabpanel" class="tab-pane fade" id="clubstats">
								<table class="table table-condensed">
									<tr>
										<td>Members Logged Today</td>
										<td>3</td>
									</tr>
									<tr>
										<td>Members Logged This Week</td>
										<td>13</td>
									</tr>
									<tr>
										<td>Members Logged This Month</td>
										<td>42</td>
									</tr>
									<tr>
										<td>Members Logged This Year</td>
										<td>255</td>
									</tr>
									<tr>
										<td>Total Members Logged</td>
										<td>747</td>
									</tr>
								</table>
							</div>
							<div role="tabpanel" class="tab-pane fade" id="search">
								Here, there will be a search bar + a table (or graph) of the attendance record of said student.
							</div>
							<div role="tabpanel" class="tab-pane fade" id="clubtable">
								Here, there will be a table with every single attendance record.
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
		<script src="js/live-preview.js"></script>
		<script src="js/plotly.js"></script>
		<script>
			//club day info
      var trace1_clubday = {
        x: ["Monday", "Tuesday", "Wednesday", "Thursday", "Friday"],
        y: [5, 6, 7, 1, 5],
        type: 'scatter',
        name: 'This Week',
        line: {
          color: 'rgb(220, 220, 220)',
          width: 3,
          shape: 'spline'
        }
      };

      var trace2_clubday = {
        x: ["Monday", "Tuesday", "Wednesday", "Thursday", "Friday"],
        y: [16, 5, 11, 9, 23],
        type: 'scatter',
        name: 'Monthly Average',
        line: {
          color: 'rgb(151, 187, 205)',
          width: 3,
          shape: 'spline'
        }
      };

      var trace3_clubday = {
        x: ["Monday", "Tuesday", "Wednesday", "Thursday", "Friday"],
        y: [6,23,18,4,10],
        type: 'scatter',
        name: 'Yearly Average',
        line: {
          color: 'rgb(33, 33, 33)',
          width: 3,
          shape: 'spline'
        }
      };

      var data_clubday = [trace1_clubday, trace2_clubday, trace3_clubday];

      var layout_clubday = {
        title: 'Club Attendance Per Day',
        xaxis: {
          title: 'Day of the Week'
        },
        yaxis: {
          title: 'Member Attendance'
        },
        font: {
          family: '"Lato","Open Sans", verdana, arial, sans-serif'
        },
        paper_bgcolor: 'rgba(0,0,0,0)',
        plot_bgcolor: 'rgba(0,0,0,0)'
      };

			//club month info
			var trace1_clubmonth = {
				x: ["September", "October", "November", "December", "January", "February", "March", "April", "May", "June"],
				y: [35,56,49,23,58,63,14,33,32,29],
				type: 'scatter',
				name: 'This Week',
				line: {
					color: 'rgb(220, 220, 220)',
					width: 3,
					shape: 'spline'
				}
			};

			var data_clubmonth = [trace1_clubmonth];

			var layout_clubmonth = {
				title: 'Club Attendance Per Month',
				xaxis: {
					title: 'Month'
				},
				yaxis: {
					title: 'Member Attendance'
				},
				font: {
					family: '"Lato","Open Sans", verdana, arial, sans-serif'
				},
				paper_bgcolor: 'rgba(0,0,0,0)',
				plot_bgcolor: 'rgba(0,0,0,0)'
			};

			//global info
      var tweaks = {
        /*
        showLink: false,
        displaylogo: false
        */
        displayModeBar: false
      }

      Plotly.newPlot('graph_clubday', data_clubday, layout_clubday, tweaks);
			Plotly.newPlot('graph_clubmonth', data_clubmonth, layout_clubmonth, tweaks);
		</script>
	</body>
</html>
