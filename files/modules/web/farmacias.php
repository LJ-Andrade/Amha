<?php
include("../../classes/class.database.php");
//echo "1";
$DB = new DataBase();
//var_dump($DB);die();
// if($_POST['search_key'] && $_GET['search']!="all")
// {
//   $V = $_POST['search_key'];
//   // $Result = explode(" ",$V);
//   // foreach ($Result as $Key => $Value) {
//   //   $Result[$Key] = "first_name LIKE '%".$Value."%' OR last_name LIKE '%".$Value."%' OR description LIKE '%".$Value."%' OR national_medical_enrollment LIKE '%".$Value."%'  OR provincial_medical_enrollment LIKE '%".$Value."%'  OR email LIKE '%".$Value."%'  OR website LIKE '%".$Value."%'";
//   // }
//   // $Where = implode(" OR ",$Result);
//   $Where = "first_name LIKE '%".$V."%' OR last_name LIKE '%".$V."%' OR description LIKE '%".$V."%' OR national_medical_enrollment LIKE '%".$V."%'  OR provincial_medical_enrollment LIKE '%".$V."%'  OR email LIKE '%".$V."%'  OR website LIKE '%".$V."%'";
//
// }
$Pharmacies = $DB->fetchAssoc('pharmacy','*',$Where);
//var_dump($DB);die();

foreach($Pharmacies as $Pharmacy)
{

  $Name     = ucfirst(utf8_encode($Pharmacy['name']));
  $Address  = '<b><i class="fa fa-building"></i>: </b>'.utf8_encode($Pharmacy['address']).'<br>';
  $Phone    = $Pharmacy['phone']?'<b><i class="fa fa-phone"></i>: </b>'.utf8_encode($Pharmacy['phone']).'<br>':'';
  $Whatsapp = $Pharmacy['whatsapp']?'<b><i class="fa fa-whatsapp"></i>: </b>'.utf8_encode($Pharmacy['whatsapp']).'<br>':'';
  $Website  = $Pharmacy['website']? '<b><i class="fa fa-globe"></i>: </b><a href="http://'.$Pharmacy['website'].'" target="_blank">'.strtolower($Pharmacy['website']).'</a><br>':'';
  $Logo     = $Pharmacy['logo']? $Pharmacy['logo'] : '../../../skin/images/products/farmacias/pharmacygeneric.jpg';
  if($Pharmacy['facebook'])
  {
    $Fb = array_reverse(explode("/",$Pharmacy['facebook']));
    if($Fb[0])
      $Facebook = '<b><i class="fa fa-facebook"></i>: </b><a href="https://www.facebook.com/'.$Fb[0].'" target="_blank">facebook.com/'.$Fb[0].'</a>';
  }else{
    unset($Facebook);
  }
  
  $Emails   = str_replace(" ","/",$Emails);
  $Emails   = str_replace("|","/",$Emails);
  $Emails   = str_replace("//","/",$Emails);
  $Emails   = str_replace("///","/",$Emails);
  $Emails   = explode("/",$Pharmacy['email']);
  foreach ($Emails as $Email) {
    if($Mail) $Mail .= ' | ';
    $Mail .= '<a href="https://mail.google.com/mail/?view=cm&fs=1&to='.$Email.'" target="_blank">'.strtolower($Email).'</a>';
  }
  if($Mail)
  {
    $Mail = '<b><i class="fa fa-envelope"></i>: </b>'.$Mail.'<br>';
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
        </p><!-- Data -->
      </div>
    </div>
  </div>
  ';
  unset($Mail);
}
// if($_POST || $_GET['get'])
// {
//   // echo($_POST['search_key'])."<br><br>";
//   //echo $DB->lastQuery();
//   $Search = $HTML && empty($_GET['get'])? $HTML : '<div class="row wow zoomIn fadeIn deleteable"><div class="col-sm-12 itemContainer">No se ha encontrado ning&uacute;n resultado.</div></div>';
//   echo $Search;
//   die();
// }
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
        <div class="col-lg-9 col-md-12 col-xs-12">
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
            <iframe src="https://www.google.com/maps/d/embed?mid=1J21jL3VZa3Zt4cHRg3UHAhG7oAk" width="100%" height="480"></iframe>
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
  </body>
</html>
