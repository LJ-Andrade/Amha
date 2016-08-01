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
        <?php include('../../../files/includes/inc.menu.alumnos.php') ?>
        <!-- /// /Left Floating Menu /// -->

        <div class="col-lg-7 col-md-9 col-xs-12 contentContainer">
          <div class="sectionTits">
            <h1>Biblioteca AMHA</h1>
          </div>
          <!-- Content -->

          <p>
            El &aacute;rea de Biblioteca de la Instituci&oacute;n es puntal de asistencia acad&eacute;mica para el alumno, el Cuerpo Docente y los socios de la <b>A.M.H.A.</b><br>
             Contribuye a su formaci&oacute;n y capacitaci&oacute;n continua con m&aacute;s de 3000 ejemplares que se incrementan a&ntilde;o tras a&ntilde;o.
            Suma a dicha asistencia, la videoteca, la hemeroteca, la computadora de uso personalizado y la posibilidad de realizar fotocopias.<br>
            Funciona bajo un reglamento que est&aacute; a disposici&oacute;n de quien lo solicite.<br>
            La <b>A.M.H.A.</b> abre sus puertas a la colaboraci&oacute;n mutua con otras Escuelas de la <b>F.A.M.H.A.</b> pudiendo los socios del Colegio de M&eacute;dicos
            Home&oacute;patas de las distintas Escuelas adheridas, acceder a la lectura de los libros y revistas.<br>
            La biblioteca se encuentra disponible de lunes a viernes de 10 a 16hs.
          </p>
          <div class="txC">
            <button type="button" class="btn btn-primary btn-lg secBtn" data-toggle="modal" data-target="#bibliotecaModal">
              Biblioteca
            </button>
          </div>
          <!-- Content -->
        </div><!-- /autoridades -->


        <!-- ////// MODALS //////// -->
        <!-- ////// /MODALS //////// -->
        <?php include('sideBar.php'); ?><!-- Right Sidebar -->
      </div><!-- /MainContainer --><!-- Content inside this div -->
      <?php include('../../includes/inc.web.footer.php'); ?>
    </div><!-- /mainWrapper -->
    <!-- Footer -->
    <?php include('../../includes/inc.web.scripts.php'); ?> <!-- Scripts -->
  </body>
</html>
