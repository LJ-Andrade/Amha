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

              <div class="row revistas">
                <ul>
                  <!-- Last Edition -->
                  <li><span class="editionN">Edicion 57</span><br><a href="../../../skin/files/revistapt/revista57.pdf">
                    <span class="lastEdition">&Uacute;ltima edici&oacute;n</span><!-- Add this to show last edition ribbon-->
                    <img src="../../../skin/files/revistapt/revistapt57.jpg" alt="" /></a>
                  </li><!-- Last Edition -->
                  <li><span class="editionN">Edicion 55</span><br><a href="../../../skin/files/revistapt/homeopatia-para-todos-55.pdf">
                    <img src="../../../skin/files/revistapt/revistapt55.jpg" alt="" /></a>
                  </li>
                  <li><span class="editionN">Edicion 53</span><br><a href="../../../skin/files/revistapt/homeopatia-para-todos-53.pdf">
                    <img src="../../../skin/files/revistapt/revistapt53.jpg" alt="" /></a>
                  </li>
                  <li><span class="editionN">Edicion 52</span><br><a href="../../../skin/files/revistapt/homeopatiaparatodos52.pdf">
                    <img src="../../../skin/files/revistapt/tapahomepatiaparatodos52.png" alt="" /></a>
                  </li>
                  <li><span class="editionN">Edicion 51</span><br><a href="../../../skin/files/revistapt/homeopatiaparatodos51.pdf">
                    <img src="../../../skin/files/revistapt/homeopatiaparatodos51.jpg" alt="" /></a>
                  </li>
                  <li><span class="editionN">Edicion 50</span><br><a href="../../../skin/files/revistapt/homeopatiaparatodos50.pdf">
                    <img src="../../../skin/files/revistapt/revistapt50.jpg" alt="" /></a>
                  </li>
                  <li><span class="editionN">Edicion 49</span><br><a href="../../../skin/files/revistapt/homeopatiaparatodos49.pdf">
                    <img src="../../../skin/files/revistapt/revistapt49.jpg" alt="" /></a>
                  </li>
                  <li><span class="editionN">Edicion 48</span><br><a href="../../../skin/files/revistapt/homeopatiaparatodos48.pdf">
                    <img src="../../../skin/files/revistapt/revistapt48.jpg" alt="" /></a>
                  </li>
                  <li><span class="editionN">Edicion 47</span><br><a href="../../../skin/files/revistapt/homeopatiaparatodos47.pdf">
                    <img src="../../../skin/files/revistapt/tapahomepatiatodos47.jpg" alt="" /></a>
                  </li>
                  <li><span class="editionN">Edicion 46</span><br><a href="../../../skin/files/revistapt/homeopatiatodos46.pdf">
                    <img src="../../../skin/files/revistapt/tapahomeopatia46.jpg" alt="" /></a>
                  </li>
                  <li><span class="editionN">Edicion 45</span><br><a href="../../../skin/files/revistapt/homeopatiatodos45.pdf">
                    <img src="../../../skin/files/revistapt/homeopatiastodos45.gif" alt="" /></a>
                  </li>
                  <li><span class="editionN">Edicion 44</span><br><a href="../../../skin/files/revistapt/homeopatiatodos44.pdf">
                    <img src="../../../skin/files/revistapt/homeopatiastodos44.gif" alt="" /></a>
                  </li>
                  <li><span class="editionN">Edicion 43</span><br><a href="../../../skin/files/revistapt/homeopatiatodos43.pdf">
                    <img src="../../../skin/files/revistapt/homeopatiatodos43.jpg" alt="" /></a>
                  </li>
                </ul>
              </div><!-- revistas -->
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
