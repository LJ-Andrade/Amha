<?php
  include("../../includes/inc.main.php");
  $Head->setTitle("Login");
  $Head->setHead();
?>
<body class="hold-transition login-page">
<div class="login-box">

  <div class="login-box-body">
    <div class="login-logo">
    <span style="color:#FFF;font-size:1em;"><img src="../../../skin/images/body/logos/weblogo.png" style="width:7em;height:7em;"></img></span>
  </div>
  <!-- /.login-logo -->
    <p class="login-box-msg" style="color:#CCC;">INICIAR SESI&Oacute;N</p>
      <div class="form-group has-feedback">
        <input type="email" class="form-control" name="user" id="user" placeholder="Usuario" value="<?php echo $_COOKIE['rememberuser'];?>" autofocus>
        <span class="fa fa-envelope form-control-feedback"></span>
      </div>
      <div class="form-group has-feedback">
        <input type="password" class="form-control" name="password" id="password" placeholder="Contrase&ntilde;a" value="<?php echo $_COOKIE['rememberpassword'];?>">
        <span class="fa fa-lock form-control-feedback"></span>
      </div>
      <div class="row">
        <!-- <div class="col-xs-8">
          <div class="checkbox icheck">
            <label>
              <input type="checkbox" <?php echo $Checked ?> class="iCheckbox" name="rememberuser" id="rememberuser" value="1" > <span>Recordarme</span>
            </label>
          </div>
        </div> -->
        <!-- /.col -->
        <div class="col-xs-12">
          <button type="button" class="btn btn-primary btn-block btn-flat ButtonLogin">Ingresar</button>
        </div>
        <!-- /.col -->
      </div>
    <!--<a href="forgotuser.php">Olvid&eacute; mi contrase&ntilde;a</a><br>-->
  </div>
  <!-- /.login-box-body -->
</div>
<!-- /.login-box -->

<?php
$Foot->setFoot();
?>
