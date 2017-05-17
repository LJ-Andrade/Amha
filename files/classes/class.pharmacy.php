<?php

class Pharmacy extends DataBase
{
	var	$ID;
	var $Data;
	var $ImgGalDir		= '../../../skin/images/pharmacies/';
	var $Customers 		= array();
	var $Parent 		= array();
	var $Table			= "pharmacy";
	var $TableID		= "pharmacy_id";
	
	const DEFAULTIMG	= "../../../skin/images/pharmacies/default/pharmacy.jpg";

	public function __construct($ID=0)
	{
		$this->Connect();
		if($ID!=0)
		{
			$Data = $this->fetchAssoc($this->Table,"*",$this->TableID."=".$ID);
			$this->Data = $Data[0];
			$this->ID = $ID;
			if($this->Data['country_id'])
			{
				$DBQ = $this->fetchAssoc('geolocation_country','*','country_id='.$this->Data['country_id']);
				$this->Data['country'] = $DBQ[0]['name'];
				$this->Data['country_short'] = $DBQ[0]['short_name'];
				
			}
			if($this->Data['province_id'])
			{
				$DBQ = $this->fetchAssoc('geolocation_province','*','province_id='.$this->Data['province_id']);
				$this->Data['province'] = $DBQ[0]['name'];
				$this->Data['province_short'] = $DBQ[0]['short_name'];
				
			}
			if($this->Data['region_id'])
			{
				$DBQ = $this->fetchAssoc('geolocation_region','*','region_id='.$this->Data['region_id']);
				$this->Data['region'] = $DBQ[0]['name'];
				$this->Data['region_short'] = $DBQ[0]['short_name'];
				
			}
			if($this->Data['zone_id'])
			{
				$DBQ = $this->fetchAssoc('geolocation_zone','*','zone_id='.$this->Data['zone_id']);
				$this->Data['zone'] = $DBQ[0]['name'];
				$this->Data['zone_short'] = $DBQ[0]['short_name'];
				
			}
		}
	}

	public function GetDefaultImg()
	{
		return self::DEFAULTIMG;
	}
	
	public function GetImg()
	{
		if(!$this->Data['logo'] || !file_exists($this->Data['logo']))
			return $this->GetDefaultImg();
		else
			return $this->Data['logo'];
	}
	
