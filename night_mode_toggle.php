<?php
session_start(); 
if (empty($_SESSION){
	$_SESSION['nightmode'] = true;
}
else if ($_SESSION['nightmode'] == false){
	$_SESSION['nightmode'] = true;
}
else{
	$_SESSION['nightmode'] == false;
}
header("Location: index.php"); 
die("Redirecting to: index.php"); 
?>