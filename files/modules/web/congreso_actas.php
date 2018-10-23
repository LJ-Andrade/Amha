<?php
  session_start();
  session_name( 'amhawebsite' );

  if( !$_SESSION[ 'congreso_user' ] )
  {

      header( "Location: congreso_login.php?msg=invalid" );
      die();

  }

  function OrderedMagazines( $Dir, $entities = true )
  {

      $Magazines = scandir( $Dir, 1 );

      $Revistas = array();

      foreach( $Magazines as $Num => $Mag )
      {

          if( strtolower( substr( $Mag, -3 ) ) == 'pdf' )
          {

              $Separador = strpos( $Mag, ' - ' );

              $ID = substr( $Mag, 0, $Separador );

							if( $entities )
							{

              		$Nombre = htmlentities( str_replace ( '_', ' ', substr( $Mag, 0, -4 ) ) );

							}else{

									$Nombre = str_replace ( '_', ' ', substr( $Mag, 0, -4 ) );

							}

              $Url = $Dir . '/' . $Mag;

              $Revistas[ intval( $ID ) ] = array( $Nombre, $Url, $Order );

          }

      }

      ksort( $Revistas );

      $Order = 1;

      foreach( $Revistas as $Key => $Value )
      {

          $Revistas[ $Key ][ 2 ] = $Order;

          $Order++;

      }

      return $Revistas;

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
            <h1 class="txC">Congreso FAMHA 2018</h1>
            <hr>
            <h3 class="txC">Actas</h3>
            <hr>
          </div>
          <!-- Content -->
          <p class="justify">

            Podrá descargar los trabajos completos presentados en el 12º Congreso FAMHA - 2018. Les recordamos que este acceso estará disponible hasta Febrero de 2018.<br>
            <br>
            La Asociación Médica Homeopática Argentina no se responsabiliza del contenido de los trabajos, los cuales son responsabilidad de los autores.

          </p>

          <br>
          <br>

					<?php $Revistas = OrderedMagazines( '../../../skin/files/conferences/actas/doctrina', false ); if( !empty( $Revistas ) ){?>
          <h4 class="txC"><b><u>DOCTRINA</u></b></h4>
          <br>
          <div class="row revistas">
            <?php foreach($Revistas as $ID => $Revista){?>
              <div class="col-sm-12" >
                  <div class="row">
                      <div class="col-sm-2 col-md-1">
                          <a href="<?php echo $Revista[1] ?> " target="_blank"><span><img src="../../../skin/images/body/icons/pdficon.png" alt="" width="50" height="50"></span></a>
                      </div>
                      <div class="col-sm-10 col-md-11" style="padding-top:5px">
                          <a href="<?php echo $Revista[1] ?> " target="_blank"><span><?php echo $Revista[0]; ?></span></a>
                      </div>
                  </div>
              </div>
              <br>
              <br>
              <br>
            <?php } ?>
          </div>
          <br>
          <br>
          <?php } ?>

					<?php $Revistas = OrderedMagazines( '../../../skin/files/conferences/actas/materia_medica', false ); if( !empty( $Revistas ) ){?>
          <h4 class="txC"><b><u>MATERIA MÉDICA</u></b></h4>
          <br>
          <div class="row revistas">
            <?php foreach($Revistas as $ID => $Revista){?>
              <div class="col-sm-12" >
                  <div class="row">
                      <div class="col-sm-2 col-md-1">
                          <a href="<?php echo $Revista[1] ?> " target="_blank"><span><img src="../../../skin/images/body/icons/pdficon.png" alt="" width="50" height="50"></span></a>
                      </div>
                      <div class="col-sm-10 col-md-11" style="padding-top:5px">
                          <a href="<?php echo $Revista[1] ?> " target="_blank"><span><?php echo $Revista[0]; ?></span></a>
                      </div>
                  </div>
              </div>
              <br>
              <br>
              <br>
            <?php } ?>
          </div>
          <br>
          <br>
          <?php } ?>

					<?php $Revistas = OrderedMagazines( '../../../skin/files/conferences/actas/clinica', false ); if( !empty( $Revistas ) ){?>
          <h4 class="txC"><b><u>CLÍNICA</u></b></h4>
          <br>
          <div class="row revistas">
            <?php foreach($Revistas as $ID => $Revista){?>
              <div class="col-sm-12" >
                  <div class="row">
                      <div class="col-sm-2 col-md-1">
                          <a href="<?php echo $Revista[1] ?> " target="_blank"><span><img src="../../../skin/images/body/icons/pdficon.png" alt="" width="50" height="50"></span></a>
                      </div>
                      <div class="col-sm-10 col-md-11" style="padding-top:5px">
                          <a href="<?php echo $Revista[1] ?> " target="_blank"><span><?php echo $Revista[0]; ?></span></a>
                      </div>
                  </div>
              </div>
              <br>
              <br>
              <br>
            <?php } ?>
          </div>
          <br>
          <br>
          <?php } ?>

          <?php $Revistas = OrderedMagazines( '../../../skin/files/conferences/actas/temas_libres' ); if( !empty( $Revistas ) ){?>
          <h4 class="txC"><b><u>TEMAS LIBRES</u></b></h4>
          <br>
          <div class="row revistas">
            <?php foreach($Revistas as $ID => $Revista){?>
              <div class="col-sm-12" >
                  <div class="row">
                      <div class="col-sm-2 col-md-1">
                          <a href="<?php echo $Revista[1] ?> " target="_blank"><span><img src="../../../skin/images/body/icons/pdficon.png" alt="" width="50" height="50"></span></a>
                      </div>
                      <div class="col-sm-10 col-md-11" style="padding-top:5px">
                          <a href="<?php echo $Revista[1] ?> " target="_blank"><span><?php echo $Revista[0]; ?></span></a>
                      </div>
                  </div>
              </div>
              <br>
              <br>
              <br>
            <?php } ?>
          </div>
          <br>
          <br>
          <?php } ?>

          <?php $Revistas = OrderedMagazines( '../../../skin/files/conferences/actas/patogenesia' ); if( !empty( $Revistas ) ){?>
          <h4 class="txC"><b><u>PATOGENESIA</u></b></h4>
          <br>
          <div class="row revistas">
            <?php foreach($Revistas as $ID => $Revista){?>
              <div class="col-sm-12" >
                  <div class="row">
                      <div class="col-sm-2 col-md-1">
                          <a href="<?php echo $Revista[1] ?> " target="_blank"><span><img src="../../../skin/images/body/icons/pdficon.png" alt="" width="50" height="50"></span></a>
                      </div>
                      <div class="col-sm-10 col-md-11" style="padding-top:5px">
                          <a href="<?php echo $Revista[1] ?> " target="_blank"><span><?php echo $Revista[0]; ?></span></a>
                      </div>
                  </div>
              </div>
              <br>
              <br>
              <br>
            <?php } ?>
          </div>
          <br>
          <br>
          <?php } ?>

          <?php $Revistas = OrderedMagazines( '../../../skin/files/conferences/actas/odontologia' ); if( !empty( $Revistas ) ){?>
          <h4 class="txC"><b><u>ODONTOLOGÍA</u></b></h4>
          <br>
          <div class="row revistas">
            <?php foreach($Revistas as $ID => $Revista){?>
              <div class="col-sm-12" >
                  <div class="row">
                      <div class="col-sm-2 col-md-1">
                          <a href="<?php echo $Revista[1] ?> " target="_blank"><span><img src="../../../skin/images/body/icons/pdficon.png" alt="" width="50" height="50"></span></a>
                      </div>
                      <div class="col-sm-10 col-md-11" style="padding-top:5px">
                          <a href="<?php echo $Revista[1] ?> " target="_blank"><span><?php echo $Revista[0]; ?></span></a>
                      </div>
                  </div>
              </div>
              <br>
              <br>
              <br>
            <?php } ?>
          </div>
          <br>
          <br>
          <?php } ?>

          <?php $Revistas = OrderedMagazines( '../../../skin/files/conferences/actas/farmacia', false ); if( !empty( $Revistas ) ){?>
          <h4 class="txC"><b><u>FARMACIA</u></b></h4>
          <br>
          <div class="row revistas">
            <?php foreach($Revistas as $ID => $Revista){?>
              <div class="col-sm-12" >
                  <div class="row">
                      <div class="col-sm-2 col-md-1">
                          <a href="<?php echo $Revista[1] ?> " target="_blank"><span><img src="../../../skin/images/body/icons/pdficon.png" alt="" width="50" height="50"></span></a>
                      </div>
                      <div class="col-sm-10 col-md-11" style="padding-top:5px">
                          <a href="<?php echo $Revista[1] ?> " target="_blank"><span><?php echo $Revista[0]; ?></span></a>
                      </div>
                  </div>
              </div>
              <br>
              <br>
              <br>
            <?php } ?>
          </div>
          <br>
          <br>
          <?php } ?>

          <?php $Revistas = OrderedMagazines( '../../../skin/files/conferences/actas/veterinaria' ); if( !empty( $Revistas ) ){?>
          <h4 class="txC"><b><u>VETERINARIA</u></b></h4>
          <br>
          <div class="row revistas">
            <?php foreach($Revistas as $ID => $Revista){?>
              <div class="col-sm-12" >
                  <div class="row">
                      <div class="col-sm-2 col-md-1">
                          <a href="<?php echo $Revista[1] ?> " target="_blank"><span><img src="../../../skin/images/body/icons/pdficon.png" alt="" width="50" height="50"></span></a>
                      </div>
                      <div class="col-sm-10 col-md-11" style="padding-top:5px">
                          <a href="<?php echo $Revista[1] ?> " target="_blank"><span><?php echo $Revista[0]; ?></span></a>
                      </div>
                  </div>
              </div>
              <br>
              <br>
              <br>
            <?php } ?>
          </div>
          <br>
          <br>
          <?php } ?>

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
