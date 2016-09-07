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
        <?php include('../../../files/includes/inc.menu.socios.php'); ?> <!--  -->
        <!-- /// /Left Floating Menu /// -->
        <div class="col-lg-7 col-md-8 col-xs-12 contentContainer">
          <div class="sectionTits">
            <span class="moreLinks">
              <p><b>Ver tambien:</b> <a href="socios_activos.php">Socios Activos</a> | <a href="socios_adherentes.php">Socios Adherentes</a> |
              <a href="socios_honorarios.php">Socios Honorarios</a></p>
            </span>
            <hr>
            <h1>Socios A.M.H.A.</h1>
            <hr>
            <h4>Socios Benefactores</h4>
          </div><br>
          <!-- Content -->
          <div class="container">
            <div class="row">
              <p  class="justify">
                <b>Requisitos y beneficios</b>
                <b>Artículo 5º del Estatuto de la A.M.H.A. Título 3. Asociados: condici&oacute;n de admisi&oacute;n, Inciso "d"</b><br>
                Las personas f&oacute;sicas y/o jur&iacute;dicas que, con sustanciadas con los prop&oacute;sitos institucionales, que efect&uacute;en
                 aportes o contribuyan al sostenimiento de sus actividades y sean aceptados por la Comisi&oacute;n Directiva.
                No tendr&aacute;n derecho a voz ni a voto u no podr&aacute;n integrar los &oacute;rganos sociales.
                </p>
              </div>
              <hr>
            </div><!-- Container -->
          </div><!-- Content Container-->
        <?php include('sidebar.php'); ?><!-- Right Sidebar -->
      </div><!-- /MainContainer --><!-- Content inside this div -->
      <?php include('../../includes/inc.web.footer.php'); ?>
    </div><!-- /mainWrapper -->
    <!-- Footer -->
    <?php include('../../includes/inc.web.scripts.php'); ?> <!-- Scripts -->
  </body>
</html>
