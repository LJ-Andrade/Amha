<!DOCTYPE html>
<html lang="es">
<head>
  <title>AMHA</title>
  <?php include('../../../files/includes/inc.web.head.php'); ?> <!-- Head -->
</head>
  <body>
    <?php include('../../../files/includes/inc.web.optionLeftSideBar.php'); ?> <!-- Left Option Hidden Bar -->
    <header>
      <?php include('../../../files/includes/inc.web.nav.php'); ?> <!-- Navegation -->
    </header>
    <div class="mainWrapper">
      <div class="container mainContainer"><!-- Content inside this div -->
        <!-- Home main menu -->
        <div class="row homeMenu">
          <div class="row homeMenu1">
            <div class="col-md-6 col-sm-12 col-xs-12 hmConsultorios">
              <span>CONSULTORIOS</span>
            </div>
            <div class="col-md-3 col-sm-6 col-xs-12 hmFarmacias">
              <span>FARMACIAS</span>
            </div>

            <div class="col-md-3 col-sm-6 col-xs-12 hmTtienda">
              <span>TIENDA ONLINE</span>
            </div>
          </div>
          <div class="row homeMenu2">
            <div class="col-md-6 col-sm-12 col-xs-12 hmCursos">
              <span>CURSOS</span>
            </div>
            <div class="col-md-3 col-sm-6 col-xs-12 hmArticulos">
              <span>ART&Iacute;CULOS</span>
            </div>
            <div class="col-md-3 col-sm-6 col-xs-12 hmCampus">
              <span>CAMPUS VIRTUAL</span>
            </div>
          </div>
        </div><!-- home main menu -->
        <?php include('indexContent.php'); ?> <!-- Index Content -->
        <?php include('sideBar.php'); ?><!-- Right Sidebar -->
      </div><!-- /MainContainer --><!-- Content inside this div -->
      <?php include('../../includes/inc.web.footer.php'); ?>
    </div><!-- /mainWrapper -->
    <!-- Footer -->
    <?php include('../../includes/inc.web.scripts.php'); ?> <!-- Scripts -->
  </body>
</html>
