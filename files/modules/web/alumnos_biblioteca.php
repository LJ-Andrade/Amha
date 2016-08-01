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
            <h1>Biblioteca AMHA</h1>
          </div>
          <!-- Content -->

          <p>
            El &aacute;rea de Biblioteca de la Instituci&oacute;n es puntal de asistencia acad&eacute;mica para el alumno, el Cuerpo Docente y los socios de la <b>A.M.H.A.</b><br>
             Contribuye a su formaci&oacute;n y capacitaci&oacute;n continua con m&aacute;s de 3000 ejemplares que se incrementan a&ntilde;o tras a&ntilde;o.
            Suma a dicha asistencia, la videoteca, la hemeroteca, la computadora de uso personalizado y la posibilidad de realizar fotocopias.<br>
            Funciona bajo un reglamento que est&aacute; a disposici&oacute;n de quien lo solicite.<br>
            La <b>A.M.H.A.</b> abre sus puertas a la colaboraci&oacute;n mutua con otras Escuelas de la <b>F.A.M.H.A.</b> pudiendo los socios del Colegio de M&eacute;dicos
            Home&oacute;patas de las distintas Escuelas adheridas, acceder a la lectura de los libros y revistas.<br>
            La biblioteca se encuentra disponible de lunes a viernes de 10 a 16hs.
          </p>
          <div class="txC">
            <button type="button" class="btn btn-primary btn-lg secBtn" data-toggle="modal" data-target="#bibliotecaModal">
              Biblioteca
            </button>
          </div>
          <!-- Content -->
        </div><!-- /autoridades -->


        <!-- ////// MODALS //////// -->

        <!-- MODAL BODY (Biblioteca)-->
        <div class="modal fade" id="bibliotecaModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
                <h4 class="modal-title" id="myModalLabel">Reglamento de la Biblioteca</h4>
              </div>
              <div class="modal-body">
                <p class="txL">

<b>1&#176;)  La BIBLIOTECA de la A.M.H.A. consta de dos cuerpos:</b><br>
<b>a) BIBLIOTECA CIRCULANTE:</b> compuesta por el material bibliogr&aacute;fico de consulta b&aacute;sico en relaci&oacute;n al temario de los cursos que se dictan en la A.M.H.A.<br>
<b>b) BIBLIOTECA PRINCIPAL:</b> compuesta por ejemplares &uacute;nicos e irrepetibles en su mayor&iacute;a.<br><br>

<b>A) Reglamento de la BIBLIOTECA CIRCULANTE:</b><br>
<b>a)</b> El acceso a esta Biblioteca es exclusivo de los socios de la A.M.H.A., alumnos de la  A.M.H.A. y colegiados de la F.A.H.M.A. Todos los asociados deber&aacute;n presentar, en forma previa, el carnet emitido por autoridad competente y el recibo de la cuota institucional al d&iacute;a.<br>
<b>b)</b> Los usuarios podr&aacute;n CONSULTAR el material en la sala de lectura de la biblioteca.<br>
<b>c)</b> Solamente los socios de la A.M.H.A. y alumnos de todas las carreras de la misma podr&aacute;n  RETIRAR, en calidad de PR&eacute;STAMO, previa solicitud mediante ficha correspondiente, el n&uacute;mero m&aacute;ximo de UN libro durante UNA semana, renovable por igual per&iacute;odo. La prestaci&oacute;n se har&aacute; siempre y cuando haya m&aacute;s de un ejemplar del solicitado en existencia y que no haya otras solicitudes del mismo.<br>
<b>d)</b> La falta de cumplimiento de los plazos estipulados ser&aacute; posible de multa, que ser&aacute;  determinada por Comisi&oacute;n Directiva.<br><br>




<b>B) Reglamento de la BIBLIOTECA  PRINCIPAL:</b><br>
<b>a)</b> El acceso a esta biblioteca es exclusivo de los socios de la A.M.H.A., alumnos de la  A.M.H.A. y colegiados de la F.A.H.M.A. Todos los asociados deber&aacute;n presentar, en forma previa, el carnet emitido por autoridad competente y el recibo de la cuota institucional al d&iacute;a.<br>
<b>b)</b> Los usuarios podr&aacute;n CONSULTAR el material en la sala de lectura de la biblioteca.<br>
<b>c)</b> Solamente los integrantes del Cuerpo Docente de la A.M.H.A. podr&aacute;n RETIRAR, en calidad de PR&eacute;STAMO, previa solicitud mediante ficha correspondiente, el n&uacute;mero m&aacute;ximo de TRES libros durante UNA semana, renovable por igual per&iacute;odo. La prestaci&oacute;n se har&aacute; siempre y cuando haya m&aacute;s de un ejemplar de los solicitados en existencia y que no haya otras solicitudes en espera.<br>
<b>d)</b> La falta de cumplimiento de los plazos estipulados ser&aacute; pasible de multa, la misma ser&aacute; determinada por Comisi&oacute;n Directiva.<br><br>

<b>2&#176;) Reglamento de la HEMEROTECA:</b><br>
<b>a)</b> El acceso a la hemeroteca es exclusivo de los socios de la  A.M.H.A., alumnos de la A.M.H.A. y colegiados de la F.A.H.M.A. Todos los asociados deber&aacute;n presentar, en forma previa, el carnet habilitante emitido por autoridad competente y el recibo de la cuota institucional al d&iacute;a.<br>
<b>b)</b> Los usuarios podr&aacute;n CONSULTAR el material en la sala de lectura de la biblioteca.<br>
<b>c)</b> Solamente los integrantes del cuerpo docente de la A.M.H.A. podr&aacute;n RETIRAR, en calidad de PR&eacute;STAMO, previa solicitud mediante ficha correspondiente, el n&uacute;mero m&aacute;ximo de UNA revista durante UNA semana, renovable por igual per&iacute;odo. La prestaci&oacute;n se har&aacute; siempre y cuando haya m&aacute;s de un ejemplar del solicitado en existencia y que no haya otras solicitudes del mismo.<br>
<b>d)</b> La falta de cumplimiento de los plazos estipulados ser&aacute; posible de multa, la misma ser&aacute; determinada por Comisi&oacute;n Directiva.<br><br>

<b>3&#176;)</b> Todo el material que hace a la prestaci&oacute;n de esta biblioteca en tanto se encuentre restringido por este Reglamento podr&aacute;, no obstante, serconsultado, previa autorizaci&oacute;n de la pertinente solicitud, por la Direcci&oacute;n del &aacute;rea.<br><br>

<b>4&#176;)</b> La Direcci&oacute;n de la Biblioteca se reserva el derecho de tomar medidas necesarias en circunstancias especiales que as&iacute; lo requieran.<br><br>

<b>Nota aclaratoria:</b><br>
En todas aquellas circunstancias en que NO est&eacute; permitido el pr&eacute;stamo domiciliario del libro y/o revista, queda aclarado que NO podr&aacute;  ser retirado de la Instituci&oacute;n bajo ning&uacute;n concepto.

                </p>
              </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                </div>
            </div>
          </div>
        </div>
        <!-- /Modal  -->



        <?php include('sideBar.php'); ?><!-- Right Sidebar -->
      </div><!-- /MainContainer --><!-- Content inside this div -->
      <?php include('../../includes/inc.web.footer.php'); ?>
    </div><!-- /mainWrapper -->
    <!-- Footer -->
    <?php include('../../includes/inc.web.scripts.php'); ?> <!-- Scripts -->
  </body>
</html>
