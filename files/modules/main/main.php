<?php
  include('../../includes/inc.main.php');
  $Head->setTitle('Datos AMHA');
  $Head->setIcon('<i class="fa fa-info-circle"></i>');
  $Head->setHead();
  
  $Configuration = new Configuration();
  $Data = $Configuration->GetData();
  if($Data['data_7']!=date("n"))
  {
    $DB->execQuery('UPDATE','doctor',"payment='N'");
    $DB->execQuery('UPDATE','configuration',"data_7='".date("n")."'");
  };
  include('../../includes/inc.top.php');
 ?>

<div class="box animated fadeIn">
    <div class="box-header flex-justify-center">
        <div class="innerContainer main_form" style="width:100%;">
            <h4 class="subTitleB"><i class="fa fa-bank"></i> Datos de la AMHA</h4>
            <?php echo insertElement('hidden','action','update'); ?>
            <div class="row form-group inline-form-custom">
              <div class="col-xs-12 col-sm-2 text-right" style="line-height:35px;">
                <strong>Turnos:</strong>
              </div>
              <div class="col-xs-12 col-sm-10">
                <span class="input-group">
                    <span style="line-height:35px;" class="DataText"><span class="InfoText"><?php echo $Data['data_1'] ?></span> <button type="button" class="btn btnBlue Hidden EditBtn" style="margin:0px!important;"><i class="fa fa-pencil"></i></button></span>
                </span>
                <span class="input-group Hidden">
                    <span class="input-group-addon bg-green SaveEdit" style="cursor:pointer;"><i class="fa fa-check-circle"></i></span>
                    <?php echo insertElement('text','data_1',$Data['data_1'],'form-control','placeholder="Tel&eacute;fono" validateEmpty="Ingrese un tel&eacute;fono."'); ?>
                </span>
              </div>
            </div>
            
            <div class="row form-group inline-form-custom">
              <div class="col-xs-12 col-sm-2 text-right" style="line-height:35px;">
                <strong>Atenci&oacute;n al Socio:</strong>
              </div>
              <div class="col-xs-12 col-sm-10">
                <span class="input-group">
                    <span style="line-height:35px;" class="DataText"><span class="InfoText"><?php echo $Data['data_2'] ?></span> <button type="button" class="btn btnBlue Hidden EditBtn" style="margin:0px!important;"><i class="fa fa-pencil"></i></button></span>
                </span>
                <span class="input-group Hidden">
                    <span class="input-group-addon bg-green SaveEdit" style="cursor:pointer;"><i class="fa fa-check-circle"></i></span>
                    <?php echo insertElement('text','data_2',$Data['data_2'],'form-control','placeholder="Tel&eacute;fono" validateEmpty="Ingrese un tel&eacute;fono."'); ?>
                </span>
              </div>
            </div>
            
            <div class="row form-group inline-form-custom">
              <div class="col-xs-12 col-sm-2 text-right" style="line-height:35px;">
                <strong>Administraci&oacute;n:</strong>
              </div>
              <div class="col-xs-12 col-sm-10">
                <span class="input-group">
                    <span style="line-height:35px;" class="DataText"><span class="InfoText"><?php echo $Data['data_3'] ?></span> <button type="button" class="btn btnBlue Hidden EditBtn" style="margin:0px!important;"><i class="fa fa-pencil"></i></button></span>
                </span>
                <span class="input-group Hidden">
                    <span class="input-group-addon bg-green SaveEdit" style="cursor:pointer;"><i class="fa fa-check-circle"></i></span>
                    <?php echo insertElement('text','data_3',$Data['data_3'],'form-control','placeholder="Tel&eacute;fono" validateEmpty="Ingrese un tel&eacute;fono."'); ?>
                </span>
              </div>
            </div>
            
            <div class="row form-group inline-form-custom">
              <div class="col-xs-12 col-sm-2 text-right" style="line-height:35px;">
                <strong>Escuela:</strong>
              </div>
              <div class="col-xs-12 col-sm-10">
                <span class="input-group">
                    <span style="line-height:35px;" class="DataText"><span class="InfoText"><?php echo $Data['data_4'] ?></span> <button type="button" class="btn btnBlue Hidden EditBtn" style="margin:0px!important;"><i class="fa fa-pencil"></i></button></span>
                </span>
                <span class="input-group Hidden">
                    <span class="input-group-addon bg-green SaveEdit" style="cursor:pointer;"><i class="fa fa-check-circle"></i></span>
                    <?php echo insertElement('text','data_4',$Data['data_4'],'form-control','placeholder="Tel&eacute;fono" validateEmpty="Ingrese un tel&eacute;fono."'); ?>
                </span>
              </div>
            </div>
            
            <div class="row form-group inline-form-custom">
              <div class="col-xs-12 col-sm-2 text-right" style="line-height:35px;">
                <strong>Direcci&oacute;n:</strong>
              </div>
              <div class="col-xs-12 col-sm-10">
                <span class="input-group">
                    <span style="line-height:35px;" class="DataText"><span class="InfoText"><?php echo $Data['data_5'] ?></span> <button type="button" class="btn btnBlue Hidden EditBtn" style="margin:0px!important;"><i class="fa fa-pencil"></i></button></span>
                </span>
                <span class="input-group Hidden">
                    <span class="input-group-addon bg-green SaveEdit" style="cursor:pointer;"><i class="fa fa-check-circle"></i></span>
                    <?php echo insertElement('text','data_5',$Data['data_5'],'form-control','placeholder="Tel&eacute;fono" validateEmpty="Ingrese un tel&eacute;fono."'); ?>
                </span>
              </div>
            </div>
            
            <div class="row form-group inline-form-custom">
              <div class="col-xs-12 col-sm-2 text-right" style="line-height:35px;">
                <strong>Consultorios Privados:</strong>
              </div>
              <div class="col-xs-12 col-sm-10">
                <span class="input-group">
                    <span style="line-height:35px;" class="DataText"><span class="InfoText"><?php echo $Data['data_6'] ?></span> <button type="button" class="btn btnBlue Hidden EditBtn" style="margin:0px!important;"><i class="fa fa-pencil"></i></button></span>
                </span>
                <span class="input-group Hidden">
                    <span class="input-group-addon bg-green SaveEdit" style="cursor:pointer;"><i class="fa fa-check-circle"></i></span>
                    <?php echo insertElement('text','data_6',$Data['data_6'],'form-control','placeholder="Tel&eacute;fono" validateEmpty="Ingrese un tel&eacute;fono."'); ?>
                </span>
              </div>
            </div>
            
            
            <div class="row txC Hidden">
              <hr>
              <button type="button" class="btn btn-success btnGreen" id="BtnCreate"><i class="fa fa-check"></i> Guardar Cambios</button>
              <button type="button" class="btn btn-error btnRed" id="BtnCancel"><i class="fa fa-times"></i> Cancelar</button>
            </div>
        </div>
    </div>
</div>

<?php
  include('../../includes/inc.bottom.php');
?>
