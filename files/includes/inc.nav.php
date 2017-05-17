<aside class="main-sidebar">
  <section class="sidebar">
    <ul class="sidebar-menu">
      <li><a href="../doctors/list.php"><i class="fa fa-group"></i> <span>Médicos</span></a></li>
      <li><a href="../pharmacies/list.php"><i class="fa fa-plus"></i> <span>Farmacias</span></a></li>
      <?php if($_SESSION['user']=='cheketo'){ ?>
      <li><a href="../news/list.php"><i class="fa fa-newspaper-o"></i> <span>Novedades</span></a></li>
      <?php } ?>
      <li><a href="../main/main.php"><i class="fa fa-info-circle"></i> <span>Datos AMHA</span></a></li>
    </ul>
  </section>
</aside>
