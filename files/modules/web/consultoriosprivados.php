<?php
  include("../../classes/class.database.php");
  //echo "1";
  $DB = new DataBase();
  //var_dump($DB);die();
  if($_POST['search_key'] && $_GET['search']!="all")
  {
    $V = $_POST['search_key'];
    // $Result = explode(" ",$V);
    // foreach ($Result as $Key => $Value) {
    //   $Result[$Key] = "first_name LIKE '%".$Value."%' OR last_name LIKE '%".$Value."%' OR description LIKE '%".$Value."%' OR national_medical_enrollment LIKE '%".$Value."%'  OR provincial_medical_enrollment LIKE '%".$Value."%'  OR email LIKE '%".$Value."%'  OR website LIKE '%".$Value."%'";
    // }
    // $Where = implode(" OR ",$Result);
    $Where = "first_name LIKE '%".$V."%' OR last_name LIKE '%".$V."%' OR description LIKE '%".$V."%' OR national_medical_enrollment LIKE '%".$V."%'  OR provincial_medical_enrollment LIKE '%".$V."%'  OR email LIKE '%".$V."%'  OR website LIKE '%".$V."%'";

  }
  $Doctors = $DB->fetchAssoc('doctor','*',$Where);
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
    <div class="row wow zoomIn fadeIn deleteable">
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
  if($_POST || $_GET['get'])
  {
    // echo($_POST['search_key'])."<br><br>";
    //echo $DB->lastQuery();

    $Search = $HTML && empty($_GET['get'])? $HTML : '<div class="row wow zoomIn fadeIn deleteable"><div class="col-sm-12 itemContainer">No se ha encontrado ning&uacute;n resultado.</div></div>';
    echo $Search;
    die();
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
        <div id="SearchInserter" class="col-lg-7 col-md-9 col-xs-12">
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
              <div class="searchIcon" id="SearchIcon" style="cursor:pointer;"><i class="fa fa-search"></i></div>
              <input id="search" class="form-control" placeholder="Ingrese una provincia, una zona o un nombre y presione enter..." type="text">
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
  <script>
    function removeResult()
    {
      $(".deleteable").remove();
    }

    function searchDoctors()
    {
      var data = $("#search").val();
      if(data=="") var get = "all";
      $.ajax({
        method: "POST",
        url: "consultoriosprivados.php?search="+get,
        data: { search_key: data},
        success: function(callback){
          removeResult();
          $("#SearchInserter").append(callback);
        }
      });
    }
    $("#SearchIcon").click(function(){
      searchDoctors();
    });

    $("#search").keypress(function(event){
      // if ( event.which != 13 && event.which != 9 && event.which != 16 && event.which != 17 && event.which != 18 && event.which != 20 && event.which != 91 && event.which != 92 ) {
      if ( event.which == 13)
      {
        searchDoctors();
      }
  });
  </script>
</html>
