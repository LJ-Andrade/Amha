<?php
  include("../../library/functions/func.common.php");
  include("../../classes/class.database.php");
  $DB = new DataBase();
  $DB->Connect();

  if($_POST['action']=='fillzone')
  {
    $Zones = $DB->fetchAssoc('geolocation_zone','zone_id,name','province_id='.addslashes($_POST['value']) . " AND name <> ''",'name');
    if(count($Zones)>0)
      echo '<option selected value="">Cualquier Barrio/Zona</option>';
    foreach($Zones as $Zone)
    {
      echo '<option value="'.$Zone['zone_id'].'">'.$Zone['name'].'</option>';
    }
    die();
  }


  if($_POST['type'] || $_POST['office'] || $_POST['province'] || $_POST['zone'])
  {
    $Where = "";
    if($_POST['type'])
    {
      switch($_POST['type'])
      {
        case 'odo': $DocType = 3;  break;
        case 'vet': $DocType = 2;  break;
        default: $DocType = 1; break;
      }
      $Where .= " AND a.type_id = ".$DocType;
    }
    if($_POST['office'])
    {
      if($_POST['office']=='con')
        $Where .= " AND a.office = 'Y'";
      else
        $Where .= " AND a.office = 'N'";
    }

    if($_POST['province'])
    {
        $Where .= " AND g.province_id = ".$_POST['province'];
    }

    if($_POST['zone'])
    {
        $Where .= " AND f.zone_id = ".$_POST['zone'];
    }

    // if($_POST['name'])
    // {
    //   $Where .= " AND (a.first_name LIKE '".$_POST['name']."' OR a.last_name LIKE '".$_POST['name']."')";
    // }

    //$Where = $Condition1.$Condition2.$Condition3.$Condition4;
  }


  $Doctors = $DB->fetchAssoc('doctor a LEFT JOIN doctor_office b ON (a.doctor_id = b.doctor_id) LEFT JOIN doctor_type c ON (a.type_id = c.type_id) LEFT JOIN relation_doctor_specialty d ON (d.doctor_id = a.doctor_id) LEFT JOIN doctor_specialty e ON (e.specialty_id = d.specialty_id) LEFT JOIN geolocation_zone f ON (f.zone_id = b.zone_id) LEFT JOIN geolocation_province g ON (g.province_id = b.province_id)',
"a.*,b.office_id,b.lat as lat,b.lng as lng,(a.doctor_id + (IFNULL(b.office_id,0)*99999)) as code,b.address,b.floor,b.apartment,b.timetable as office_timetable,b.phone as office_phone,c.title_m AS title_m,c.title_f AS title_f,IFNULL(g.name,'A domicilio') AS province,g.short_name as short_province,f.name AS zone",
"a.advertising = 'Y' AND a.status='A' ".$Where,
"a.type_id, g.province_id, a.last_name, a.first_name",
"code"
);

  if($_POST['name'])
  {
    $Name = ReplaceLatin($_POST['name']);
    $NewDoctors = array();

    foreach($Doctors as $Doctor)
    {
      if(stripos(ReplaceLatin($Doctor['first_name']), $Name) !== false || stripos(ReplaceLatin($Doctor['last_name']), $Name) !== false)
      {
        $NewDoctors[] = $Doctor;
      }
    }
    $Doctors = $NewDoctors;
    // echo '<br><br>';
    // print_r($Doctors);
  }

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
      $HTML .= '<div class="row section titleSeparator '.$TypeClass.' deleteable"><h5><b class="w">'.$Doctor['title_m'].'s</b></h5></div>';
    }

    if($DoctorProvince!=$Doctor['province'])
    {
      $DoctorProvince = $Doctor['province'];
      $HTML .= '<hr class="deleteable"><div class="row section titleSeparator consultProv deleteable"><h5><b class="w">'.$Doctor['province'].'</b></h5></div><hr class="deleteable">';
    }

    if($DoctorZone!=$Doctor['zone'])
    {
      $DoctorZone = $Doctor['zone'];

    }


    $Title    = $Doctor['sex']=='M'? 'Dr.':'Dra.';
    $Name     = $Title." ".ucfirst($Doctor['last_name'].", ".$Doctor['first_name']);
    $Type     = $Doctor['title_'.strtolower($Doctor['sex'])];
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
      $Tags.= $Tags? ' ':'<b>Especialidad'.$Es.': </b>';
      $Tags .= '<span class="label label-primary">'.$Specialty['title'].'</span>';
    }
    if($Tags) $Tags = '</p><hr><p>'.$Tags;


    if($Doctor['province']!='A domicilio')
    {
      $Map = '<hr><button type="button" class="btn btn-info displayMap" map="'.$Doctor['office_id'].'">Ver Mapa</button>
            <div id="map'.$Doctor['office_id'].'" class="GoogleMap Hidden" style="width:100%;height:12em;"></div>
            <input type="hidden" id="map'.$Doctor['office_id'].'_lat" value="'.$Doctor['lat'].'" />
            <input type="hidden" id="map'.$Doctor['office_id'].'_lng" value="'.$Doctor['lng'].'" />
            <input type="hidden" id="map'.$Doctor['office_id'].'_address" value="'.$Doctor['address'].', '.$Doctor['zone'].'. '.$Doctor['short_province'].'" />

            ';
    $Floor = $Doctor['floor']? ' '.$Doctor['floor'].'°':'';
    $Apartment = $Doctor['apartment']? ' '.$Doctor['apartment']:'';
    $Doctor['office_timetable'] = $Doctor['office_timetable']? $Doctor['office_timetable']: 'Consultar';
    $OfficesHTML.='<hr>
                      <span class="consultLocation"><b>'.$Doctor['zone'].', '.$Doctor['short_province'].'</b></span>
                      <br><b>Direcci&oacute;n:</b> '.$Doctor['address'].$Floor.$Apartment.'
                      <br><b>Pedir turnos al:</b> '.$Doctor['office_phone'].'
                      <br><b>Horarios de atenci&oacute;n:</b> '.$Doctor['office_timetable'];
    $OfficesHTML = '<b>Consultorio'.$S.':</b>'.$OfficesHTML.$Map;

    }else{
    $OfficesHTML.='<hr>
                    <b>Tel&eacute;fono:</b> '.$Doctor['phone'].'';
    $OfficesHTML = '<b>Atenci&oacute;n a Domicilio</b>'.$OfficesHTML;
    }
    $HTML    .= '
    <div class="row deleteable">
      <div class="col-sm-12 itemContainer">
        <div class="card-header '.$TypeClass.'"><h5 class="card-title"><b><span style="color:white">'.$Name.'</span></b></h5></div>
        <div class="card card-block">
          <div class="row">
            <div class="col-md-6 col-xs-12">
              <p class="card-text marg0">
              <b>'.$Type.'</b>
              </p>
              <hr>
              <p>
                '.$Doctor['description'].$BR.'
                '.$MN.'
                '.$MP.'
                '.$Email.'
                '.$Website.'
                '.$Tags.'
              </p>
            </div>
            <div class="col-md-6 col-xs-12">
              <p class="card-text marg0">
              '.$OfficesHTML.'
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>';
  }
  if($_POST['search_key'] || $_GET['search'])
  {
    $Search = $HTML? $HTML : '<div class="row deleteable"><div class="col-sm-12 itemContainer txC"><h3><strong>No se ha encontrado ning&uacute;n resultado.</strong></h3></div></div>';
    echo $Search;
    //echo $Query;
    die();
  }
 ?>
