<?php
	require("common.php");
	if (!empty($_SESSION['nightmode'])) {
		if ($_SESSION['nightmode'] == 0) {
			$_SESSION['nightmode'] = 1;
		}
		else {
			$_SESSION['nightmode'] = 0;
		}
	}
	else {
		$_SESSION['nightmode'] = 1;
	}
	header("Location: ../index.php"); 
	die("Redirecting to: ../index.php"); 
?>