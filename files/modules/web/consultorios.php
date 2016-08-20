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
        <div class="col-lg-9 col-md-12 col-xs-12 contentContainer">
          <div class="sectionTits"><h1 class="txC">Consultorios</h1></div>
          <div class="row txC">
            <a href="consultoriosamha.php">
              <div class="col-xs-12 linkWrapper">
                <p>Atenci&oacute;n Pacientes A.M.H.A</p>
              </div>
            </a>
            <a href="consultoriosprivados.php">
              <div class="col-xs-12 linkWrapper">
                <p>Atenci&oacute;n Consultorios Privados</p>
              </div>
            </a>
          </div><!-- /Row -->
        </div><!-- /contentContainer -->
        <?php include('sidebar.php'); ?><!-- Right Sidebar -->
      </div><!-- /MainContainer --><!-- Content inside this div -->
      <?php include('../../includes/inc.web.footer.php'); ?>
    </div><!-- /mainWrapper -->
    <!-- Footer -->
    <?php include('../../includes/inc.web.scripts.php'); ?> <!-- Scripts -->
  </body>
</html>
