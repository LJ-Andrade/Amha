<?php
session_start();
session_name('amhawebsite');

if( $_SESSION[ 'congreso_user' ] )
{
    header( "Location: congreso_actas.php" );
    die();
}

if( $_POST[ 'user' ] && $_POST[ 'password' ] )
{
  include_once("../../library/functions/func.common.php");
  // include_once("../../classes/class.database.php");
  // $DB = new DataBase();
  // $DB->Connect();
  $User = strtolower(addslashes($_POST['user']));
  $Pass = md5(addslashes($_POST['password']));

  // $Data = $DB->fetchAssoc("doctor","*","user = '".$User."' AND (password = '".$Pass."' OR password = '".$_POST['password']."')");
  if( $User == 'actascongreso' && $Pass == md5( 'confamha2018' ) )
  {

      $_SESSION[ 'congreso_user' ] = $User;

  }
  elseif( $User == 'cheketo' && $Pass == md5( '1234' ) )
  {

      $_SESSION[ 'congreso_user' ] = 'Cheketo';

  }else{

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
            <h1 class="txC">Congreso FAMHA 2018</h1>
            <hr>
            <h4 class="txC">Sección Exclusiva de Actas</h4>
            <hr>
          </div>
          <div class="sociosLogin">
            <div class="row txC">
              <p>
                Aquí encontrar&aacute; las actas disponibles de descarga exclusiva del Congreso FAMHA 2018.<br>
                Haga click en el bot&oacute;n "Acceder" para poder ingresar a la sección de descargas de actas.<br>
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
                  <h3 class="form-signin-heading">Acceso</h3><br>
                  <div class="form-group">
                    <input id="inputuser" class="form-control" placeholder="Usuario" required="Ingrese su usuario." autofocus="" type="name">
                  </div>
                  <div class="form-group">
                    <input id="inputpass" class="form-control" placeholder="Contrase&ntilde;a" required="Ingrese" type="password">
                  </div>

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
          alert('Debe ingresar con su usuario para poder ver secciones exclusivas del congreso.');
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
              url: "congreso_login.php",
              data: { user:user, password:password},
              success: function(callback){
                if(callback)
                {
                  console.log(callback);
                  alert(callback);
                }else{
                 document.location = 'congreso_actas.php';
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
