<?php 
session_start(); 
if(empty($_SESSION)) {
	$nightmode = false;
}
else if($_SESSION['nightmode'] == false){
	$nightmode = false;
}
else{
	$nightmode = true;
}

/*
$nightmode = true;

$nightmode = false;
*/
if($nightmode == true){
	echo "<link href='css/bootstrap-night.css' rel='stylesheet'>";
}
else{
	echo "<link href='css/bootstrap.css' rel='stylesheet'>";
}

?> 