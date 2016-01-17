<?php 
	require("common.php"); 
	include_once("import_info.php");
	
	if(
		empty($_POST['nightmode_state'])
	) { 
		die("You missed a field"); 
	}

	$_POST = filter_var_array($_POST, FILTER_SANITIZE_STRING);

	$email = $_SESSION['user']['email'];
	$first_name = $row_info['first_name'];
	$last_name = $row_info['last_name'];
	$birthday = $row_info['birthday'];
	$nightmode = $_POST['nightmode_state'];
	$user_id = $row_info['id'];

	$query = " 
	REPLACE INTO info (
		id,
		email,
		first_name,
		last_name,
		birthday,
		nightmode
	) VALUES (
		'$user_id',
		'$email',
		'$first_name',
		'$last_name',
		'$birthday',
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