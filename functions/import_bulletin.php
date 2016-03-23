<?php
	/*
	//this snippet of code imports all bulletins that haven't expired yet
	require("common.php");
  $unixtime = time();
	$query = "SELECT creator, title, tag, content FROM bulletin WHERE expire > '$unixtime';";

	try
	{
		$stmt = $db->prepare($query);
		$stmt->execute();
		$stmt->bind_result($creator, $title, $tag, $content);
	}

	catch(PDOException $ex)
	{
		die("Failed to run query: " . $ex->getMessage());
	}
	while ($stmt->fetch()) {
		if ($tag == "label-default"){
			$category = "News";
		}
		elseif ($tag == "label-primary"){
			$category = "Club Events";
		}
		elseif ($tag == "label-warning"){
			$category = "Horizons";
		}
		elseif ($tag == "label-danger"){
			$category = "Administrative";
		}
		echo "<div class='panel panel-info'>
		  <div class='panel-heading'>
		    <h3>" . $title . " <span class='label " . $tag . "'>" . $category . "</span></h3>
		  </div>
		  <div class='panel-body'>
		    <div class='author'>
		      From " . $creator . "
		    </div>
		    " . $content . "
		  </div>
		</div>";
	}
	*/
	$log_json = file_get_contents("../bulletin/bulletin.json");
  $log_data = json_decode($log_json, true);
	for ($i = count($log_data); $i > 0; $i -= 1){
		echo "<div class='panel panel-info'>
		  <div class='panel-heading'>
		    <h3>" . $log_data["data"][$i]["title"] . " <span class='label " . $log_data["data"][$i]["tag"] . "'>" . $log_data["data"][$i]["category"] . "</span></h3>
		  </div>
		  <div class='panel-body'>
		    <div class='author'>
		      From " . $log_data["data"][$i]["creator"] . "
		    </div>
		    " . $log_data["data"][$i]["content"] . "
		  </div>
		</div>";
	}
?>