	public function ImgGalDir()
	{
		$Dir = $this->ImgGalDir.'/'.$this->ID;
		if(!file_exists($Dir))
			mkdir($Dir);
		return $Dir;
	}

///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////// SEARCHLIST FUNCTIONS ///////////////////////////////////////////////////////////////////////////
///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
public function MakeRegs($Mode="List")
	{
		$Rows	= $this->GetRegs();
		//echo $this->lastQuery();
		for($i=0;$i<count($Rows);$i++)
		{
			$Row	=	new Pharmacy($Rows[$i][$this->TableID]);
			//var_dump($Row);
			// $UserGroups = $Row->GetGroups();
			// $Groups='';
			// foreach($UserGroups as $Group)
			// {
			// 	$Groups .= '<span class="label label-warning">'.$Group['title'].'</span> ';
			// }
			// if(!$Groups) $Groups = 'Ninguno';
			$Actions	= 	'<span class="roundItemActionsGroup">';
			$Actions	.=  $Mode == 'List'? '<a><button type="button" alt="Ver m&aacute;s" title="Ver m&aacute;s" class="btn btnGreen ExpandButton" id="expand_'.$Row->ID.'"><i class="fa fa-plus"></i></button></a>' : '';
			$Actions	.= 	'<a href="edit.php?id='.$Row->ID.'"><button type="button" class="btn btnBlue" alt="Editar" title="Editar"><i class="fa fa-pencil"></i></button></a>';
			if($Row->Data['status']=="A")
			{
				$Actions	.= '<a class="deleteElement" process="../../library/processes/proc.common.php" id="delete_'.$Row->ID.'"><button type="button" class="btn btnRed" alt="Eliminar" title="Eliminar"><i class="fa fa-trash"></i></button></a>';
			}else{
				$Actions	.= '<a class="activateElement" process="../../library/processes/proc.common.php" id="activate_'.$Row->ID.'"><button type="button" class="btn btnGreen" alt="Activar" title="Activar"><i class="fa fa-check-circle"></i></button></a>';
			}
			$Actions	.= '</span>';
			switch(strtolower($Mode))
			{
				case "list":
					
					$Items = '
							<div class="row " style="padding-top:5px;">
								<div class="col-md-3">
									<div class="listRowInner">
										<span class="listTextStrong"><i class="fa fa-desktop"></i></span>
										<span class="listTextStrong">'.$Row->Data['website'].'</span>
									</div>
								</div>
								<div class="col-md-3">
									<div class="listRowInner">
										<span class="listTextStrong"><i class="fa fa-facebook-official"></i></span>
										<span class="listTextStrong">facebook.com/'.$Row->Data['facebook'].'</span>
									</div>
									
								</div>
								<div class="col-md-3">
									<div class="listRowInner">
										<span class="listTextStrong"><i class="fa fa-whatsapp"></i></span>
										<span class="listTextStrong">'.$Row->Data['whatsapp'].'</span>
									</div>
								</div>
								<div class="col-md-3 col-sm-6">
									<div class="listRowInner">
										
									</div>
								</div>
									
							</div>';
					
					$RowBackground = $i % 2 == 0? '':' listRow2 ';
					$Regs	.= '<div class="row listRow'.$RowBackground.$Restrict.'" id="row_'.$Row->ID.'" title="'.$Row->Data['name'].'">
									<div class="col-md-3 col-xs-10">
										<div class="listRowInner">
											<img class="img-circle" src="'.$Row->GetImg().'" alt="'.$Row->Data['name'].'">
											<span class="listTextStrong">Farmacia '.$Row->Data['name'].'</span>
											<span class="listTextStrong"><span class="label bg-navy">'.$Row->Data['address'].', '.$Row->Data['province_short'].'</span></span>
										</div>
									</div>
									<div class="col-md-3 hideMobile990">
										<div class="listRowInner">
											<span class="smallTitle">Tel&eacute;fono</span>
											<span class="emailTextResp">'.$Row->Data['phone'].'</span>
										</div>
									</div>
									<div class="col-md-3 hideMobile990">
										<div class="listRowInner">
											<span class="smallTitle">Email</span>
											<span class="listTextStrong">'.$Row->Data['email'].'</span>
										</div>
									</div>
									<div class="col-lg-1 col-md-1 col-sm-1 hideMobile990"></div>
									<div class="animated DetailedInformation Hidden col-md-12">
										'.$Items.'
									</div>
									<div class="listActions flex-justify-center Hidden">
										<div>'.$Actions.'</div>
									</div>
									
								</div>';
				break;
				case "grid":
				$Regs	.= '<li id="grid_'.$Row->ID.'" class="RoundItemSelect roundItemBig'.$Restrict.'" title="'.$Row->Data['name'].'">
						            <div class="flex-allCenter imgSelector">
						              <div class="imgSelectorInner">
						                <img src="'.$Row->GetImg().'" alt="'.$Row->Data['name'].'" class="img-responsive">
						                <div class="imgSelectorContent">
						                  <div class="roundItemBigActions">
						                    '.$Actions.'
						                    <span class="roundItemCheckDiv"><a href="#"><button type="button" class="btn roundBtnIconGreen Hidden" name="button"><i class="fa fa-check"></i></button></a></span>
						                  </div>
						                </div>
						              </div>
						              <div class="roundItemText">
						                <p><b>Farmacia '.$Row->Data['name'].'</b></p>
						                <p>'.$Row->Data['address'].'</p>
						                
						              </div>
						            </div>
						          </li>';
				break;
			}
        }
        if(!$Regs) $Regs.= '<div class="callout callout-info"><h4><i class="icon fa fa-info-circle"></i> No se encontraron farmacias.</h4><p>Puede crear una farmacia haciendo click <a href="new.php">aqui</a>.</p></div>';
		return $Regs;
	}
	
