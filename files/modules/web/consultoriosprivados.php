<?php
  include("../../classes/class.database.php");
  //echo "1";
  $DB = new DataBase();
  //var_dump($DB);die();
  $Doctors = $DB->fetchAssoc('doctor','*');
  //var_dump($DB);die();
  foreach($Doctors as $Doctor)
  {
    $Title    = $Doctor['sex']=='M'? 'Dr.':'Dra.';
    $Name     = $Title." ".ucfirst(utf8_encode($Doctor['last_name'].", ".$Doctor['first_name']));
    $MN       = $Doctor['national_medical_enrollment'] ? '<br>'.'Matricula Nacional: '.$Doctor['national_medical_enrollment'].'<br>':'';
    $MP       = $Doctor['provincial_medical_enrollment'] ? '<br>'.'Matricula Provincial: '.$Doctor['provincial_medical_enrollment'].'<br>':'';
    $Email    = $Doctor['email']? '<br>'.strtolower($Doctor['email']).'<br>':'';
    $Website  = $Doctor['website']? '<br>'.strtolower($Doctor['website']).'<br>':'';
    $HTML    .= '
    <div class="row wow zoomIn fadeIn">
      <div class="col-sm-12 itemContainer">
        <div class="card-header"><h5 class="card-title">'.$Name.'</h5></div>
        <div class="card card-block">
          <p class="card-text">
            '.utf8_encode($Doctor['description']).'
            <br>
            '.$Email.'
            '.$Website.'
            '.$MN.'
            '.$MP.'
          </p>
        </div>
      </div>
    </div>';
  }
 ?>
<!DOCTYPE html>
<html lang="es">
<head>
  <title>AMHA</title>
  <?php include('../../../files/includes/inc.web.head.php'); ?> <!-- Head -->
</head>
  <body>
    <header>
      <?php include('../../../files/includes/inc.web.nav.php'); ?> <!-- Navegation -->
    </header>
    <div class="mainWrapper">
      <div class="container mainContainer">
        <!-- /// Left Floating Menu /// -->
        <?php include('../../../files/includes/inc.menu.consultorios.php'); ?> <!--  -->
        <!-- /// /Left Floating Menu /// -->
        <!-- Content inside this div -->
        <div class="col-lg-7 col-md-9 col-xs-12">
          <div class="sectionTits">
            <h1>Consultorios</h1>
            <hr>
            <h4>Atenci&oacute;n en Consultorios Privados</h4>
            <hr>
          </div>
          <div class="row wow zoomIn fadeIn txC mapFarmacias">
            <iframe src="https://www.google.com/maps/d/embed?mid=1Pu-vk8IlC6I-uoGRk_JjJI7tqQs" width="100%" height="480px"></iframe>
          </div>
          <hr class="hrStrong">
          <div class="row wow zoomIn fadeIn sectionTitsSmall">
            <h3>M&eacute;dicos</h3>
          </div>
          <div class="row searchFilters wow zoomIn fadeIn ">
            <div class="form-group searchFiltersInner">
              <div class="searchIcon"><i class="fa fa-search"></i></div>
              <div class="col-sm-4 col-xs-12">
                <select class="form-control" id="sel1">
                  <option>Provincia</option>
                  <option>Buenos Aires</option>
                  <option>Capital Federal</option>
                  <option>C&oacute;rdoba</option>
                </select>
                <!-- // In case you dont want a select, here is a simple input good man // -->
                <!-- <input class="form-control" placeholder="Provincia" type="text"> -->
              </div>
              <div class="col-sm-4 col-xs-12">
                <select class="form-control" id="sel1">
                  <option>Zona</option>
                  <option>Floresta</option>
                  <option>Balvanera</option>
                  <option>Moron</option>
                  <option>Cipoletti</option>
                </select>
                <!-- // Same Here // -->
                <!-- <input class="form-control" placeholder="Zona" type="text"> -->
              </div>
              <div class="col-sm-4 col-xs-12"><input class="form-control" placeholder="Palabra Clave" type="text"></div>
              <!-- // If you need a Search Button here is one (remember to change col-sm-3 to col-sm-4 if you need to show it) //-->
              <!-- <div class="col-sm-3 col-xs-12"><button type="button" class="btn searchBtn"><i class="fa fa-search"></i> Buscar</button></div> -->
            </div>
          </div>
          <?php echo $HTML; ?>
        </div><!-- /contentContainer -->
        <?php include('sidebar.php'); ?><!-- Right Sidebar -->
      </div><!-- /MainContainer --><!-- Content inside this div -->
      <?php include('../../includes/inc.web.footer.php'); ?>
    </div><!-- /mainWrapper -->
    <!-- Footer -->
    <?php include('../../includes/inc.web.scripts.php'); ?> <!-- Scripts -->
  </body>
</html>
