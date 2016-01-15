<?php 
	require("common.php"); 
	
	if(
		empty($_POST['first_name']) ||
		empty($_POST['last_name'])  ||
		empty($_POST['birthday'])
	) { 
		die("You missed a field"); 
	}

	$_POST = filter_var_array($_POST, FILTER_SANITIZE_STRING);

	$email = $_SESSION['user']['email'];
	$first_name = $_POST['first_name'];
	$last_name = $_POST['last_name'];
	$birthday = $_POST['birthday']

	$query = " 
	REPLACE INTO info (
		email,
		first_name,
		last_name,
		birthday
	) VALUES (
		'$email',
		'$first_name',
		'$last_name',
		'$birthday'
	);";

	try { 
		$stmt = $db->prepare($query); 
		$stmt->execute();
	
		header("Location: account.php"); 		 
	}
	
	catch(PDOException $ex) 
	{ 
		die("Failed to run query: " . $ex->getMessage()); 
		header("Location: account.php");
	}
?>