	protected function InsertSearchField()
	{
		return '<!-- Name -->
          <div class="input-group">
            <span class="input-group-addon order-arrows sort-activated" order="name" mode="asc"><i class="fa fa-sort-alpha-asc"></i></span>
            '.insertElement('text','name','','form-control','placeholder="Nombre"').'
          </div>
          <!-- Address -->
          <div class="input-group">
            <span class="input-group-addon order-arrows" order="address" mode="asc"><i class="fa fa-sort-alpha-asc"></i></span>
            '.insertElement('text','address','','form-control','placeholder="Direcci&oacute;n"').'
          </div>
          <!-- Phone -->
          <div class="input-group">
            <span class="input-group-addon order-arrows" order="phone" mode="asc"><i class="fa fa-sort-alpha-asc"></i></span>
            '.insertElement('text','phone','','form-control','placeholder="Tel&eacute;fono"').'
          </div>
          <!-- Website -->
          <div class="input-group">
            <span class="input-group-addon order-arrows" order="website" mode="asc"><i class="fa fa-sort-alpha-asc"></i></span>
            '.insertElement('text','website','','form-control','placeholder="Sitio Web"').'
          </div>
          <!-- Email -->
          <div class="input-group">
            <span class="input-group-addon order-arrows" order="email" mode="asc"><i class="fa fa-sort-alpha-asc"></i></span>
            '.insertElement('text','email','','form-control','placeholder="Email"').'
          </div>
          ';
	}
	
	protected function InsertSearchButtons()
	{
		$Status = $_REQUEST['status'];
		
		$HTML = ($Status == 'A' || !$Status )?  '<a href="list.php?status=I"><button type="button" class="NewElementButton btn btnBlue animated fadeIn"><i class="fa fa-eye-slash"></i> Ver Eliminadas</button></a>' : '<a href="list.php"><button type="button" class="NewElementButton btn btnBlue animated fadeIn"><i class="fa fa-eye"></i> Ver Activas</button></a>';
		
		return '<!-- New Button -->
		    	<a href="new.php"><button type="button" class="NewElementButton btn btnGreen animated fadeIn"><i class="fa fa-plus"></i> Nueva Farmacia</button></a>
		    	<!-- /New Button -->'.$HTML;
	}
	
	public function ConfigureSearchRequest()
	{
		$this->SetTable($this->Table.' a');
		$this->SetFields('a.*');
		//$this->SetWhere("a.company_id=".$_SESSION['company_id']);
		//$this->AddWhereString(" AND c.company_id = a.company_id");
		$this->SetOrder('name');
		$this->SetGroupBy("a.".$this->TableID);
		
		foreach($_POST as $Key => $Value)
		{
			$_POST[$Key] = $Value;
		}
			
		if($_POST['name']) $this->SetWhereCondition("a.name","LIKE","%".$_POST['name']."%");
		if($_POST['address']) $this->SetWhereCondition("a.address","LIKE","%".$_POST['address']."%");
		if($_POST['website']) $this->SetWhereCondition("a.website","LIKE","%".$_POST['website']."%");
		if($_POST['phone']) $this->SetWhereCondition("a.phone","LIKE","%".$_POST['phone']."%");
		if($_POST['email']) $this->SetWhereCondition("a.email","LIKE","%".$_POST['email']."%");
		
		
		
		if($_REQUEST['status'])
		{
			if($_POST['status']) $this->SetWhereCondition("a.status","=", $_POST['status']);
			if($_GET['status']) $this->SetWhereCondition("a.status","=", $_GET['status']);	
		}else{
			$this->SetWhereCondition("a.status","=","A");
		}
		if($_POST['view_order_field'])
		{
			if(strtolower($_POST['view_order_mode'])=="desc")
				$Mode = "DESC";
			else
				$Mode = $_POST['view_order_mode'];
			
			$Order = strtolower($_POST['view_order_field']);
			switch($Order)
			{
				// case "agent_name": 
				// 	$this->AddWhereString(" AND c.provider_id = a.provider_id");
				// 	$Order = 'name';
				// 	$Prefix = "c.";
				// break;
				default:
					$Prefix = "a.";
				break;
			}
			$this->SetOrder($Prefix.$Order." ".$Mode);
		}
		if($_POST['regsperview'])
		{
			$this->SetRegsPerView($_POST['regsperview']);
		}
		if(intval($_POST['view_page'])>0)
			$this->SetPage($_POST['view_page']);
	}

