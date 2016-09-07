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
            <a href="cursos_y_carreras.php"><div class="col-md-6 col-sm-12 col-xs-12 hmMenu hm1R1C"><span>CURSOS Y CARRERAS</span></div></a></a>
            <a href="carrera_de_medicina_homeopatica.php"><div class="col-md-3 col-sm-6 col-xs-12 hmMenu hm1R2C"><span>CARRERA DE <br> MEDICINA  <br> HOMEOP&Aacute;TICA</span></div></a>
            <a href="carrera_de_veterinaria_homeopatica.php"><div class="col-md-3 col-sm-6 col-xs-12 hmMenu hm1R3C"><span>CARRERA DE VETERNINARIA HOMEOP&Aacute;TICA </span></div></a>
          </div>
          <div class="row">
            <a href="agenda.php"><div class="col-md-6 col-sm-12 col-xs-12 hmMenu hm2R1C"><span>AGENDA: CONSULTORIOS Y FARMACIAS</span></div></a>
            <a href="carrera_de_farmacia_homeopatica.php"><div class="col-md-3 col-sm-6 col-xs-12 hmMenu hm2R3C"><span>CURSO DE FARMACIA HOMEOP&Aacute;TICA</span></div></a>
            <a href="carrera_de_odontoestomatologia_homeopatica.php"><div class="col-md-3 col-sm-6 col-xs-12 hmMenu hm2R2C"><span>CARRERA ODONTOESTOMATOLOG&Iacute;A HOMEOP&Aacute;TICA</span></div></a>
          </div>
        </div><!-- home main menu -->
        <div class="col-lg-9 col-md-12 wow zoomIn fadeIn">
          <div class="row">
            <div class="col-sm-3 itemHome">
              <div class="card card-block">
                <div class="row catalogueItem">
                  <div class="hovereffect">
                    <img class="img-responsive" src="../../../skin/images/body/menu/itemhome1.jpg" alt="Novedades">
                    <div class="overlay">
                      <br><br>
                      <!-- <h2>Novedades</h2>
                      <hr> -->
                      <p><a href="novedades.php"><button type="button" name="button" class="btn hollowBtn">Ver Novedades</button></a></p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-sm-3 itemHome">
              <div class="card card-block">
                <div class="row catalogueItem">
                  <div class="hovereffect">
                    <img class="img-responsive" src="../../../skin/images/body/menu/itemhome2.jpg" alt="Revista Homeopatía para todos">
                    <a href="">
                    <div class="overlay">
                      <p><a href="#">Descarg&aacute; sin costo la revista y disfrutala!</a></p>
                      <hr>
                      <p><a href="revistapt.php"><button type="button" name="button" class="btn hollowBtn">Ingresar</button></a></p>
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
                    <img class="img-responsive" src="../../../skin/images/body/menu/itemhome3.jpg" alt="">
                    <a href="">
                    <div class="overlay">
                      <p><a href="socios_login.php">Revista exclusiva para Socios de A.M.H.A.</a></p>
                      <hr>
                      <p><a href="socios_login.php"><button type="button" name="button" class="btn hollowBtn">Ingresar</button></a></p>
                      <!-- <p><a href="#">Publicación N.57</a></p> -->
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
                    <img class="img-responsive" src="../../../skin/images/body/menu/itemhome4.jpg" alt="">
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
                <a href="#">
                  <img class="card-img" src="../../../skin/images/body/menu/item3home1.jpg" alt="Que es la homeopatia">
                  <h3 class="card-title"></h3>
                </a>
              </div>
            </div>
            <div class="col-sm-4 itemHome2">
              <div class="card card-block">
                <a href="socios_carrera_docente.php">
                  <img class="card-img" src="../../../skin/images/body/menu/item3home2.jpg" alt="Amha Carrera Docente">
                  <h3 class="card-title">Conocer m&aacute;s sobre ella</h3>
                </a>
              </div>
            </div>
            <div class="col-sm-4 itemHome2">
              <div class="card card-block">
      				  <a href="http://elsimillimum.blogspot.com.ar" target="_blank">
      					<img class="card-img" src="../../../skin/images/body/menu/item3home3.jpg" alt="Amha El Simillimum">
      					<h3 class="card-title">Ingres&aacute; al blog</h3>
      					<!-- <p class="card-text">Texto descriptivo del art&iacute;culo.</p> -->
      					<!-- <a href="#" class="btn btn-primary">Ver m&aacute;s</a>
      					<p class="card-text"><small class="text-muted">Agregado el 27/06/2016</small></p> -->
      				</a>
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
