<?php
  session_start();
  session_name( 'amhawebsite' );

  if( !$_SESSION[ 'congreso_user' ] )
  {

      header( "Location: congreso_login.php?msg=invalid" );
      die();

  }

  function replacePDFsNames( $Dir, $ArrayMags )
  {

      $PDFs = scandir( $Dir, SCANDIR_SORT_ASCENDING );

      foreach( $PDFs as $PDF )
      {

          if( strtolower( substr( $PDF, -4 ) ) == '.pdf' )
          {

              $New = $Dir . '/' . changeFileName( $PDF );

              $Old = $Dir . '/' . $PDF;

              if( file_exists( $Old ) )
              {

                  copy( $Old, $New );

                  if( file_exists( $New ) )
                  {

                      // unlink( $Old );

                  }

              }

          }

      }

  }

  function changeFileName( $Name )
  {

      $Name = strtolower( $Name );
      $Name = str_replace ( ',', '', $Name );
      $Name = str_replace ( ';', '', $Name );
      $Name = str_replace ( '?', '', $Name );
      $Name = str_replace ( '¿', '', $Name );
      $Name = str_replace ( ' ', '_', $Name );
      $Name = str_replace ( 'Á', 'A', $Name );
      $Name = str_replace ( 'É', 'E', $Name );
      $Name = str_replace ( 'Í', 'I', $Name );
      $Name = str_replace ( 'Ó', 'O', $Name );
      $Name = str_replace ( 'Ú', 'U', $Name );
      $Name = str_replace ( 'Ñ', 'N', $Name );
      $Name = str_replace ( 'á', 'A', $Name );
      $Name = str_replace ( 'é', 'E', $Name );
      $Name = str_replace ( 'í', 'I', $Name );
      $Name = str_replace ( 'ó', 'O', $Name );
      $Name = str_replace ( 'ú', 'U', $Name );
      $Name = str_replace ( 'ñ', 'N', $Name );
      $Name = strtolower( $Name );

      return $Name;

  }




  function OrderedMagazines( $Dir, $entities = true )
  {

      $ArrayMags[ 1 ] = '1 - <span class="MagazineName">ABORDAJE INTEGRAL DE TRASTORNOS DEL ESPECTRO AUTISTA Y OTROS TRASTORNOS DEL NEURODESARROLLO.</span><br>Dra.Varela Graciela Estela (EMHA)';
      $ArrayMags[ 2 ] = '2 - <span class="MagazineName">ALGUNAS DISQUISICIONES TERAPÉUTICAS EN EL TRATAMIENTO DE PACIENTES CON CÁNCER Y OTRAS PATOLOGÍAS GRAVES EN NUESTRO MEDIO - ACERCA DE UN CASO</span><br>Dra. Silvia Liliana Aschkar (AMHA)';
      $ArrayMags[ 3 ] = '3 - <span class="MagazineName">ANCIANIDAD, TRAUMA y SEMEJANZA. ÁRNICA COMO REMEDIO DEL GENIO EPIDÉMICO</span><br>Dr. Andrés R. Carmody (AMHA)';
      $ArrayMags[ 4 ] = '4 - <span class="MagazineName">APROXIMACIÓN AL VITALISMO, BASE DE TODA FUNDAMENTACIÓN HOMEOPÁTICA</span><br>Dr. Juan Carlos Pellegrino (AMHA)';
      $ArrayMags[ 5 ] = '5 - <span class="MagazineName">ASÍ PASAN LOS AÑOS - GERIATRÍA y HOMEOPATÍA</span><br>Juan Amadeo Roa (CEMHHCba)';
      $ArrayMags[ 6 ] = '6 - <span class="MagazineName">BARYTA PHOSPHÓRICA</span><br>Dr. O. Mariano Ortolani (AMHA) ';
      $ArrayMags[ 7 ] = '7 - <span class="MagazineName">CASOS CLÍNICOS "ENFERMEDAD PERIODONTAL" - TRATADOS EN LA CÁTEDRA DE ODONTOLOGÍA Y ESTOMATOLOGÍA HOMEOPÁTICA</span><br>Odontóloga Galán Marina, Odontóloga Pingitore Dana (AMHA)';
      $ArrayMags[ 8 ] = '8 - <span class="MagazineName">CASO CLÍNICO - MANIFESTACIONES ESCLERODERMIA (ENTRE OTRAS)</span><br>Dr. Adolfo Ibáñez (FMHNOA)';
      $ArrayMags[ 9 ] = '9 - <span class="MagazineName">CASO CLÍNICO - VITILIGO HOMEOPATÍA EN UNA ENFERMEDAD DE COMPLEJO TRATAMIENTO</span><br>Dra. Isabel González, Dra. Stella Ramponi (AMHU)';

      $ArrayMags[ 10 ] = '10 - <span class="MagazineName">CYGNUS CYGNUS A TRAVÉS DE LA CLÍNICA</span><br>Dr. Ariel Medina (EMHA)';
      $ArrayMags[ 11 ] = '11 - <span class="MagazineName">EL VITALISMO DE HAHNEMANN</span><br>Dr. Francisco Goldstein Herman (AMHA)';
      $ArrayMags[ 12 ] = '12 - <span class="MagazineName">ENFERMEDADES MENTALES Y ANÍMICAS 1ª PARTE</span><br>Dra. Ana Scopp, Lic. Ines Lorenzo (EMHA)';
      $ArrayMags[ 13 ] = '13 - <span class="MagazineName">ENFERMEDADES MENTALES Y ANÍMICAS - UNA EXPERIENCIA DE 21 AÑOS EN LA EMHA - 2ª PARTE - HUGO, UN CASO DEL CONSULTORIO</span><br>Dra. Ana Scopp (EMHA)';
      $ArrayMags[ 14 ] = '14 - <span class="MagazineName">ESCLARECIMIENTO DE TÉRMINOS REPERTORIALES</span><br>Dr. Angel Oscar Minotti (AMHA)';
      $ArrayMags[ 15 ] = '15 - <span class="MagazineName">ESTUDIO PATOGENÉSICO DE CYGNUS CYGNUS</span><br>Dr. Matías E. Lainz (EMHA)';
      $ArrayMags[ 16 ] = '16 - <span class="MagazineName">EVOLUCIÓN CLÍNICA DE CASOS CON ZIKA TRATADOS CON HOMEOPATÍA.</span><br>Dra. Mayra Riverón Garrote ';
      $ArrayMags[ 17 ] = '17 - <span class="MagazineName">HABLANDO DE LA LEY DE HERING</span><br>Dra. Myriam Cristina Sorbera (CEMHHCba)';
      $ArrayMags[ 18 ] = '18 - <span class="MagazineName">HOMEOPATÍA NO ES UN PARADIGMA - REFLEXIONES DE CONSULTORIO</span><br>Dra. Dolores Marta Astigueta (FMHNOA)';
      $ArrayMags[ 19 ] = '19 - <span class="MagazineName">INTEGRACIÓN DE TÉCNICAS HOMEOPÁTICAS EN ENFERMEDADES CRÓNICAS Y AGUDAS</span><br>Dra. Alicia Esquivel (AMHU)';

      $ArrayMags[ 20 ] = '20 - <span class="MagazineName">JAZMÍN - DOCTRINA - CRITERIOS PARA TRATAMIENTO DESDE EL PUNTO DE VISTA MIASMÁTICO - CASO CLÍNICO.</span><br>Dra. Miriam García de Vallerotto (CEMHHCba)';
      $ArrayMags[ 21 ] = '21 - <span class="MagazineName">LA FORMULA MORBIDA</span><br>Dr. Mario Draiman (AMHA)';
      $ArrayMags[ 22 ] = '22 - <span class="MagazineName">LAS 3 CARAS DE LYCOPODIUM - VISIÓN DEL MEDICAMENTO A TRAVÉS DE LA MIASMÁTICO EN 3 MIEMBROS DE LA MISMA FAMILIA</span><br>Dr. Carlos Corbacho Orosco';
      $ArrayMags[ 23 ] = '23 - <span class="MagazineName">LA SUPRESIÓN HOMEOPÁTICA - UN ENFOQUE CUÁNTICO DESDE LA TERMODINÁMICA</span><br>Dr. Marcelo Candegabe (EMHA)';
      $ArrayMags[ 24 ] = '24 - <span class="MagazineName">LAS VOCES - UN CASO CLÍNICO DE STRAMONIUM</span><br>Dr. Héctor Azaro. Colaborador Dra Marta Arroqui';
      $ArrayMags[ 25 ] = '25 - <span class="MagazineName">MEDICINA MAPUCHE Y HOMEOPATÍA - COINCIDENCIAS Y DIFERENCIA</span><br>Dr. Sergio Castillo Martínez';
      $ArrayMags[ 26 ] = '26 - <span class="MagazineName">MÉTODOS DE DINAMIZACIÓN LÍQUIDOS Y SÓLIDOS</span><br>Dra. Spinelli Paula';
      $ArrayMags[ 27 ] = '27 - <span class="MagazineName">NUEVOS HORIZONTES EN HOMEOPATÍA - AQUA MARINA EN POTENCIAS</span><br>E. Dr. Ewald Finsterbusch';
      $ArrayMags[ 28 ] = '28 - <span class="MagazineName">ONCOLOGÍA - HOMEOPATÍA Y ALGORITMO CANDEGABE - CASO CLÍNICO DE CÁNCER DE MAMA - HEPATOXICIDAD POR QUIMIOTERAPIA.</span><br>Dr. Sebastián La Rosa (EMHA)';
      $ArrayMags[ 29 ] = '29 - <span class="MagazineName">ONCOLOGÍA - HOMEOPATÍA Y ALGORITMO CANDEGABE - CASO CLÍNICO DE CÁNCER DE OVARIO</span><br>Dr. Atilio Xavier Vera Fuentes (EMHA)';

      $ArrayMags[ 30 ] = '30 - <span class="MagazineName">PACIENTE CON SÍNDROME DE SJOEGREN CURADA CON CYGNUS CYGNUS</span><br>Dr. Matías E. Lainz (EMHA)';
      // $ArrayMags[ 31 ] = [ '', '' ];
      $ArrayMags[ 32 ] = '32 - <span class="MagazineName">¿QUÉ NOS PREGUNTAMOS LOS HOMEÓPATAS SOBRE LA PRÁCTICA CLÍNICA DE HAHNEMANN?</span><br>Dra. Med. Ute Fischbach Sabel (AMHB)';
      $ArrayMags[ 33 ] = '33 - <span class="MagazineName">RHOPALURUS JUNCEUS - ESCORPIÓN AZUL</span><br>Dra. Ana María Fernández. Farmaceútica (AMHA)';
      $ArrayMags[ 34 ] = '34 - <span class="MagazineName">SPONGIA TOSTA</span><br>Dra. De Leo Ana María, Dra. Lafont Betina Mariel (EMHA)';
      $ArrayMags[ 35 ] = '35 - <span class="MagazineName">SUSURROS HOMEOPÁTICOS - PARTE I</span><br>Dr. Juan Carlos Salto, Dr. Raúl Osvaldo Asán (CEMHHCba)';
      $ArrayMags[ 36 ] = '36 - <span class="MagazineName">SUSURROS HOMEOPÁTICOS - PARTE II</span><br>Dr. Juan Carlos Salto, Dr. Raúl Osvaldo Asán (CEMHHCba)';
      $ArrayMags[ 37 ] = '37 - <span class="MagazineName">SYPHILINUM SU ESTUDIO DESDE MATERIAS MÉDICAS CLÁSICAS, MATERIA MÉDICA COMPARADA Y AGREGADOS CONFIABLES AL REPERTORIO</span><br>Dr. Ernesto Ibáñez (FMHNOA)';
      $ArrayMags[ 38 ] = '38 - <span class="MagazineName">TRASTORNOS POR ESTRÉS POSTRAUMÁTICO - UNA APROXIMACIÓN DESDE LA VISIÓN HOMEOPÁTICA</span><br>Dra. Laura Svirnovsky y Colaboradores (AMHA)';
      $ArrayMags[ 39 ] = '39 - <span class="MagazineName">UN CASO DE MUTISMO SELECTIVO PATOLOGÍA DEL ESPECTRO AUTISTA CURADO GRACIAS AL ENCUENTRO DE LOS NUEVOS MÉTODOS EN HOMEOPATÍA</span><br>Dra. Graciela Juana Elicegui (EMHA)';

      $ArrayMags[ 40 ] = '40 - <span class="MagazineName">VITALISMO: ¿TIENE FUTURO?</span><br>Dr. Juan Amadeo Roa (CEMHHCba)';
      $ArrayMags[ 41 ] = '41 - <span class="MagazineName">ESCUCHAR EL CUERPO</span><br>Cavalcabue, Verónica, Kent';
      $ArrayMags[ 42 ] = '42 - <span class="MagazineName">ES SU NATURALEZA</span><br>Gonzaga Rodriguez, Cinty Alejandra (TAHOVEP)';
      $ArrayMags[ 43 ] = '43 - <span class="MagazineName">GATOS DESHAUCIADOS</span><br>De Medio, Horacio (AMHA)';
      $ArrayMags[ 44 ] = '44 - <span class="MagazineName">INSUFICIENCIA RENAL AGUDA - SÍNDROME URÉMICO FELINO</span><br>Eizikovits, Ariel Germán Ex Docente (CEMHHCba)';
      $ArrayMags[ 45 ] = '45 - <span class="MagazineName">INSUFICIENCIA RENAL CRÓNICA - LISTADO DE MEDICAMENTOS y RÚBRICAS REPERTORIALES</span><br>Muñoz, Jorge Santiago ( Centro de Estudios Veterinarios Alternativos CEVA)';
      $ArrayMags[ 46 ] = '46 - <span class="MagazineName">UN CASO DE HALIAEETUS LEUCOCEPHALUS EN GATOS</span><br>Dra. Ruscica, María Gabriela (EMHA)';

      // replacePDFsNames( $Dir, $ArrayMags );

      $Magazines = scandir( $Dir, 1 );

      $Revistas = array();

      foreach( $Magazines as $Num => $Mag )
      {

          if( strtolower( substr( $Mag, -3 ) ) == 'pdf' )
          {

              $Separador = strpos( $Mag, '_-_' );

              if( !$Separador )

                  $Separador = strpos( $Mag, ' - ' );

              $ID = intval( substr( $Mag, 0, $Separador ) );

							// if( $entities )
							// {
              //
              // 		$Nombre = htmlentities( str_replace ( '_', ' ', substr( $Mag, 0, -4 ) ) );
              //
							// }else{
              //
							// 		$Nombre = str_replace ( '_', ' ', substr( $Mag, 0, -4 ) );
              //
							// }

              $Nombre = $ArrayMags[ $ID ];

              $Url = $Dir . '/' . $Mag;

              $Revistas[ $ID ] = array( $Nombre, $Url, $Order );

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
  <style>
      .Magazine {margin-bottom:3em;}
      .MagazineName{ font-weight: bold;color:#0275d8!important;}
  </style>
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
          <div class="txC"><a href="../../../skin/files/conferences/actas.rar"><button type="button" class="btn btn-primary" name="button">Descargar todas las actas</button></a></div>
          <br>


          <hr>
          <h3 class="txC">Listado de Actas</h3>
          <hr>

          <br>

					<?php $Revistas = OrderedMagazines( '../../../skin/files/conferences/actas/doctrina' ); if( !empty( $Revistas ) ){?>
          <h4 class="txC"><b><u>DOCTRINA</u></b></h4>
          <br>
          <div class="row revistas">
            <?php foreach($Revistas as $ID => $Revista){?>
              <div class="col-sm-12 Magazine" >
                  <div class="row">
                      <div class="col-sm-2 col-md-1">
                          <a href="<?php echo $Revista[1] ?> " target="_blank"><span><img src="../../../skin/images/body/icons/pdficon.png" alt="" width="50" height="50"></span></a>
                      </div>
                      <div class="col-sm-10 col-md-11" style="padding-top:5px">
                          <a href="<?php echo $Revista[1] ?> " target="_blank"><span><?php echo $Revista[0]; ?></span></a>
                      </div>
                  </div>
              </div>
            <?php } ?>
          </div>
          <br>
          <br>
          <?php } ?>

					<?php $Revistas = OrderedMagazines( '../../../skin/files/conferences/actas/materia_medica' ); if( !empty( $Revistas ) ){?>
          <h4 class="txC"><b><u>MATERIA MÉDICA</u></b></h4>
          <br>
          <div class="row revistas">
            <?php foreach($Revistas as $ID => $Revista){?>
              <div class="col-sm-12 Magazine" >
                  <div class="row">
                      <div class="col-sm-2 col-md-1">
                          <a href="<?php echo $Revista[1] ?> " target="_blank"><span><img src="../../../skin/images/body/icons/pdficon.png" alt="" width="50" height="50"></span></a>
                      </div>
                      <div class="col-sm-10 col-md-11" style="padding-top:5px">
                          <a href="<?php echo $Revista[1] ?> " target="_blank"><span><?php echo $Revista[0]; ?></span></a>
                      </div>
                  </div>
              </div>
            <?php } ?>
          </div>
          <br>
          <br>
          <?php } ?>

					<?php $Revistas = OrderedMagazines( '../../../skin/files/conferences/actas/clinica' ); if( !empty( $Revistas ) ){?>
          <h4 class="txC"><b><u>CLÍNICA</u></b></h4>
          <br>
          <div class="row revistas">
            <?php foreach($Revistas as $ID => $Revista){?>
              <div class="col-sm-12 Magazine" >
                  <div class="row">
                      <div class="col-sm-2 col-md-1">
                          <a href="<?php echo $Revista[1] ?> " target="_blank"><span><img src="../../../skin/images/body/icons/pdficon.png" alt="" width="50" height="50"></span></a>
                      </div>
                      <div class="col-sm-10 col-md-11" style="padding-top:5px">
                          <a href="<?php echo $Revista[1] ?> " target="_blank"><span><?php echo $Revista[0]; ?></span></a>
                      </div>
                  </div>
              </div>
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
              <div class="col-sm-12 Magazine" >
                  <div class="row">
                      <div class="col-sm-2 col-md-1">
                          <a href="<?php echo $Revista[1] ?> " target="_blank"><span><img src="../../../skin/images/body/icons/pdficon.png" alt="" width="50" height="50"></span></a>
                      </div>
                      <div class="col-sm-10 col-md-11" style="padding-top:5px">
                          <a href="<?php echo $Revista[1] ?> " target="_blank"><span><?php echo $Revista[0]; ?></span></a>
                      </div>
                  </div>
              </div>
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
              <div class="col-sm-12 Magazine" >
                  <div class="row">
                      <div class="col-sm-2 col-md-1">
                          <a href="<?php echo $Revista[1] ?> " target="_blank"><span><img src="../../../skin/images/body/icons/pdficon.png" alt="" width="50" height="50"></span></a>
                      </div>
                      <div class="col-sm-10 col-md-11" style="padding-top:5px">
                          <a href="<?php echo $Revista[1] ?> " target="_blank"><span><?php echo $Revista[0]; ?></span></a>
                      </div>
                  </div>
              </div>
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
              <div class="col-sm-12 Magazine" >
                  <div class="row">
                      <div class="col-sm-2 col-md-1">
                          <a href="<?php echo $Revista[1] ?> " target="_blank"><span><img src="../../../skin/images/body/icons/pdficon.png" alt="" width="50" height="50"></span></a>
                      </div>
                      <div class="col-sm-10 col-md-11" style="padding-top:5px">
                          <a href="<?php echo $Revista[1] ?> " target="_blank"><span><?php echo $Revista[0]; ?></span></a>
                      </div>
                  </div>
              </div>
            <?php } ?>
          </div>
          <br>
          <br>
          <?php } ?>

          <?php $Revistas = OrderedMagazines( '../../../skin/files/conferences/actas/farmacia' ); if( !empty( $Revistas ) ){?>
          <h4 class="txC"><b><u>FARMACIA</u></b></h4>
          <br>
          <div class="row revistas">
            <?php foreach($Revistas as $ID => $Revista){?>
              <div class="col-sm-12 Magazine" >
                  <div class="row">
                      <div class="col-sm-2 col-md-1">
                          <a href="<?php echo $Revista[1] ?> " target="_blank"><span><img src="../../../skin/images/body/icons/pdficon.png" alt="" width="50" height="50"></span></a>
                      </div>
                      <div class="col-sm-10 col-md-11" style="padding-top:5px">
                          <a href="<?php echo $Revista[1] ?> " target="_blank"><span><?php echo $Revista[0]; ?></span></a>
                      </div>
                  </div>
              </div>
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
              <div class="col-sm-12 Magazine" >
                  <div class="row">
                      <div class="col-sm-2 col-md-1">
                          <a href="<?php echo $Revista[1] ?> " target="_blank"><span><img src="../../../skin/images/body/icons/pdficon.png" alt="" width="50" height="50"></span></a>
                      </div>
                      <div class="col-sm-10 col-md-11" style="padding-top:5px">
                          <a href="<?php echo $Revista[1] ?> " target="_blank"><span><?php echo $Revista[0]; ?></span></a>
                      </div>
                  </div>
              </div>
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
