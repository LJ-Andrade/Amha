<?php
  if (isset($_POST['email']))  {

    $AdminEmail = "administracion@amha.org.ar";
    $AdminEmail2 = "romero.m.alejandro@gmail.com";
    $Name = $_POST['first_name'].' '.$_POST['last_name'];
    $Email = $_POST['email'];
    $Phone = $_POST['phone'];
    $Address = $_POST['address'];
    $Subject = "Formulario de pre inscripcion congreso FAMHA";
    $Msg .= 'Remitente: <b>'.$Name.'</b><br>';
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
    $DB->Connect();
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
  <style type="text/css">
    .row-table {
      display: table;
      background-color:white;
    }
    
    .row-table .col-header {
      background-color: #726961;
      color:white;
      font-weight:bold;
    }
    
    
    
    .row-table [class*="col-"] {
        float: none;
        display: table-cell;
        vertical-align: middle;
    }
    
    .pre-header {
      font-weight:bold;
      color:#1b5c77;
    }
  </style>
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
          <br>
          <div class="form-info txC">
            <h4 class="pre-header">¡Descuentos y formas de pago!</h4>
          </div>
          <div class="row row-table">
            <div class="col-xs-6 form-info txC col-header">Formas de Pago</div>
            <div class="col-xs-2 form-info txC col-header">Valores Socios</div>
            <div class="col-xs-2 form-info txC col-header">Valores Colegiados</div>
            <div class="col-xs-2 form-info txC col-header">Valores Alumnos</div>
          </div>
          
          <div class="row row-table">
            <div class="col-xs-6 form-info">
              <b>Hasta el 31 DE JULIO DE 2017</b><br>
              1 Pago. Contado, débito o <span class="pre-header">tarjeta de crédito (Visa o Mastercard) en 12 cuotas.</span>
            </div>
            <div class="col-xs-2 form-info txC">$ 4.000.-</div>
            <div class="col-xs-2 form-info txC">$ 3.600.-</div>
            <div class="col-xs-2 form-info txC">$ 2.400.-</div>
          </div>
          
          <div class="row row-table">
            <div class="col-xs-6 form-info">
              <b>Desde AGOSTO 2017</b><br>
              1 Pago. Contado, débito o <span class="pre-header">tarjeta de crédito (Visa o Mastercard) en 12 cuotas.</span>
            </div>
            <div class="col-xs-2 form-info txC">$ 4.800.-</div>
            <div class="col-xs-2 form-info txC">$ 4.320.-</div>
            <div class="col-xs-2 form-info txC">$ 2.880.-</div>
          </div>
          
          <div class="row row-table">
            <div class="col-xs-6 form-info">
              <b>Desde ENERO 2018</b><br>
              1 Pago. Contado, débito o <span class="pre-header">tarjeta de crédito (Visa o Mastercard) en 6 cuotas.</span>
            </div>
            <div class="col-xs-2 form-info txC">$ 5.000.-</div>
            <div class="col-xs-2 form-info txC">$ 4.500.-</div>
            <div class="col-xs-2 form-info txC">$ 3.000.-</div>
          </div>
          
          <div class="row row-table">
            <div class="col-xs-6 form-info">
              <b>Desde JULIO 2018</b><br>
              1 Pago. Contado, débito o <span class="pre-header">tarjeta de crédito (Visa o Mastercard) en 3 cuotas.</span>
            </div>
            <div class="col-xs-2 form-info txC">$ 5.500.-</div>
            <div class="col-xs-2 form-info txC">$ 4.950.-</div>
            <div class="col-xs-2 form-info txC">$ 3.300.-</div>
          </div>
          
          <div class="sociosLogin">
            <div class="sociosLoginInner">
              
              <form  id="inscriptionForm" class="form-signin" action="" method="post">
                <div class="form-info">
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
              </div></form><br>
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
        if(validate.validateFields('*'))
        {
          sendMsg();
          $("#send").attr("disabled",true);
        }
      });

      

      function sendMsg()
      {
        //if($('#career').is(':checked')) { alert($('input[name=career]:checked').val()); }
        
        var fname = $("#first_name").val();
        var lname = $("#last_name").val();
        var address = $("#address").val();
        var email = $("#email").val();
        var phone = $("#phone").val();

        $.ajax({
          method: "POST",
          url: "formulario_congreso.php",
          data: { first_name:fname, last_name:lname, email:email, phone:phone ,address:address},
          success: function(callback){
            if(callback)
            {
              alert("Se produjo un error al enviar el formulario. Por favor, intente de nuevo.");
              $("#send").attr("disabled",false);
              console.log(callback);
            }else{
              $(".sociosLoginInner").html('<br><br><h3 class="form-signin-heading"><b>Hemos recibido el formulario de pre inscripci&oacute;n.<br>Gracias por contactarse.</b></h3><br><br>');
              alert("Formulario enviado correctamente");
            }
          }
        });
      }
    </script>
  </body>
</html>
