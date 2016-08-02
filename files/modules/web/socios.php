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
          <div class="sectionTits"><h1 class="txC">SOCIOS</h1></div>
          <div class="row txC">
            <div class="col-xs-12 linkWrapper">
              <a href="socios_requisbenef.php"><p>Socios: Requisitos y beneficios</p></a>
              <div class="col-md-3 subLinkWrapper"><a href="socios_activos.php"><li>Socios Activos</li></a></div>
              <div class="col-md-3 subLinkWrapper"><a href="socios_adherentes.php"><li>Socios Adherentes</li></a></div>
              <div class="col-md-3 subLinkWrapper"><a href="socios_honorarios.php"><li>Socios Honorarios</li></a></div>
              <div class="col-md-3 subLinkWrapper"><a href="socios_benefactores.php"><li>Socios Benefactores</li></a></div>
            </div>
            <a href="socios_colegio.php">
              <div class="col-xs-12 linkWrapper">
                <p>Colegio de M&eacute;dicos Home&oacute;patas</p>
              </div>
            </a>
            <a href="socios_grupodocente.php">
              <div class="col-xs-12 linkWrapper">
                <p>Grupos Docente</p>
              </div>
            </a>
            <a href="socios_famha.php">
              <div class="col-xs-12 linkWrapper">
                <p>Federaci&oacute;n de Asociaciones M&eacute;dicas Homeop&aacute;ticas Argentinas</p>
              </div>
            </a>
            <button type="button" name="button" class="pagarBtn secBtn">Pago de la cuota de Socio de AMHA 2016</button>
          </div><!-- /Row -->
        </div><!-- /contentContainer -->
        <?php include('sideBar.php'); ?><!-- Right Sidebar -->
      </div><!-- /MainContainer --><!-- Content inside this div -->
      <?php include('../../includes/inc.web.footer.php'); ?>
    </div><!-- /mainWrapper -->
    <!-- Footer -->
    <?php include('../../includes/inc.web.scripts.php'); ?> <!-- Scripts -->
  </body>
</html>
