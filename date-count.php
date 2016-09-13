<?php
	require("functions/common.php");

	//redirect if no permissions
	if($_SESSION['user']['admin'] === 0){
		header("Location: user_home.php");
		die("Redirecting to user_home.php");
	}

	// Get data from db
	// gets the correct code
	$day = $_GET['day'];
	$month = $_GET['month'];
	$year = $_GET['year'];
	$query = "SELECT COUNT(*) FROM robotics.attendance WHERE date LIKE '$year-$month-$day';";
	
	$result = mysql_query($query) or die ("Error in query:".mysql_error());

	$row = mysql_fetch_array($result);
	echo($row[0]);
?>