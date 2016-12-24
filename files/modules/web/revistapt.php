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
        <?php  if ($_GET['view']== 'socios') {

          include('../../../files/includes/inc.menu.socios.php');

        } else {

          include('../../../files/includes/inc.menu.alumnos.php');

        }
        ?>

        <!-- /// /Left Floating Menu /// -->

        <div class="col-lg-7 col-md-8 col-xs-12 contentContainer">
          <div class="sectionTits">
            <h1>Revista Homeopat&iacute;a para todos</h1>
            <hr>
            <h4>Descarga gratuita!</h4>
            <hr>
          </div>
          <!-- Content -->
          <div class="container">
            <div class="row">
              <p class="justify">La <b>Asociaci&oacute;n M&eacute;dica Homeop&aacute;tica Argentina</b> realiza hace varios a&ntilde;os la revista
               <b>HOMEOPAT&Iacute;A PARA TODOS</b>.<br> Esta revista tiene como objetivo la difusi&oacute;n de
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

              <?php
              $revistas = array(  //array (text, image, pdf);
                                  array("Edici&oacute;n 58", "../../../skin/files/revistapt/revistahpt58.pdf"),
                                  array("Edici&oacute;n 57", "../../../skin/files/revistapt/revista57.pdf"),
                                  array("Edici&oacute;n 56", "../../../skin/files/revistapt/revistahpt56.pdf"),
                                  array("Edici&oacute;n 55", "../../../skin/files/revistapt/homeopatia-para-todos-55.pdf"),
                                  array("Edici&oacute;n 54", "../../../skin/files/revistapt/revistahpt54.pdf"),
                                  array("Edici&oacute;n 53", "../../../skin/files/revistapt/homeopatia-para-todos-53.pdf"),
                                  array("Edici&oacute;n 52",       "../../../skin/files/revistapt/homeopatiaparatodos52.pdf"),
                                  array("Edici&oacute;n 51",       "../../../skin/files/revistapt/homeopatiaparatodos51.pdf"),
                                  array("Edici&oacute;n 50",       "../../../skin/files/revistapt/homeopatiaparatodos50.pdf"),
                                  array("Edici&oacute;n 49",       "../../../skin/files/revistapt/homeopatiaparatodos49.pdf"),
                                  array("Edici&oacute;n 48",       "../../../skin/files/revistapt/homeopatiaparatodos48.pdf"),
                                  array("Edici&oacute;n 47",       "../../../skin/files/revistapt/homeopatiaparatodos47.pdf"),
                                  array("Edici&oacute;n 46",       "../../../skin/files/revistapt/homeopatiatodos46.pdf"),
                                  array("Edici&oacute;n 45",       "../../../skin/files/revistapt/homeopatiatodos45.pdf"),
                                  array("Edici&oacute;n 44",       "../../../skin/files/revistapt/homeopatiatodos44.pdf"),
                                  array("Edici&oacute;n 43",       "../../../skin/files/revistapt/homeopatiatodos43.pdf")

                                );
              ?>

              <div class="row revistas vertical-list">
                <ul class="revistas-horiz">
                  <?php foreach ($revistas as $revista): ?>
                    <a href="<?php echo $revista[1] ?> " target="_blank"><li><span><?php echo $revista[0]; ?></span><img src="../../../skin/images/body/icons/pdficon.png" alt=""></li></a>
                  <?php endforeach; ?>
                </ul>
              </div>


              <!-- <div class="row revistas">
                <ul>
                  <li>
                    <span class="editionN">Edicion 57</span><br>
                      <?php // foreach ($revistas as $revista): ?>
                      <a href="<?php // echo $revista[1] ?>" target="_blank">
                        <span class="lastEdition">&Uacute;ltima edici&oacute;n</span>
                        <img src="<?php // echo $revista[0] ?>" alt="" />
                      </a>
                      <?php // endforeach; ?>
                  </li>
                </ul>
              </div> -->

            </div>
          </div>
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
