<?php
	include_once("common.php");

	$query = "SELECT * FROM robotics.attendance;";

	// execute query
	$result = mysql_query($query) or die ("Error in query: $query. ".mysql_error());

	$data = [];
	while($row = mysql_fetch_row($result)) {
		array_push($data, $row);
	}

	echo(json_encode($data));

	// free result set memory
	mysql_free_result($result);

	// close connection
	mysql_close($connection);
?>