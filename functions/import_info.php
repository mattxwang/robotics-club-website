<?php
	//this snippet of code takes all of the info data and makes it easily accessible, but only if logged in
	require("common.php");
	if(!empty($_SESSION['user'])){
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

		$row_info = $stmt->fetch();
	}
?>
