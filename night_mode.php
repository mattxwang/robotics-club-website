<?php 
/*
if(empty($_SESSION['nightmode']) || $_SESSION = False) {
	var nightmode = False;
}
else{
	var nightmode = True;
}
*/
$nightmode = True;

if($nightmode == True){
	echo "<link href='css/bootstrap-night.css' rel='stylesheet'>";
}
else{
	echo "<link href='css/bootstrap.css' rel='stylesheet'>";
}

?> 