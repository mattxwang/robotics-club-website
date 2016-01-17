<?php 

if ($row_info['nightmode'] == 1){
	echo "<link href='css/bootstrap.css' rel='stylesheet'>";
}
elseif ($row_info['nightmode'] == 2){
	echo "<link href='css/bootstrap-night.css' rel='stylesheet'>";
}
elseif ($row_info['nightmode'] == 3 && $nightmode != 3 && $nightmode != 4){
	$nightmode = 3;
	echo "<link href='css/bootstrap.css' rel='stylesheet'>";
	$_SESSION['nightmode'] = 3;
}
elseif ($row_info['nightmode'] == 4  && $nightmode != 3 && $nightmode != 4){
	echo "<link href='css/bootstrap-night.css' rel='stylesheet'>";
	$nightmode = 4;
	$_SESSION['nightmode'] = 4;
}
else{
	if(!empty($_SESSION['nightmode'])) {
		if($_SESSION['nightmode'] == 0 || $_SESSION['nightmode'] == 1 || $_SESSION['nightmode'] == 3) {
			echo "<link href='css/bootstrap.css' rel='stylesheet'>";
		}
		else {
			echo "<link href='css/bootstrap-night.css' rel='stylesheet'>";
		}
	}
	else {
		echo "<link href='css/bootstrap-night.css' rel='stylesheet'>";
	}
}
?>
<!--<link href='css/bootstrap.css' rel='stylesheet'>-->
<link href='css/style.css' rel='stylesheet'>

