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
            <div class="col-md-12 consultoriosItems">
            <hr>
            <div class="col-md-6 col-sm-6 col-xs-12 catalogueItem">
              <div class="hovereffect">
                <img class="img-responsive" src="../../../skin/images/body/pictures/amhaFront.jpg" alt="">
                <div class="overlay">
                  <a href="consultoriosamha.php">
                    <h2>Atenci&oacute;n de Pacientes en A.M.H.A.</h2>
                    <hr>
                    <p>Atenci&oacute;n de pacientes en consultorios de la Asociaci&oacute;n Homeop&aacute;tica Argentina</p>
                  </a>
                </div>
              </div>
            </div>
            <div class="col-md-6 col-sm-6 col-xs-12 catalogueItem">
              <div class="hovereffect">
                <img class="img-responsive" src="../../../skin/images/body/pictures/consultMap.jpg" alt="">
                <div class="overlay">
                  <a href="consultoriosprivados.php">
                    <h2>Atenci&oacute;n en Consultorios Privados</h2>
                    <hr>
                    <p>Atenci&oacute;n de pacientes en consultorios de m&eacute;dicos home&oacute;patas privados.</p>
                  </a>
                </div>
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
