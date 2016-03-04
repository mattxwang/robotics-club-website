<?php
	//big shout out to devsnowy for helping me out with this
	if (empty($_SESSION['PageStyling'])){
		$_SESSION['PageStyling'] = "whitemode";
	}
	if (!empty($row_info['nightmode'] && $_SESSION['nightmode_toggle'] == false)){
		if ($row_info['nightmode'] == 0 || $row_info['nightmode'] == 3){
			$_SESSION['PageStyling'] = "whitemode";
		}

		if ($row_info['nightmode'] == 4){
			$_SESSION['PageStyling'] = "nightmode";
		}
	}
	if (isset($row_info['nightmode'])){
		if ($row_info['nightmode'] == 1){ // always white
			$_SESSION['PageStyling'] = "whitemode";
		}
		if ($row_info['nightmode'] == 2){ // always dark
			$_SESSION['PageStyling'] = "nightmode";
		}
	}
	if ($_SESSION['PageStyling'] == "nightmode"){
		echo "<link href='css/bootstrap-night.css' rel='stylesheet'>";
	}
	else {
		echo "<link href='css/bootstrap.css' rel='stylesheet'>";
	}
?>
<link href='css/style.css' rel='stylesheet'>
<script src="js/google_analytics.js"></script>