	public function MakeList()
	{
		return $this->MakeRegs("List");
	}

	public function MakeGrid()
	{
		return $this->MakeRegs("Grid");
	}

	public function GetData()
	{
		return $this->Data;
	}

///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////// PROCESS METHODS ///////////////////////////////////////////////////////////////////////////////
//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
	
	public function Insert()
	{
		
		// LOCATION DATA
		$Lat			= $_POST['map1_lat'];
		$Lng			= $_POST['map1_lng'];
		
		$Address		= $_POST['map1_address_short'];
		if(!$Address)
			$Address	= $_POST['address_1'];
		$PostalCode		= $_POST['map1_postal_code'];
		if(!$PostalCode)
			$PostalCode	= $_POST['postal_code_1'];
		
		$ZoneShort		= $_POST['map1_zone_short'];
		$RegionShort	= $_POST['map1_region_short'];
		$ProvinceShort	= $_POST['map1_province_short'];
		$CountryShort	= $_POST['map_country_short'];
		
		$Zone			= $_POST['map1_zone'];
		$Region 		= $_POST['map1_region'];
		$Province		= $_POST['map1_province'];
		$Country		= $_POST['map1_country'];
		
		// INSERT LOCATIONS
		
		// COUNTRY
		$DBQ = $this->fetchAssoc('geolocation_country','country_id as id',"name='".$Country."'");
		if($DBQ[0]['id'])
		{
			$CountryID = $DBQ[0]['id'];
		}else{
			// INSERT NEW COUNTRY
			$this->execQuery('INSERT','geolocation_country','name,short_name',"'".$Country."','".$CountryShort."'");
			$CountryID = $this->GetInsertId();
		}
		
		//PROVINCE
		$DBQ = $this->fetchAssoc('geolocation_province','province_id as id',"country_id = ".$CountryID." AND ( name='".$ProvinceShort."' OR short_name='".$ProvinceShort."' )");
		if($DBQ[0]['id'])
		{
			$ProvinceID = $DBQ[0]['id'];
		}else{
			// INSERT NEW PROVINCE
			$this->execQuery('INSERT','geolocation_province','name,short_name,country_id',"'".$Province."','".$ProvinceShort."',".$CountryID);
			$ProvinceID = $this->GetInsertId();
		}
		
		//REGION
		$DBQ = $this->fetchAssoc('geolocation_region','region_id as id',"country_id = ".$CountryID." AND province_id = ".$ProvinceID." AND ( name='".$Region."' OR short_name='".$Region."')");
		if($DBQ[0]['id'])
		{
			$RegionID = $DBQ[0]['id'];
		}else{
			// INSERT NEW REGION
			$this->execQuery('INSERT','geolocation_region','name,short_name,country_id,province_id',"'".$Region."','".$RegionShort."',".$CountryID.",".$ProvinceID);
			$RegionID = $this->GetInsertId();
		}
		
		//ZONE
		$DBQ = $this->fetchAssoc('geolocation_zone','zone_id as id',"country_id = ".$CountryID." AND province_id = ".$ProvinceID." AND region_id = ".$RegionID." AND ( name='".$Zone."' OR short_name='".$Zone."')");
		if($DBQ[0]['id'])
		{
			$ZoneID = $DBQ[0]['id'];
		}else{
			// INSERT NEW ZONE
			$this->execQuery('INSERT','geolocation_zone','name,short_name,country_id,province_id,region_id',"'".$Zone."','".$ZoneShort."',".$CountryID.",".$ProvinceID.",".$RegionID);
			$ZoneID = $this->GetInsertId();
		}
		
		
		// Basic Data
		$Image 			= $_POST['newimage'];
		$Name			= $_POST['name'];
		$Email 			= strtolower($_POST['email']);
		$Phone			= $_POST['phone'];
		$Website 		= strtolower($_POST['website']);
		$Whatsapp		= $_POST['whatsapp'];
		$Facebook		= $_POST['facebook'];
		$Other			= $_POST['other'];
		$Notes			= $_POST['notes'];
		
		$Facebook	= explode(".com/",$Facebook);
		$Facebook	= explode('/',$Facebook[1]);
		$Facebook	= $Facebook[0];
		
		
		$Insert			= $this->execQuery('INSERT',$this->Table,'name,country_id,province_id,region_id,zone_id,address,postal_code,lat,lng,email,phone,website,facebook,whatsapp,other,notes',"'".$Name."',".$CountryID.",".$ProvinceID.",".$RegionID.",".$ZoneID.",'".$Address."','".$PostalCode."',".$Lat.",".$Lng.",'".$Email."','".$Phone."','".$Website."','".$Facebook."','".$Whatsapp."','".$Other."','".$Notes."'");
		//echo $this->lastQuery();
		$NewID 		= $this->GetInsertId();
		$New 	= new Pharmacy($NewID);
		$Dir 	= array_reverse(explode("/",$Image));
		if($Dir[1]!="default")
		{
			$Temp 	= $Image;
			$Image 	= $New->ImgGalDir().$Dir[0];
			copy($Temp,$Image);
		}
		$this->execQuery('update',$this->Table,"logo='".$Image."'",$this->TableID."=".$NewID);
		
		
	}	
	
