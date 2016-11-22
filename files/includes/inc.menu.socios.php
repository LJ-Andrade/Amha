<!-- Large and Medium Screens -->
<div class="col-lg-2 col-md-3 col-xs-12 floatMenu1 minWidthFloatMenu">
  <div class="leftFloatMenu">
    <ul>
      <li class="
      <?php
        switch ($currentPage) {
          case 'socios.php';
            echo 'active';
            break;
          case 'socios_activos.php';
            echo 'active';
            break;
          case 'socios_adherentes.php';
            echo 'active';
            break;
          case 'socios_honorarios.php';
            echo 'active';
            break;
          case 'socios_benefactores.php';
            echo 'active';
            break;

          default:
            '';
            break;
          } ?>
      "><a href='socios_requisbenef.php'>Requisitos y Beneficios</a>
        <span id="openDDsociosBenef" class="leftFloatDDArrow"><i class="fa fa-angle-double-down"></i></span>
      </li>
        <ul class="leftDDSociosBenef Hidden animated fadeIn">
          <li class="floatDD <?php echo $currentPage == 'socios_activos.php' ? 'active' : ''; ?>"><a href="socios_activos.php">Socios Activos</a></li>
          <li class="floatDD <?php echo $currentPage == 'socios_adherentes.php' ? 'active' : ''; ?>"><a href="socios_adherentes.php">Socios Adherentes</a></li>
          <li class="floatDD <?php echo $currentPage == 'socios_honorarios.php' ? 'active' : ''; ?>"><a href="socios_honorarios.php">Socios Honorario</a></li>
          <li class="floatDD <?php echo $currentPage == 'socios_benefactores.php' ? 'active' : ''; ?>"><a href="socios_benefactores.php">Socios Benefactores</a></li>
        </ul>
      <li class="<?php echo $currentPage == 'socios_colegio.php' ? 'active' : ''; ?>"><a href='socios_colegio.php'>Colegio de m&eacute;dicos home&oacute;patas</a></li>
      <li class="<?php echo $currentPage == 'socios_carrera_docente.php' ? 'active' : ''; ?>"><a href='socios_carrera_docente.php'>Ingreso a la carrera docente</a></li>
      <li class="<?php echo $currentPage == 'socios_grupodeestudio.php' ? 'active' : ''; ?>"><a href='socios_grupodeestudio.php'>Grupo de estudio</a></li>
      <li class="<?php echo $currentPage == 'tienda_online.php' ? 'active' : ''; ?>"><a href='tienda_online.php'>Tienda Online</a></li>
      <li class="<?php echo $currentPage == 'socios_login.php' ? 'active' : ''; ?>"><a href='socios_login.php?view=socios'>Revista Homeopat&iacute;a</a></li>
      <li class="<?php echo $currentPage == 'alumnos_revistapt.php' ? 'active' : ''; ?>"><a href='revistapt.php?view=socios'>Revista Homeopat&iacute;a para todos</a></li>
      <li><a href='http://www.famha.org.ar/' target="_blank">F.A.M.H.A.</a></li>
    </ul>
  </div>
</div>
<!-- / Large and Medium Screens -->
<!-- Mobile -->
<div class="col-lg-2 col-md-3 col-sm-12 col-xs-12 floatMenu2">
  <div class=" leftFloatMenu leftMenuInLine">
    <ul>
      <li class="
      <?php
        switch ($currentPage) {
          case 'socios.php';
            echo 'active';
            break;
          case 'socios_activos.php';
            echo 'active';
            break;
          case 'socios_adherentes.php';
            echo 'active';
            break;
          case 'socios_honorarios.php';
            echo 'active';
            break;
          case 'socios_benefactores.php';
            echo 'active';
            break;

          default:
            '';
            break;
          } ?>
      "><a href='socios_requisbenef.php'>Requisitos y Beneficios</a>
        <span id="openDDsociosBenef2" class="leftFloatDDArrow"><i class="fa fa-angle-double-down"></i></span>
      </li>
        <ul class="leftDDSociosBenef Hidden animated fadeIn">
          <li class="floatDD <?php echo $currentPage == 'socios_activos.php' ? 'active' : ''; ?>"><a href="socios_activos.php">Socios Activos</a></li>
          <li class="floatDD <?php echo $currentPage == 'socios_adherentes.php' ? 'active' : ''; ?>"><a href="socios_adherentes.php">Socios Adherentes</a></li>
          <li class="floatDD <?php echo $currentPage == 'socios_honorarios.php' ? 'active' : ''; ?>"><a href="socios_honorarios.php">Socios Honorario</a></li>
          <li class="floatDD <?php echo $currentPage == 'socios_benefactores.php' ? 'active' : ''; ?>"><a href="socios_benefactores.php">Socios Benefactores</a></li>
        </ul>
      <li class="<?php echo $currentPage == 'socios_colegio.php' ? 'active' : ''; ?>"><a href='socios_colegio.php'>Colegio de m&eacute;dicos home&oacute;patas</a></li>
      <li class="<?php echo $currentPage == 'socios_carrera_docente.php' ? 'active' : ''; ?>"><a href='socios_carrera_docente.php'>Ingreso a la carrera docente</a></li>
      <li class="<?php echo $currentPage == 'socios_grupodeestudio.php' ? 'active' : ''; ?>"><a href='socios_grupodeestudio.php'>Grupo de estudio</a></li>
      <li class="<?php echo $currentPage == 'tienda_online.php' ? 'active' : ''; ?>"><a href='tienda_online.php'>Tienda Online</a></li>
      <li class="<?php echo $currentPage == 'socios_login.php' ? 'active' : ''; ?>"><a href='socios_login.php?view=socios'>Revista Homeopat&iacute;a</a></li>
      <li class="<?php echo $currentPage == 'alumnos_revistapt.php' ? 'active' : ''; ?>"><a href='revistapt.php?view=socios'>Revista Homeopat&iacute;a para todos</a></li>
      <li><a href='http://www.famha.org.ar/' target="_blank">F.A.M.H.A.</a></li>
    </ul>
  </div>
</div>
<!-- /Mobile -->
