<?php 
include 'controllerNotif.php';

	$controllerNotif = new controllerNotif();
	
	$mail = $_POST['mail'];
	$subject= $_POST['subject'];
	$corps= $_POST['corps'];
	
	$controllerNotif->sendMail($mail, $subject, $corps);
?>