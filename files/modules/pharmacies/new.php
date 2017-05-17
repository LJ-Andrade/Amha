<?php
    include("../../includes/inc.main.php");
    $New = new Pharmacy();
    $Head->setTitle('Nueva Farmacia');
    $Head->setStyle('../../../vendors/select2/select2.min.css'); // Select Inputs With Tags
    $Head->setStyle('../../../skin/css/maps.css'); // Google Maps CSS
    $Head->setHead();
    include('../../includes/inc.top.php');
    
    //$IVA = array(1=>"Excento",2=>"Responsable Inscripto",3=>"Monotributista");
?>
  <div class="box animated fadeIn">
    <div class="box-header flex-justify-center">
      <div class="col-md-8 col-sm-12">
        
          <div class="innerContainer main_form">
            <form id="new_company_form">
            <h4 class="subTitleB"><i class="fa fa-building"></i> Datos de la Farmacia</h4>
            <?php echo insertElement("hidden","action",'insert'); ?>
            <?php //echo insertElement("hidden","type",'N'); ?>
            <?php echo insertElement("hidden","newimage",$New->GetDefaultImg()); ?>
            <?php //echo insertElement("hidden","total_agents","0"); ?>
            <div class="row form-group inline-form-custom">
              <div class="col-xs-12 col-sm-6">
                <span class="input-group">
                  <span class="input-group-addon"><i class="fa fa-bookmark"></i></span>
                  <?php echo insertElement('text','name','','form-control',' placeholder="Nombre de la Farmacia" validateEmpty="Ingrese un nombre." autofocus'); ?>
                </span>
              </div>
              <div class="col-xs-12 col-sm-6">
                <span class="input-group">
                  <span class="input-group-addon"><i class="fa fa-phone"></i></span>
                  <?php echo insertElement('text','phone','','form-control',' placeholder="Tel&eacute;fono"'); ?>
                </span>
              </div>
            </div>
            <div class="row form-group inline-form-custom">
              <div class="col-sm-6 col-xs-12">
                <span class="input-group">
                  <span class="input-group-addon"><i class="fa fa-envelope"></i></span>
                  <?php echo insertElement('text','email','','form-control',' placeholder="Email"'); ?>
                </span>
              </div>
              <div class="col-sm-6 col-xs-12">
                <span class="input-group">
                  <span class="input-group-addon"><i class="fa fa-desktop"></i></span>
                  <?php echo insertElement('text','website','','form-control',' placeholder="Sitio Web"'); ?>
                </span>
              </div>
            </div>
            <div class="row form-group inline-form-custom">
              <div class="col-sm-6 col-xs-12">
                <span class="input-group">
                  <span class="input-group-addon"><i class="fa fa-facebook-official"></i></span>
                  <?php echo insertElement('text','facebook','','form-control',' placeholder="Facebook"'); ?>
                </span>
              </div>
              <div class="col-sm-6 col-xs-12">
                <span class="input-group">
                  <span class="input-group-addon"><i class="fa fa-whatsapp"></i></span>
                  <?php echo insertElement('text','whatsapp','','form-control',' placeholder="Whatsapp"'); ?>
                </span>
              </div>
            </div>
            
            <div class="row form-group inline-form-custom">
              <div class="col-xs-12">
                <span class="input-group">
                  <span class="input-group-addon"><i class="fa fa-info-circle"></i></span>
                  <?php echo insertElement('textarea','other','','form-control',' placeholder="Informaci&oacute;n adicional"'); ?>
                </span>
              </div>
            </div>
            <br>
            <h4 class="subTitleB"><i class="fa fa-book"></i> Notas</h4>
            <?php echo insertElement('textarea','notes','','form-control',' placeholder="Ingrese una nota"'); ?>
            <br>
            <h4 class="subTitleB"><i class="fa fa-globe"></i> Geolocalizaci&oacute;n</h4>
            <div class="row form-group inline-form-custom">
              <div class="col-xs-12 col-sm-6">
                <span class="input-group">
                  <span class="input-group-addon"><i class="fa fa-map-marker"></i></span>
                  <?php echo insertElement('text','address_1','','form-control','disabled="disabled" placeholder="Direcci&oacute;n" validateMinLength="4///La direcci&oacute;n debe contener 4 caracteres como m&iacute;nimo."'); ?>
                </span>
              </div>
              <div class="col-xs-12 col-sm-6">
                <span class="input-group">
                  <span class="input-group-addon"><i class="fa fa-bookmark"></i></span>
                  <?php echo insertElement('text','postal_code_1','','form-control','disabled="disabled" placeholder="C&oacute;digo Postal" validateMinLength="4///La direcci&oacute;n debe contener 4 caracteres como m&iacute;nimo."'); ?>
                </span>
              </div>
            </div>
            <div class="row form-group inline-form-custom">
              <div class="col-xs-12 col-sm-12 MapWrapper">
                <!--- GOOGLE MAPS --->
                <?php echo InsertAutolocationMap(1); ?>
                
              </div>
            </div>
            <br>
            <div class="row">
              <div class="col-md-12 col-xs-12 simple_upload_image">
                  <h4 class="subTitleB"><i class="fa fa-image"></i> Logo</h4>
                <div class="image_sector">
                  <img id="company_logo" src="<?php echo $New->GetDefaultImg(); ?>" width="100" alt="" class="animated" />
                  <div id="image_upload" class="overlay-text"><span><i class="fa fa-upload"></i> Subir Im&aacute;gen</span></div>
                  <?php echo insertElement('file','image','','form-control Hidden'); ?>
                </div>
              </div>
            </div>
          </form>
          <hr>
          <div class="row txC">
            <button type="button" class="btn btn-success btnGreen" id="BtnCreate"><i class="fa fa-plus"></i> Crear Farmacia</button>
            <button type="button" class="btn btn-success btnBlue" id="BtnCreateNext"><i class="fa fa-plus"></i> Crear y Agregar Otra</button>
            <button type="button" class="btn btn-error btnRed" id="BtnCancel"><i class="fa fa-times"></i> Cancelar</button>
          </div>
        </div>
      </div>
    </div><!-- box -->
  </div><!-- box -->
<?php
// $Foot->setScript('../../../vendors/inputmask3/inputmask.min.js');
$Foot->setScript('../../js/script.map.autolocation.js');
$Foot->setScript('https://maps.googleapis.com/maps/api/js?key=AIzaSyCuMB_Fpcn6USQEoumEHZB_s31XSQeKQc0&libraries=places&callback=initMaps&language=es','async defer');
$Foot->setScript('../../../vendors/inputmask3/jquery.inputmask.bundle.min.js');
$Foot->setScript('../../../vendors/select2/select2.min.js');
include('../../includes/inc.bottom.php');
?>