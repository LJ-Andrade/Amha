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
        <div class="col-lg-9 col-md-12 col-xs-12">
          <div class="sectionTits"><h1 class=" txC">Contacto</h1></div><hr>
          <div class="row amhaContacto">
            <div class="col-md-12">
              <div class="col-md-4">
                <h4><b>Sede Central</b></h4>
                <p>ESCUELA DE POSGRADO Y <br>ATENCI&Oacute;N M&Eacute;DICA EN C&Aacute;TEDRA<br>
                <b>Juncal 2884 - (C1425AYJ)</b><br> Recoleta, Buenos Aires, Argentina<br>
                <b>Tel: </b>(011) 4827-2907<br>
                <b>Mail: </b>escuela@amha.org.ar<br>
                <b>D&iacute;as y horarios:</b><br> De lunes a viernes de 9.00hs a 16.00hs</p>
              </div>
              <hr class="hrMobile">
              <div class="col-md-4">
                <h4><b>Consultorio M&eacute;dico</b></h4>
                <p>Consultorios privados de los m&eacute;dicos de la A.M.H.A.<br>
                D&iacute;as y horarios: Lunes a Viernes 9 a 18hs.<br>
                <b>Charcas 2744 - piso 2 departamento "6"</b><br> Barrio Norte, Buenos Aires, Argentina<br>
                <b>Tel:</b> (011) 4963-1841 /4962-6812<br>
              </div>
              <hr class="hrMobile">
              <div class="col-md-4">
                <h4><b>Sede Mar del Plata</b></h4>
                <p>Carrera de Medicina Homeop&aacute;tica<br> Curso Regular y Carrera de Veterinaria Homeopática<br>
                <b>Contacto: </b> Dr. O. Mariano Ortolani<br>
                <b>Tel:</b> (0223) 476-3545<br>
                <b>Mail:</b> marianoortolani@hotmail.com<br>
                <b>D&iacute;as y horarios:</b><br> De Lunes a viernes de 9 a 20 hs.</p>
              </div>
              <hr class="hrMobile">
              <div class="row">
                <div class="col-md-8">
                  <hr>
                  <p>
                  <b>ESCUELA DE POSGRADO:</b> Tel: 4826-5852 int 37 | 4827-2907 | escuela@amha.org.ar <br>
                  <b>ADMINISTRACI&Oacute;N:</b> Tel: 4826-5852 int 36 - administracion@amha.org.ar<br>
                  <b>SOCIOS:</b> Tel:  4826-5852 int 32 / 4826-0911 - socios@amha.org.ar<br>
                  </p>
                </div>
                <div class="col-md-4">
                  <hr>
                  <b>E-MAIL GENERAL:</b> info@amha.org.ar<br>
                  <b>Horarios de atenci&oacute;n:</b><br>  Lunes a Viernes de 9.00hs a 16.00hs
                </div>
              </div>
            </div>

            <!-- Contact Form -->
            <div class="col-md-12 mainContactForm">
              <form>
                <h4>Contacto R&aacute;pido</h4> <br>
                <fieldset class="form-group">
                  <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Ingrese su nombre">
                </fieldset>
                <fieldset class="form-group">
                  <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Ingrese su direcci&oacute;n de email">
                </fieldset>
                <fieldset class="form-group">
                  <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Ingrese su n&uacute;mero de tel&eacute;fono">
                </fieldset>
                <fieldset class="form-group">
                  <textarea class="form-control" id="exampleTextarea" rows="3" placeholder="Deje su consulta o mensaje"></textarea>
                </fieldset>
                <button type="submit" class="btn mainBtn">Enviar</button>
              </form>
            </div>
          </div><!-- /Contact Form -->
        </div><!-- /contentContainer -->
        <?php include('sidebar.php'); ?><!-- Right Sidebar -->
      </div><!-- /MainContainer --><!-- Content inside this div -->
      <?php include('../../includes/inc.web.footer.php'); ?>
    </div><!-- /mainWrapper -->
    <!-- Footer -->
    <?php include('../../includes/inc.web.scripts.php'); ?> <!-- Scripts -->
  </body>
</html>
