<?php
  /* ADDING SLASHES TO PUBLIC VARIABLES */
	$_POST	= AddSlashesArray($_POST);
	$_GET	= AddSlashesArray($_GET);
	
	if($_POST['action']=='fillzone')
  {
    include_once("../../classes/class.database.php");
  	$DB = new DataBase();
  	$DB->Connect();
    $Zones = $DB->fetchAssoc('geolocation_zone','zone_id,name','province_id='.addslashes($_POST['value']));
    foreach($Zones as $Zone)
    {
      echo '<option value="'.$Zone['zone_id'].'">'.$Zone['name'].'</option>';
    }
  }
  die();
?>