<?php
	require("common.php");
	include_once("import_info.php");
	// Old, not so cool code.
	/* 
	if (!empty($_SESSION['nightmode'])) {
		if ($_SESSION['nightmode'] == 1) {
			$_SESSION['nightmode'] = 2;
		}
		elseif ($_SESSION['nightmode'] == 2) {
			$_SESSION['nightmode'] = 1;
		}
		elseif ($_SESSION['nightmode'] == 3){
			$_SESSION['nightmode'] = 4;
		} 
		elseif ($_SESSION['nightmode'] == 4){
			$_SESSION['nightmode'] = 3;
		} 
		else{
			$_SESSION['nightmode'] = 2;
		}
	}
	else {
		$_SESSION['nightmode'] = 1;
	}
	*/
	// Cooler code with help from devsnowy.
	/*
	if($row_info['nightmode'] == 4){
		if($_SESSION['toggleWhite']){
			$_SESSION['toggleWhite'] = false;
		} else {
			$_SESSION['toggleWhite'] = true;
		}
	}
	else{
		if($_SESSION['toggleNight']){
		$_SESSION['toggleNight'] = false;
		} else {
			$_SESSION['toggleNight'] = true;
		}
	}

	header("Location: ../index.php"); 
	die("Redirecting to: ../index.php"); 
	*/
	if (empty($_SESSION['PageStyling'])){
		$_SESSION['PageStyling'] = "whitemode";
		if (!empty($row_info['nightmode'])){
			if ($row_info['nightmode'] == 0 && $row_info['nightmode'] == 3){
				$_SESSION['PageStyling'] = "whitemode";
			}

			if ($row_info['nightmode'] == 4){
				$_SESSION['PageStyling'] = "nightmode";
			}
		}
	}
	if ($_SESSION['PageStyling'] == "whitemode") {
		$_SESSION['PageStyling'] = "nightmode";
	}
	else {
		$_SESSION['PageStyling'] = "whitemode";
	}
	if (!isset($row_info['nightmode'])){
		if ($row_info['nightmode'] == 1){ // always white
			$_SESSION['PageStyling'] = "whitemode";
		}

		if ($row_info['nightmode'] == 2){ // always dark
			$_SESSION['PageStyling'] = "nightmode";
		}
	}

 	header("Location: ../index.php"); 
	die("Redirecting to: ../index.php");
	
?>