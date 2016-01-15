<?php 
	require("common.php"); 
	 
	if(!empty($_POST)) { 
		if(empty($_POST['password']) || empty($_POST['password_new_1']) || empty($_POST['password_new_2'])) { 
			die("You missed a field"); 
		} 
		 
		if($_POST['password_new_1'] != $_POST['password_new_2']) { 
			die("New Password Mismatch"); 
		}
		 
		$salt = dechex(mt_rand(0, 2147483647)) . dechex(mt_rand(0, 2147483647)); 
		 
		$password = hash('sha256', $_POST['password_new_1'] . $salt); 
		 
		for($round = 0; $round < 65536; $round++) { 
			$password = hash('sha256', $password . $salt); 
		} 

		$email = $_SESSION['user']['email'];
		$admin = $_SESSION['user']['admin'];

		$query = " 
		REPLACE INTO users (
			email,
			password,
			salt,
			admin
		) VALUES (
			'$email',
			'$password',
			'$salt',
			'$admin'
		);";

		try { 
			$stmt = $db->prepare($query); 
			$result = $stmt->execute($query_params);

			header("Location: ../user_account.php"); 
		 
			die("Redirecting to ../user_account.php"); 
		} 
		catch(PDOException $ex) { 
			die("Failed to run query: " . $ex->getMessage()); 
		} 
		 
	}

	else {
		echo "No password was submitted.";
	}
?> 