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
      <div class="container mainContainer"><!-- Content inside this div -->
        <!-- /// Left Floating Menu /// -->
        <!-- Large and Medium Screens -->
        <div class="col-lg-2 col-md-3 col-xs-12 floatMenu1">
          <div class="leftFloatMenu">
            <ul>
              <a href="#"><li>Quienes Somos</li></a>
              <a href="#"><li>Historia</li></a>
              <a href="#"><li>Autoridades</li></a>
              <a href="#"><li>Nuestros Representantes</li></a>
              <a href="#"><li>Otro Link</li></a>
            </ul>
          </div>
        </div>
        <!-- / Large and Medium Screens -->
        <!-- Mobile -->
        <div class="col-lg-2 col-md-3 col-sm-12 col-xs-12 floatMenu2">
          <div class=" leftFloatMenu leftMenuInLine">
            <ul>
              <a href="#"><li>Quienes Somos</li></a>
              <a href="#"><li>Historia</li></a>
              <a href="#"><li>Autoridades</li></a>
              <a href="#"><li>Nuestros Representantes</li></a>
              <a href="#"><li>Otro Link</li></a>
            </ul>
          </div>
        </div>
        <!-- /Mobile -->
        <!-- /// /Left Floating Menu /// -->
        <div class="col-lg-7 col-md-9 col-xs-12 contentContainer">
          <div class="sectionTits">
            <h1>Novedades</h1>
            <!-- <h3>Autoridades</h3><br> -->
          </div>
          <!-- Content -->



          <!-- Content -->
        </div><!-- /autoridades -->
        <?php include('sideBar.php'); ?><!-- Right Sidebar -->
      </div><!-- /MainContainer --><!-- Content inside this div -->
      <?php include('../../includes/inc.web.footer.php'); ?>
    </div><!-- /mainWrapper -->
    <!-- Footer -->
    <?php include('../../includes/inc.web.scripts.php'); ?> <!-- Scripts -->
  </body>
</html>
