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
      <div class="container mainContainer">
        <!-- /// Left Floating Menu /// -->
        <?php include('../../../files/includes/inc.menu.cursos.php'); ?> <!--  -->
        <!-- /// /Left Floating Menu /// -->
        <div class="col-lg-7 col-md-8 col-xs-12">
          <br>
          <div class="sectionTits"><h3 class="txC">Cursos</h3></div>
          <hr>
          <!-- Content inside this div -->
          <div class="container textSection">
            <div class="row">
              <h1 class="txC">Curso de pr&aacute;ctica Homeop&aacute;tica para alumnos libres</h1>
              <hr>
              <b>Duraci&oacute;n:</b> 1 a&ntilde;o acad&eacute;mico no renovable <br>
              <ol>
                <li class="vig"> Para alumnos libres de no m&aacute;s de dos (2) a&ntilde;os en esta condici&oacute;n.</li>
                <li class="vig"> Podr&aacute;n asistir a las clases pr&aacute;cticas de todas las c&aacute;tedras y a los Consultorios de Extensi&oacute;n de C&aacute;tedra;
                  no as&iacute; a las clases de los Cursos Regulares.</li>
              </ol>
              <br>

              <b>Arancel:</b> $ 5.600.-<br>
              <ol>
                <li class="vig"> Pagadero en cuatro cuotas iguales de $ 1.400.-  (con tarjeta de cr&eacute;dito Visa o Mastercard, d&eacute;bito, o cheques
                personales diferidos con vencimiento el 10 de cada mes)</li>
                <li  class="vig"> Pago en efectivo, o con tarjeta de d&eacute;bito, o un solo pago con tarjeta de cr&eacute;dito Visa o Mastercard: <br>   $ 5.040.-
                con un descuento del 10% por pago anticipado.</li>
              </ol>
              <div class="col-md-12 margTop20">
                <a href="formulario_preinscripcion.php#top" target="_blank"><button type="button" class="btn mainBtn">Inscribirse</button></a>
              </div>
            </div><!-- row -->
          </div><!-- container -->
          <!-- /Content inside this div -->
        </div><!-- /contentContainer -->
        <?php include('sidebar.php'); ?><!-- Right Sidebar -->
      </div><!-- /MainContainer --><!-- Content inside this div -->
      <?php include('../../includes/inc.web.footer.php'); ?>
    </div><!-- /mainWrapper -->
    <!-- Footer -->
    <?php include('../../includes/inc.web.scripts.php'); ?> <!-- Scripts -->
    <script type="text/javascript">
    // $('#myModal').on('shown.bs.modal', function () {
    //   $('#myInput').focus()
    // })
    </script>
  </body>
</html>
