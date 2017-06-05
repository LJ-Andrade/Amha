<?php
  if (isset($_POST['email']))  {
    //Email information

    $AdminEmail = "administracion@amha.org.ar";
    $AdminEmail2 = "romero.m.alejandro@gmail.com";
    $Name = $_POST['first_name'].' '.$_POST['last_name'];
    $Email = $_POST['email'];
    $Phone = $_POST['phone'];
    // $Career = $_POST['career'];
    // $Sex = $_POST['sex'];
    // $Document = $_POST['doc'];
    $Address = $_POST['address'];
    $Subject = "Formulario de pre inscripcion congreso FAMHA";
    $Msg .= 'Remitente: <b>'.$Name.'</b><br>';
    // $Msg .= 'Carrera seleccionada: <b>'.$Career.'</b><br>';
    // $Msg .= 'Sexo: <b>'.$Sex.'</b><br>';
    // $Msg .= 'Documento: <b>'.$Document.'</b><br>';
    $Msg .= 'Tel&eacute;fono: <b>'.$Phone.'</b><br>';
    $Msg .= 'Email: <b><a href="'.$Email.'">'.$Email.'</a></b><br>';
    $Msg .= 'Direcci&oacute;n: <b>'.$Address.'</b><br>';
    $Msg .= '<br><br><br><b>Este email ha sido generado autom&aacute;ticamente desde el sitio web de la AMHA.</b>';

    $Headers  = "From: ".$Name." < ".$Email." >\n";
    $Headers .= "X-Sender: AMHA website < ".$AdminEmail." >\n";
    $Headers .= 'X-Mailer: PHP/' . phpversion();
    $Headers .= "X-Priority: 2\n"; // Urgent message!
    $Headers .= "Return-Path: ".$AdminEmail."\n"; // Return path for errors
    $Headers .= "MIME-Version: 1.0\r\n";
    $Headers .= "Content-Type: text/html; charset=utf-8\n";

    //send email
    mail($AdminEmail, "$Subject", $Msg, $Headers);
    mail($AdminEmail2, "$Subject", $Msg, $Headers);
    include("../../classes/class.database.php");
    $DB = new DataBase();
    //$DB->execQuery("INSERT","inscription_form_message","name,email,phone,career,sex,document,occupation,message,creation_date","'".addslashes($Name)."','".addslashes($Email)."','".addslashes($Phone)."','".addslashes($Career)."','".addslashes($Sex)."','".addslashes($Document)."','".addslashes($Occupation)."','".addslashes($_POST['msg'])."',NOW()");
    $DB->execQuery("INSERT","inscription_congress","first_name,last_name,address,email,phone,creation_date","'".addslashes($_POST['first_name'])."','".addslashes($_POST['last_name'])."','".addslashes($Address)."','".addslashes($Email)."','".addslashes($Phone)."',NOW()");
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
            <h1 class="txC">12º Congreso FAMHA - Homeopatia, paradigma del SXXI</h1>
            <hr>
            <h4 class="txC">Formulario de Pre-Inscripci&oacute;n</h4>
            <hr>
          </div>
          <div class="form-info">
            <p class="txL">
              Tenemos el agrado de invitarlo a participar del próximo 12º Congreso FAMHA que se realizará del 24 a l 27 de Octubre de 2018.<br><br>
              Estará a cargo de la ASOCIACIÓN MÉDICA HOMEOPÁTICA ARGENTINA.<br><br>
              En el mismo se tratarán los siguientes temas:
              <div class="container">
              <ul>
                <li>Vitalismo del Siglo XXI</li>
                <li>Investigación en Homeopatía</li>
                <li>Nuevas Patogenesias</li>
                <li>Temas Libres</li>
              </ul>
              </div>
              <br>
              El congreso está dirigido a todos los homeópatas y alumnos de las diferentes escuelas de Homeopatía.Para poder participar, deberá inscribirse previamente.<br><br>
              COMPLETE EL FORMULARIO DE CONTACTO PARA RECIBIR MÁS INFORMACIÓN<br><br>
              ¡Inscribiéndose antes del 31 de Julio de 2017 accede a grandes descuentos!
            </p>
          </div>
          <div class="sociosLogin">
            <div class="sociosLoginInner">
              <form  id="inscriptionForm" class="form-signin" action="" method="post">
                <h3 class="form-signin-heading">Ingrese los datos requeridos</h3>
                <hr class="hrStrong">
                <!--<div class="form-group form-boxedLines">-->
                <!--  <p>Carrera Elegida</p>-->
                <!--  <label class="radio-inline"><input id="career1" type="radio" name="career" value="Medicina">Medicina</label>-->
                <!--  <label class="radio-inline"><input id="career2" type="radio" name="career" value="Odontolog&iacute;a">Odontolog&iacute;a</label>-->
                <!--  <label class="radio-inline"><input id="career3" type="radio" name="career" value="Farmacia">Farmacia</label>-->
                <!--  <label class="radio-inline"><input id="career4" type="radio" name="career" value="Veterinaria">Veterinaria</label>-->
                <!--</div>-->
                <div class="form-group">
                  <input id="first_name" validateEmpty="Este campo es obligatorio" class="form-control" placeholder="Nombre" autofocus="" type="name">
                </div>
                <div class="form-group">
                  <input id="last_name" validateEmpty="Este campo es obligatorio" class="form-control" placeholder="Apellido" type="name">
                </div>
                <div class="form-group">
                  <input id="address" validateEmpty="Este campo es obligatorio" class="form-control" placeholder="Domicilio" type="address">
                </div>
                <div class="form-group">
                  <input id="phone" validateEmpty="Este campo es obligatorio" class="form-control" placeholder="Tel&eacute;fono / Celular" type="tel">
                </div>
                <div class="form-group">
                  <input id="email" validateEmpty="Este campo es obligatorio" validateEmail="Ingrese su Email" class="form-control" placeholder="E-Mail" type="email">
                </div>
                <!--<div class="form-group">-->
                <!--  <input id="occupation" class="form-control" placeholder="Ocupaci&oacute;n" type="name">-->
                <!--</div>-->
                <!--<div class="form-group  form-boxedLines">-->
                <!--  <label class="sexInput" for="">Sexo: </label>-->
                <!--  <label class="radio-inline"><input type="radio" id="sex1" name="sex" value="Var&oacute;n">Masculino</label>-->
                <!--  <label class="radio-inline"><input type="radio" id="sex2" name="sex" value="Mujer">Femenino</label>-->
                <!--</div>-->
                <!--<div class="form-group">-->
                <!-- <label for="msg">Deje su mensaje o consulta:</label>-->
                <!-- <textarea class="form-control" validateEmpty="Este campo es obligatorio" rows="5" id="msg"></textarea>-->
                <!--</div>-->
                <!-- Temp Link - Delete -->
                <button id="send" class="btn btn-lg btn-primary btn-block btnPColor" type="button">Solicitar Inscripci&oacute;n</button>
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
    <input type="hidden" value="" id="selected_career">
    <input type="hidden" value="" id="selected_sex">
    <?php include('../../includes/inc.web.scripts.php'); ?> <!-- Scripts -->
    <script type="JavaScript" src="../../js/script.validate.js"></script>
    <script>
      // $(document).ready(function(){
      //   alert($("#selected_career").val()+"ale");
      // });
      // var validate = new ValidateFields();
      // $(function(){
      //   validate.createErrorDivs();
      //   $(validateElements).change(function(){
      //       validate.validateOneField($(this));
      //   });
      // });

      $("#send").click(function(){
        if(validate.validateFields('*') && $("#selected_career").val()!="")
        {
          sendMsg();
          $("#send").attr("disabled",true);
        }else{
          if($("#selected_career").val()=="")
          {
            alert("Seleccione una carrera.");
          }

          // if($("#selected_sex").val()!="")
          // {
          //   alert("Seleccione un sexo.")
          // }
        }
      });

      $("input[name=career]").click(function(){
        $("#selected_career").val($(this).val());
      });

      $("input[name=sex]").click(function(){
        $("#selected_sex").val($(this).val());
      });

      function sendMsg()
      {
        //if($('#career').is(':checked')) { alert($('input[name=career]:checked').val()); }
        var career = $("#selected_career").val();
        var sex = $("#selected_sex").val();
        var name = $("#name").val();
        var address = $("#address").val();
        var doc = $("#document").val();
        var email = $("#email").val();
        var phone = $("#phone").val();
        var occupation = $("#occupation").val();
        var msg = $("#msg").val();

        $.ajax({
          method: "POST",
          url: "formulario_preinscripcion.php",
          data: { name:name, email:email, phone:phone, msg:msg,career:career,sex:sex,address:address,doc:doc,occupation:occupation},
          success: function(callback){
            if(callback)
            {
              console.log(callback);
            }else{
              $(".sociosLoginInner").html('<br><br><h3 class="form-signin-heading"><b>Su mensaje ha sido enviado.<br>Gracias por contactarse.</b></h3>');
              alert("Mensaje enviado correctamente");
            }
          }
        });
      }
    </script>
  </body>
</html>
