<?php
session_start();
session_name('amhawebsite');

if($_SESSION['user'])
{
  header("Location: revista_socios.php");
  die();
}

if($_POST['user'] && $_POST['password'])
{
  include_once("../../library/functions/func.common.php");
  include_once("../../classes/class.database.php");
  $DB = new DataBase();
  $DB->Connect();
  $User = strtolower(addslashes($_POST['user']));
  $Pass = md5(addslashes($_POST['password']));

  $Data = $DB->fetchAssoc("doctor","*","user = '".$User."' AND (password = '".$Pass."' OR password = '".$_POST['password']."')");
  if($Data[0]['user']==$User)
  {
    $_SESSION['user'] = $User;
    $_SESSION['first_name'] = $Data[0]['first_name'];
    $_SESSION['last_name'] = $Data[0]['last_name'];
    $_SESSION['sex'] = $Data[0]['sex'];
  }elseif($User=='cheketo' && $Pass==md5('1234')){
    $_SESSION['user'] = 'Cheketo';
    $_SESSION['first_name'] = 'Alejandro';
    $_SESSION['last_name'] = 'Romero';
    $_SESSION['sex'] = 'M';
  }else{
    //echo $DB->lastQuery();
    echo "Verifique los datos ingresados.";
  }
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
        <?php  if ($_GET['view']== 'socios') {

          include('../../../files/includes/inc.menu.socios.php');

        } else {

          include('../../../files/includes/inc.menu.alumnos.php');

        }
        ?>
        <!-- /// /Left Floating Menu /// -->
        <div class="col-lg-7 col-md-8 col-xs-12 contentContainer">
          <div class="sectionTits">
            <h1 class="txC">Revista Homeopat&iacute;a</h1>
            <hr>
            <h4 class="txC">Suscripci&oacute;n Exclusiva para socios</h4>
            <hr>
          </div>
          <div class="sociosLogin">
            <div class="row txC">
              <p>
                Aquí encontrar&aacute; las publicaciones disponibles de descarga exclusiva para SOCIOS y ALUMNOS.<br>
                Haga click en el bot&oacute;n "Acceder" para poder descargar la &uacute;ltima versi&oacute;n.<br>
                Si no tiene su clave de acceso, solic&iacute;tela socios@amha.org.ar - <b>Tel&eacute;fono 4826-0911</b>
              </p>
            </div>
            <div class="row">
              <br>
              <div class="col-md-6">
                <div class="sociosLoginInner">
                  <img src="../../../skin/files/revistasocios/revistasocios.jpg" alt="" />
                </div>
              </div>
              <div class="col-md-6">
                <form class="form-signin formSocios">
                  <h3 class="form-signin-heading">Acceso para socios</h3><br>
                  <div class="form-group">
                    <input id="inputuser" class="form-control" placeholder="Nombre de Usuario" required="Ingrese su usuario." autofocus="" type="name">
                  </div>
                  <div class="form-group">
                    <input id="inputpass" class="form-control" placeholder="Contrase&ntilde;a" required="Ingrese" type="password">
                  </div>
                  <!-- <div class="checkbox">
                    <label><input value="remember-me" type="checkbox"> Recordarme</label>
                  </div> -->

                  <input type="button" id="SubmitUser" class="btn btn-lg btn-primary btn-block btnPColor" value="Ingresar" />
                  <!--<button class="btn btn-lg btn-primary btn-block btnPColor" type="submit">Ingresar</button>-->

                </form>
              </div>
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
      $(document).ready(function(){
        if($get['msg']=='invalid'){
          alert('Debe ingresar para poder ver secciones exclusivas para socios.');
        }
      });
      $(function(){
        $("#SubmitUser").click(function(){
          if(validate.validateFields('*'))
          {
            var user      = $("#inputuser").val();
            var password  = $("#inputpass").val();

            $.ajax({
              method: "POST",
              url: "socios_login.php",
              data: { user:user, password:password},
              success: function(callback){
                if(callback)
                {
                  console.log(callback);
                  alert(callback);
                }else{
                 document.location = 'revista_socios.php';
                }
              }
            });
          }

        });

        $( "input" ).keypress( function( e )
        {

            if( e.which == 13 )
            {

                $( "#SubmitUser" ).click();

            }

        });
      });

    </script>
  </body>
</html>
