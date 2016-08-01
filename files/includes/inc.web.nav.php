<?php
  $url = (empty($_SERVER['HTTPS']) ? 'http://' : 'https://').$_SERVER['SERVER_NAME'].$_SERVER['REQUEST_URI'];
  $parts = parse_url($url);
  $str = $parts['scheme'].'://'.$parts['host'].$parts['path'];
  $currentPage = basename($str);
?>

<!-- TOP BAR -->
<!-- <div id="topBar" class="container topBar">
  <div class="container">
    <nav class="navbar">
      <ul class="nav navbar-nav">
        <li class="nav-item active">
          <div class="input-group topSearch">
            <span class="input-group-addon" id="basic-addon1"><i class="fa fa-search"></i></span>
            <input type="text" class="form-control" placeholder="Buscar..." aria-describedby="basic-addon1">
          </div>
        </li>
      </ul>
      <form id="TopOptions" class="form-inline pull-xs-right">
        <div class="row topOptions">
          <button type="button" name="button" class="btn mainBtn">Ingresar</button>
          <button type="button" name="button" class="btn mainBtn">Registro</button>
        </div>
      </form>
    </nav>
  </div>
</div> -->

<!-- TOP HEADER -->
<div id="topHead" class="container topHead">
  <div class="container">
    <div class="col-md-12 container topInner">
      <div class="col-md-3 col-sm-3 col-xs-12 topLogo">
        <img src="../../../skin/images/body/logos/weblogo.png" alt="" />
      </div>
      <div class="col-md-5 col-sm-10 col-xs-12 topTitles">
        <span class="topName">ASOCIACI&Oacute;N M&Eacute;DICA HOMEOP&Aacute;TICA ARGENTINA</span><br>
        <span class="topSlogan">FUNDADA EN 1933 - LA PRIMER ESCUELA HOMEOP&Aacute;TICA EN LA ARGENTINA Y SUDAM&Eacute;RICA</span>
        <span class="topAddressMobile"><hr>  <p>Turnos: <b>4827-2907</b>  | Administraci&oacute;n: <b>4826-5852</b>  | Escuela, Fax: <b>4827-2907</b><br>
        <b>Juncal 2884 </b>- Buenos Aires - Argentina | <a href="mailto:info@amha.org.ar">Mail: <b>info@amha.org.ar</b></a></p>
        </span>
      </div>
      <div class="col-md-3 col-sm-6 col-xs-12 topDatos">
        <p>Turnos: <b>4827-2907</b> <br>
        Administraci&oacute;n: <b>4826-5852</b> <br>
        Escuela, Fax. <b>4827-2907</b></p>
        <p><b>Juncal 2884 </b>| Buenos Aires | Argentina</p>
        <p><a href="mailto:info@amha.org.ar">info@amha.org.ar</a></p>
      </div>
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
        </ul>
      </li>
      <li class="<?php echo $currentPage == 'socios.php' ? 'active' : ''; ?>"><a href='socios.php'>SOCIOS</a></li>
      <li class="<?php echo $currentPage == 'alumnos.php' ? 'active' : ''; ?>"><a href='alumnos.php'>ALUMNOS</a>
        <ul>
          <li><a href='bibliografia.php'>Acceso a Campus Virtual</a></li>
          <li><a href='bibliografia.php'>Venta on line de libros</a></li>
          <li><a href='alumnos_revistapt.php'>Revista Homeopat&iacute;a para todos</a></li>
          <li><a href='alumnos_revista.php'>Revista Homeopat&iacute;a</a></li>
          <li><a href='alumnos_biblioteca.php'>Biblioteca</a></li>
        </ul>
      </li>
      <li class=" <?php echo $currentPage == 'cursos.php' ? 'active' : ''; ?>"><a href='cursos.php'>CURSOS</a>
        <ul>
          <li><a href="#">Nuevos Cursos</a></li>
          <li><a href="#">Beneficios</a></li>
          <li><a href="#">Medicina Homeop&aacute;tica</a></li>
          <li><a href="#">Odontoestomatolog&iacute;a Homeop&aacute;tica</a></li>
          <li><a href="#">Veterinaria Homeop&aacute;tica</a></li>
          <li><a href="#">Farmacia Homeop&aacute;tica</a></li>
          <li><a href="#">Medicina Homeop&aacute;tica 3 en 1</a></li>
          <li><a href="#">Odontoestomatolog&iacute;a y Veterinaria Homeop&aacute;tica</a></li>
          <li><a href="#">Pr&aacute;ctica Homeop&aacute;tica P/ Alumnos Libres</a></li>
          <li><a href="#">Curso Superior de Perfeccionamiento</a></li>
          <li><a href="#">Cursos Libres para Socios y Alumnos</a></li>
          <li><a href="#">Ateneos Mensuales</a></li>
          <li><a href="#">Grupos de Estudio</a></li>
          <li><a href="#">Informaci&oacute;n &uacute;til Graduados 2016</a></li>
          <li><a href="#">Formularios de pre-inscripci&oacute;n</a></li>
        </ul>
      </li>
      <li class="<?php echo $currentPage == 'novedades.php' ? 'active' : ''; ?>"><a href='novedades.php'>NOVEDADES</a></li>
      <li class="<?php echo $currentPage == 'agenda.php' ? 'active' : ''; ?>"><a href='agenda.php'>AGENDA</a>
        <ul>
          <li class="<?php echo $currentPage == 'consultorios.php' ? 'active' : ''; ?>"><a href='consultorios.php'>CONSULTORIOS</a></li>
          <li class="<?php echo $currentPage == 'farmacias.php' ? 'active' : ''; ?>"><a href='farmacias.php'>FARMACIAS</a></li>
        </ul>
      </li>
      <li><a href='contacto.php'>CONTACTO</a></li>
    </ul>
  </nav>
</div>
