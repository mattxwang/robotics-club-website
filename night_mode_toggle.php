<?php
session_start(); 
if (empty($_SESSION['nightmode']){
	$_SESSION['nightmode'] = 1;
}
elseif ($_SESSION['nightmode'] == 0){
	$_SESSION['nightmode'] = 1;
}
else{
	$_SESSION['nightmode'] = 0;
}
header("Location: index.php"); 
die("Redirecting to: index.php"); 
?>