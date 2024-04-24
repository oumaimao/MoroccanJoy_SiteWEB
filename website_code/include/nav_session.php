<?php
session_start();
if(!isset($_SESSION['users']) || !isset($_SESSION['uid'])){
	$nav = include "include/navindex.php";
}else{
	$nav =include "include/navdashbordvreator.php";
}
?>

