<!-- Large and Medium Screens -->
<div class="col-lg-2 col-md-3 col-xs-12 floatMenu1 minWidthFloatMenu">
  <div class="leftFloatMenu">
    <ul>
      <li class="
      <?php
        switch ($currentPage) {
          case 'carreras.php';
            echo 'active';
            break;
          case 'carrera_de_medicina_homeopatica.php';
            echo 'active';
            break;
          case 'carrera_de_odontoestomatologia_homeopatica.php';
            echo 'active';
            break;
          case 'carrera_de_veterinaria_homeopatica.php';
            echo 'active';
            break;
          case 'carrera_de_farmacia_homeopatica.php';
            echo 'active';
            break;

          default:
            '';
            break;
          } ?>
          "><a href="carreras.php">Carreras</a>
        <span id="openDDcarreras" class="leftFloatDDArrow"><i class="fa fa-angle-double-down"></i></span>
      </li>
        <ul class="leftDDcarreras animated fadeIn Hidden">
          <a href="carrera_de_medicina_homeopatica.php"><li class="floatDD <?php echo $currentPage == 'carrera_de_medicina_homeopatica.php' ? 'active' : ''; ?>">Carrera de Medicina Homeop&aacute;tica</li></a>
          <a href="carrera_de_odontoestomatologia_homeopatica.php"><li class="floatDD <?php echo $currentPage == 'carrera_de_odontoestomatologia_homeopatica.php' ? 'active' : ''; ?>">Carrera de Odontoestomatología Homeop&aacute;tica</li></a>
          <a href="carrera_de_veterinaria_homeopatica.php"><li class="floatDD <?php echo $currentPage == 'carrera_de_veterinaria_homeopatica.php' ? 'active' : ''; ?>">Carrera de Veterinaria Homeop&aacute;tica</li></a>
          <a href="carrera_de_farmacia_homeopatica.php"><li class="floatDD <?php echo $currentPage == 'carrera_de_farmacia_homeopatica.php' ? 'active' : ''; ?>">Carrera de Farmacia Homeop&aacute;tica</li></a>
        </ul>
      <li class="
      <?php
        switch ($currentPage) {
          case 'cursos.php';
            echo 'active';
            break;
          case 'carrera_de_medicina_homeopatica_3_en_1.php';
            echo 'active';
            break;
          case 'practica_homeopatica_para_alumnos_libres.php';
            echo 'active';
            break;
          case 'cursos_deteoriapractica.php';
            echo 'active';
            break;
          case 'odontoestomatologia_veterinaria_homeopatica.php';
            echo 'active';
            break;
          case 'cursos_libres_para_alumnos_y_socios.php';
            echo 'active';
            break;
          case 'odontoestomatologia_y_veterinaria_homeopatica_2_en_1.php';
            echo 'active';
            break;

          default:
            '';
            break;
          } ?>
      "><a href="cursos.php">Cursos</a>
        <span id="openDDcursos" class="leftFloatDDArrow"><i class="fa fa-angle-double-down"></i></span>
      </li>
        <ul class="leftDDcursos animated fadeIn Hidden">
          <a href="carrera_de_medicina_homeopatica_3_en_1.php"><li class="floatDD <?php echo $currentPage == 'carrera_de_medicina_homeopatica_3_en_1.php' ? 'active' : ''; ?>">Carrera de Medicina Homeop&aacute;tica 3 en 1</li></a>
          <a href="practica_homeopatica_para_alumnos_libres.php"><li class="floatDD <?php echo $currentPage == 'practica_homeopatica_para_alumnos_libres.php' ? 'active' : ''; ?>">Curso de pr&aacute;ctica Homeop&aacute;tica para alumnos libres</li></a>
          <!--<a href="cursos_deteoriapractica.php"><li class="floatDD <?php echo $currentPage == 'cursos_deteoriapractica.php' ? 'active' : ''; ?>">"De La Teor&iacute;a A La Pr&aacute;ctica" Curso Superior 2017</li></a>-->
          <a href="odontoestomatologia_veterinaria_homeopatica.php"><li class="floatDD <?php echo $currentPage == 'odontoestomatologia_veterinaria_homeopatica.php' ? 'active' : ''; ?>">Curso Superior de Perfeccionamiento Continuo en Medicina, Odontoestomatolog&iacute;a y Veterinaria Homeop&aacute;tica</li></a>
          <a href="cursos_libres_para_alumnos_y_socios.php"><li class="floatDD <?php echo $currentPage == 'cursos_libres_para_alumnos_y_socios.php' ? 'active' : ''; ?>">Cursos libres para alumnos y socios</li></a>
          <a href="odontoestomatologia_y_veterinaria_homeopatica_2_en_1.php"><li class="floatDD <?php echo $currentPage == 'odontoestomatologia_y_veterinaria_homeopatica_2_en_1.php' ? 'active' : ''; ?>">Carreras de odontoestomatolog&iacute;a y veterinaria homeop&aacute;tica 2 en 1</li></a>
        </ul>
      <a href="formulario_preinscripcion.php"><li class="<?php echo $currentPage == 'formulario_preinscripcion.php' ? 'active' : ''; ?>">Formulario de Pre-inscripci&oacute;n</li></a>
      <a href="cursos_ateneos.php"><li class="<?php echo $currentPage == 'cursos_ateneos.php' ? 'active' : ''; ?>">Ateneos</li></a>
      <a href="cursos_grupos_de_estudio.php"><li class="<?php echo $currentPage == 'cursos_grupos_de_estudio.php' ? 'active' : ''; ?>">Grupos de Estudio</li></a>
      <a href="cursos_beneficios.php"><li class="<?php echo $currentPage == 'cursos_beneficios.php' ? 'active' : ''; ?>">Beneficios para el aprendizaje</li></a>
      <a href="cursos_informacion.php"><li class="<?php echo $currentPage == 'cursos_informacion.php' ? 'active' : ''; ?>">Informaci&oacute;n para el Graduado</li></a>
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
          case 'carreras.php';
            echo 'active';
            break;
          case 'carrera_de_medicina_homeopatica.php';
            echo 'active';
            break;
          case 'carrera_de_odontoestomatologia_homeopatica.php';
            echo 'active';
            break;
          case 'carrera_de_veterinaria_homeopatica.php';
            echo 'active';
            break;
          case 'carrera_de_farmacia_homeopatica.php';
            echo 'active';
            break;

          default:
            '';
            break;
          } ?>
          "><a href="carreras.php">Carreras</a>
        <span id="openDDcarreras2" class="leftFloatDDArrow"><i class="fa fa-angle-double-down"></i></span>
      </li>
        <ul class="leftDDcarreras animated fadeIn Hidden">
          <a href="carrera_de_medicina_homeopatica.php"><li class="floatDD <?php echo $currentPage == 'carrera_de_medicina_homeopatica.php' ? 'active' : ''; ?>">Carrera de Medicina Homeop&aacute;tica</li></a>
          <a href="carrera_de_odontoestomatologia_homeopatica.php"><li class="floatDD <?php echo $currentPage == 'carrera_de_odontoestomatologia_homeopatica.php' ? 'active' : ''; ?>">Carrera de Odontoestomatología Homeop&aacute;tica</li></a>
          <a href="carrera_de_veterinaria_homeopatica.php"><li class="floatDD <?php echo $currentPage == 'carrera_de_veterinaria_homeopatica.php' ? 'active' : ''; ?>">Carrera de Veterinaria Homeop&aacute;tica</li></a>
          <a href="carrera_de_farmacia_homeopatica.php"><li class="floatDD <?php echo $currentPage == 'carrera_de_farmacia_homeopatica.php' ? 'active' : ''; ?>">Carrera de Farmacia Homeop&aacute;tica</li></a>
        </ul>
      <li class="
      <?php
        switch ($currentPage) {
          case 'cursos.php';
            echo 'active';
            break;
          case 'carrera_de_medicina_homeopatica_3_en_1.php';
            echo 'active';
            break;
          case 'practica_homeopatica_para_alumnos_libres.php';
            echo 'active';
            break;
          case 'odontoestomatologia_veterinaria_homeopatica.php';
            echo 'active';
            break;
          case 'cursos_libres_para_alumnos_y_socios.php';
            echo 'active';
            break;
          case 'odontoestomatologia_y_veterinaria_homeopatica_2_en_1.php';
            echo 'active';
            break;

          default:
            '';
            break;
          } ?>
      "><a href="cursos.php">Cursos</a>
        <span id="openDDcursos2" class="leftFloatDDArrow"><i class="fa fa-angle-double-down"></i></span>
      </li>
        <ul class="leftDDcursos animated fadeIn Hidden">
          <a href="carrera_de_medicina_homeopatica_3_en_1.php"><li class="floatDD <?php echo $currentPage == 'carrera_de_medicina_homeopatica_3_en_1.php' ? 'active' : ''; ?>">Carrera de Medicina Homeop&aacute;tica 3 en 1</li></a>
          <a href="practica_homeopatica_para_alumnos_libres.php"><li class="floatDD <?php echo $currentPage == 'practica_homeopatica_para_alumnos_libres.php' ? 'active' : ''; ?>">Curso de pr&aacute;ctica Homeop&aacute;tica para alumnos libres</li></a>
          <a href="odontoestomatologia_veterinaria_homeopatica.php"><li class="floatDD <?php echo $currentPage == 'odontoestomatologia_veterinaria_homeopatica.php' ? 'active' : ''; ?>">Curso Superior de Perfeccionamiento Continuo en Medicina, Odontoestomatolog&iacute;a y Veterinaria Homeop&aacute;tica</li></a>
          <a href="cursos_libres_para_alumnos_y_socios.php"><li class="floatDD <?php echo $currentPage == 'cursos_libres_para_alumnos_y_socios.php' ? 'active' : ''; ?>">Cursos libres para alumnos y socios</li></a>
          <a href="odontoestomatologia_y_veterinaria_homeopatica_2_en_1.php"><li class="floatDD <?php echo $currentPage == 'odontoestomatologia_y_veterinaria_homeopatica_2_en_1.php' ? 'active' : ''; ?>">Carreras de odontoestomatolog&iacute;a y veterinaria homeop&aacute;tica 2 en 1</li></a>
        </ul>
      <a href="formulario_preinscripcion.php"><li class="<?php echo $currentPage == 'formulario_preinscripcion.php' ? 'active' : ''; ?>">Formulario de Pre-inscripci&oacute;n</li></a>
      <a href="cursos_ateneos.php"><li class="<?php echo $currentPage == 'cursos_ateneos.php' ? 'active' : ''; ?>">Ateneos</li></a>
      <a href="cursos_grupos_de_estudio.php"><li class="<?php echo $currentPage == 'cursos_grupos_de_estudio.php' ? 'active' : ''; ?>">Grupos de Estudio</li></a>
      <a href="cursos_beneficios.php"><li class="<?php echo $currentPage == 'cursos_beneficios.php' ? 'active' : ''; ?>">Beneficios para el aprendizaje</li></a>
      <a href="cursos_informacion.php"><li class="<?php echo $currentPage == 'cursos_informacion.php' ? 'active' : ''; ?>">Informaci&oacute;n para el Graduado</li></a>
    </ul>
  </div>
</div>
<!-- /Mobile -->
