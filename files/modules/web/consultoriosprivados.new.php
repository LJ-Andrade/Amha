<?php
  include("../../classes/class.database.php");
  $DB = new DataBase();
  if($_POST['search_key'] && $_GET['search']!="all")
  {
    $V = $_POST['search_key'];
    $Where = "AND (z.title LIKE '%".$V."%' OR p.title LIKE '%".$V."%' OR t.title_m LIKE '%".$V."%' OR t.title_f LIKE '%".$V."%' OR (d.doctor_id = r.doctor_id AND r.specialty_id = s.specialty_id AND s.title LIKE '%".$V."%') OR d.first_name LIKE '%".$V."%' OR o.address LIKE '%".$V."%' OR o.phone LIKE '%".$V."%' OR d.last_name LIKE '%".$V."%' OR d.description LIKE '%".$V."%' OR d.national_medical_enrollment LIKE '%".$V."%'  OR d.provincial_medical_enrollment LIKE '%".$V."%'  OR d.email LIKE '%".$V."%'  OR d.website LIKE '%".$V."%')";
  }
  $Doctors = $DB->execQuery("free","SELECT address,timetable,phone,d.*,t.title_m AS title_m, t.title_f AS title_f, p.title AS province, z.title AS zone FROM doctor_office AS o, doctor AS d, country_zone AS z, country_province AS p, doctor_type AS t, doctor_specialty AS s, relation_doctor_specialty AS r WHERE d.advertising = 'Y' AND o.doctor_id = d.doctor_id AND o.zone_id = z.zone_id AND o.province_id = p.province_id AND d.type_id = t.type_id ".$Where." GROUP BY o.office_id ORDER BY d.type_id, p.province_id, z.title, d.last_name, d.first_name");
  $Query = $DB->lastQuery();
  foreach($Doctors as $Doctor)
  {
    if($DoctorType!=$Doctor['type_id'])
    {
      switch ($Doctor['type_id'])
      {
        case 3:
          $TypeClass = "odontConsultBack";
        break;

        case 2:
          $TypeClass = "vetConsultBack";
        break;

        default:
          $TypeClass = "medicConsultBack";
        break;
      }
      $DoctorType = $Doctor['type_id'];
      $HTML .= '<div class="row section titleSeparator '.$TypeClass.' deleteable"><h5><b class="w">'.utf8_encode($Doctor['title_m']).'s</b></h5></div>';
    }

    if($DoctorProvince!=$Doctor['province'])
    {
      $DoctorProvince = $Doctor['province'];
      $HTML .= '<hr class="deleteable"><div class="row section titleSeparator consultProv deleteable"><h5><b class="w">'.utf8_encode($Doctor['province']).'</b></h5></div><hr class="deleteable">';
    }

    if($DoctorZone!=$Doctor['zone'])
    {
      $DoctorZone = $Doctor['zone'];
      //$HTML .= '<div class="row section titleSeparator2 consultNb deleteable"><h5><b class="w">'.utf8_encode($Doctor['zone']).'<b></h5></div><hr>';
    }


    $Title    = $Doctor['sex']=='M'? 'Dr.':'Dra.';
    $Name     = $Title." ".ucfirst(utf8_encode($Doctor['last_name'].", ".$Doctor['first_name']));
    $Type     = utf8_encode($Doctor['title_'.strtolower($Doctor['sex'])]);
    $MN       = $Doctor['national_medical_enrollment'] ? 'Matricula Nacional: '.$Doctor['national_medical_enrollment'].'<br>':'';
    $MP       = $Doctor['provincial_medical_enrollment'] ? 'Matricula Provincial: '.$Doctor['provincial_medical_enrollment'].'<br>':'';
    $Email    = $Doctor['email']? strtolower($Doctor['email']).'<br>':'';
    $Website  = $Doctor['website']? strtolower($Doctor['website']).'<br>':'';
    $Specialties = $DB->fetchAssoc("doctor_specialty","title","specialty_id IN (SELECT specialty_id FROM relation_doctor_specialty WHERE doctor_id = ".$Doctor['doctor_id'].")");
    //$Offices = $DB->execQuery("free","SELECT o.*,z.title as zone,p.title as province FROM doctor_office as o, country_province as p, country_zone as z WHERE o.province_id = p.province_id AND o.zone_id = z.zone_id AND o.doctor_id = ".$Doctor['doctor_id']);
    $BR = $Doctor['description']? '<br>':'';

    $Tags = "";
    $OfficesHTML = "";
    $Es = count($Specialties)>1? 'es':'';
    foreach($Specialties as $Specialty)
    {
      $Tags.= $Tags? ', ':'<b>Especialidad'.$Es.': </b>';
      $Tags .= utf8_encode($Specialty['title']);
    }
    if($Tags) $Tags = '</p><hr><p>'.$Tags;

    //$X=0;
    //foreach($Offices as $Office)
    //{
      //$X++;
      // $OfficesHTML.='<hr>
      //                 <span class="consultLocation">'.$Office['zone'].', '.$Office['province'].'</span>
      //                 <br>Direcci&oacute;n: '.$Office['address'].'
      //                 <br>Pedir turnos al: '.$Office['phone'].'
      //                 <br>Horarios de atenci&oacute;n: '.$Office['timetable'];
    //}
    //$S = $X>1? 's':'';
    $Map = '<hr><a class="btn btn-info" href="https://www.google.com/maps/d/viewer?mid=1Pu-vk8IlC6I-uoGRk_JjJI7tqQs&ll=-34.5975449846109%2C-58.49240180910647&z=11" target="_blank">Ver Mapa</a>';
    $OfficesHTML.='<hr>
                      <span class="consultLocation"><b>'.$Doctor['zone'].', '.$Doctor['province'].'</b></span>
                      <br><b>Direcci&oacute;n:</b> '.$Doctor['address'].'
                      <br><b>Pedir turnos al:</b> '.$Doctor['phone'].'
                      <br><b>Horarios de atenci&oacute;n:</b> '.$Doctor['timetable'];
    $OfficesHTML = '<b>Consultorio'.$S.':</b>'.$OfficesHTML.$Map;

    $HTML    .= '
    <div class="row deleteable">
      <div class="col-sm-12 itemContainer">
        <div class="card-header '.$TypeClass.'"><h5 class="card-title">'.$Name.'</h5></div>
        <div class="card card-block">
          <div class="row">
            <div class="col-md-6 col-xs-12">
              <p class="card-text marg0">
              <b>'.$Type.'</b>
              </p>
              <hr>
              <p>
                '.utf8_encode($Doctor['description']).$BR.'
                '.$MN.'
                '.$MP.'
                '.$Email.'
                '.$Website.'
                '.$Tags.'
              </p>
            </div>
            <div class="col-md-6 col-xs-12">
              <p class="card-text marg0">
              '.utf8_encode($OfficesHTML).'
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>';
  }
  if($_POST['search_key'] || $_GET['search'])
  {
    $Search = $HTML? $HTML : '<div class="row deleteable"><div class="col-sm-12 itemContainer">No se ha encontrado ning&uacute;n resultado.</div></div>';
    echo $Search;
    //echo $Query;
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
        <?php include('../../../files/includes/inc.menu.agenda.php'); ?> <!--  -->
        <!-- /// /Left Floating Menu /// -->
        <!-- Content inside this div -->
        <div id="SearchInserter" class="col-lg-7 col-md-9 col-xs-12">
          <div class="sectionTits">
            <h1>Consultorios</h1>
            <hr>
            <h4>Atenci&oacute;n en Consultorios Privados<!--<br><span style="font-size:10px">Médicos>En Consultorio></span>--></h4>
            <hr>
          </div>


          <!--<div class="row txC mapFarmacias">-->
          <!--  <iframe src="https://www.google.com/maps/d/embed?mid=1Pu-vk8IlC6I-uoGRk_JjJI7tqQs" width="100%" height="480px"></iframe>-->
          <!--</div>-->
          <!--<div class="horizontal-list consultMapRef">-->
          <!--  <ul>-->
          <!--    <li><span><b>Referencias: </b></span></li>-->
          <!--    <li><img src="../../../skin/images/body/icons/locationpin3.png" alt="" /><span class="consultMapRef"><b>M&eacute;dicos</b></span></li>-->
          <!--    <li><img src="../../../skin/images/body/icons/locationpin.png" alt="" /><span class="consultMapRef"><b>Odont&oacute;logos</b></span></li>-->
          <!--    <li><img src="../../../skin/images/body/icons/locationpin2.png" alt="" /><span class="consultMapRef"><b>Veterinarios</b></span></li>-->
          <!--  </ul>-->
          <!--</div>-->
          <!--<hr class="hrStrong">-->
          <!--<div class="row sectionTitsSmall">-->
          <!--  <h3>Consultorios Privados</h3>-->
          <!--</div>-->
          <!--<div id="ClearSearchPreview" class="row searchPreview Hidden">-->
          <!--   <button type="button" id="ClearSearch" class="btn" name="ClearSearch">Nueva b&uacute;squeda</button>-->
          <!--</div>-->
          <div id="searchPreview" class="row searchPreview Hidden fadeIn">
            <div class="row">
              <div class="col-xs-12 col-sm-9">
             <span id="searchPreview1" class="Hidden">Test</span>
             <span id="searchPreview2" class="Hidden"></span>
             <span id="searchPreview3" class="Hidden"></span>
             </div>
             <div class="col-xs-12 col-sm-3">
               <button type="button" id="ClearSearch" class="btn" name="ClearSearch">Nueva b&uacute;squeda</button>
             </div>
            </div>
          </div>
          <!-- search buttons 1-->
          <div id="SearchOption1" class="row searchOptions animated fadeIn">
            <h5>Qu&eacute; est&aacute;s buscando?</h5>
            <hr>
            <button type="button" id="SearchOption1Btn1" data="med" class="SearchOption1Btn btn docBtn" name="button">M&eacute;dicos</button>
            <button type="button" id="SearchOption1Btn2" data="odo" class="SearchOption1Btn btn odontBtn" name="button">Odont&oacute;logos</button>
            <button type="button" id="SearchOption1Btn3" data="vet" class="SearchOption1Btn btn vetBtn" name="button">Veterinarios</button>
          </div>
          <!-- /search buttons 1 -->
          <!-- search buttons 2-->
          <div id="SearchOption2" class="row searchOptions animated fadeIn Hidden">
            <h5>Tipo de Atenci&oacute;n</h5>
            <hr>
            <button type="button" id="SearchOption2Btn1" data="con" class="SearchOption2Btn btn searchBtn btnMarg" name="button"><i class="fa fa-building"></i> En consultorio</button>
            <button type="button" id="SearchOption3Btn2" data="dom" class="SearchOption2Btn btn searchBtn btnMarg" name="button"><i class="fa fa-home"></i> A Domicilio</button>
            <button class="SearchBackBtn searchBackBtn" btn="1"><i class="fa fa-arrow-circle-left"></i></button>
          </div>
          <!-- /search buttons 2 -->
          <!-- Ubication -->
          <div id="SearchOption3" class="row searchOptions animated fadeIn Hidden">
            <h5>Ubicaci&oacute;n</h5>
            <hr>
            <div class="col-md-6 col-xs-12">
              <select class="form-control">
                <option selected disabled>Seleccione...</option>
                <option>Provincia</option>
                <option>Otra</option>
                <option>Otra</option>
                <option>Otra</option>
                <option>Otra</option>
              </select>
            </div>
            <div class="col-md-6 col-xs-12">
              <select class="form-control">
                <option selected disabled>Seleccione...</option>
                <option>Provincia</option>
                <option>Otra</option>
                <option>Otra</option>
                <option>Otra</option>
                <option>Otra</option>
              </select>
            </div>
            <button type="button" class="btn searchBtn btnMargTop" name="button">Buscar</button>
            <button class="SearchBackBtn searchBackBtn" btn="2"><i class="fa fa-arrow-circle-left"></i></button>
          </div>
          <!-- Ubication -->
          <div class="row searchFilters Hidden">
            <div class="form-group searchFiltersInner">
              <div class="searchIcon" id="SearchIcon" style="cursor:pointer;"><i class="fa fa-search"></i></div>
              <input id="search" class="form-control" placeholder="Ingrese una provincia, una zona o un nombre y presione enter..." type="text">
            </div>
          </div>
          <!--<div class="row wow zoomIn fadeIn section titleSeparator medicConsultBack">-->
          <!--  <h5><b class="w">M&eacute;dicos</b></h5>-->
          <!--</div>-->
          <!--<div class="row wow zoomIn fadeIn section titleSeparator consultProv">-->
          <!--  <h5><b class="w">Capital</b></h5>-->
          <!--</div>-->
          <!--<div class="row wow zoomIn fadeIn section titleSeparator2 consultNb">-->
          <!--  <h5>Floresta</h5>-->
          <!--</div>-->
          <!-- Test -->
          <div id="searchResult" class="Hidden">
            <?php echo $HTML; ?>
          </div>
        </div><!-- /contentContainer -->
        <?php include('sidebar.php'); ?><!-- Right Sidebar -->
      </div><!-- /MainContainer --><!-- Content inside this div -->
      <?php include('../../includes/inc.web.footer.php'); ?>
    </div><!-- /mainWrapper -->
    <!-- Footer -->
    <?php include('../../includes/inc.web.scripts.php'); ?> <!-- Scripts -->
    <script src="../../js/script.web.searcher.js" </script> <!-- Scripts -->
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
