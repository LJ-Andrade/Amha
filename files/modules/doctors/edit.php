<?php
    include("../../includes/inc.main.php");
    
    $Sex['M'] = 'Hombre';
    $Sex['F'] = 'Mujer';
    
    $Payment['N'] = "Este mes NO Pag&oacute;";
    $Payment['Y'] = "Pag&oacute; este mes";
    
    $Advertising['N'] = "SIN publicidad";
    $Advertising['Y'] = "CON publicidad";
    
    $ID           = $_GET['id'];
    $Edit         = new Doctor($ID);
    $Data         = $Edit->GetData();
    ValidateID($Data);
    $Branches     = $DB->fetchAssoc(' doctor_office a
                                      LEFT JOIN geolocation_country b ON (a.country_id = b.country_id)
                                      LEFT JOIN geolocation_province c ON (a.province_id = c.province_id)
                                      LEFT JOIN geolocation_region d ON (a.region_id = d.region_id)
                                      LEFT JOIN geolocation_zone e ON (a.zone_id = e.zone_id)',
                                      'a.*,b.name as country, c.name as province, c.short_name as province_short, d.name as region, e.name as zone',
                                      'doctor_id='.$ID,'a.office_id');
    
    $TotalBranches  = is_array($Branches)? count($Branches) : "0";
    
    $ServiceType    = count($Branches)>0? 1:2;
    
    $HiddenClass    = $ServiceType == 1? 'Hidden':'';
    $HiddenClassO    = $ServiceType == 2? 'Hidden':'';
    
    $Result	      = $DB->fetchAssoc('relation_doctor_specialty','specialty_id','doctor_id='.$ID);
		foreach($Result as $Broker)
    {
	    $Brokers .= $Brokers? ','.$Broker['specialty_id'] : $Broker['specialty_id'];
    }
    
    
    $Head->setTitle($Data['name']);
    $Head->setIcon('<i class="fa fa-user-md"></i></span>');
    $Head->setSubTitle('Editar M&eacute;dico');
    $Head->setStyle('../../../vendors/select2/select2.min.css'); // Select Inputs With Tags
    $Head->setStyle('../../../skin/css/maps.css'); // Google Maps CSS
    $Head->setHead();
    include('../../includes/inc.top.php');
    
