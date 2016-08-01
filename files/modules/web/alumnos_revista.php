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
            <h1>Revista Homeopat&iacute;a</h1>
            <h4>Suscripci&oacute;n - Exclusiva socios</h4><br>
          </div>
          <!-- Content -->
            <p>La <b>Asociaci&oacute;n M&eacute;dica Homeop&aacute;tica Argentina</b> realiza desde 1934 la revista <b>HOMEOPAT&Iacute;A.</b>
            Esta revista tiene como objetivo la difusi&oacute;n de informaci&oacute;n de formaci&oacute;n profesional.
            Va dirigida a m&eacute;dicos, socios y alumnos, relacionados con la medicina homeop&aacute;tica.
            La revista busca poner al servicio de los profesionales informaci&oacute;n de nivel t&eacute;cnico,
            lo que la convierte en una revista coleccionable y perdurable.
            Tiene un gran alcance y actualmente se entrega en diferentes puntos de todo el pa&iacute;s
            logrando una cobertura total en <b>12 provincias.</b> Con una <b>frecuencia
            trimestral</b>, es de entrega <b>gratuita</b> y tiene una tirada total de <b>200
            ejemplares</b>, adem&aacute;s del acceso y descarga de la <b>revista en forma digital.</b>
            </p><br>
          <span class="subtitle">
            Aqu&iacute; encontrar&aacute; las publicaciones disponibles de descarga exclusiva para SOCIOS y ALUMNOS.
            Haga click en el bot&oacute;n "Acceder" para poder descargar la &uacute;ltima versi&oacute;n.
          </span><br><br>
          <span class="subtitle">
            <i>Si no tiene su clave de acceso, solic&iacute;tela <a href="mailto:socios@amha.org.ar?subject=Solicitud">socios@amha.org.ar</a> - Tel&eacute;fono 4826-0911</i>
          </span>

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
