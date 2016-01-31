<?php
	require("common.php");
	$query = "SELECT * FROM bulletin;";

	try
	{
		$stmt = $db->prepare($query);
		$stmt->execute();
	}

	catch(PDOException $ex)
	{
		die("Failed to run query: " . $ex->getMessage());
	}

	$row_bulletin = $stmt->fetch();
?>
