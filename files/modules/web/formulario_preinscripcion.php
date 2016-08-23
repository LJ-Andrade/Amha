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
        <?php include('../../../files/includes/inc.menu.cursos.php'); ?> <!--  -->
        <!-- /// /Left Floating Menu /// -->
        <div class="col-lg-7 col-md-9 col-xs-12 contentContainer">
          <div class="sectionTits">
            <h1 class="txC">Cursos y Carreras</h1>
            <hr>
            <h4 class="txC">Formulario de Pre-Inscripci&oacute;n</h4>
            <hr>
          </div>
          <div class="form-info">
            <p class="txL">
              ESTE TR&Aacute;MITE LE PERMITE RESERVAR UNA VACANTE PARA UD.<br>
              PARA EFECTIVIZARLO deber&aacute; presentar sus documentos:<br>
              - Fotocopia autenticada y en tama&ntilde;o reducido de ambas caras del t&iacute;tulo<br>
              - Fotocopia de ambas caras de la matr&iacute;cula<br>
              - Abonar la matrícula de Inscripci&oacute;n en Juncal 2884 <br> de lunes a viernes de 10 a 16 horas. <br><br>

              M&Aacute;S INFORMACI&Oacute;N AL 4826-5852 | DE 09 A 17 HORAS
            </p>
          </div>
          <div class="sociosLogin">
            <div class="sociosLoginInner">
              <form  id="inscriptionForm" class="form-signin" action="" method="post">
                <h3 class="form-signin-heading">Ingrese los datos requeridos</h3>
                <hr class="hrStrong">
                <div class="form-group form-boxedLines">
                  <p>Carrera Elegida</p>
                  <label class="radio-inline"><input id="carreer" validateEmpty="Please, complete this field" type="radio" name="optradio">Medicina</label>
                  <label class="radio-inline"><input id="carreer" validateEmpty="Please, complete this field" type="radio" name="optradio">Odontolog&iacute;a</label>
                  <label class="radio-inline"><input id="carreer" validateEmpty="Please, complete this field" type="radio" name="optradio">Farmacia</label>
                  <label class="radio-inline"><input id="carreer" validateEmpty="Please, complete this field" type="radio" name="optradio">Veterinaria</label>
                </div>
                <div class="form-group">
                  <input id="name" validateEmpty="Este campo es obligatorio" class="form-control" placeholder="Apellido y Nombre" autofocus="" type="name">
                </div>
                <div class="form-group">
                  <input id="document" validateEmpty="Este campo es obligatorio" validateOnlyNumbers="Ingrese solo n&uacute;meros" class="form-control" placeholder="D.N.I." type="name">
                </div>
                <div class="form-group">
                  <input id="address" validateEmpty="Este campo es obligatorio" class="form-control" placeholder="Domicilio" type="name">
                </div>
                <div class="form-group">
                  <input id="tel" validateEmpty="Este campo es obligatorio" validateOnlyNumbers="Ingrese solo n&uacute;meros" class="form-control" placeholder="Tel&eacute;fono / Celular" type="tel">
                </div>
                <div class="form-group">
                  <input id="mail" validateEmail="Ingrese su Email" class="form-control" placeholder="E-Mail" type="email">
                </div>
                <div class="form-group">
                  <input id="ocupation" class="form-control" placeholder="Ocupaci&oacute;n" type="name">
                </div>
                <div class="form-group  form-boxedLines">
                  <label class="sexInput" for="">Sexo: </label>
                  <label class="radio-inline"><input type="radio" name="optradio">Masculino</label>
                  <label class="radio-inline"><input type="radio" name="optradio">Femenino</label>
                </div>
                <div class="form-group">
                 <label for="comment">&iquest;C&oacute;mo se ha contactado con la instituci&oacute;n?</label>
                 <textarea class="form-control" rows="5" id="comment"></textarea>
                </div>
                <!-- Temp Link - Delete -->
                <button id="submit" class="btn btn-lg btn-primary btn-block btnPColor" type="button">Enviar</button>
              </form><br>
              <a href="revista_socios.php"><p>Ingresar a secci&oacute;n (Link de prueba)</p></a><!-- Delete -->
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
    <script type="text/javascript">

    /// VALIDATE FORM
      $("#submit").click(function(){
        if(validate.validateFields('*'))
        {
          $("inscriptionForm").submit();
        }
      });

    </script>
  </body>
</html>
