<?php

class Configuration extends DataBase
{
	
	var $Data;
	var $Table			= "configuration";

	public function __construct()
	{
		$this->Connect();
		$Data = $this->fetchAssoc($this->Table,"*");
		$this->Data = $Data[0];
		
	}
	
	public function GetData()
	{
		return $this->Data;
	}
	
	public function Update()
	{
		// Basic Data
		$Data1 = $_POST['data_1'];
		$Data2 = $_POST['data_2'];
		$Data3 = $_POST['data_3'];
		$Data4 = $_POST['data_4'];
		$Data5 = $_POST['data_5'];
		$Data6 = $_POST['data_6'];
		
		$Update	= $this->execQuery('update',$this->Table,"data_1='".$Data1."',data_2='".$Data2."',data_3='".$Data3."',data_4='".$Data4."',data_5='".$Data5."',data_6='".$Data6."'");
		//echo $this->lastQuery();
	}
}
?>
