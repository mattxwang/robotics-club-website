<?php
if (empty($_SESSION){
	$_SESSION['nightmode'] = True;
}
else if ($_SESSION['nightmode'] == False){
	$_SESSION['nightmode'] = True;
}
else{
	$_SESSION['nightmode'] == False;
}
header("Location: index.php"); 
die("Redirecting to: index.php"); 
?>