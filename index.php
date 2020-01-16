<?php 
session_start();
	include './config/allConfig.php';
	$module='home';
	if(isset($_GET['module'])){
		$module=$_GET['module'];
	}
	include "modules/content.php";
 ?>