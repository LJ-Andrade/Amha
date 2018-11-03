<?php

class Doctor extends DataBase
{
	var	$ID;
	var $Data;
	var $ImgGalDir		= '../../../skin/images/doctor/';
	var $Offices 		= array();
	var $Specialties	= array();
	var $Table			= "doctor";
	var $TableID		= "doctor_id";

	const DEFAULTIMG	= "../../../skin/images/doctors/default/default.png";

	public function __construct($ID=0)
	{
		$this->Connect();
		$this->ID = $ID;
		if($ID!=0)
		{
			$Data = $this->fetchAssoc($this->Table,"*",$this->TableID."=".$ID);
			$this->Data = $Data[0];
			$this->Data['offices'] = $this->GetOffices();
			$this->Data['specialties'] = $this->GetSpecialties();
			$this->Data['sex'] = strtolower($this->Data['sex']);
			$this->Data['prefix'] = $this->Data['sex']=='m'? 'Dr.' : 'Dra.';
			$this->Data['name'] = $this->Data['prefix']." ".$this->Data['last_name'].", ".$this->Data['first_name'];
		}
	}

	public function GetOffices()
	{
		if(empty($this->Offices))
		{
			$this->Offices = $this->fetchAssoc(
			$this->Table."_office a
				LEFT JOIN geolocation_country b ON (a.country_id = b.country_id)
				LEFT JOIN geolocation_province c ON (a.province_id = c.province_id)
				LEFT JOIN geolocation_zone e ON (a.zone_id = e.zone_id)
				",
				"a.*,b.name as country,c.short_name as province,e.short_name as zone",
				$this->TableID."=".$this->ID,'a.province_id DESC');
		}
		return $this->Offices;
	}

	public function GetSpecialties()
	{
		if(empty($this->Specialties))
		{
			$this->Specialties = $this->fetchAssoc(
				"relation_doctor_specialty a
				LEFT JOIN doctor_specialty b ON (a.specialty_id = b.specialty_id)
				",
				"b.*",
				$this->TableID."=".$this->ID,'b.title');
		}
		return $this->Specialties;
	}

	public function GetDefaultImg()
	{
		// if($this->Data['sex']=='f')
			return "../../../skin/images/doctors/default/default_".$this->Data['sex'].".ico";
		// else
		// 	return self::DEFAULTIMG;
	}

