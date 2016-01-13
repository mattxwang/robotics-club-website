<?php
if (empty($_SESSION){
	$_SESSION['nightmode'] = True;
}
else if ($_SESSION['nightmode'] = False){
	$_SESSION['nightmode'] = True;
}
else{
	$_SESSION['nightmode'] = False;
}
?>