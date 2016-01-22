<?php
	require("functions/common.php");
	if (empty($_SESSION['alerts'])){
		$_SESSION['alerts'] = ['alert1','alert2'];
	}
	if (empty($_SESSION['alerts']['alerts1'])){
		$_SESSION['alerts']['alert1'] == False;
	}
	if (empty($_SESSION['alerts']['alerts2'])){
		$_SESSION['alerts']['alert2'] == False;
	}
?>
<?php
	function viewedAlert(){
		if (isset($_GET['viewedAlert'])) {
	    $alert_value = $_GET['viewedAlert'];
			if ($alert_value == 1){
				$_SESSION['alerts']['alert1'] == True;
			}
			elseif ($alert_value == 2){
				$_SESSION['alerts']['alert2'] == True;
			}
			header("Location: ".$_SERVER['SCRIPT_NAME']);
		}
	}
	viewedAlert();
?>
<?php if ($_SESSION['alerts']['alert1'] == False) { ?>
<div class="alert alert-dismissible alert-warning fade in">
	<button type="button" class="close" data-dismiss="alert" href="?viewedAlert=1">x</button>
	<p><span class="glyphicon glyphicon-alert"></span> <b>Warning!</b> You're visiting a beta version of this site. It might have some issues, glaring bugs, or utter failures. If you experience any of those, please report them to the <a href="https://github.com/malsf21/robotics-club-website/issues" class="alert-link">repository</a>.</p>
</div>
<?php } if ($_SESSION['alerts']['alert2'] == False) { ?>

<div class="alert alert-dismissible alert-info fade in">
	<button type="button" class="close" data-dismiss="alert" href="?viewedAlert=2">x</button>
	<p><span class="glyphicon glyphicon-pushpin"></span> <b>Hey there!</b> We're looking for students to help us out with this website! Fork our <a href="https://github.com/malsf21/robotics-club-website" class="alert-link">repository</a> or contact <a href="mailto:matthew.wang@ucc.on.ca" class="alert-link">Matthew Wang</a> for more information.</p>
</div>

<?php } ?>
