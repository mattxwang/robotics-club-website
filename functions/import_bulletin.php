<?php
  //this snippet of code imports all bulletins that haven't expired yet
	require("common.php");
  $unixtime = time();
	$query = "SELECT * FROM bulletin WHERE expire>='$unixtime';";

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
