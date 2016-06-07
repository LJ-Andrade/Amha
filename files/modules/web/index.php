<!DOCTYPE html>
<html lang="es">
<head>
  <title>AMHA</title>
  <?php include('../../../files/includes/inc.web.head.php'); ?> <!-- Head -->
</head>
  <body>
    <?php include('../../../files/includes/inc.web.optionLeftSideBar.php'); ?> <!-- Left Option Hidden Bar -->
    <header>
      <?php include('../../../files/includes/inc.web.nav.php'); ?> <!-- Navegation -->
    </header>
    <div class="mainWrapper">
      <div class="container mainContainer">
        <!-- Content -->

        <div class="row homeMenu">
          <div class="row homeMenu1">
            <div class="col-md-6 col-sm-12 col-xs-12 hmCursos">
              <span>CURSOS</span>
            </div>
            <div class="col-md-3 col-sm-6 col-xs-12 hmTtienda">
              <span>TIENDA ONLINE</span>
            </div>
            <div class="col-md-3 col-sm-6 col-xs-12 hmArticulos">
              <span>ART&Iacute;CULOS</span>
            </div>
          </div>
          <div class="row homeMenu2">
            <div class="col-md-6 col-sm-12 col-xs-12 hmConsultorios">
              <span>CONSULTORIOS</span>
            </div>
            <div class="col-md-3 col-sm-6 col-xs-12 hmFarmacias">
              <span>FARMACIAS</span>
            </div>
            <div class="col-md-3 col-sm-6 col-xs-12 hmCampus">
              <span>CAMPUS VIRTUAL</span>
            </div>
          </div>

        </div>



        <?php include('indexContent.php'); ?> <!-- Index Content -->

        <!-- Right Sidebar -->
        <div class="col-md-3">

          <div class="card card-block">
            <h4 class="card-title">Card title</h4>
            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
            <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
            <h4 class="card-title">Card title</h4>
            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
            <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
            <h4 class="card-title">Card title</h4>
            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
            <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
            <h4 class="card-title">Card title</h4>
            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
            <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
          </div>

        </div><!-- /Right Sidebar -->
      </div><!-- /MainContainer -->
      <?php include('../../includes/inc.web.footer.php'); ?>
    </div><!-- /mainWrapper -->
    <!-- Footer -->
    <?php include('../../includes/inc.web.scripts.php'); ?> <!-- Scripts -->
  </body>
</html>
