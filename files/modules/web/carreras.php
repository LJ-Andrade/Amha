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
          <div class="sectionTits"><h1 class="txC">Carreras</h1></div>
          <div class="row txC">
            <a href="carrera_de_medicina_homeopatica.php">
              <div class="col-xs-12 linkWrapper">
                <p>Carrera de Medicina Homeop&aacute;tica</p>
              </div>
            </a>
            <a href="carrera_de_odontoestomatologia_homeopatica.php">
              <div class="col-xs-12 linkWrapper">
                <p>Carrera de Odontolog&iacute;a y Estomatolog&iacute;a Homeop&aacute;ticas</p>
              </div>
            </a>
            <a href="carrera_de_veterinaria_homeopatica.php">
              <div class="col-xs-12 linkWrapper">
                <p>Carrera de Veterinaria Homeop&aacute;tica</p>
              </div>
            </a>
            <a href="carrera_de_farmacia_homeopatica.php">
              <div class="col-xs-12 linkWrapper">
                <p>Carrera de Farmacia Homeop&aacute;tica</p>
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
