<?php
session_start();
if(!isset($_SESSION['user'])){
	$nav = include "include/navindex.php";
}else{
	$nav =include "include/navdashbordvreator.php";
}
?>