<?php
  
  if (isset($_POST['email']))  {
    //Email information
    require_once('../../../vendors/phpmailer/class.phpmailer.php');
    
    //$AdminEmail = "escuela@amha.org.ar";
    $AdminEmail = "romero.m.alejandro@gmail.com";
    $Name = $_POST['name'];
    $Email = $_POST['email'];
    $Phone = $_POST['phone'];
    $Carreer = $_POST['carreer'];
    $Sex = $_POST['sex'];
    $Document = $_POST['doc'];
    $Ocupation = $_POST['ocupation'];
    $Subject = "Formulario de pre inscripcion enviado desde el sitio web AMHA";
    $Msg .= 'Remitente: <b>'.utf8_encode($Name).'</b><br>';
    $Msg .= 'Carrera seleccionada: <b>'.utf8_encode($Carreer).'</b><br>';
    $Msg .= 'Sexo: <b>'.utf8_encode($Sex).'</b><br>';
    $Msg .= 'Documento: <b>'.utf8_encode($Document).'</b><br>';
    $Msg .= 'Tel&eacute;fono: <b>'.utf8_encode($Phone).'</b><br>';
    $Msg .= 'Email: <b><a href="'.$Email.'">'.$Email.'</a></b><br>';
    $Msg .= 'Ocupaci&oacute;n: <b>'.utf8_encode($Ocupation).'</b><br>';
    $Msg .= '<br>Como nos contact&oacute;: <br><b>'.utf8_encode($_POST['msg']).'</b>';
    $Msg .= '<br><br><br><b>Este email ha sido generado autom&aacute;ticamente desde el sitio web de la AMHA.</b>';
    
    $PHPmailer = new PHPMailer(); // defaults to using php "mail()"
    //$body = file_get_contents('contents.html');
    //$body = eregi_replace("[\]",'',$body);
    $PHPmailer->AddReplyTo($AdminEmail,"AMHA");
    $PHPmailer->SetFrom($AdminEmail, 'AMHA website');
    $PHPmailer->AddReplyTo($AdminEmail,"AMHA");
    //$address = "whoto@otherdomain.com";
    $PHPmailer->AddAddress($AdminEmail, "AMHA website");
    $PHPmailer->Subject    = "PHPMailer Test Subject via mail(), basic";
    $PHPmailer->AltBody    = "To view the message, please use an HTML compatible email viewer!"; // optional, comment out and test
    $PHPmailer->MsgHTML($Msg);
    if(!$PHPmailer->Send()) {
      echo "Mailer Error: " . $PHPmailer->ErrorInfo;
    //} else {
      //echo "Message sent!";
    }

    // $Headers  = "From: ".$Name." < ".$Email." >\n";
    // $Headers .= "X-Sender: AMHA website < ".$AdminEmail." >\n";
    // $Headers .= 'X-Mailer: PHP/' . phpversion();
    // $Headers .= "X-Priority: 2\n"; // Urgent message!
    // $Headers .= "Return-Path: ".$AdminEmail."\n"; // Return path for errors
    // $Headers .= "MIME-Version: 1.0\r\n";
    // $Headers .= "Content-Type: text/html; charset=iso-8859-1\n";

    //send email
    // mail($AdminEmail, "$Subject", $Msg, $Headers);
    // include("../../classes/class.database.php");
    // $DB = new DataBase();
    // $DB->execQuery("INSERT","contact_messages","name,email,phone,message,creation_date","'".addslashes($Name)."','".addslashes($Email)."','".addslashes($Phone)."','".addslashes($_POST['msg'])."',NOW()");
    //echo $DB->lastQuery();
    die();
  }
?>
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
        <div class="col-lg-7 col-md-8 col-xs-12 contentContainer">
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
                  <label class="radio-inline"><input id="carreer1" validateEmpty="Please, complete this field" type="radio" name="carreer" value="Medicina">Medicina</label>
                  <label class="radio-inline"><input id="carreer2" validateEmpty="Please, complete this field" type="radio" name="carreer" value="Odontolog&iacute;a">Odontolog&iacute;a</label>
                  <label class="radio-inline"><input id="carreer3" validateEmpty="Please, complete this field" type="radio" name="carreer" value="Farmacia">Farmacia</label>
                  <label class="radio-inline"><input id="carreer4" validateEmpty="Please, complete this field" type="radio" name="carreer" value="Veterinaria">Veterinaria</label>
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
                  <input id="phone" validateEmpty="Este campo es obligatorio" class="form-control" placeholder="Tel&eacute;fono / Celular" type="tel">
                </div>
                <div class="form-group">
                  <input id="email" validateEmpty="Este campo es obligatorio" validateEmail="Ingrese su Email" class="form-control" placeholder="E-Mail" type="email">
                </div>
                <div class="form-group">
                  <input id="ocupation" validateEmpty="Este campo es obligatorio" class="form-control" placeholder="Ocupaci&oacute;n" type="name">
                </div>
                <div class="form-group  form-boxedLines">
                  <label class="sexInput" for="">Sexo: </label>
                  <label class="radio-inline"><input type="radio" id="sex1" name="sex" value="Var&oacute;n">Masculino</label>
                  <label class="radio-inline"><input type="radio" id="sex2" name="sex" value="Mujer">Femenino</label>
                </div>
                <div class="form-group">
                 <label for="msg">&iquest;C&oacute;mo se ha contactado con la instituci&oacute;n?</label>
                 <textarea class="form-control" rows="5" id="msg"></textarea>
                </div>
                <!-- Temp Link - Delete -->
                <button id="send" class="btn btn-lg btn-primary btn-block btnPColor" type="button">Enviar</button>
              </form><br>
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
    <input type="hidden" value="" id="selected_carreer">
    <input type="hidden" value="" id="selected_sex">
    <?php include('../../includes/inc.web.scripts.php'); ?> <!-- Scripts -->
    <script type="JavaScript" src="../../js/script.validate.js"></script>
    <script>
      var validate = new ValidateFields();
      $(function(){
        validate.createErrorDivs();
        $(validateElements).change(function(){
            validate.validateOneField($(this));
        });
      });

      $("#send").click(function(){
        if(validate.validateFields('*') && $("#selected_carrer").val()!="" && $("#selected_sex").val()!="")
        {
          sendMsg();
        }else{
          if($("#selected_carrer").val()!="")
          {
            alert("Seleccione una carrera.")
          }

          if($("#selected_sex").val()!="")
          {
            alert("Seleccione un sexo.")
          }
        }
      });

      $("input[name=carreer]").click(function(){
        $("#selected_carreer").val($(this).val());
      });

      $("input[name=sex]").click(function(){
        $("#selected_sex").val($(this).val());
      });

      function sendMsg()
      {
        //if($('#carreer').is(':checked')) { alert($('input[name=carreer]:checked').val()); }
        var carreer = $("#selected_carreer").val();
        var sex = $("#selected_sex").val();
        var name = $("#name").val();
        var address = $("#address").val();
        var doc = $("#document").val();
        var email = $("#email").val();
        var phone = $("#phone").val();
        var ocupation = $("#ocupation").val();
        var msg = $("#msg").val();

        $.ajax({
          method: "POST",
          url: "formulario_preinscripcion.php",
          data: { name:name, email:email, phone:phone, msg:msg,carreer:carreer,sex:sex,address:address,doc:doc,ocupation:ocupation},
          success: function(callback){
            if(callback)
            {
              console.log(callback);
            }else{
              alert("Mensaje enviado correctamente");
            }
          }
        });
      }
    </script>
  </body>
</html>
