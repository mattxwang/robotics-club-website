<?php 
	require("common.php"); 
	
	if(
		empty($_POST['nightmode_state'])
	) { 
		die("You missed a field"); 
	}

	$_POST = filter_var_array($_POST, FILTER_SANITIZE_STRING);

	$email = $_SESSION['user']['email'];
	$nightmode = $_POST['nightmode_state'];

	$query = " 
	REPLACE INTO info (
		email,
		nightmode
	) VALUES (
		'$email',
		'$nightmode_state'
	);";

	try { 
		$stmt = $db->prepare($query); 
		$stmt->execute();
	
		header("Location: ../user_account.php"); 		 
	}
	
	catch(PDOException $ex) 
	{ 
		die("Failed to run query: " . $ex->getMessage()); 
		header("Location: ../user_account.php");
	}
?>