	public function GetImg()
	{
		if(!$this->Data['img'] || !file_exists($this->Data['img']))
			return $this->GetDefaultImg();
		else
			return $this->Data['img'];
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
public function MakeRegs($Mode="list")
	{
		$Rows	= $this->GetRegs();
		//echo $this->lastQuery();
		for($i=0;$i<count($Rows);$i++)
		{
			$Row	=	new Doctor($Rows[$i][$this->TableID]);
			$Row->Data['type'] = $Rows[$i]['type_'.$Row->Data['sex']];
			switch($Row->Data['type_id'])
			{
				case "2": $Label = "green"; break;
				case "3": $Label = "purple"; break;
				default: $Label = "aqua"; break;
			}

			$Advert = strtolower($Row->Data['advertising'])=='y'? '<span class="label label-warning"> SI ' : '<span class="label bg-gray"> NO ';
			$Advert .= '</span>';

			$Payment = strtolower($Row->Data['payment'])=='y'? '<span class="label label-success"> SI ' : '<span class="label label-danger"> NO ';
			$Payment .= '</span>';

			$Actions	= 	'<span class="roundItemActionsGroup">';
			if(strtolower($Mode)=='list')
				$Actions .= '<a><button type="button" class="btn btnGreen ExpandButton" id="expand_'.$Row->ID.'"><i class="fa fa-plus"></i></button></a>';
			$Actions	.= 	'<a href="edit.php?id='.$Row->ID.'"><button type="button" class="btn btnBlue"><i class="fa fa-pencil"></i></button></a>';
			if($Row->Data['status']=="A")
			{
				$Actions	.= '<a class="deleteElement" process="../../library/processes/proc.common.php" id="delete_'.$Row->ID.'"><button type="button" class="btn btnRed"><i class="fa fa-trash"></i></button></a>';
			}else{
				$Actions	.= '<a class="activateElement" process="../../library/processes/proc.common.php" id="activate_'.$Row->ID.'"><button type="button" class="btn btnGreen"><i class="fa fa-check-circle"></i></button></a>';
			}
			$Actions	.= '</span>';

			$Offices = '';
			$I=0;

			foreach($Row->Data['offices'] as $Office)
			{
				$I++;
				$RowClass = $I % 2 != 0? 'bg-gray':'';

				$Floor = $Office['floor']? ' '.$Office['floor'].'°':'';
            	$Apartment = $Office['apartment']? ' '.$Office['apartment']:'';

				$OfficeAddress = $Office['address'].$Floor.$Apartment.', '.$Office['zone'].', '.$Office['province'];//.', '.$Office['country'];

				$OfficeDataFields = '';
				$OfficeDataFields .= $Office['phone']? '<span class="smallDetails"><i class="fa fa-phone"></i> '.$Office['phone'].'</span>':'';
				$OfficeDataFields .= $Office['email']? '<span class="smallDetails"><i class="fa fa-envelope"></i> '.$Office['email'].'</span>':'';
				$OfficeDataFields .= $Office['timetable']? '<span class="smallDetails"><i class="fa fa-clock-o"></i> '.$Office['timetable'].'</span>':'';
				$OfficeData = $OfficeDataFields? '<div class="col-md-4 col-md-6 col-sm-12"><div class="listRowInner"><span class="listTextStrong">Datos del Consultorio</span>'.$OfficeDataFields.'</div></div>':'';

				$Offices .= '
							<div class="row '.$RowClass.'" style="margin-top:1em;">
								<div class="col-md-4 col-md-6 col-sm-12">
									<div class="listRowInner">
										<span class="listTextStrong"><i class="fa fa-map-marker"></i> '.$OfficeAddress.'</span>
									</div>
								</div>
								'.$OfficeData.'
							</div>';
			}

			$Specialties = '';
			foreach($Row->Data['specialties'] as $Specialty)
			{
				$Specialties .= '<span class="label label-primary">'.$Specialty['title'].'</span> ';
			}
			if($Specialties) //$Specialties = ' No especificadas';

			$Specialties = '<div class="row" style="padding-top:1em;">
								<div class="col-sm-12">
									<div class="listRowInner">
										<span class="listTextStrong" style="text-align:left!important;">Especialidad: '.$Specialties.'</span>
									</div>
								</div>
							</div>';

			switch(strtolower($Mode))
			{
				case "list":
					$RowBackground = $i % 2 == 0? '':' listRow2 ';
					$Phone = $Row->Data['offices'][0]['phone']? '<span class="smallDetails"><i class="fa fa-phone"></i> '.$Row->Data['offices'][0]['phone'].'</span>':'';

					$Regs	.= '<div class="row listRow'.$RowBackground.$Restrict.'" id="row_'.$Row->ID.'" title="'.$Row->Data['name'].'">
									<div class="col-lg-3 col-md-5 col-sm-8 col-xs-10">
										<div class="listRowInner">
											<img class="img-circle" src="'.$Row->GetImg().'" alt="'.$Row->Data['name'].'">
											<span class="listTextStrong">'.$Row->Data['name'].'</span>
											<span class="smallDetails"><span class="label bg-'.$Label.'">'.$Row->Data['type'].'</span></span>
										</div>
									</div>
									<div class="col-lg-2 col-md-3 col-sm-2 hideMobile990">
										<div class="listRowInner">
											<span class="listTextStrong">Pago Cuota '.MonthFormat(date('m')).'</span>
											<span class="emailTextResp">'.$Payment.'</span>
										</div>
									</div>
									<div class="col-lg-3 col-md-3 col-sm-2 hideMobile990">
										<div class="listRowInner">
											<span class="listTextStrong">Publicidad</span>
											<span class="listTextStrong">'.$Advert.'</span>
										</div>
									</div>
									<div class="animated DetailedInformation Hidden col-md-12">
										'.$Specialties.'
										'.$Offices.'
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
						                <p><b>'.$Row->Data['name'].'</b></p>
						                <p>('.$Row->Data['type'].')</p>
						              </div>
						            </div>
						          </li>';
				break;
			}
        }
        if(!$Regs) $Regs.= '<div class="callout callout-info"><h4><i class="icon fa fa-info-circle"></i> No se encontraron m&eacute;dicos.</h4><p>Puede agregar un m&eacute;dico haciendo click <a href="new.php">aqui</a>.</p></div>';
		return $Regs;
	}

	protected function InsertSearchField()
	{

		return '
				<!-- Name -->
          <div class="input-group">
            <span class="input-group-addon order-arrows sort-activated" order="name" mode="asc"><i class="fa fa-sort-alpha-asc"></i></span>
            '.insertElement('text','name','','form-control','placeholder="M&eacute;dico/a"').'
          </div>
          <!-- Province -->
          <div class="input-group">
            <span class="input-group-addon order-arrows" order="province" mode="asc"><i class="fa fa-sort-alpha-asc"></i></span>
            '.insertElement('select','province','','form-control','placeholder="Provincia"',$this->fetchAssoc('geolocation_province','province_id,short_name'),'','Provincia').'
          </div>
          <!-- Address -->
          <div class="input-group">
            <span class="input-group-addon order-arrows" order="address" mode="asc"><i class="fa fa-sort-alpha-asc"></i></span>
            '.insertElement('text','address','','form-control','placeholder="Direcci&oacute;n"').'
          </div>
          <!-- Type -->
          <div class="input-group">
            <span class="input-group-addon order-arrows" order="type" mode="asc"><i class="fa fa-sort-alpha-asc"></i></span>
            '.insertElement('select','type','','form-control','',$this->fetchAssoc('doctor_type','type_id,title_m'),'','Tipo').'
          </div>
          ';
	}

	protected function InsertSearchButtons()
	{
		return '<!-- New Button -->
		    	<a href="new.php"><button type="button" class="NewElementButton btn btnGreen animated fadeIn"><i class="fa fa-user-plus"></i> Nuevo M&eacute;dico</button></a>
		    	<!-- /New Button -->';
	}

	public function ConfigureSearchRequest()
	{
		$this->SetTable(
			$this->Table.' a
			LEFT JOIN doctor_office b ON (b.doctor_id = a.doctor_id)
			INNER JOIN doctor_type d ON (d.type_id = a.type_id)
			LEFT JOIN relation_doctor_specialty e ON (e.doctor_id = a.doctor_id)
			LEFT JOIN doctor_specialty c ON (c.specialty_id = e.specialty_id)
			LEFT JOIN geolocation_country g ON (g.country_id = b.country_id)
			LEFT JOIN geolocation_province h ON (h.province_id = b.province_id)
			LEFT JOIN geolocation_zone j ON (j.zone_id = b.zone_id)
		');
		$this->SetFields('
			a.*,
			b.office_id AS office_id,
			d.title_m AS type_m,
			d.title_f AS type_f
			');
		//$this->AddWhereString(" AND c.company_id = a.company_id");
		$this->SetGroupBy("a.".$this->TableID);

		foreach($_POST as $Key => $Value)
		{
			$_POST[$Key] = $Value;
		}

		if($_POST['name']) //$this->SetWhereCondition("a.first_name","LIKE","%".$_POST['name']."%");
			$this->AddWhereString(" AND (a.first_name LIKE '%".$_POST['name']."%' OR a.last_name LIKE '%".$_POST['name']."%')");
		if($_POST['address']) $this->SetWhereCondition("b.address","LIKE","%".$_POST['address']."%");
		if($_POST['province']) $this->SetWhereCondition("b.province_id","=",$_POST['province']);
		if($_POST['type']) $this->SetWhereCondition("d.type_id","=",$_POST['type']);

		if($_POST['country']) $this->SetWhereCondition("g.name","LIKE", '%'.$_POST['country'].'%');
		if($_GET['country']) $this->SetWhereCondition("g.name","LIKE", '%'.$_GET['country'].'%');

		if($_REQUEST['status'])
		{
			if($_POST['status']) $this->SetWhereCondition("a.status","=", $_POST['status']);
			if($_GET['status']) $this->SetWhereCondition("a.status","=", $_GET['status']);
		}else{
			$this->SetWhereCondition("a.status","=","A");
		}
		// if($_POST['view_order_field'])
		// {
			if(strtolower($_POST['view_order_mode'])=="desc")
				$Mode = "DESC";
			else
				$Mode = $_POST['view_order_mode'];

			$Order = strtolower($_POST['view_order_field']);
			switch($Order)
			{
				case "address":
					//$this->AddWhereString(" AND a.customer_id = b.customer_id");
					$Order = 'address';
					$Prefix = "b.";
				break;
				case "province":
					//$this->AddWhereString(" AND a.customer_id = b.customer_id");
					$Order = 'name';
					$Prefix = "h.";
				break;
				case "type":
					//$this->AddWhereString(" AND a.customer_id = b.customer_id");
					$Order = 'title_m';
					$Prefix = "d.";
				break;
				default:
					$Order = 'last_name';
					$Prefix = "a.";
				break;
			}
			$this->SetOrder($Prefix.$Order." ".$Mode);
		// }
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
		// Basic Data
		$Type 			= $_POST['type'];
		$FirstName		= $_POST['first_name'];
		$LastName		= $_POST['last_name'];
		$Sex			= $_POST['sex'];
		$NMedEnr		= $_POST['national_medical_enrollment'];
		$PMedEnr		= $_POST['provincial_medical_enrollment'];
		$User			= $_POST['user'];
		$Password		= $_POST['password'];
		$Email			= $_POST['email'];
		$Website		= $_POST['website'];
		if($_POST['service']==2)
		{
			$Phone		= $_POST['phone'];
			$Fax		= $_POST['fax'];
			$Office 	= 'N';
		}else{
			$Office 	= 'Y';
		}

		$Advertising	= $_POST['advertising'];
		$Payment		= $_POST['payment'];

		$Description	= $_POST['description'];

		$Notes			= $_POST['notes'];


		//VALIDATIONS
		if(!$FirstName) echo 'Falta Nombre';
		if(!$LastName) echo 'Falta Apellido';
		if(!$Type) echo 'Tipo incompleto';
		if(!$Sex) echo 'Falta Sexo';

		$Insert	= $this->execQuery('INSERT',$this->Table,'type_id,first_name,last_name,office,sex,national_medical_enrollment,provincial_medical_enrollment,user,password,email,phone,fax,website,advertising,payment,description,notes',"'".$Type."','".$FirstName."','".$LastName."','".$Office."','".$Sex."','".$NMedEnr."','".$PMedEnr."','".$User."','".$Password."','".$Email."','".$Phone."','".$Fax."','".$Website."','".$Advertising."','".$Payment."','".$Description."','".$Notes."'");
		//echo $this->lastQuery();
		$NewID 	= $this->GetInsertId();
		$New 	= new Doctor($NewID);
		$New->InsertOfficeInfo();
		$New->InsertSpecialties();

	}

	public function Update()
	{
		$ID 	= $_POST['id'];
		$Edit	= new Doctor($ID);

		// Basic Data
		$Type 			= $_POST['type'];
		$FirstName		= $_POST['first_name'];
		$LastName		= $_POST['last_name'];
		$Sex			= $_POST['sex'];
		$NMedEnr		= $_POST['national_medical_enrollment'];
		$PMedEnr		= $_POST['provincial_medical_enrollment'];
		$User			= $_POST['user'];
		$Password		= $_POST['password'];
		$Email			= $_POST['email'];
		$Website		= $_POST['website'];
		if($_POST['service']==2)
		{
			$Phone		= $_POST['phone'];
			$Fax		= $_POST['fax'];
			$Office 	= 'N';
		}else{
			$Office 	= 'Y';
		}


		$Advertising	= $_POST['advertising'];
		$Payment		= $_POST['payment'];

		$Description	= $_POST['description'];

		$Notes			= $_POST['notes'];

		$Update		= $this->execQuery('update',$this->Table,"first_name='".$FirstName."',last_name='".$LastName."',type_id='".$Type."',office='".$Office."',sex='".$Sex."',national_medical_enrollment='".$NMedEnr."',provincial_medical_enrollment='".$PMedEnr."',user='".$User."',password='".$Password."',email='".$Email."',phone='".$Phone."',fax='".$Fax."',website='".$Website."',advertising='".$Advertising."',payment='".$Payment."',description='".$Description."',notes='".$Notes."'",$this->TableID."=".$ID);
		//echo $this->lastQuery();
		$Edit->InsertOfficeInfo(1);
		$Edit->InsertSpecialties();

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

	public function InsertSpecialties()
	{
		$this->execQuery('DELETE','relation_doctor_specialty','doctor_id = '.$this->ID);
		//echo $this->lastQuery();
		$Specialties = explode(',',$_POST['brokers']);
		// INSERT SPECIALTIES
		$Fields="";
		foreach($Specialties as $Specialty)
		{
			if(!is_numeric($Specialty))
			{
				if(trim($Specialty))
					$Query = $this->execQuery('INSERT','doctor_specialty','title',"'".$Specialty."'");
				//echo $this->lastQuery();
				if($Query)
					$Specialty = $this->GetInsertId();
				else
					$Specialty = 0;
			}
			if($Specialty>0)
			{
				if($Fields)
					$Fields .= "),(";
				$Fields .= $this->ID.",".$Specialty;
			}
		}
		if($Fields)
		{
			$this->execQuery('insert','relation_doctor_specialty','doctor_id,specialty_id',$Fields);
			//echo $this->lastQuery().'<br><br>';
		}

	}

	public function InsertOfficeInfo($DeleteInfo=0)
	{

		// DELETE ALL OFFICES
		if($DeleteInfo)
		{
			$this->execQuery('DELETE','doctor_office',"doctor_id=".$this->ID);
		}

		if($_POST['service']==1)
		{
			// OFFICES
			for($I=1;$I<=$_POST['total_branches'];$I++)
			{
				if($_POST['address_'.$I])
				{
					$Offices[$I]['floor']		= $_POST['floor_'.$I];
					//$Offices[$I]['floor']		= $Offices[$I]['floor']? $Offices[$I]['floor'] : 0;
					$Offices[$I]['apartment']	= $_POST['apartment_'.$I];
					// $Offices[$I]['name']		= $_POST['office_name_'.$I];
					$Offices[$I]['timetable']	= $_POST['timetable_'.$I];
					$Offices[$I]['fax']			= $_POST['fax_'.$I];
					// $Offices[$I]['email']		= $_POST['email_'.$I];
					$Offices[$I]['phone']		= $_POST['phone_'.$I];

					if($I==1)
						$Offices[$I]['main_office']			= 'Y';
					else
						$Offices[$I]['main_office']			= 'N';

					// LOCATION DATA
					$Offices[$I]['lat']			= $_POST['map'.$I.'_lat'];
					$Offices[$I]['lng']			= $_POST['map'.$I.'_lng'];

					$Offices[$I]['address']		= $_POST['map'.$I.'_address_short'];
					if(!$Offices[$I]['address'])
						$Offices[$I]['address']	= $_POST['address_'.$I];
					if($_POST['number_'.$I])
						$Offices[$I]['address']	= $Offices[$I]['address'].' '.$_POST['number_'.$I];
					$Offices[$I]['postal_code']	= $_POST['map'.$I.'_postal_code'];
					if(!$Offices[$I]['postal_code'])
						$Offices[$I]['postal_code']= $_POST['postal_code_'.$I];

					$Offices[$I]['zone_short']		= $_POST['map'.$I.'_zone_short'];
					// $Offices[$I]['region_short']	= $_POST['map'.$I.'_region_short'];
					$Offices[$I]['province_short']	= str_replace( 'Pcia de ', '', $_POST['map'.$I.'_province_short']) ;
					$Offices[$I]['country_short']	= $_POST['map'.$I.'_country_short'];

					$Offices[$I]['zone']		= $_POST['map'.$I.'_zone'];
					// $Offices[$I]['region'] 		= $_POST['map'.$I.'_region'];
					$Offices[$I]['province']	= str_replace( 'Provincia de ', '', $_POST['map'.$I.'_province']) ;
					$Offices[$I]['country']		= $_POST['map'.$I.'_country'];

					if(!$Offices[$I]['zone_short'])
						$Offices[$I]['zone_short'] = $Offices[$I]['zone'];
					// if(!$Offices[$I]['region_short'])
					// 	$Offices[$I]['region_short'] = $Offices[$I]['region'];
					if(!$Offices[$I]['province_short'])
						$Offices[$I]['province_short'] = $Offices[$I]['province'];

					// INSERT NEW LOCATIONS

					// COUNTRY
					$DBQ = $this->fetchAssoc('geolocation_country','country_id as id'," name='" . $Offices[ $I ][ 'country' ]. "' OR short_name='" . $Offices[ $I ][ 'country_short' ] . "' OR name='" . $Offices[ $I ][ 'country_short' ]. "' OR short_name='" . $Offices[ $I ][ 'country' ] . "' ");
					if($DBQ[0]['id'])
					{
						$Offices[$I]['country_id'] = $DBQ[0]['id'];
					}else{

						// INSERT NEW COUNTRY
						$this->execQuery('INSERT','geolocation_country','name,short_name',"'".$Offices[$I]['country']."','".$Offices[$I]['country_short']."'");
						$Offices[$I]['country_id'] = $this->GetInsertId();
					}

					//PROVINCE
					$DBQ = $this->fetchAssoc('geolocation_province','province_id as id',"country_id = ".$Offices[$I]['country_id']." AND ( name='".$Offices[$I]['province']."' OR name='".$Offices[$I]['province_short']."' OR short_name='".$Offices[$I]['province']."' OR short_name='".$Offices[$I]['province_short']."')");
					if($DBQ[0]['id'])
					{
						$Offices[$I]['province_id'] = $DBQ[0]['id'];
					}else{

						// INSERT NEW PROVINCE
						$this->execQuery( 'INSERT', 'geolocation_province', 'name,short_name,country_id', "'" . $Offices[ $I ][ 'province' ] . "','" . $Offices[ $I ][ 'province_short' ] . "'," . $Offices[ $I ][ 'country_id' ] );
						$Offices[ $I ][ 'province_id' ] = $this->GetInsertId();

					}

					// //REGION
					// $DBQ = $this->fetchAssoc('geolocation_region','region_id as id',"country_id = ".$Offices[$I]['country_id']." AND province_id = ".$Offices[$I]['province_id']." AND ( name='".$Offices[$I]['region']."' OR short_name='".$Offices[$I]['region']."' OR name='".$Offices[$I]['region_short']."' OR short_name='".$Offices[$I]['region_short']."' )");
					// if($DBQ[0]['id'])
					// {
					// 	$Offices[$I]['region_id'] = $DBQ[0]['id'];
					// }else{
					// 	// INSERT NEW REGION
					// 	$this->execQuery('INSERT','geolocation_region','name,short_name,country_id,province_id',"'".$Offices[$I]['region']."','".$Offices[$I]['region_short']."',".$Offices[$I]['country_id'].",".$Offices[$I]['province_id']);
					// 	$Offices[$I]['region_id'] = $this->GetInsertId();
					// }

					//ZONE
					$DBQ = $this->fetchAssoc('geolocation_zone','zone_id as id',"country_id = ".$Offices[$I]['country_id']." AND province_id = ".$Offices[$I]['province_id']." AND ( name='".$Offices[$I]['zone']."' OR short_name='".$Offices[$I]['zone']."' OR name='".$Offices[$I]['zone_short']."' OR short_name='".$Offices[$I]['zone_short']."' ) ");
					if($DBQ[0]['id'])
					{
						$Offices[$I]['zone_id'] = $DBQ[0]['id'];
					}else{
						// INSERT NEW ZONE
						$this->execQuery('INSERT','geolocation_zone','name,short_name,country_id,province_id',"'".$Offices[$I]['zone']."','".$Offices[$I]['zone_short']."',".$Offices[$I]['country_id'].",".$Offices[$I]['province_id']);
						$Offices[$I]['zone_id'] = $this->GetInsertId();
					}

					$this->execQuery("INSERT","doctor_office","doctor_id,country_id,province_id,zone_id,address,floor,apartment,phone,timetable,fax,postal_code,lat,lng",$this->ID.",".$Offices[$I]['country_id'].",".$Offices[$I]['province_id'].",".$Offices[$I]['zone_id'].",'".$Offices[$I]['address']."','".$Offices[$I]['floor']."','".$Offices[$I]['apartment']."','".$Offices[$I]['phone']."','".$Offices[$I]['timetable']."','".$Offices[$I]['fax']."','".$Offices[$I]['postal_code']."',".$Offices[$I]['lat'].",".$Offices[$I]['lng']);
					//echo $this->lastQuery();
					//$OfficeID 		= $this->GetInsertId();
				}
			}
		}
	}

	public function Getbranchmodal($ID=1,$Data=array())
    {
    	if($_POST['total_branches'])
    		$ID = $_POST['total_branches'];
    	if(empty($Data))
		{
			if($ID>1)
				$NewClass = "NewBranch";
			$BranchName = (intval($ID)-1);
			$Agents	= array();
		}else{
			$BranchName = $Data['name'];
		}
    	$BranchNameHTML = insertElement('hidden','branch_name_'.$ID,$BranchName);

        $HTML .= '
        <!-- //// BEGIN BRANCH MODAL '.$ID.' //// -->
        <div id="branch_modal_'.$ID.'" class="modal fade '.$NewClass.'" role="dialog" style="opacity:1!important;">
            <div class="modal-dialog" style="top:12em;">

                <div class="modal-content">
                    <div class="modal-header">
                        <!--<button type="button" class="close" data-dismiss="modal">&times;</button>-->
                        <h4 class="modal-title" id="BranchTitle'.$ID.'">Editar Consultorio</i></h4>
                    </div>
                    <div class="modal-body" style="max-height:35em;overflow-y:scroll;">
                    <form id="branch_form_'.$ID.'" name="branch_form_'.$ID.'">
                            '.$BranchNameHTML.'
                        <h4 class="subTitleB"><i class="fa fa-map"></i> Geolocalizaci&oacute;n</h4>
                        <div class="row form-group inline-form-custom">
                            <div class="col-xs-12 col-sm-6">
                                <span class="input-group">
                                    <span class="input-group-addon" alt="Direcci&oacute;n" title="Direcci&oacute;n"><i class="fa fa-map-marker"></i></span>
                                    '.insertElement('text','address_'.$ID,$Data['address'],'form-control','disabled="disabled" placeholder="Direcci&oacute;n" validateMinLength="4///La direcci&oacute;n debe contener 4 caracteres como m&iacute;nimo."').'
                                </span>
                            </div>
                            <div class="col-xs-12 col-sm-6">
                                <span class="input-group">
                                    <span class="input-group-addon" alt="C&oacute;digo postal" title="C&oacute;digo postal"><i class="fa fa-bookmark"></i></span>
                                    '.insertElement('text','postal_code_'.$ID,$Data['postal_code'],'form-control','disabled="disabled" placeholder="C&oacute;digo Postal" validateMinLength="4///La direcci&oacute;n debe contener 4 caracteres como m&iacute;nimo."').'
                                </span>
                            </div>
                        </div>
                        <div class="row form-group inline-form-custom">
                            <div class="col-xs-12 col-sm-6">
                                <span class="input-group">
                                    <span class="input-group-addon" alt="Piso" title="Piso"><i class="fa fa-server"></i></span>
                                    '.insertElement('text','floor_'.$ID,$Data['floor'],'form-control','placeholder="Piso"').'
                                </span>
                            </div>
                            <div class="col-xs-12 col-sm-6">
                                <span class="input-group">
                                    <span class="input-group-addon" alt="Departamento" title="Departamento"><i class="fa fa-hdd-o"></i></span>
                                    '.insertElement('text','apartment_'.$ID,$Data['apartment'],'form-control','placeholder="Departamento"').'
                                </span>
                            </div>
                        </div>
                        <div class="row form-group inline-form-custom">
                            <div class="col-xs-12">
                                <span class="input-group">
                                    <span class="input-group-addon" alt="Complemento para el campo direcci&oacute;n" title="Complemento para el campo de direcci&oacute;n"><i class="fa fa-road"></i></span>
                                    '.insertElement('text','number_'.$ID,'','form-control','placeholder="Complemento direcci&oacute;n"').'
                                </span>
                            </div>
                        </div>
                        <div class="row form-group inline-form-custom">
                            <div class="col-xs-12 col-sm-12 MapWrapper">
                                '.InsertAutolocationMap($ID,$Data).'
                            </div>
                        </div>

                        <br>
                        <h4 class="subTitleB"><i class="fa fa-globe"></i> Datos de contacto</h4>
                        <div class="row form-group inline-form-custom">
                            <div class="col-sm-6 col-xs-12">
                                <span class="input-group">
                                    <span class="input-group-addon" alt="Tel&eacute;fono" title="Tel&eacute;fono"><i class="fa fa-phone"></i></span>
                                    '.insertElement('text','phone_'.$ID,$Data['phone'],'form-control',' placeholder="Tel&eacute;fono"').'
                                </span>
                            </div>
                            <div class="col-sm-6 col-xs-12">
                                <span class="input-group">
                                    <span class="input-group-addon" alt="Fax" title="Fax"><i class="fa fa-fax"></i></span>
                                    '.insertElement('text','fax_'.$ID,$Data['fax'],'form-control',' placeholder="Fax"').'
                                </span>
                            </div>
                        </div>
                        <div class="row form-group inline-form-custom">
                            <div class="col-xs-12">
                                <span class="input-group">
                                    <span class="input-group-addon" alt="D&iacute;s y horarios de atenci&oacute;n" title="D&iacute;s y horarios de atenci&oacute;n"><i class="fa fa-clock-o"></i></span>
                                    '.insertElement('textarea','timetable_'.$ID,$Data['timetable'],'form-control',' placeholder="D&iacute;as y horarios de atenci&oacute;n"').'
                                </span>
                            </div>
                        </div>
                        </form>

                    </div>
                    <div class="modal-footer txC" style="background-color:#6f69bd!important;">
						<button type="button" name="button" class="btn btn-success btnBlue SaveBranchEdition" id="SaveBranchEdition'.$ID.'" data-dismiss="modal" branch="'.$ID.'">Guardar</button>
						<button type="button" name="button" class="btn btn-success btnRed CancelBranchEdition" id="CancelBranchEdition'.$ID.'" data-dismiss="modal" branch="'.$ID.'">Cancelar</button>
					</div>
                </div>
            </div>
        </div>
        <!-- //// END BRANCH MODAL '.$ID.' //// -->
        ';

        echo $HTML;
    }
}
?>
