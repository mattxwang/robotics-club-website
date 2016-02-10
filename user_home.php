<?php include_once("functions/import_info.php") ?>
<?php
	require("functions/common.php");
	if(empty($_SESSION['user'])){
		header("Location: login.php");
		die("Redirecting to login.php");
	}
?>
<?php
// string declarations
$timestamp = getdate();
$date = (string) $timestamp['year'] .  "-" . (string) $timestamp['mon'] . "-" . (string) $timestamp['mday'];
$day = (string) $timestamp['weekday'] . " " . (string) $timestamp['month'] .  " " . (string) $timestamp['mday'] . " " . (string) $timestamp['year'];
//attendance check in
function checkIn(){
	if (isset($_GET['checkIn'])) {
		require("functions/common.php");
		require("functions/import_info.php");
		if(empty($_POST['attendance_code'])) {
			die("You forgot to enter a code!");
			header("Location: ".$_SERVER['SCRIPT_NAME']);
		}
		//string redeclarations (doesn't work without these)
		$timestamp = getdate();
		$date = (string) $timestamp['year'] .  "-" . (string) $timestamp['mon'] . "-" . (string) $timestamp['mday'];

		$_POST = filter_var_array($_POST, FILTER_SANITIZE_STRING);

		$email = $_SESSION['user']['email'];
		$attendance_code = $_POST['attendance_code'];
		// gets the correct code
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

		//checks if code is correct
		if($today_code != $attendance_code) {
			die("You entered the wrong code!");
			header("Location: ".$_SERVER['SCRIPT_NAME']);
		}

		//inserts attendance record
		$query = "
		INSERT INTO attendance (
			email,
			date
		) VALUES (
			'$email',
			'$date'
		);";

		try {
			$stmt = $db->prepare($query);
			$stmt->execute();
			$_SESSION['checkedIn'] = $date;
			header("Location: ".$_SERVER['SCRIPT_NAME']);
		}

		catch(PDOException $ex)
		{
			die("Failed to run query: " . $ex->getMessage());
			header("Location: ".$_SERVER['SCRIPT_NAME']);
		}

	}
}
checkIn();
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
		<meta name="description" content="UCC Robotics">
		<title><?php echo $row_info['first_name']; ?>'s Homepage | UCC Robotics</title>
		<link rel="icon" href="css/favicon.ico" />
		<?php include_once("functions/stylesheet.php") ?>
		<script src="js/jquery.js"></script>
		<style>
			.bulletin{
				height:256px;
				overflow-y:auto;
			}
		</style>
	</head>

	<body>
		<?php include_once("navbar.php")  ?>
		<?php include_once("footer.php")  ?>
		<div class="container">
			<?php include_once("site_wide.php") ?>
			<h1 class="page-header">Welcome <b><?php echo $row_info['first_name']; echo " "; echo $row_info['last_name']; ?></b> <small>to your account homepage</small></h1>
			<h5>Here, you can check in for attendance, see your achievements, and get personalized club news!</h3>
			
			<?php if($_SESSION['user']['admin'] == 1){ ?>
			<h3>Need to do admin stuff? <a href="user_admin.php">Click here. <?php echo $_SESSION['user']['admin'];?></a></h3>
			<?php }elseif ($_SESSION['user']['admin'] == 2) { ?>
			<h3>Need to view attendance? <a href="user_attendance.php">Click here.</a></h3>
			<?php }?>
			<div class="row">
				<div class="col-md-4">
					<div class="panel panel-primary">
						<div class="panel-heading">
							<h3><?php echo $row_info['first_name']; ?>'s Messages <span class="glyphicon glyphicon-envelope"></span></h3>
						</div>
						 <ul class="list-group">
							<li class="list-group-item list-group-item-success">Message #1: Matt is Awesome.</li>
							<li class="list-group-item list-group-item-danger">Message #2: Robotics is cool!</li>
							<li class="list-group-item list-group-item-warning">Message #3: We're amazing!</li>
							<li class="list-group-item list-group-item-info">Message #4: All the good chem jokes...</li>
							<li class="list-group-item list-group-item-primary">Message #5: Argon!</li>
						</ul>
					</div>
					<div class="panel panel-info">
						<div class="panel-heading">
							<h3><?php echo $row_info['first_name']; ?>'s Achievements <span class="glyphicon glyphicon-certificate"></span></h3>
						</div>
						<div class="panel-body">
							<div class="row">
								<div class="col-xs-6 col-md-3 col-lg-2">
									<img src="img/placeholder.png" class="img-responsive" width="50%">
									</img>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-8">
					<div class="well well-lg">
						<h2>Today is <b><?php echo $day; ?></b></h2>
						<?php if(isset($_SESSION['checkedIn']) && $_SESSION['checkedIn'] == $date){ ?>
							<h5>You've already checked in today!</h5>
						<?php } else { ?>
						<form class="form-signin" action="?checkIn" method="post">
							<div class="input-group">
								<input type="text" id="attendance_code" name="attendance_code" class="form-control" placeholder="Blank Space." required="">
								<span class="input-group-btn">
									<button class="btn btn-default" type="submit" id="submitbutton" value="Login">Check in <span class="glyphicon glyphicon-ok"></span></button>
								</span>
							</div>
						</form>
						<?php } ?>
					</div>
					<div class="well well-lg">
						<h2><span class="glyphicon glyphicon-bullhorn"></span> Bulletin Board</h2>
						<div class="bulletin">
							<div class="panel panel-info">
								<div class="panel-heading">
									<h3>HCCS Competiton Summary <span class="label label-default">News</span></h3>
								</div>
								<div class="panel-body">
									<div class="author">
										From Matthew Wang
									</div>
									We went to Holy Cross with high hopes, testing out a brand new and innovative ramp-bot design. Unfortunately, due to some faulty gear (mainly our cortex), our robot only started up three out of six matches; and we only winded up winning three out of six round robin matches. Only being a few spots away from qualifying, we took what we learned (bring a spare cortex!), and hopefully we'll take home some hardware at Rick Hansen!
								</div>
							</div>
							<div class="panel panel-info">
								<div class="panel-heading">
									<h3>Horizons Robotics <span class="label label-warning">Horizons</span></h3>
								</div>
								<div class="panel-body">
									<div class="author">
										From Camran Hansen
									</div>
									Just a reminder that Horizons is on Thursdays afterschool, and replaces normal club. Horizons is in room CC3 and 304. We start promptly at 3:30 PM.
								</div>
							</div>
							<div class="panel panel-info">
								<div class="panel-heading">
									<h3>Hackathon <span class="label label-primary">Club Events</span></h3>
								</div>
								<div class="panel-body">
									<div class="author">
										From Jack Sarick
									</div>
									UofT is hosting a hackathon! Learn more <a href="https://www.uofthacks.com/">here</a>.
								</div>
							</div>
						</div>
					</div>
					<div class="well well-lg">
						<h3>Track your attendance!</h3>
						<ul class="nav nav-tabs" role="tablist">
							<li role="presentation" class="active"><a href="#daily" role="tab" data-toggle="tab">Daily Average</a></li>
							<li role="presentation"><a href="#monthly" role="tab" data-toggle="tab">Monthly Average</a></li>
							<li role="presentation"><a href="#stats" role="tab" data-toggle="tab">Stats</a></li>
						</ul>

						<div class="tab-content">
							<div role="tabpanel" class="tab-pane active fade in" id="daily">
								<div id="graph_memberday" style="width:600px;height:250px;"></div>
							</div>
							<div role="tabpanel" class="tab-pane fade" id="monthly">
								<div id="graph_membermonth" style="width:600px;height:250px;"></div>
							</div>
							<div role="tabpanel" class="tab-pane fade" id="stats">
								<table class="table table-condensed">
									<tr>
										<td>Times attended in the past week</td>
										<td>3</td>
									</tr>
									<tr>
										<td>Times attended in the past month</td>
										<td>13</td>
									</tr>
									<tr>
										<td>Times attended in the past year</td>
										<td>42</td>
									</tr>
									<tr>
										<td></td>
										<td></td>
									</tr>
									<tr>
										<td>Average attended in the past week</td>
										<td>3</td>
									</tr>
									<tr>
										<td>Average attended in the past month</td>
										<td>18</td>
									</tr>
									<tr>
										<td>Average attended in the past year</td>
										<td>83</td>
									</tr>
									<tr>
										<td></td>
										<td></td>
									</tr>
									<tr>
										<td>Current attendance streak</td>
										<td>2</td>
									</tr>
									<tr>
										<td>Longest attendance streak</td>
										<td>4</td>
									</tr>
								</table>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<script src="js/jquery.easing.min.js"></script>
		<script src="js/bootstrap.js"></script>
		<script src="js/nav-collapse.js"></script>
		<script src="js/plotly.js"></script>
		<script>
			//club day info
      var trace1_memberday = {
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

      var trace2_memberday = {
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

      var trace3_memberday = {
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

      var data_memberday = [trace1_memberday, trace2_memberday, trace3_memberday];

      var layout_memberday = {
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
			var trace1_membermonth = {
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

			var data_membermonth = [trace1_membermonth];

			var layout_membermonth = {
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

      Plotly.newPlot('graph_memberday', data_memberday, layout_memberday, tweaks);
			Plotly.newPlot('graph_membermonth', data_membermonth, layout_membermonth, tweaks);
		</script>
	</body>
</html>
