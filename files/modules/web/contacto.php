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
          <div class="sectionTits"><h1>Contacto</h1></div>
          <div class="row">
            <div class="amhaContacto col-md-6">
              <form>
                <fieldset class="form-group">
                  <!-- <label for="exampleInputEmail1">Nombre</label> -->
                  <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Ingrese su nombre">
                </fieldset>
                <fieldset class="form-group">
                  <!-- <label for="exampleInputEmail1">Email</label> -->
                  <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Ingrese su direcci&oacute;n de email">
                </fieldset>
                <fieldset class="form-group">
                  <!-- <label for="exampleInputPassword1">Tel&eacute;fono</label> -->
                  <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Ingrese su n&uacute;mero de tel&eacute;fono">
                </fieldset>
                <fieldset class="form-group">
                  <!-- <label for="exampleTextarea">Mensaje</label> -->
                  <textarea class="form-control" id="exampleTextarea" rows="3" placeholder="Deje su consulta o mensaje"></textarea>
                </fieldset>
                <button type="submit" class="btn mainBtn">Enviar</button>
              </form>
            </div>
            <div class="col-md-6">

              <div class="col-md-12">
                <h4><b>Sede Central</b></h4>
                <p>ESCUELA DE POST-GRADO Y ATENCION MEDICA EN CATEDRA <br>
                  Juncal 2884 - (C1425AYJ) | Buenos Aires, Argentina<br><br>
                  <b>PEDIDO DE TURNOS</b><br>
                  Tel. (5411) 4827-2907</p>
                  <hr>
              </div>
              <div class="col-md-12">
                <h4><b>Sede Charcas</b></h4>
                <p>ATENCI&Oacute;N M&Eacute;DICA EN CONSULTORIOS DE CATEDRA Y PRIVADOS<br>
                  Charcas 2744 - piso 2 departamento "6" | Buenos Aires, Argentina<br><br>
                  <b>PEDIDO DE TURNOS</b><br>
                  Tel. (5411) 4963-1841</p>
                <br>
              </div>
            </div>
          </div>
          <div class="row amhaContactData">
                        <div class="col-md-12">
              <h5>E-MAIL GENERAL : <b>info@amha.org.ar</b></h5>
              <hr>
            </div>
            <div class="col-md-12">
              <div class="col-md-4">
                <b>ESCUELA DE POST-GRADO</b><br>
                Tel. (5411) 4827-2907<br>
                escuela@amha.org.ar
              </div>
              <div class="col-md-4">
                <b>ADMINISTRACION</b><br>
                Tel. (5411) 4826-5852 int. 36<br>
                administracion@amha.org.ar
              </div>
              <div class="col-md-4">
              <b>SOCIOS</b><br>
                Tel. (5411) 4826-5852 int. 32<br>
                socios@amha.org.ar
              </div>
            </div>
          </div>
        </div><!-- /contentContainer -->
        <?php include('sideBar.php'); ?><!-- Right Sidebar -->
      </div><!-- /MainContainer --><!-- Content inside this div -->
      <?php include('../../includes/inc.web.footer.php'); ?>
    </div><!-- /mainWrapper -->
    <!-- Footer -->
    <?php include('../../includes/inc.web.scripts.php'); ?> <!-- Scripts -->
  </body>
</html>