?>
  <div class="box animated fadeIn">
    <div class="box-header flex-justify-center">
      <div class="col-md-8 col-sm-12">
        
          <div class="innerContainer main_form">
            <form id="new_company_form">
            <h4 class="subTitleB"><i class="fa fa-male"></i> Datos del M&eacute;dico</h4>
            <?php echo insertElement("hidden","id",$ID); ?>
            <?php echo insertElement("hidden","action",'update'); ?>
            <?php //echo insertElement("hidden","international",'N'); ?>
            <?php //echo insertElement("hidden","newimage",$Edit->GetImg()); ?>
            <?php echo insertElement("hidden","total_branches",$TotalBranches); ?>
            <div class="row form-group inline-form-custom">
              <div class="col-md-6 col-xs-12">
                <span class="input-group">
                  <span class="input-group-addon" alt="Nombre" title="Nombre"><i class="fa fa-user"></i></span>
                  <?php echo insertElement('text','first_name',$Data['first_name'],'form-control',' placeholder="Nombre" validateEmpty="Ingrese el nombre." autofocus'); ?>
                </span>
              </div>
              <div class="col-md-6 col-xs-12">
                <span class="input-group">
                  <span class="input-group-addon" alt="Apellido" title="Apellido"><i class="fa fa-user"></i></span>
                  <?php echo insertElement('text','last_name',$Data['last_name'],'form-control',' placeholder="Apellido" validateEmpty="Ingrese el apellido."'); ?>
                </span>
              </div>
            </div>
            <div class="row form-group inline-form-custom">
              <div class="col-xs-12 col-sm-6">
                <span class="input-group">
                  <span class="input-group-addon" alt="Tipo de m&eacute;dico" title="Tipo de m&eacute;dico"><i class="fa fa-user-md"></i></span>
                  <?php echo insertElement('select','type',$Data['type_id'],'form-control','validateEmpty="El tipo de m&eacute;dico es obligatorio."',$DB->fetchAssoc('doctor_type','type_id,title_m'),'','Seleccione un Tipo de M&eacute;dico'); ?>
                </span>
              </div>
              <div class="col-xs-12 col-sm-6">
                <span class="input-group">
                  <span class="input-group-addon" alt="G&eacute;nero" title="G&eacute;nero"><i class="fa fa-venus-mars"></i></span>
                  <?php echo insertElement('select','sex',strtoupper($Data['sex']),'form-control','validateEmpty="El g&eacute;nero es obligatorio."',$Sex,'','Seleccione un G&eacute;nero'); ?>
                </span>
              </div>
            </div>
            <div class="row form-group inline-form-custom">
              <div class="col-xs-12 col-sm-6">
                <span class="input-group">
                  <span class="input-group-addon" alt="Matricula nacional" title="Matricula Nacional"><i class="fa fa-file-text-o"></i></span>
                  <?php echo insertElement('text','national_medical_enrollment',$Data['national_medical_enrollment'],'form-control','placeholder="Matricula Nacional"'); ?>
                </span>
              </div>
              <div class="col-xs-12 col-sm-6">
                <span class="input-group">
                  <span class="input-group-addon" alt="Matricula provincial" title="Matricula provincial"><i class="fa fa-file-text"></i></span>
                  <?php echo insertElement('text','provincial_medical_enrollment',$Data['provincial_medical_enrollment'],'form-control','placeholder="Matricula Provincial"'); ?>
                </span>
              </div>
            </div>
            <div class="row form-group inline-form-custom">
              <div class="col-xs-12 col-sm-6">
                <span class="input-group">
                  <span class="input-group-addon" alt="Usuario secci&oacute;n socios" title="Usuario secci&oacute;n socios"><i class="fa fa-street-view"></i></span>
                  <?php echo insertElement('text','user',$Data['user'],'form-control','placeholder="Usuario"'); ?>
                </span>
              </div>
              <div class="col-xs-12 col-sm-6">
                <span class="input-group">
                  <span class="input-group-addon" alt="Password secci&oacute;n socios" title="Password secci&oacute;n socios"><i class="fa fa-lock"></i></span>
                  <?php echo insertElement('text','password',$Data['password'],'form-control','placeholder="Password"'); ?>
                </span>
              </div>
            </div>
            <div class="row form-group inline-form-custom">
              <div class="col-xs-12 col-sm-6">
                <span class="input-group">
                  <span class="input-group-addon" alt="Email" title="Email"><i class="fa fa-envelope"></i></span>
                  <?php echo insertElement('text','email',$Data['email'],'form-control','placeholder="Email" validateEmail="Ingrese un email v&aacute;lido"'); ?>
                </span>
              </div>
              <div class="col-xs-12 col-sm-6">
                <span class="input-group">
                  <span class="input-group-addon" alt="Sitio Web" title="Sitio Web"><i class="fa fa-laptop"></i></span>
                  <?php echo insertElement('text','website',$Data['website'],'form-control','placeholder="Sitio web"'); ?>
                </span>
              </div>
            </div>
            <div class="row form-group inline-form-custom">
              <div class="col-xs-12 col-sm-6">
                <span class="input-group">
                  <span class="input-group-addon" alt="Pago Mensual" title="Pago Mensual"><i class="fa fa-dollar"></i></span>
                  <?php echo insertElement('select','payment',$Data['payment'],'form-control','',$Payment); ?>
                </span>
              </div>
              <div class="col-xs-12 col-sm-6">
                <span class="input-group">
                  <span class="input-group-addon" alt="Publicidad en el la web" title="Publicidad en el la web"><i class="fa fa-newspaper-o"></i></span>
                  <?php echo insertElement('select','advertising',$Data['advertising'],'form-control','',$Advertising); ?>
                </span>
              </div>
            </div>
            <div class="row form-group inline-form-custom">
              <div class="col-xs-12">
                <span class="input-group">
                  <span class="input-group-addon" alt="Informaci&oacute;n extra de publicidad" title="Informaci&oacute;n extra de publicidad"><i class="fa fa-info-circle"></i></span>
                  <?php echo insertElement('textarea','description',$Data['description'],'form-control','placeholder="Informaci&oacute;n extra para agregar a la publicidad"'); ?>
                </span>
              </div>
            </div>
            
            <h4 class="subTitleB"><i class="fa fa-briefcase"></i> Especialidades</h4>
            <div class="row form-group inline-form-custom">
              <div class="col-xs-12">
                <?php echo insertElement('multiple','select_broker',$Brokers,'form-control BrokerSelect selectTags select2','',$DB->fetchAssoc('doctor_specialty','specialty_id,title',"status='A'")); ?>
                <?php echo insertElement('hidden','brokers',$Brokers); ?>
              </div>
            </div>
            <h4 class="subTitleB"><i class="fa fa-book"></i> Notas</h4>
            <div class="row form-group inline-form-custom">
              <div class="col-xs-12">
                <?php echo insertElement('textarea','notes',$Data['notes'],'form-control','placeholder="Campo complementario para guardar informaci&oacute;n"'); ?>
              </div>
            </div>
            </form>
            <br>
            <h4 class="subTitleB"><i class="fa fa-home"></i> Tipo de Atenci&oacute;n</h4>
            <div class="row form-group inline-form-custom">
              <div class="col-xs-12">
                <?php echo insertElement('select','service',$ServiceType,'form-control','',array("1"=>"En consultorio","2"=>"A domicilio")); ?>
              </div>
            </div>
            <div class="row form-group inline-form-custom <?php echo $HiddenClass ?>" id="no_office">
              <div class="col-xs-12 col-sm-6">
                <span class="input-group">
                  <span class="input-group-addon"><i class="fa fa-phone"></i></span>
                  <?php echo insertElement('text','phone',$Data['phone'],'form-control','placeholder="Tel&eacute;fono"'); ?>
                </span>
              </div>
              <div class="col-xs-12 col-sm-6">
                <span class="input-group">
                  <span class="input-group-addon"><i class="fa fa-fax"></i></span>
                  <?php echo insertElement('text','fax',$Data['fax'],'form-control','placeholder="Fax"'); ?>
                </span>
              </div>
            </div>
            
          <h4 class="subTitleB office <?php echo $HiddenClassO ?>"><i class="fa fa-building"></i> Consultorios</h4>
          <!--<div id="MapsErrorMessage" class="Hidden ErrorText Red">Complete los datos del consultorio principal.</div>-->
          <div id="branches_container" class="office <?php echo $HiddenClassO ?>">
          <?php 
            $I=0;
            $Class = "bg-gray";
            $Image = 'office.png';
            foreach($Branches as $Branch)
            {
              $I++;
              $Floor = $Branch['floor']? ' '.$Branch['floor'].'°':'';
              $Apartment = $Branch['apartment']? ' '.$Branch['apartment']:'';
          ?>
          
          <div id="branch_row_<?php echo $I ?>" class="row branch_row listRow2 <?php echo $Class ?>" style="margin:0px!important;">
            <div class="col-lg-1 col-md-2 flex-justify-center hideMobile990">
              <div class="listRowInner">
                <img class="img" style="margin-top:5px!important;" src="../../../skin/images/body/pictures/<?php echo $Image; ?>" alt="Consultorio" title="Consultorio">
              </div>
            </div>
            <div class="col-lg-9 col-md-7 col-sm-8 flex-justify-center">
              <span class="listTextStrong" style="margin-top:15px!important;" id="branch_row_name_<?php echo $I ?>"><?php echo $Branch['address'].$Floor.$Apartment.', '.$Branch['zone'].'. '.$Branch['province_short']; ?></span>
            </div>
            <div class="col-lg-1 col-md-2 col-sm-4 flex-justify-center">
              <button type="button" branch="<?php echo $I ?>" id="EditBranch<?php echo $I ?>" class="btn btnBlue EditBranch LoadedMap"><i class="fa fa-pencil"></i></button>
              &nbsp;
              <button type="button" id="DeleteBranch<?php echo $I ?>" branch="<?php echo $I ?>" class="btn btnRed DeleteBranch"><i class="fa fa-trash"></i></button>
              
            </div>
          </div>
					<?php
					    if($Class == "")
					      $Class = "";
					   else
					    $Class = "bg-gray";
					   // $Image = 'main_branch.png';
            }
					?>
            </div>
          <div class="row txC office <?php echo $HiddenClassO ?>" id="add_branch_button_container">
            <button id="add_branch" type="button" class="btn btn-primary Info-Card-Form-Btn"><i class="fa fa-plus"></i> Agregar un consultorio</button>
          </div>
          <hr>
          <div class="row txC">
            <button type="button" class="btn btn-success btnGreen" id="BtnCreate"><i class="fa fa-pencil"></i> Editar M&eacute;dico</button>
            <button type="button" class="btn btn-error btnRed" id="BtnCancel"><i class="fa fa-times"></i> Cancelar</button>
          </div>
      </div>
          
        </div>
      </div>
    </div><!-- box -->
  </div><!-- box -->
  <div id="ModalBranchesContainer">
    <?php 
            $I=0;
            foreach($Branches as $Branch)
            {
              $I++;
              
              $Edit->Getbranchmodal($I,$Branch);
            }
  ?>
  
  </div>
<?php
$Foot->setScript('../../js/script.map.autolocation.js');
$Foot->setScript('https://maps.googleapis.com/maps/api/js?key=AIzaSyCuMB_Fpcn6USQEoumEHZB_s31XSQeKQc0&libraries=places&language=es','async defer');
$Foot->setScript('../../../vendors/inputmask3/jquery.inputmask.bundle.min.js');
$Foot->setScript('../../../vendors/select2/select2.min.js');

include('../../includes/inc.bottom.php');
?>

