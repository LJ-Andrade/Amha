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
        <!-- Home main menu -->
        <div class="row homeMenu">
          <div class="row homeMenu1">
            <div class="col-md-6 col-sm-12 col-xs-12 hmConsultorios"><span>CONSULTORIOS</span></div>
            <div class="col-md-3 col-sm-6 col-xs-12 hmFarmacias"><span>FARMACIAS</span></div>
            <div class="col-md-3 col-sm-6 col-xs-12 hmTtienda"><span>TIENDA ONLINE</span></div>
          </div>
          <div class="row homeMenu2">
            <div class="col-md-6 col-sm-12 col-xs-12 hmCursos"><span>CURSOS</span></div>
            <div class="col-md-3 col-sm-6 col-xs-12 hmArticulos"><span>ART&Iacute;CULOS</span></div>
            <div class="col-md-3 col-sm-6 col-xs-12 hmCampus"><span>CAMPUS VIRTUAL</span></div>
          </div>
        </div><!-- home main menu -->
        <div class="col-lg-9 col-md-12 wow zoomIn fadeIn">
          <div class="row">

            <div class="col-sm-3 itemHome">
              <div class="card card-block">
                <div class="row catalogueItem">
                  <div class="hovereffect">
                    <img class="img-responsive" src="../../../skin/images/products/revista57.jpg" alt="">
                    <a href="#">
                    <div class="overlay">
                      <h2>Revista Homeopat&iacute;a Para Todos</h2>
                      <hr>
                      <p><a href="#">Publicación N.57</a></p>
                    </a>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-sm-3 itemHome">
              <div class="card card-block">
                <div class="row catalogueItem">
                  <div class="hovereffect">
                    <img class="img-responsive" src="../../../skin/images/products/revista1.jpg" alt="">
                    <a href="#">
                    <div class="overlay">
                      <h2>Revista Homeopat&iacute;a Para Todos</h2>
                      <hr>
                      <p><a href="#">Publicación N.57</a></p>
                    </a>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-sm-3 itemHome">
              <div class="card card-block">
                <img class="card-img" src="../../../skin/images/products/foto1.jpg" alt="Card image cap">
                <h5 class="card-title">TIENDA ONLINE DE LIBROS</h5>
              </div>
            </div>

            <div class="col-sm-3 itemHome">
              <div class="card card-block">
                <img class="card-img" src="../../../skin/images/products/foto1.jpg" alt="Card image cap">
                <h5 class="card-title">REVISTA HOMEOPATÍA PARA TODOS</h5>
              </div>
            </div>

          </div><!-- /row -->
          <!-- Content Under Big Nav -->
          <div class="row">
            <div class="col-sm-4 itemHome">
              <div class="card card-block">
                <img class="card-img" src="../../../skin/images/products/foto1.jpg" alt="Card image cap">
                <h3 class="card-title">T&iacute;tulo Art&iacute;culo</h3>
                <p class="card-text">Texto descriptivo del art&iacute;culo.</p>
                <a href="#" class="btn btn-primary">Ver m&aacute;s</a>
                <p class="card-text"><small class="text-muted">Agregado el 27/06/2016</small></p>
              </div>
            </div>
            <div class="col-sm-4 itemHome">
              <div class="card card-block">
                <img class="card-img" src="../../../skin/images/products/foto1.jpg" alt="Card image cap">
                <h3 class="card-title">T&iacute;tulo Art&iacute;culo</h3>
                <p class="card-text">Texto descriptivo del art&iacute;culo.</p>
                <a href="#" class="btn btn-primary">Ver m&aacute;s</a>
                <p class="card-text"><small class="text-muted">Agregado el 27/06/2016</small></p>
              </div>
            </div>
            <div class="col-sm-4 itemHome">
              <div class="card card-block">
                <img class="card-img" src="../../../skin/images/products/foto1.jpg" alt="Card image cap">
                <h3 class="card-title">T&iacute;tulo Art&iacute;culo</h3>
                <p class="card-text">Texto descriptivo del art&iacute;culo.</p>
                <a href="#" class="btn btn-primary">Ver m&aacute;s</a>
                <p class="card-text"><small class="text-muted">Agregado el 27/06/2016</small></p>
              </div>
            </div>
          </div>
          <!-- /Content Under Big Nav -->
        </div><!-- col-lg-9 -->
        <?php include('sideBar.php'); ?><!-- Right Sidebar -->
      </div><!-- /MainContainer --><!-- Content inside this div -->
      <?php include('../../includes/inc.web.footer.php'); ?><!-- Footer -->
    </div><!-- /mainWrapper -->
    <?php include('../../includes/inc.web.scripts.php'); ?> <!-- Scripts -->
  </body>
</html>
