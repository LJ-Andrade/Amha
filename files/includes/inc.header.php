<?php include('../../includes/inc.loader.php'); ?>
<!-- =============================================== -->
<header class="main-header">
  <!-- Logo -->
  <a href="../main/main.php" class="logo">
    <!-- mini logo for sidebar mini 50x50 pixels -->
    <span class="logo-mini"><b><i class="fa fa-shirtsinbulk"></i></b></span>
    <!-- logo for regular state and mobile devices -->
    <span class="logo-lg"><b>AMHA</b></span>
  </a>

  <!-- Header Navbar: style can be found in header.less -->
  <nav class="navbar navbar-static-top">
    <!-- Sidebar toggle button-->
    <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button" id="SidebarToggle"></a>

    <div class="navbar-custom-menu">
      <ul class="nav navbar-nav">
        <li class="dropdown user user-menu">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown">
            <img src="../../../skin/images/body/logos/weblogo2.png" class="user-image" alt="User Image">
            <span class="hidden-xs" id="userfullname">A.M.H.A.</span>
          </a>
          <ul class="dropdown-menu">
            <!-- User image -->
            <li class="user-header">
              <img src="../../../skin/images/body/logos/weblogo2.png" class="img-circle" alt="User Image">
              <p>
                A.M.H.A.
                <small>Asociación Médica Homeopática Argentina</small>
              </p>
            </li>

            <!-- Menu Footer-->
            <li class="user-footer">
              <div class="txC">
                <a id="Logout" class="btn btn-danger btn-flat">Cerrar Sesi&oacute;n</a>
              </div>
            </li>
          </ul>
        </li>
        <!-- Control Sidebar Toggle Button -->
        <?php if($AdmLink=="user/profile.php"){ ?>
        <li>
          <a href="#" data-toggle="control-sidebar"><i class="fa fa-gears"></i></a>
        </li>
        <?php } ?>
      </ul>
    </div>
  </nav>
</header>

<!-- =============================================== -->

<?php include('../../includes/inc.nav.php'); ?>

<!-- =============================================== -->
<?php if($AdmLink=="user/profile.php"){ ?>
<?php include('../../includes/inc.sidebar.php'); ?>
<?php } ?>
