<?php
	require("common.php");
	if (!empty($_SESSION['nightmode'])) {
		if ($_SESSION['nightmode'] == 0) {
			$_SESSION['nightmode'] = 1;
		}
		elseif ($_SESSION['nightmode'] == 1) {
			$_SESSION['nightmode'] = 0;
		}
		elseif ($_SESSION['nightmode'] == 3){
			$_SESSION['nightmode'] = 4;
		} 
		elseif ($_SESSION['nightmode'] == 4){
			$_SESSION['nightmode'] = 3;
		} 
	}
	else {
		$_SESSION['nightmode'] = 1;
	}
	header("Location: ../index.php"); 
	die("Redirecting to: ../index.php"); 
?>