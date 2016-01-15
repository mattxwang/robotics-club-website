<?php
	require("common.php");
	if(!empty($_SESSION['user'])){ 
		// Pull user data
		$email = $_SESSION['user']['email'];
		$query = "SELECT * FROM info WHERE email='$email';";
		 
		try 
		{ 
			$stmt = $db->prepare($query); 
			$stmt->execute();
		} 

		catch(PDOException $ex) 
		{ 
			die("Failed to run query: " . $ex->getMessage()); 
		}  

		$row = $stmt->fetch();
	}
?>