<?php 
	require("common.php"); 
	 
	$submitted_email = ''; 
	$correction = 'none';
	 
	if(!empty($_POST)) 
	{ 
		$query = " 
			SELECT * 
			FROM users 
			WHERE 
				email = :email"; 
		 
		$query_params = array( 
			':email' => $_POST['email'] 
		); 
		 
		try 
		{ 
			$stmt = $db->prepare($query); 
			$result = $stmt->execute($query_params); 
		} 
		catch(PDOException $ex) 
		{ 
			die("Failed to run query: " . $ex->getMessage()); 
		} 
		 
		$login_ok = false; 
		 
		$row = $stmt->fetch(); 
		if($row) 
		{ 
			$check_password = hash('sha256', $_POST['password'] . $row['salt']); 
			for($round = 0; $round < 65536; $round++) 
			{ 
				$check_password = hash('sha256', $check_password . $row['salt']); 
			} 
			 
			if($check_password === $row['password']) 
			{ 
				$login_ok = true; 
			} 
		} 
		 
		if($login_ok) 
		{ 
			unset($row['salt']); 
			unset($row['password']); 
			 
			$_SESSION['user'] = $row; 
			 
			header("Location: ../user_home.php"); 
			die("Redirecting to: ../user_home.php"); 
		} 
		else 
		{ 
			$correction = 'block'; 
			 
			$submitted_email = htmlentities($_POST['email'], ENT_QUOTES, 'UTF-8'); 

			header("Location: ../login.php"); 
			die("Redirecting to: ../login.php"); 
		} 
	} 
	 
?>