<?php
	require("common.php");
	if (empty($_SESSION['nightmode']){
		$_SESSION['nightmode'] = true;
	}
	elseif ($_SESSION['nightmode'] == false){
		$_SESSION['nightmode'] = true;
	}
	else{
		$_SESSION['nightmode'] = false;
	}
	header("Location: index.php"); 
	die("Redirecting to: index.php"); 
?>