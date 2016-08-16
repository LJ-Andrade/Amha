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
          <div class="row">
            <a href="cursos.php"><div class="col-md-6 col-sm-12 col-xs-12 hmMenu hm1R1C"><span>CURSOS Y CARRERAS</span></div></a></a>
            <a href="#"><div class="col-md-3 col-sm-6 col-xs-12 hmMenu hm1R2C"><span>Carrera de Medicina Homeop&aacute;tica</span></div></a>
            <a href="#"><div class="col-md-3 col-sm-6 col-xs-12 hmMenu hm1R3C"><span>Carrera de Veterinaria Homeop&aacute;tica</span></div></a>
          </div>
          <div class="row">
            <a href="consultorios.php"><div class="col-md-6 col-sm-12 col-xs-12 hmMenu hm2R1C"><span>CONSULTORIOS</span></div></a>
            <a href="farmacias.php"><div class="col-md-3 col-sm-6 col-xs-12 hmMenu hm2R3C"><span>FARMACIAS</span></div></a>
            <a href="#"><div class="col-md-3 col-sm-6 col-xs-12 hmMenu hm2R2C"><span>Carrera Odontoestomatolog&iacute;a Homeop&aacute;tica</span></div></a>
          </div>
        </div><!-- home main menu -->
        <div class="col-lg-9 col-md-12 wow zoomIn fadeIn">
          <div class="row">
            <div class="col-sm-3 itemHome">
              <div class="card card-block">
                <div class="row catalogueItem">
                  <div class="hovereffect">
                    <img class="img-responsive" src="../../../skin/images/body/pictures/itemhome1.jpg" alt="Novedades">
                    <div class="overlay">
                      <br><br>
                      <!-- <h2>Novedades</h2>
                      <hr> -->
                      <p><a href="novedades.php"></a><button type="button" name="button" class="btn hollowBtn">Ver Novedades</button></p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-sm-3 itemHome">
              <div class="card card-block">
                <div class="row catalogueItem">
                  <div class="hovereffect">
                    <img class="img-responsive" src="../../../skin/images/body/pictures/itemhome2.jpg" alt="Revista Homeopatía para todos">
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
                    <img class="img-responsive" src="../../../skin/images/body/pictures/itemhome3.jpg" alt="">
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
                    <img class="img-responsive" src="../../../skin/images/body/pictures/itemhome4.jpg" alt="">
                    <div class="overlay">
                      <!-- <h2>Revista Homeopat&iacute;a Para Todos</h2> -->
                      <br><br><br><br>
                      <p><a href="tienda_online.php"><button type="button" class="btn hollowBtn">Visitar</button></a></p>
                    </div>
                  </div>
                </div>
              </div>
            </div>

          </div><!-- /row -->
          <!-- Content Under Big Nav -->
          <div class="row">
            <div class="col-sm-4 itemHome2">
              <div class="card card-block">
                <img class="card-img" src="../../../skin/images/body/pictures/item3home1.jpg" alt="Amha Sede Mar del Plata">
                <h3 class="card-title">Sede Mar Del Plata</h3>
              </div>
            </div>
            <div class="col-sm-4 itemHome2">
              <div class="card card-block">
                <img class="card-img" src="../../../skin/images/body/pictures/item3home2.jpg" alt="Amha Carrera Docente">
                <h3 class="card-title">Carrera Docente</h3>
              </div>
            </div>
            <div class="col-sm-4 itemHome2">
              <div class="card card-block">
                <img class="card-img" src="../../../skin/images/body/pictures/item3home3.jpg" alt="Amha El Simillimum">
                <h3 class="card-title">El Simillimum</h3>
                <!-- <p class="card-text">Texto descriptivo del art&iacute;culo.</p> -->
                <!-- <a href="#" class="btn btn-primary">Ver m&aacute;s</a>
                <p class="card-text"><small class="text-muted">Agregado el 27/06/2016</small></p> -->
              </div>
            </div>
          </div>
          <!-- /Content Under Big Nav -->
        </div><!-- col-lg-9 -->
        <?php include('sidebar.php'); ?><!-- Right Sidebar -->
      </div><!-- /MainContainer --><!-- Content inside this div -->
      <?php include('../../includes/inc.web.footer.php'); ?><!-- Footer -->
    </div><!-- /mainWrapper -->
    <?php include('../../includes/inc.web.scripts.php'); ?> <!-- Scripts -->
  </body>
</html>
