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
          <div class="sectionTits"><h1 class="txC">Cursos y Carreras</h1></div>
          <div class="row txC">
            <a href="carreras.php"><div class="col-xs-12 linkWrapper"><p>Carreras</p></div></a>
            <a href="cursos.php"><div class="col-xs-12 linkWrapper"><p>Cursos</p></div></a>
            <a href="formulario_preinscripcion.php"><div class="col-xs-12 linkWrapper"><p>Formulario de pre-inscripci&oacute;n</p></div></a>
            <a href="cursos_ateneos.php"> <div class="col-xs-12 linkWrapper"> <p>Ateneos</p> </div></a>
            <a href="cursos_grupos_de_estudio.php"><div class="col-xs-12 linkWrapper"><p>Grupos de estudio</p></div></a>
            <a href="cursos_beneficios.php"><div class="col-xs-12 linkWrapper"><p>Beneficios para el aprendizaje</p></div></a>
            <a href="cursos_informacion.php"><div class="col-xs-12 linkWrapper"><p>Informaci&oacute;n para graduados</p></div></a>
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
