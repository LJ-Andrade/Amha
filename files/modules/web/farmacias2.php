<!DOCTYPE html>
<html lang="es">
<head>
  <title>AMHA</title>
  <?php include('../../../files/includes/inc.web.head.php'); ?> <!-- Head -->
<?php
  $Pharmacies = $DB->fetchAssoc('pharmacy a LEFT JOIN geolocation_province b ON (a.province_id = b.province_id)','a.*,b.name as province',"status='A'",'a.province_id,a.name');
//var_dump($Pharmacies);die();

foreach($Pharmacies as $Pharmacy)
{
  if($Province != $Pharmacy['province_id'])
  {
    $HTML .= '<hr class="deleteable"><div class="row section titleSeparator consultProv deleteable"><h5><b class="w">'.$Pharmacy['province'].'</b></h5></div><hr class="deleteable">';
    $Province = $Pharmacy['province_id'];
  }

  $Name     = ucfirst($Pharmacy['name']);
  $Address  = '<b><i class="fa fa-building"></i> </b>'.$Pharmacy['address'].'<br>';
  $Phone    = $Pharmacy['phone']?'<b><i class="fa fa-phone"></i> </b>'.$Pharmacy['phone'].'<br>':'';
  $Whatsapp = $Pharmacy['whatsapp']?'<b><i class="fa fa-whatsapp"></i> </b>'.$Pharmacy['whatsapp'].'<br>':'';
  $Website  = $Pharmacy['website']? '<b><i class="fa fa-globe"></i> </b><a href="http://'.$Pharmacy['website'].'" target="_blank">'.$Pharmacy['website'].'</a><br>':'';
  $Logo     = $Pharmacy['logo']? $Pharmacy['logo'] : '../../../skin/images/products/farmacias/pharmacygeneric.jpg';
  $Other    = '<br>'.$Pharmacy['other'];
  if($Pharmacy['facebook'])
  {
    $Fb = array_reverse(explode("/",$Pharmacy['facebook']));
    if($Fb[0])
      $Facebook = '<b><i class="fa fa-facebook"></i> </b><a href="https://www.facebook.com/'.$Fb[0].'" target="_blank">facebook.com/'.$Fb[0].'</a>';
    else
      $Fb = array();
  }else{
    unset($Facebook);
  }
  
  $Emails   = str_replace(" ","/",$Pharmacy['email']);
  $Emails   = str_replace("|","/",$Emails);
  $Emails   = str_replace("///","/",$Emails);
  $Emails   = str_replace("//","/",$Emails);
  
  $Emails   = explode("/",$Emails);
  foreach ($Emails as $Email) {
    if($Mail) $Mail .= ' | ';
    $Mail .= '<a href="https://mail.google.com/mail/?view=cm&fs=1&to='.$Email.'" target="_blank">'.strtolower($Email).'</a>';
  }
  if($Mail)
  {
    $Mail = '<b><i class="fa fa-envelope"></i> </b>'.$Mail.'<br>';
  }
  $HTML    .= '
  <div class="row item2Col">
    <div class="col-sm-12 item2ColInner">
      <div class="col-md-2 col-sm-2 col-xs-12 item2ColImg">
        <img src="'.$Logo.'" alt="" />
      </div>
      <div class="col-md-10 col-sm-12 col-xs-12 item2ColInnerText">
        <h5>'.$Name.'</h5>
        <p>
          '.$Address.'
          '.$Phone.'
          '.$Whatsapp.'
          '.$Mail.'
          '.$Website.'
          '.$Facebook.'
          '.$Other.'
        </p><!-- Data -->
      </div>
    </div>
  </div>
  ';
  unset($Mail);
}
?>


</head>
  <body>
    <header>
      <?php include('../../../files/includes/inc.web.nav.php'); ?> <!-- Navegation -->
    </header>
    <div class="mainWrapper">
      <div class="container mainContainer">
        <!-- /// Left Floating Menu /// -->
        <?php include('../../../files/includes/inc.menu.agenda.php') ?>
        <!-- /// /Left Floating Menu /// -->
        <div class="col-lg-7 col-md-12 col-xs-12">
          <!-- Content inside this div -->
          <!-- title -->
          <div class="sectionTits"><h1 class="txC">Farmacias</h1></div>
          <hr>
          <div class="txC">
            <h4>Lista de farmacias homeop&aacute;ticas recomendadas por la A.M.H.A.</h4>
              <h5>Haga click sobre el nombre de la farmacia para visitar su sitio web.</h5><br>
          </div>
          <!-- title -->
          <!-- MAP -->
          <div class="row wow zoomIn fadeIn txC mapFarmacias">
            <!--<iframe src="https://www.google.com/maps/d/embed?mid=1J21jL3VZa3Zt4cHRg3UHAhG7oAk" width="100%" height="480"></iframe>-->
            <div id="map" style="width:100%;height:480px;"></div>
          </div>
          <!-- MAP -->
          <!-- //// items Start //// -->
          <?php echo $HTML; ?>



          <!-- / items End -->
        </div><!-- /contentContainer -->
        <?php include('sidebar.php'); ?><!-- Right Sidebar -->
      </div><!-- /MainContainer --><!-- Content inside this div -->
      <?php include('../../includes/inc.web.footer.php'); ?>
    </div><!-- /mainWrapper -->
    <!-- Footer -->
    <?php include('../../includes/inc.web.scripts.php'); ?> <!-- Scripts -->
    
    
    <script>
      var customLabel = {
        restaurant: {
          label: 'R'
        },
        bar: {
          label: 'B'
        }
      };

        function initMap() {
        var map = new google.maps.Map(document.getElementById('map'), {
          center: new google.maps.LatLng(-33.863276, 151.207977),
          zoom: 12
        });
        var infoWindow = new google.maps.InfoWindow;

          // Change this depending on the name of your PHP or XML file
          downloadUrl('../pharmacies/markers2.php', function(data) {
            var xml = data.responseXML;
            var markers = xml.documentElement.getElementsByTagName('marker');
            Array.prototype.forEach.call(markers, function(markerElem) {
              var name = markerElem.getAttribute('name');
              var address = markerElem.getAttribute('address');
              var type = markerElem.getAttribute('type');
              var point = new google.maps.LatLng(
                  parseFloat(markerElem.getAttribute('lat')),
                  parseFloat(markerElem.getAttribute('lng')));

              var infowincontent = document.createElement('div');
              var strong = document.createElement('strong');
              strong.textContent = name
              infowincontent.appendChild(strong);
              infowincontent.appendChild(document.createElement('br'));

              var text = document.createElement('text');
              text.textContent = address
              infowincontent.appendChild(text);
              var icon = customLabel[type] || {};
              var marker = new google.maps.Marker({
                map: map,
                position: point,
                label: icon.label
              });
              marker.addListener('click', function() {
                infoWindow.setContent(infowincontent);
                infoWindow.open(map, marker);
              });
            });
          });
        }



      function downloadUrl(url, callback) {
        var request = window.ActiveXObject ?
            new ActiveXObject('Microsoft.XMLHTTP') :
            new XMLHttpRequest;

        request.onreadystatechange = function() {
          if (request.readyState == 4) {
            request.onreadystatechange = doNothing;
            callback(request, request.status);
          }
        };

        request.open('GET', url, true);
        request.send(null);
      }

    </script>
    <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCuMB_Fpcn6USQEoumEHZB_s31XSQeKQc0&callback=initMap"></script>
  </body>
</html>
