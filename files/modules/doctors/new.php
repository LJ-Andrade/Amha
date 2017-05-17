<?php
    include("../../includes/inc.main.php");
    $New = new Doctor();
    $Head->setTitle('<i class="fa fa-user-md"></i></span> Nuevo M&eacute;dico');
    $Head->setStyle('../../../vendors/select2/select2.min.css'); // Select Inputs With Tags
    $Head->setStyle('../../../skin/css/maps.css'); // Google Maps CSS
    $Head->setHead();
    include('../../includes/inc.top.php');
    
    $Sex['M'] = 'Hombre';
    $Sex['F'] = 'Mujer';
    
    $Payment['N'] = "Este mes NO Pag&oacute;";
    $Payment['Y'] = "Pag&oacute; este mes";
    
    $Advertising['N'] = "SIN publicidad";
    $Advertising['Y'] = "CON publicidad";
    
?>
  <div class="box animated fadeIn">
    <div class="box-header flex-justify-center">
      <div class="col-md-8 col-sm-12">
        
          <div class="innerContainer main_form">
            <form id="new_company_form">
            <h4 class="subTitleB"><i class="fa fa-male"></i> Datos del M&eacute;dico</h4>
            <?php echo insertElement("hidden","action",'insert'); ?>
            <?php //echo insertElement("hidden","international",'N'); ?>
            <?php //echo insertElement("hidden","newimage",$New->GetDefaultImg()); ?>
            <?php echo insertElement("hidden","total_branches","1"); ?>
            <div class="row form-group inline-form-custom">
              <div class="col-md-6 col-xs-12">
                <span class="input-group">
                  <span class="input-group-addon"><i class="fa fa-user"></i></span>
                  <?php echo insertElement('text','first_name','','form-control',' placeholder="Nombre" validateEmpty="Ingrese el nombre." autofocus'); ?>
                </span>
              </div>
              <div class="col-md-6 col-xs-12">
                <span class="input-group">
                  <span class="input-group-addon"><i class="fa fa-user"></i></span>
                  <?php echo insertElement('text','last_name','','form-control',' placeholder="Apellido" validateEmpty="Ingrese el apellido."'); ?>
                </span>
              </div>
            </div>
            <div class="row form-group inline-form-custom">
              <div class="col-xs-12 col-sm-6">
                <span class="input-group">
                  <span class="input-group-addon"><i class="fa fa-user-md"></i></span>
                  <?php echo insertElement('select','type','','form-control','validateEmpty="El tipo de m&eacute;dico es obligatorio."',$DB->fetchAssoc('doctor_type','type_id,title_m'),'','Seleccione un Tipo de M&eacute;dico'); ?>
                </span>
              </div>
              <div class="col-xs-12 col-sm-6">
                <span class="input-group">
                  <span class="input-group-addon"><i class="fa fa-venus-mars"></i></span>
                  <?php echo insertElement('select','sex','','form-control','validateEmpty="El g&eacute;nero es obligatorio."',$Sex,'','Seleccione un G&eacute;nero'); ?>
                </span>
              </div>
            </div>
            <div class="row form-group inline-form-custom">
              <div class="col-xs-12 col-sm-6">
                <span class="input-group">
                  <span class="input-group-addon"><i class="fa fa-file-text-o"></i></span>
                  <?php echo insertElement('text','national_medical_enrollment','','form-control','placeholder="Matricula Nacional"'); ?>
                </span>
              </div>
              <div class="col-xs-12 col-sm-6">
                <span class="input-group">
                  <span class="input-group-addon"><i class="fa fa-file-text"></i></span>
                  <?php echo insertElement('text','provincial_medical_enrollment','','form-control','placeholder="Matricula Provincial"'); ?>
                </span>
              </div>
            </div>
            <div class="row form-group inline-form-custom">
              <div class="col-xs-12 col-sm-6">
                <span class="input-group">
                  <span class="input-group-addon"><i class="fa fa-street-view"></i></span>
                  <?php echo insertElement('text','user','','form-control','placeholder="Usuario"'); ?>
                </span>
              </div>
              <div class="col-xs-12 col-sm-6">
                <span class="input-group">
                  <span class="input-group-addon"><i class="fa fa-lock"></i></span>
                  <?php echo insertElement('text','password','','form-control','placeholder="Password"'); ?>
                </span>
              </div>
            </div>
            
            <div class="row form-group inline-form-custom">
              <div class="col-xs-12 col-sm-6">
                <span class="input-group">
                  <span class="input-group-addon"><i class="fa fa-envelope"></i></span>
                  <?php echo insertElement('text','email','','form-control','placeholder="Email" validateEmail="Ingrese un email v&aacute;lido"'); ?>
                </span>
              </div>
              <div class="col-xs-12 col-sm-6">
                <span class="input-group">
                  <span class="input-group-addon"><i class="fa fa-laptop"></i></span>
                  <?php echo insertElement('text','website','','form-control','placeholder="Sitio web"'); ?>
                </span>
              </div>
            </div>
            
            <div class="row form-group inline-form-custom">
              <div class="col-xs-12 col-sm-6">
                <span class="input-group">
                  <span class="input-group-addon"><i class="fa fa-dollar"></i></span>
                  <?php echo insertElement('select','payment','N','form-control','',$Payment); ?>
                </span>
              </div>
              <div class="col-xs-12 col-sm-6">
                <span class="input-group">
                  <span class="input-group-addon"><i class="fa fa-newspaper-o"></i></span>
                  <?php echo insertElement('select','advertising','N','form-control','',$Advertising); ?>
                </span>
              </div>
            </div>
            
            <div class="row form-group inline-form-custom">
              <div class="col-xs-12">
                <span class="input-group">
                  <span class="input-group-addon"><i class="fa fa-info-circle"></i></span>
                  <?php echo insertElement('textarea','description','','form-control','placeholder="Informaci&oacute;n extra para agregar a la publicidad"'); ?>
                </span>
              </div>
            </div>
            <h4 class="subTitleB"><i class="fa fa-briefcase"></i> Especialidades</h4>
            <div class="row form-group inline-form-custom">
              <div class="col-xs-12">
                <?php echo insertElement('multiple','select_broker','','form-control BrokerSelect selectTags select2','',$DB->fetchAssoc('doctor_specialty','specialty_id,title',"status='A'")); ?>
                <?php echo insertElement('hidden','brokers'); ?>
              </div>
            </div>
            <h4 class="subTitleB"><i class="fa fa-book"></i> Notas</h4>
            <div class="row form-group inline-form-custom">
              <div class="col-xs-12">
                <?php echo insertElement('textarea','notes','','form-control','placeholder="Campo complementario para guardar informaci&oacute;n"'); ?>
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
                  <span class="input-group-addon"><i class="fa fa-laptop"></i></span>
                  <?php echo insertElement('text','fax',$Data['fax'],'form-control','placeholder="Fax"'); ?>
                </span>
              </div>
            </div>
            
          <h4 class="subTitleB office"><i class="fa fa-building"></i> Consultorios</h4>
          <!--<div id="MapsErrorMessage" class="Hidden ErrorText Red">Complete los datos del consultorio principal.</div>-->
          <div id="branches_container" class="office">
          <div class="row txC office" id="add_branch_button_container">
            <button id="add_branch" type="button" class="btn btn-primary Info-Card-Form-Btn"><i class="fa fa-plus"></i> Agregar un consultorio</button>
          </div>
          <hr>
          <div class="row txC">
            <button type="button" class="btn btn-success btnGreen" id="BtnCreate"><i class="fa fa-plus"></i> Crear M&eacute;dico</button>
            <button type="button" class="btn btn-success btnBlue" id="BtnCreateNext"><i class="fa fa-plus"></i> Crear y Agregar Otro</button>
            <button type="button" class="btn btn-error btnRed" id="BtnCancel"><i class="fa fa-times"></i> Cancelar</button>
          </div>
      </div>
          
        </div>
      </div>
    </div><!-- box -->
  </div><!-- box -->
  <div id="ModalBranchesContainer">
  <?php $New->Getbranchmodal();  ?>
  </div>
<?php
$Foot->setScript('../../js/script.map.autolocation.js');
$Foot->setScript('https://maps.googleapis.com/maps/api/js?key=AIzaSyCuMB_Fpcn6USQEoumEHZB_s31XSQeKQc0&libraries=places&language=es','async defer');
$Foot->setScript('../../../vendors/inputmask3/jquery.inputmask.bundle.min.js');
$Foot->setScript('../../../vendors/select2/select2.min.js');

include('../../includes/inc.bottom.php');
?>