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
            <hr>
            <h4>Suscripci&oacute;n - Exclusiva socios</h4>
            <hr>
          </div>
          <!-- Content -->
            <p class="justify">La <b>Asociaci&oacute;n M&eacute;dica Homeop&aacute;tica Argentina</b> realiza desde 1934 la revista <b>HOMEOPAT&Iacute;A.</b>
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
          <div class="row revistas">
            <ul>
              <!-- Last Edition -->
              <li><span class="editionN">Vol. 80</span><br><a href="../../../skin/files/revistasocios/revistasocios80-2015.pdf" target="_blank">
                <span class="lastEdition">&Uacute;ltima edici&oacute;n</span><!-- Add this to show last edition ribbon-->
                <img src="../../../skin/files/revistasocios/revistasocios80-2015.jpg" alt="" /></a>
              </li><!-- Last Edition -->
              <li><span class="editionN">Vol 79</span><br><a href="../../../skin/files/revistasocios/revistasocios79-2014.pdf" target="_blank">
                <img src="../../../skin/files/revistasocios/revistasocios79-2014.jpg" alt="" /></a>
              </li>
              <li><span class="editionN">Vol 78</span><br><a href="../../../skin/files/revistasocios/revistasocios78-4-2013.pdf" target="_blank">
                <img src="../../../skin/files/revistasocios/revistasocios78-4-2013.jpg" alt="" /></a>
              </li>
              <li><span class="editionN">Vol 77</span><br><a href="../../../skin/files/revistasocios/revistasocios77-2012.pdf" target="_blank">
                <img src="../../../skin/files/revistasocios/revistasocios77-2012.jpg" alt="" /></a>
              </li>
              <li><span class="editionN">Vol 76 N&deg;2</span><br><a href="../../../skin/files/revistasocios/revistasocios76-2011.pdf" target="_blank">
                <img src="../../../skin/files/revistasocios/revistasocios76-2011.jpg" alt="" /></a>
              </li>
              <li><span class="editionN">Vol 76</span><br><a href="../../../skin/files/revistasocios/revistasocios76-12-2011.pdf" target="_blank">
                <img src="../../../skin/files/revistasocios/revistasocios76-12-2011.jpg" alt="" /></a>
              </li>
              <li><span class="editionN">Vol 75</span><br><a href="../../../skin/files/revistasocios/revistasocios75-11-2010.pdf" target="_blank">
                <img src="../../../skin/files/revistasocios/revistasocios75-11-2010.jpg" alt="" /></a>
              </li>
              <li><span class="editionN">Vol 75</span><br><a href="../../../skin/files/revistasocios/revistasocios75-4-2010.pdf" target="_blank">
                <img src="../../../skin/files/revistasocios/revistasocios75-4-2010.jpg" alt="" /></a>
              </li>
              <li><span class="editionN">Vol 75 N&deg;<?php echo $currentPage ?>4</span><br><a href="../../../skin/files/revistasocios/revistasocios75-4-2010.pdf" target="_blank">
                <img src="../../../skin/files/revistasocios/revistasocios75-4-2010.jpg" alt="" /></a>
              </li>
            </ul>
          </div><!-- revistas -->

          <!-- Content -->
        </div><!-- /autoridades -->
        <!-- ////// MODALS //////// -->
        <!-- ////// /MODALS //////// -->
        <?php include('sidebar.php'); ?><!-- Right Sidebar -->
      </div><!-- /MainContainer --><!-- Content inside this div -->
      <?php include('../../includes/inc.web.footer.php'); ?>
    </div><!-- /mainWrapper -->
    <!-- Footer -->
    <?php include('../../includes/inc.web.scripts.php'); ?> <!-- Scripts -->
  </body>
</html>
