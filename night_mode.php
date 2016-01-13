<?php 

if(empty($_SESSION)$_SESSION['nightmode'] = False) {
	var nightmode = False;
}
else{
	var nightmode = True;
}

if($nightmode == True){
	echo "<link href='css/bootstrap-night.css' rel='stylesheet'>";
}
else{
	echo "<link href='css/bootstrap.css' rel='stylesheet'>";
}

?> 