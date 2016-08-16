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
          <div class="sectionTits"><h1 class="txC">AGENDA</h1></div>
          <div class="row txC">
            <!-- <div class="col-xs-12 linkWrapper">
              <a href="socios_requisbenef.php"><p>Socios: Requisitos y beneficios</p></a>
              <div class="col-md-3 subLinkWrapper"><a href="socios_activos.php"><li>Socios Activos</li></a></div>
              <div class="col-md-3 subLinkWrapper"><a href="socios_adherentes.php"><li>Socios Adherentes</li></a></div>
              <div class="col-md-3 subLinkWrapper"><a href="socios_honorarios.php"><li>Socios Honorarios</li></a></div>
              <div class="col-md-3 subLinkWrapper"><a href="socios_benefactores.php"><li>Socios Benefactores</li></a></div>
            </div> -->
            <a href="consultorios.php">
              <div class="col-xs-12 linkWrapper">
                <p>Consultorios</p>
              </div>
            </a>
            <a href="farmacias.php">
              <div class="col-xs-12 linkWrapper">
                <p>Farmacias</p>
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
