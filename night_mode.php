<?php 

if($_SESSION['nightmode'] = True) {
	var nightmode = True;
}
else{
	var nightmode = False;
}

if($nightmode == True){
	echo "<link href='css/bootstrap-night.css' rel='stylesheet'>";
}
else{
	echo "<link href='css/bootstrap.css' rel='stylesheet'>";
}

?> 