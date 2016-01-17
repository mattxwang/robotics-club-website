<?php
	require("common.php");
	echo "Hi";
	if (empty($_SESSION['nightmode']){
			echo "Hi1";
		$_SESSION['nightmode'] = true;
	}
	elseif ($_SESSION['nightmode'] == false){
			echo "Hi2";
		$_SESSION['nightmode'] = true;
	}
	else{
			echo "Hi3";
		$_SESSION['nightmode'] = false;
	}
		echo "Hi";
	header("Location: index.php"); 
	die("Redirecting to: index.php"); 
?>