<?php
	session_name("admin_amha");
	session_cache_expire(15800);
	session_start();
	$_SESSION['users'] = array('amha'=>'b88f798eb70443c4de2a3f5a3a3013ffab74cc9f','cheketo'=>'49e09dc76bf5ba6fdcbfb710a7d8842d867bad54');
	include_once("../../classes/class.database.php");

	/* CONNECTION STARTS */
	$DB = new DataBase();
	/* REDIRECTS IF THERE WAS AN ERROR */
	if(!$DB->Connect())
	{
		header("Location: ../../includes/inc.error.php?error=".$DB->Error);
		die();
	}

	include_once("../../library/functions/func.common.php");
	include_dir("../../classes");

	/* SECURIRTY CHECKS */
	// $Security		= new Security();
	// if($Security->checkProfile($_SESSION['admin_id']))
	// {
	// 	$Admin 		= new AdminData();
	// 	$Cookies 	= new Login($Admin->User);
	// 	$Cookies->setCookies();

	$ActualUrl	= explode("/",$_SERVER['PHP_SELF']);
	$AdmLink		= $ActualUrl[count($ActualUrl)-2]."/".basename($_SERVER['PHP_SELF']);
		if($AdmLink!='login/login.php' && $AdmLink!='processes/proc.common.php'  && (!$_SESSION['user'] || !($_SESSION['users'][$_SESSION['user']]==$_SESSION['password'])) )
		{
			header("Location: ../login/login.php?error=login");
			die();
		}
	// }
	/* ADDING SLASHES TO PUBLIC VARIABLES */
	$_POST	= AddSlashesArray($_POST);
	$_GET	= AddSlashesArray($_GET);
	/* SETTING HEAD OF THE DOCUMENT */
	$Head	= new Head();
	$Head	-> setFavicon("../../../skin/images/body/icons/favicon.ico");
	/* SETTING FOOT OF THE DOCUMENT */
	$Foot	= new Foot();
	/* SETTING MENU OF THE DOCUMENT */
	//$Menu = new Menu();
?>
