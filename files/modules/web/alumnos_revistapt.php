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
            <h1>Revista Homeopat&iacute;a para todos</h1>
            <h4>Descarga gratuita!</h4><br>
          </div>
          <!-- Content -->
          <div class="container">
            <div class="row">
              <p>La <b>Asociaci&oacute;n M&eacute;dica Homeop&aacute;tica Argentina</b> realiza hace varios a&ntilde;os la revista
               <b>HOMEOPAT&iacute;A PARA TODOS</b>.<br> Esta revista tiene como objetivo la difusi&oacute;n de
                  informaci&oacute;n de inter&eacute;s general sobre la medicina homeop&aacute;tica en todas sus
                  especializaciones. Va dirigida a quienes desean ampliar los conocimientos,
                  mantenerse informados y a quienes desconocen.<br>
                  La revista busca poner al servicio de la comunidad informaci&oacute;n de utilidad cotidiana.
                  Tiene un gran alcance y actualmente se entrega en diferentes puntos de todo el pa&iacute;s
                  logrando una cobertura total en 12 provincias.<br> Con una frecuencia semestral, es de
                  entrega gratuita y tiene una tirada total de 6.000 ejemplares, adem&aacute;s del acceso y
                  descarga de la revista en forma digital.
              </p><br>
              <span class="subtitle">
                Aqu&iacute; encontrar&aacute; las publicaciones disponibles para descarga directa.<br>
                Haga click en el bot&oacute;n "Descargar" debajo de cada publicaci&oacute;n para comenzar la descarga correspondiente.
              </span><br><br>
            </div>
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
