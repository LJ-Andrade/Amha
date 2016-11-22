<?php
  // To echo class 'active' in links
  $url = (empty($_SERVER['HTTPS']) ? 'http://' : 'https://').$_SERVER['SERVER_NAME'].$_SERVER['REQUEST_URI'];
  $parts = parse_url($url);
  $str = $parts['scheme'].'://'.$parts['host'].$parts['path'];
  $currentPage = basename($str);
?>

<!-- TOP HEADER -->
<div id="topHead" class="container topHead">
  <div class="container">
    <div class="col-md-12 container topInner">
      <div class="col-md-4 col-sm-3 col-xs-12 topLogo">
        <a href="index.php"><img src="../../../skin/images/body/logos/weblogo2.png" alt="" /></a>
      </div>
      <div class="col-md-8 col-sm-9 col-xs-12 topTitles">
        <span class="topName">ASOCIACI&Oacute;N M&Eacute;DICA HOMEOP&Aacute;TICA ARGENTINA</span><br>
        <span class="topSlogan">FUNDADA EN 1933 - PRIMERA ESCUELA HOMEOP&Aacute;TICA EN LA ARGENTINA Y SUDAM&Eacute;RICA</span>
        <!-- <span class="topAddressMobile"><hr> Tel&eacute;fono: <b>4826-5852</b> | Escuela: <b>4827-2907</b></b><br>
          Consultorios: <b>4963-1841</b> | <b>4962-6812</b><br>

        <b>Juncal 2884 </b>- Buenos Aires - Argentina
        </span> -->
      </div>
      <!-- <div class="col-md-3 col-sm-6 col-xs-12 topDatos">
        <p>Tel&eacute;fono: <b>4826-5852</b> <br>
        Escuela: <b>4827-2907</b> <br>
        Consultorios: <b>4963-1841</b> | <b>4962-6812</b><br>
        <p><b>Juncal 2884 </b>| Buenos Aires | Argentina</p>
      </div> -->
    </div>
  </div>
</div><!-- /TOP HEADER -->

