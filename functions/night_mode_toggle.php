<?php
	require("common.php");
	echo "Hi";
	if (!empty($_SESSION['nightmode']) {
		if ($_SESSION['nightmode'] == false) {
				echo "Hi2";
			$_SESSION['nightmode'] = true;
		}
		else {
				echo "Hi3";
			$_SESSION['nightmode'] = false;
		}
	}
	else {
		echo "Hi1";
		$_SESSION['nightmode'] = true;
	}
	header("Location: index.php"); 
	die("Redirecting to: index.php"); 
?>