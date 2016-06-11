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
        <div class="col-lg-9 col-md-12 col-xs-12">
          <div class="sectionTits"><h1>Consultorios</h1></div>
          <hr>
          <div class="card-deck consultoriosMain">
            <div class="col-md-6 col-xs-12">
              <div class="card">
                <div class="card-block">
                  <h4 class="card-title">Atenci&oacute;n de Pacientes en A.M.H.A.</h4>
                </div>
                <a href="pacientes.php"><img src="../../../skin/images/body/pictures/amhaFront.jpg" alt="" class="img-responsive"/></a>
              </div>
            </div>
            <div class="col-md-6 col-xs-12">
              <div class="card">
                <div class="card-block">
                  <h4 class="card-title">Atención en Consultorios Privados</h4>
                </div>
                <a href="attConsultorios.php"><img src="../../../skin/images/body/pictures/consultMap.jpg" alt="" class="img-responsive"/></a>
              </div>
            </div>
          </div>
        </div><!-- /contentContainer -->
        <?php include('sideBar.php'); ?><!-- Right Sidebar -->
      </div><!-- /MainContainer --><!-- Content inside this div -->
      <?php include('../../includes/inc.web.footer.php'); ?>
    </div><!-- /mainWrapper -->
    <!-- Footer -->
    <?php include('../../includes/inc.web.scripts.php'); ?> <!-- Scripts -->
  </body>
</html>
