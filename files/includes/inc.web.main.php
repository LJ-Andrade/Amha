<?php
	include_once("../../library/functions/func.common.php");
	include_once("../../classes/class.database.php");
	$DB = new DataBase();
	$DB->Connect();
	/* ADDING SLASHES TO PUBLIC VARIABLES */
	$_POST	= AddSlashesArray($_POST);
	$_GET	= AddSlashesArray($_GET);
?>
