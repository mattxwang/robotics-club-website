<?php include_once("functions/import_info.php") ?>
<?php
	require("functions/common.php");
	//redir on no login
	if(empty($_SESSION['user'])){
		header("Location: login.php");
		die("Redirecting to login.php");
	}
	//redir if no permissions
	if($_SESSION['user']['admin'] === 0){
		header("Location: user_home.php");
		die("Redirecting to user_home.php");
	}

	$timestamp = getdate();
	$day = (string) $timestamp['weekday'] . " " . (string) $timestamp['month'] .  " " . (string) $timestamp['mday'] . " " . (string) $timestamp['year'];

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
		<script src="js/jquery.js"></script>
	</head>

	<body>
		<?php include_once("navbar.php")  ?>
		<?php include_once("footer.php")  ?>
		<div class="container">
			<?php include_once("site_wide.php") ?>
			<!-- Actual Site Content -->
			<div class="jumbotron">
				<h1 class="page-header">Today is <b><?php echo $day; ?></b></h2>
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
						<div id="graph_clubday" class="img-responsive"></div>
					</div>
					<div role="tabpanel" class="tab-pane fade" id="clubmonth">
						<div id="graph_clubmonth" class="img-responsive"></div>
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

		<script src="js/jquery.easing.min.js"></script>
		<script src="js/bootstrap.js"></script>
		<script src="js/nav-collapse.js"></script>
		<script src="js/live-preview.js"></script>
		<script src="js/plotly.js"></script>
		<script>
			function httpGet(theUrl){
				var xmlHttp = new XMLHttpRequest();
				xmlHttp.open( "GET", theUrl, false ); // false for synchronous request
				xmlHttp.send( null );
				return xmlHttp.responseText;
			}
			var attendance_data = JSON.parse(httpGet("functions/attendance_json.php"));
			var total_members_day = 0;
			var total_members_week = 0;
			var total_members_month = 0;
			var total_members_year = 0;
			var total_members_alltime = attendance_data.length()-1;

			console.log(total_members_alltime);


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
