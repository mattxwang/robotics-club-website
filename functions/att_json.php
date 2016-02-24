<?php
	include_once("common.php");

	$query = "SELECT * FROM attendance;";

	try
	{
		$stmt = $db->prepare($query);
		$stmt->execute();
	}

	catch(PDOException $ex)
	{
		die("Failed to run query: " . $ex->getMessage());
	}

	var_dump($stmt);
}