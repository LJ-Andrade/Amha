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
        <div class="col-lg-7 col-md-8 col-xs-12 contentContainer">
          <div class="sectionTits">
            <h1 class="txC">Revista Homeopat&iacute;a</h1>
            <hr>
            <h4 class="txC">Suscripci&oacute;n Exclusiva para socios</h4>
            <hr>
          </div>
          <div class="sociosLogin">
            <div class="row txC">
              <p>
                Aquí encontrar&aacute; las publicaciones disponibles de descarga exclusiva para SOCIOS y ALUMNOS.<br>
                Haga click en el bot&oacute;n "Acceder" para poder descargar la &uacute;ltima versi&oacute;n.<br>
                Si no tiene su clave de acceso, solic&iacute;tela socios@amha.org.ar - <b>Tel&eacute;fono 4826-0911</b>
              </p>
            </div>
            <div class="row">
              <br>
              <div class="col-md-6">
                <div class="sociosLoginInner">
                  <img src="../../../skin/files/revistasocios/revistasocios.jpg" alt="" />
                </div>
              </div>
              <div class="col-md-6">
                <form class="form-signin formSocios">
                  <h3 class="form-signin-heading">Acceso para socios</h3><br>
                  <div class="form-group">
                    <input id="inputEmail" class="form-control" placeholder="Nombre de Usuario o E-Mail" required="" autofocus="" type="name">
                  </div>
                  <div class="form-group">
                    <input id="inputPassword" class="form-control" placeholder="Contrase&ntilde;a" required="" type="password">
                  </div>
                  <div class="checkbox">
                    <label><input value="remember-me" type="checkbox"> Recordarme</label>
                  </div>
                  <a href="revista_socios.php"><!-- Temp Link - Delete -->
                  <button class="btn btn-lg btn-primary btn-block btnPColor" type="submit">Ingresar</button>
                  </a>
                </form>
              </div>
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
