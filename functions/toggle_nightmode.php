<?php
	// Old, not so cool code.
	/* 
	require("common.php");
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
	$_SESSION['PageStyling'] = "whitemode";

	if ($_SESSION['PageStyling'] == "whitemode") {
		$_SESSION['PageStyling'] = "nightmode";
	}
	else {
		$_SESSION['PageStyling'] = "whitemode";
	}
	header("Location: ../index.php"); 
	die("Redirecting to: ../index.php"); 
?>