<!DOCTYPE html>
<html lang="es">
<head>
  <title>AMHA</title>
  <link href="../../../skin/css/base.min.css" rel="stylesheet" type="text/css" media="all" />
  <?php include('../../../files/includes/inc.web.head.php'); ?> <!-- Head -->
  <?php


  ?>
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

          <div id="searchPreview" class="row searchPreview Hidden fadeIn">
            <div class="row">
              <div class="col-xs-12 col-sm-9">
             <span id="searchPreview1" class="Hidden"></span>
             <span id="searchPreview2" class="Hidden"></span>
             <span id="searchPreview3" class="Hidden"></span>
             <span id="searchPreview4" class="Hidden"></span>
             </div>
             <div class="col-xs-12 col-sm-3">
               <button type="button" id="ClearSearch" class="btn bg-gray-active" name="ClearSearch">Nueva b&uacute;squeda</button>
             </div>
            </div>
          </div>
          <!-- search buttons 1-->
          <div id="SearchOption1" class="row searchOptions animated fadeIn">
            <h5>Qu&eacute; est&aacute;s buscando?</h5>
            <hr>
            <button type="button" id="SearchOption1Btn1" data="med" class="SearchOption1Btn btn docBtn" name="button"><i class="fa fa-user-md"></i> M&eacute;dicos</button>
            <button type="button" id="SearchOption1Btn2" data="odo" class="SearchOption1Btn btn odontBtn" name="button"><i class="fa fa-user"></i> Odont&oacute;logos</button>
            <button type="button" id="SearchOption1Btn3" data="vet" class="SearchOption1Btn btn vetBtn" name="button"><i class="fa fa-paw"></i> Veterinarios</button>
            <input type="hidden" id="option1" name="option1" value=""/>
          </div>
          <!-- /search buttons 1 -->
          <!-- search buttons 2-->
          <div id="SearchOption2" class="row searchOptions animated fadeIn Hidden">
            <h5>Tipo de Atenci&oacute;n</h5>
            <hr>
            <button type="button" id="SearchOption2Btn1" data="con" class="SearchOption2Btn btn searchBtn btnMarg" name="button"><i class="fa fa-building"></i> En consultorio</button>
            <button type="button" id="SearchOption3Btn2" data="dom" class="SearchOption2Btn btn searchBtn btnMarg" name="button"><i class="fa fa-home"></i> A Domicilio</button>
            <button class="SearchBackBtn searchBackBtn" btn="1"><i class="fa fa-arrow-circle-left"></i></button>
            <input type="hidden" id="option2" name="option2" value=""/>
          </div>
          <!-- /search buttons 2 -->
          <!-- Ubication -->
          <div id="SearchOption3" class="row searchOptions animated fadeIn Hidden">
            <h5>Ubicaci&oacute;n</h5>
            <hr>
            <div class="col-md-6 col-xs-12">
              <?php echo insertElement('select','province','','form-control','attach="zone/consultoriosprivados.php" firstvalue="" firsttext="Cualquier Barrio/Zona" default="function(){}"',$DB->fetchAssoc('geolocation_province a, doctor_office b','a.province_id,a.short_name','a.province_id = b.province_id','a.name','a.province_id'),'','Seleccionar Provincia');?>

            </div>
            <div class="col-md-6 col-xs-12">
              <?php echo insertElement('select','zone','','form-control','','','','Cualquier Barrio/Zona');?>
            </div>
            <button type="button" class="btn searchBtn btnMargTop" id="lastSearch" name="lastSearch">Buscar</button>
            <button class="SearchBackBtn searchBackBtn" btn="2"><i class="fa fa-arrow-circle-left"></i></button>
          </div>

          <!-- Ubication -->
          <div class="row searchFilters Hidden" id="SearchName">
            <div class="form-group searchFiltersInner">
              <div class="searchIcon" id="SearchIcon" style="cursor:pointer;"><i class="fa fa-search"></i></div>
              <input id="search" class="form-control" placeholder="Ingrese un nombre o apellido y presione enter..." type="text">
            </div>
          </div>

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
    <script src="../../js/script.web.searcher.js"></script> <!-- Scripts -->
  </body>
  <script>
    function removeResult()
    {
      $(".deleteable").remove();
    }

    function searchDoctors()
    {
      var search = $("#search").val();
      if(search=="") var get = "all";
      $.ajax({
        method: "POST",
        url: "consultoriosprivados.php?province="+$("#province").val()+"&zone="+$("#zone").val()+"&type="+$("#option1").val()+"&office="+$("#option2").val()+"&name="+$("#search").val()+"&search="+get,
        data: { search_key: search, province: $("#province").val(), zone: $("#zone").val(), type:$("#option1").val(),office:$("#option2").val(),name:$("#search").val()},
        success: function(callback){
          removeResult();
          $("#searchResult").append(callback);
          displayMap();
        }
      });
    }

    function displayMap()
    {
      $('.displayMap').click(function(e){
        e.preventDefault();
        e.stopPropagation();
        var map = $(this).attr('map');
        $(this).addClass('Hidden');
        initMap(map);
      });
    }

    $("#SearchIcon").click(function(){
      //searchDoctors();
      searchName();
    });

    $("#search").keypress(function(event){
      // if ( event.which != 13 && event.which != 9 && event.which != 16 && event.which != 17 && event.which != 18 && event.which != 20 && event.which != 91 && event.which != 92 ) {
      if(event.which == 13)
      {
        //searchDoctors();
        searchName();
      }
    });

    function searchName()
    {
      $("#lastSearch").click();
      //$('#SearchName').addClass('Hidden');
    }


      function initMaps(){
        $(".GoogleMap").each(function(){
           var mapID = $(this).attr("id");
           initMap(mapID);
        });
      }

function initMap(mapID) {
  $('#map'+mapID).removeClass('Hidden');
    var lat = parseFloat($('#map'+mapID+'_lat').val());
    var lng = parseFloat($('#map'+mapID+'_lng').val());
    var address = $('#map'+mapID+'_address').val()
    if(lat && lng)
    {
      var myLatlng = {lat: lat, lng: lng};
      var zoom = 14;
    }else{
      lat = -34.6037;
      lng = -58.3816;
      var zoom = 11;
    }

    var map = new google.maps.Map(document.getElementById('map'+mapID), {
      center: {lat: lat, lng: lng},
      zoom: zoom,
      disableDefaultUI: true
    });


    var infowindow = new google.maps.InfoWindow();
    var marker = new google.maps.Marker({
      map: map,
      anchorPoint: new google.maps.Point(0, -29)
    });
    if(typeof myLatlng !== 'undefined')
    {
      marker.setPosition(myLatlng);
      infowindow.setContent('<div><strong>' + address + '</strong>');
      infowindow.open(map, marker);
    }
  }
    </script>
    <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCuMB_Fpcn6USQEoumEHZB_s31XSQeKQc0"></script>
</html>
