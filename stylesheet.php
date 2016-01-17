<?php 
if(!empty($_SESSION['nightmode'])) {
	if($_SESSION['nightmode'] == 0){
		$nightmode = 0;
	}
	else{
		$nightmode = 1;
	}
}
else{
	$nightmode = 0;
}

if($nightmode == 1){
	echo "<link href='css/bootstrap-night.css' rel='stylesheet'>";
}
else{
	echo "<link href='css/bootstrap.css' rel='stylesheet'>";
}

?>
<link href='css/bootstrap.css' rel='stylesheet'>
<link href='css/style.css' rel='stylesheet'>

