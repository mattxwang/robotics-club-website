<?php 
/*
if(empty($_SESSION)$_SESSION['nightmode'] = False) {
	$nightmode = False;
}
else{
	$nightmode = True;
}
*/
/*
$nightmode = True;
*/
$nightmode = False;

if($nightmode == True){
	echo "<link href='css/bootstrap-night.css' rel='stylesheet'>";
}
else{
	echo "<link href='css/bootstrap.css' rel='stylesheet'>";
}

?> 