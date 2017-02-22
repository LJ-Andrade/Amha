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
          <a href="socios_activos.php"><li class="floatDD <?php echo $currentPage == 'socios_activos.php' ? 'active' : ''; ?>">Socios Activos</li></a>
          <a href="socios_adherentes.php"><li class="floatDD <?php echo $currentPage == 'socios_adherentes.php' ? 'active' : ''; ?>">Socios Adherentes</li></a>
          <a href="socios_honorarios.php"><li class="floatDD <?php echo $currentPage == 'socios_honorarios.php' ? 'active' : ''; ?>">Socios Honorario</li></a>
          <a href="socios_benefactores.php"><li class="floatDD <?php echo $currentPage == 'socios_benefactores.php' ? 'active' : ''; ?>">Socios Benefactores</li></a>
        </ul>
      <a href='socios_colegio.php'><li class="<?php echo $currentPage == 'socios_colegio.php' ? 'active' : ''; ?>">Colegio de m&eacute;dicos home&oacute;patas</li></a>
      <a href='socios_carrera_docente.php'><li class="<?php echo $currentPage == 'socios_carrera_docente.php' ? 'active' : ''; ?>">Ingreso a la carrera docente</li></a>
      <a href='socios_grupodeestudio.php'><li class="<?php echo $currentPage == 'socios_grupodeestudio.php' ? 'active' : ''; ?>">Grupo de estudio</li></a>
      <a href='tienda_online.php'><li class="<?php echo $currentPage == 'tienda_online.php' ? 'active' : ''; ?>">Tienda Online</li></a>
      <a href='socios_login.php?view=socios'><li class="<?php echo $currentPage == 'socios_login.php' ? 'active' : ''; ?>">Revista Homeopat&iacute;a</li></a>
      <a href='revistapt.php?view=socios'><li class="<?php echo $currentPage == 'alumnos_revistapt.php' ? 'active' : ''; ?>">Revista Homeopat&iacute;a para todos</li></a>
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
          <a href="socios_activos.php"><li class="floatDD <?php echo $currentPage == 'socios_activos.php' ? 'active' : ''; ?>">Socios Activos</a></li>
          <a href="socios_adherentes.php"><li class="floatDD <?php echo $currentPage == 'socios_adherentes.php' ? 'active' : ''; ?>">Socios Adherentes</a></li>
          <a href="socios_honorarios.php"><li class="floatDD <?php echo $currentPage == 'socios_honorarios.php' ? 'active' : ''; ?>">Socios Honorario</a></li>
          <a href="socios_benefactores.php"><li class="floatDD <?php echo $currentPage == 'socios_benefactores.php' ? 'active' : ''; ?>">Socios Benefactores</a></li>
        </ul>
      <a href='socios_colegio.php'><li class="<?php echo $currentPage == 'socios_colegio.php' ? 'active' : ''; ?>">Colegio de m&eacute;dicos home&oacute;patas</li></a>
      <a href='socios_carrera_docente.php'><li class="<?php echo $currentPage == 'socios_carrera_docente.php' ? 'active' : ''; ?>">Ingreso a la carrera docente</li></a>
      <a href='socios_grupodeestudio.php'><li class="<?php echo $currentPage == 'socios_grupodeestudio.php' ? 'active' : ''; ?>">Grupo de estudio</li></a>
      <a href='tienda_online.php'><li class="<?php echo $currentPage == 'tienda_online.php' ? 'active' : ''; ?>">Tienda Online</li></a>
      <a href='socios_login.php?view=socios'><li class="<?php echo $currentPage == 'socios_login.php' ? 'active' : ''; ?>">Revista Homeopat&iacute;a</li></a>
      <a href='revistapt.php?view=socios'><li class="<?php echo $currentPage == 'alumnos_revistapt.php' ? 'active' : ''; ?>">Revista Homeopat&iacute;a para todos</li></a>
      <a href='http://www.famha.org.ar/' target="_blank"><li>F.A.M.H.A.</li></a>
    </ul>
  </div>
</div>
<!-- /Mobile -->
