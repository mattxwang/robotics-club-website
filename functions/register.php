<?php 
	require("common.php"); 
	 
	if(!empty($_POST)) { 
		// For later: empty($_POST['firstname']) || empty($_POST['lastname']) || 
		if( empty($_POST['email'])     ||
			empty($_POST['password'])  ||
			empty($_POST['password2']) ||
			empty($_POST['first_name'])||
			empty($_POST['last_name']) ||
			empty($_POST['birthday'])

			) { 
			die("You missed a field"); 
		} 
		 
		if($_POST['password'] != $_POST['password2']) { 
			die("Password Mismatch"); 
		}
		 
		if(!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) { 
			die("Invalid Email Address"); 
		}
		 		 
		$query = " 
			SELECT 
				1 
			FROM users 
			WHERE 
				email = :email 
		"; 
		 
		$query_params = array( 
			':email' => $_POST['email'] 
		); 
		 
		try { 
			$stmt = $db->prepare($query); 
			$result = $stmt->execute($query_params); 
		} 
		catch(PDOException $ex) { 
			die("Failed to run query: " . $ex->getMessage()); 
		} 
		 
		$row = $stmt->fetch(); 
		 
		if($row) { 
			die("This email address is already registered"); 
		} 
		 
		$query = " 
			INSERT INTO users ( 
				password, 
				salt, 
				email,
				admin
			) VALUES ( 
				:password, 
				:salt, 
				:email,
				0
			);
		"; 
		 
		$salt = dechex(mt_rand(0, 2147483647)) . dechex(mt_rand(0, 2147483647)); 
		 
		$password = hash('sha256', $_POST['password'] . $salt); 
		 
		for($round = 0; $round < 65536; $round++) { 
			$password = hash('sha256', $password . $salt); 
		} 
		 
		$query_params = array( 
			':password' => $password, 
			':salt' => $salt, 
			':email' => $_POST['email'] 
		); 
		 
		try { 
			$stmt = $db->prepare($query); 
			$result = $stmt->execute($query_params);
		} 
		catch(PDOException $ex) { 
			die("Failed to run query: " . $ex->getMessage()); 
		} 

		$first_name = $_POST['first_name'];
		$last_name = $_POST['last_name'];

		$query = " 
		INSERT INTO info (
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
		
			header("Location: ../login.php"); 		 
		}
		
		catch(PDOException $ex) 
		{ 
			die("Failed to run query: " . $ex->getMessage()); 
			header("Location: ../login.php");
		}
	}
?> 