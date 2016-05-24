<?php
	include("NewSlots.php");
	//$dbConnection->printArr($_POST);die;
	if(!isset($_POST) || empty($_POST)) {
		header("Location: editSlots.php");
	}
	$post = $_POST;
	$newSlots = new NewSlots();
	$slots = unserialize(APPOINTMENT_DAYS);
	foreach($post as $k => $v) {
		$day = explode("_", $k)[0];
		$slots[$day] .= $v . ";";
	}
	foreach($slots as $k => $v) {
		$slots[$k] = rtrim($v, ";");
	}
	$isSaved = $newSlots->saveNewSlots($slots);
	if(!$isSaved) {
		header("Location: editSlots.php?saved=false");
	}
	header("Location: editSlots.php?saved=true");
?>