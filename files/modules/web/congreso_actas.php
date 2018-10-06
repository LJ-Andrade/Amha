<?php
  session_start();
  session_name( 'amhawebsite' );

  if( !$_SESSION[ 'congreso_user' ] )
  {

      header( "Location: congreso_login.php?msg=invalid" );
      die();

  }

?>
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
        <?php  if ($_GET['view'] == 'socios') {

          include('../../../files/includes/inc.menu.socios.php');

        } else {

          include('../../../files/includes/inc.menu.alumnos.php');

        }
        ?>
        <!-- /// /Left Floating Menu /// -->
        <div class="col-lg-7 col-md-8 col-xs-12 contentContainer">
          <div class="sectionTits">
            <h1>Congreso FAMHA 2018</h1>
            <hr>
            <h4>Actas</h4>
            <hr>
          </div>
          <!-- Content -->
          <p class="justify">

              Dejamos a su disposición las actas de los trabajos expuestos en el 12º Congreso FAMHA. Las mismas estarán disponibles hasta el mes de febrero del 2018

          </p>

          <br>


          <?php

                  $Dir = '../../../skin/files/conferences';

                  $Magazines = scandir( $Dir, 1 );

                  $Count = 0;

                  foreach( $Magazines as $Num => $Mag )
                  {

                      if( strtolower( substr( $Mag, -3 ) ) == 'pdf' )
                      {

                          $Revistas[$Count] = array('Acta '.str_replace ("_", " ", substr( $Mag, 0, -4 ) ), $Dir . '/' . $Mag );

                          $Count++;

                      }

                  }

          ?>
          <div class="row revistas vertical-list">
            <div class="col-md-6 col-sm-12">
              <ul class="revistas-horiz">
                <?php for($I=0;$I<count($Revistas);$I=$I+2){ ?>
                  <a href="<?php echo $Revistas[$I][1] ?> " target="_blank"><li><span><?php echo $Revistas[$I][0]; ?></span><img src="../../../skin/images/body/icons/pdficon.png" alt=""></li></a>
                <?php } ?>
              </ul>
            </div>
            <div class="col-md-6 col-sm-12">
              <ul class="revistas-horiz">
                <?php for($I=1;$I<count($Revistas);$I=$I+2){ ?>
                  <a href="<?php echo $Revistas[$I][1] ?> " target="_blank"><li><span><?php echo $Revistas[$I][0]; ?></span><img src="../../../skin/images/body/icons/pdficon.png" alt=""></li></a>
                <?php } ?>
              </ul>
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