	public function Update()
	{
		$ID 	= $_POST['id'];
		$Edit	= new Pharmacy($ID);
		
		// LOCATION DATA
		$Lat			= $_POST['map1_lat'];
		$Lng			= $_POST['map1_lng'];
		
		$Address		= $_POST['map1_address_short'];
		if(!$Address)
			$Address	= $_POST['address1'];
		$PostalCode		= $_POST['map1_postal_code'];
		if(!$PostalCode)
			$PostalCode	= $_POST['postal_code1'];
		
		$ZoneShort		= $_POST['map1_zone_short'];
		$RegionShort	= $_POST['map1_region_short'];
		$ProvinceShort	= $_POST['map1_province_short'];
		$CountryShort	= $_POST['map1_country_short'];
		
		$Zone			= $_POST['map1_zone'];
		$Region 		= $_POST['map1_region'];
		$Province		= $_POST['map1_province'];
		$Country		= $_POST['map1_country'];
		
		if(!$ZoneShort)
			$ZoneShort = $Zone;
		if(!$RegionShort)
			$RegionShort = $Region;
		if(!$ProvinceShort)
			$ProvinceShort = $Province;
		
		//echo $Address." asdasd";
		
		// INSERT LOCATIONS
		
		// COUNTRY
		$DBQ = $this->fetchAssoc('geolocation_country','country_id as id',"name='".$Country."' OR short_name='".$Country."'");
		if($DBQ[0]['id'])
		{
			$CountryID = $DBQ[0]['id'];
		}else{
			// INSERT NEW COUNTRY
			$this->execQuery('INSERT','geolocation_country','name,short_name',"'".$Country."','".$CountryShort."'");
			$CountryID = $this->GetInsertId();
		}
		
		//PROVINCE
		$DBQ = $this->fetchAssoc('geolocation_province','province_id as id',"country_id = ".$CountryID." AND ( name='".$ProvinceShort."' OR short_name='".$ProvinceShort."' )");
		//echo $this->lastQuery();
		if($DBQ[0]['id'])
		{
			$ProvinceID = $DBQ[0]['id'];
		}else{
			// INSERT NEW PROVINCE
			$this->execQuery('INSERT','geolocation_province','name,short_name,country_id',"'".$Province."','".$ProvinceShort."',".$CountryID);
			$ProvinceID = $this->GetInsertId();
		}
		
		//REGION
		$DBQ = $this->fetchAssoc('geolocation_region','region_id as id',"country_id = ".$CountryID." AND province_id = ".$ProvinceID." AND ( name='".$Region."' OR short_name='".$Region."')");
		if($DBQ[0]['id'])
		{
			$RegionID = $DBQ[0]['id'];
		}else{
			// INSERT NEW REGION
			$this->execQuery('INSERT','geolocation_region','name,short_name,country_id,province_id',"'".$Region."','".$RegionShort."',".$CountryID.",".$ProvinceID);
			$RegionID = $this->GetInsertId();
		}
		
		//ZONE
		$DBQ = $this->fetchAssoc('geolocation_zone','zone_id as id',"country_id = ".$CountryID." AND province_id = ".$ProvinceID." AND region_id = ".$RegionID." AND ( name='".$Zone."' OR short_name='".$Zone."')");
		if($DBQ[0]['id'])
		{
			$ZoneID = $DBQ[0]['id'];
		}else{
			// INSERT NEW ZONE
			$this->execQuery('INSERT','geolocation_zone','name,short_name,country_id,province_id,region_id',"'".$Zone."','".$ZoneShort."',".$CountryID.",".$ProvinceID.",".$RegionID);
			$ZoneID = $this->GetInsertId();
		}
		
		
		// Basic Data
		$Image 			= $_POST['newimage'];
		$Name			= $_POST['name'];
		$Email 			= strtolower($_POST['email']);
		$Phone			= $_POST['phone'];
		$Website 		= strtolower($_POST['website']);
		$Whatsapp		= $_POST['whatsapp'];
		$Facebook		= $_POST['facebook'];
		$Other			= $_POST['other'];
		$Notes			= $_POST['notes'];
		
		$Facebook	= explode(".com/",$Facebook);
		$Facebook	= explode('/',$Facebook[1]);
		$Facebook	= $Facebook[0];
		
		// CREATE NEW IMAGE IF EXISTS
		if($Image!=$Edit->Data['logo'])
		{
			if($Image!=$Edit->GetDefaultImg())
			{
				if(file_exists($Edit->GetImg()))
					unlink($Edit->GetImg());
				$Dir 	= array_reverse(explode("/",$Image));
				$Temp 	= $Image;
				$Image 	= $Edit->ImgGalDir().$Dir[0];
				copy($Temp,$Image);
			}
		}
		
		$Update		= $this->execQuery('update',$this->Table,"name='".$Name."',postal_code='".$PostalCode."',address='".$Address."',whatsapp='".$Whatsapp."',email='".$Email."',facebook='".$Facebook."',phone='".$Phone."',website='".$Website."',country_id=".$CountryID.",province_id='".$ProvinceID."',region_id=".$RegionID.",zone_id='".$ZoneID."',lat=".$Lat.",lng=".$Lng.",logo='".$Image."',other='".$Other."',notes='".$Notes."'",$this->TableID."=".$ID);
		//echo $this->lastQuery();
	}
	
