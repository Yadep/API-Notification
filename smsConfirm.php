<?php 
include 'controllerNotif.php';

	$controllerNotif = new controllerNotif();
	
	$num = $_POST['num'];
	$corps= $_POST['corps'];
	
	$controllerNotif->sendSMS($num, $corps)
?>