<div class="nav">
  <nav id='cssmenu'>
    <!-- <div class="logoNav"><a href="index.html"><p>Asociaci&oacute;n M&eacute;dica Homeop&aacute;tica Argentina</p></a></div> -->
    <div id="head-mobile"></div>
    <div class="button"></div>
    <ul>
      <li class="<?php echo $currentPage == 'index.php' ? 'active' : ''; ?>"><a href='index.php'>INICIO</a></li>
      <li class="<?php echo $currentPage == 'amha.php' ? 'active' : ''; ?>"><a href='amha.php'>AMHA</a>
        <ul>
          <li><a href='amha_historia.php'>Historia</a></li>
          <li><a href='amha_autoridades.php'>Autoridades</a></li>
          <li><a href='amha_representantes.php'>Representantes</a></li>
          <li><a href='amha_homeopatia.php'>Homeopat&iacute;a</a></li>
        </ul>
      </li>
      <li class="<?php echo $currentPage == 'socios.php' ? 'active' : ''; ?>"><a href='socios.php'>SOCIOS</a>
        <ul>
          <li><a href='socios_requisbenef.php'>Socios: Requisitos y beneficios</a>
            <ul>
              <li><a href='socios_activos.php'>Socios Activos</a></li>
              <li><a href='socios_adherentes.php'>Socios Adherentes</a></li>
              <li><a href='socios_honorarios.php'>Socios Honorarios</a></li>
              <li><a href='socios_benefactores.php'>Socios Benefactores</a></li>
            </ul>
          </li>
          <li><a href='socios_colegio.php'>Colegio de m&eacute;dicos home&oacute;patas</a></li>
          <li><a href='socios_carrera_docente.php'>Ingreso a la Carrera Docente</a></li>
          <li><a href='socios_grupodeestudio.php'>Grupo de estudio</a></li>
          <li><a href='tienda_online.php'>Tienda Online</a></li>
          <li><a href='socios_login.php?view=socios'>Revista Homeopat&iacute;a</a></li>
          <li><a href='revistapt.php?view=socios'>Revista Homeopat&iacute;a para todos</a></li>
          <li><a href='http://www.famha.org.ar/' target="_blank">F.A.M.H.A.</a></li>
        </ul>
      </li>
      <li class="<?php echo $currentPage == 'alumnos.php' ? 'active' : ''; ?>"><a href='alumnos.php'>ALUMNOS</a>
        <ul>
          <li><a href='http://www.escuelaamha.com.ar/files/modules/login/login.php' target="_blank">Acceso a Campus Virtual</a></li>
          <li><a href='tienda_online.php'>Venta on line de libros</a></li>
          <li><a href='revistapt.php'>Revista Homeopat&iacute;a para todos</a></li>
          <li><a href='socios_login.php'>Revista Homeopat&iacute;a</a></li>
          <li><a href='alumnos_biblioteca.php'>Biblioteca</a></li>
        </ul>
      </li>
      <li class=" <?php echo $currentPage == 'cursos_y_carreras.php' ? 'active' : ''; ?>"><a href='cursos_y_carreras.php'>CURSOS Y CARRERAS</a>
        <ul>
        <li><a href='carreras.php'>Carreras</a>
          <ul>
            <li><a href='carrera_de_medicina_homeopatica.php'>Carrera de Medicina Homeop&aacute;tica</a></li>
            <li><a href='carrera_de_odontoestomatologia_homeopatica.php'>Carrera de Odontoestomatolog&iacute;a Homeop&aacute;tica</a></li>
            <li><a href='carrera_de_veterinaria_homeopatica.php'>Carrera de Veterinaria Homeop&aacute;tica</a></li>
            <li><a href='carrera_de_farmacia_homeopatica.php'>Carrera de Farmacia Homeop&aacute;tica</a></li>
          </ul>
        </li>
        <li><a href='cursos.php'>Cursos</a>
          <ul>
            <li><a href='carrera_de_medicina_homeopatica_3_en_1.php'>Carreras de Medicina Homeop&aacute;tica 3 en 1</a></li>
            <li><a href='practica_homeopatica_para_alumnos_libres.php'>Pr&aacute;ctica Homeop&aacute;tica para alumnos libres</a></li>
            <!-- <li><a href='practica_homeopatica_para_alumnos_libres2.php'>Pr&aacute;ctica Homeop&aacute;tica para alumnos libres</a></li> -->
            <li class="longLink"><a href='odontoestomatologia_veterinaria_homeopatica.php'>Perfeccionamiento Continuo en Medicina, Odontoestomatolog&iacute;a y Veterinaria Homeop&aacute;tica</a></li>
            <li><a href='cursos_libres_para_alumnos_y_socios.php'>Cursos libres para alumnos y socios</a></li>
            <li class="longLink"><a href='cursos_curso6.php'>Odontoestomatolog&iacute;a y veterinaria homeop&aacute;tica 2 en 1</a></li>
          </ul>
        </li>
          <li><a href="formulario_preinscripcion.php">Formulario de pre-inscripci&oacute;n</a></li>
          <li><a href="cursos_ateneos.php">Ateneos</a></li>
          <li><a href="cursos_grupos_de_estudio.php">Grupos de estudio</a></li>
          <li><a href="cursos_beneficios.php">Beneficios para el aprendizaje</a></li>
          <li><a href="cursos_informacion.php">Informaci&oacute;n para graduados</a></li>
        </ul>
      </li>
      <li class="<?php echo $currentPage == 'novedades.php' ? 'active' : ''; ?>"><a href='novedades.php'>NOVEDADES</a></li>
      <li class="<?php echo $currentPage == 'agenda.php' ? 'active' : ''; ?>"><a href='agenda.php'>AGENDA</a>
        <ul>
          <li class=""><a href='consultorios.php'>CONSULTORIOS</a></li>
          <li class=""><a href='farmacias.php'>FARMACIAS</a></li>
        </ul>
      </li>
      <li><a href='contacto.php'>CONTACTO</a></li>
    </ul>
  </nav>
</div>
