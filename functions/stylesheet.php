<?php 
	//Not as cool code.
	/*
	if ($row_info['nightmode'] == 1){
		echo "<link href='css/bootstrap.css' rel='stylesheet'>";
	}
	elseif ($row_info['nightmode'] == 2){
		echo "<link href='css/bootstrap-night.css' rel='stylesheet'>";
	}
	elseif ($row_info['nightmode'] == 3 && $nightmode != 3 && $nightmode != 4){
		$nightmode = 3;
		echo "<link href='css/bootstrap.css' rel='stylesheet'>";
		$_SESSION['nightmode'] = 3;
	}
	elseif ($row_info['nightmode'] == 4  && $nightmode != 3 && $nightmode != 4){
		echo "<link href='css/bootstrap-night.css' rel='stylesheet'>";
		$nightmode = 4;
		$_SESSION['nightmode'] = 4;
	}
	else{
		if(!empty($_SESSION['nightmode'])) {
			if($_SESSION['nightmode'] == 0 || $_SESSION['nightmode'] == 1 || $_SESSION['nightmode'] == 3) {
				echo "<link href='css/bootstrap.css' rel='stylesheet'>";
			}
			else {
				echo "<link href='css/bootstrap-night.css' rel='stylesheet'>";
			}
		}
		else {
			echo "<link href='css/bootstrap-night.css' rel='stylesheet'>";
		}
	}
	*/

	/*

	if ($row_info['nightmode'] == 4){
		$_SESSION['PageStyling'] = "nightmode";
	}

	else{
		$_SESSION['PageStyling'] = "whitemode";
	}

	if ($_SESSION['toggleNight']){
		$_SESSION['PageStyling'] = "nightmode";
	}

	if ($_SESSION['toggleNight']){
		$_SESSION['PageStyling'] = "whitemode";
	}

	if ($row_info['nightmode'] == 1){
		$_SESSION['PageStyling'] = "whitemode";
	}
	elseif ($row_info['nightmode'] == 2){
		$_SESSION['PageStyling'] = "nightmode";
	}

	*/
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
	//big shout out to devsnowy for helping me out with this
?>
<!--<link href='css/bootstrap.css' rel='stylesheet'>-->
<link href='css/style.css' rel='stylesheet'>