	public function Activate()
	{
		$ID	= $_POST['id'];
		$this->execQuery('update',$this->Table,"status = 'A'",$this->TableID."=".$ID);
	}
	
	public function Delete()
	{
		$ID	= $_POST['id'];
		$this->execQuery('update',$this->Table,"status = 'I'",$this->TableID."=".$ID);
	}
	
	public function Search()
	{
		$this->ConfigureSearchRequest();
		echo $this->InsertSearchResults();
	}
	
	public function Newimage()
	{
		if(count($_FILES['image'])>0)
		{
			$ID	= $_POST['id'];
			if($ID)
			{
				$New = new Pharmacy($ID);
				if($_POST['newimage']!=$New->GetDefaultImg() && $_POST['newimage']!=$New->GetImg() && file_exists($_POST['newimage']))
					unlink($_POST['newimage']);
				$TempDir= $this->ImgGalDir;
				$Name	= "pharmacy".intval(rand()*rand()/rand());
				$Img	= new FileData($_FILES['image'],$TempDir,$Name);
				echo $Img	-> BuildImage();
			}else{	
				if($_POST['newimage']!=$New->GetDefaultImg() && $_POST['newimage']!=$this->GetDefaultImg() && file_exists($_POST['newimage']))
					unlink($_POST['newimage']);
				$TempDir= $this->ImgGalDir;
				$Name	= "pharmacy".intval(rand()*rand()/rand());
				$Img	= new FileData($_FILES['image'],$TempDir,$Name);
				echo $Img	-> BuildImage();
			}
		}
	}
}
?>
