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
          <div class="sectionTits"><h1 class="txC">A.M.H.A.</h1></div>
            <!-- Comisión Directiva -->
            <div class="row txC">
              <a href="amha_historia.php">
                <div class="col-xs-12 linkWrapper">
                <p>Historia</p>
              </div>
              </a>
              <a href="amha_autoridades.php">
              <div class="col-xs-12 linkWrapper">
                <p>Autoridades</p>
              </div>
              </a>
              <a href="amha_representantes.php">
              <div class="col-xs-12 linkWrapper">
                <p>Representantes</p>
              </div>
              </a>
            </div><!-- /Row  -->

        </div><!-- /contentContainer -->
        <?php include('sidebar.php'); ?><!-- Right Sidebar -->
      </div><!-- /MainContainer --><!-- Content inside this div -->
      <?php include('../../includes/inc.web.footer.php'); ?>
    </div><!-- /mainWrapper -->
    <!-- Footer -->
    <?php include('../../includes/inc.web.scripts.php'); ?> <!-- Scripts -->
  </body>
</html>
