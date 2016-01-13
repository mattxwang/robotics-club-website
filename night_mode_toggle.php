<?php
session_start(); 
if (empty($_SESSION){
	$_SESSION['nightmode'] = 1;
}
else if ($_SESSION['nightmode'] == 0){
	$_SESSION['nightmode'] = 1;
}
else{
	$_SESSION['nightmode'] == 0;
}
header("Location: index.php"); 
die("Redirecting to: index.php"); 
?>