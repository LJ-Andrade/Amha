<?php
    include("../../library/functions/func.common.php");
	include_once("../../classes/class.database.php");
	$DB = new DataBase();
	$DB->Connect();
	$Markers = $DB->fetchAssoc('pharmacy','*',"status='A'");
	echo 'pharmcies_callback('.json_encode($Markers).');';
	
	// THIS GENERATES AN OUTPUT WITH JSON ENCODED DATA FROM DATABASE
	// TO DO THE SAME WITH XML FORMAT YOU SHOULD GO TO https://developers.google.com/maps/documentation/javascript/mysql-to-maps?hl=es-419
	
?>