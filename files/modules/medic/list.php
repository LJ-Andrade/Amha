<?php
  include('../../includes/inc.main.php');
  $Doctor = new Doctor();
  $Head->setTitle("Clientes");
  $Head->setIcon('<i class="fa fa-plus"></i>');
  $Head->setSubTitle('Listado de M&eacute;dicos');
  $Head->setHead();

  /* Header */
  include('../../includes/inc.top.php');

  /* Body Content */
  // Search List Box
  $Doctor->ConfigureSearchRequest();
  echo $Doctor->InsertSearchList();
  // Help Modal
  //include('modal.help.php');

  /* Footer */
  $Foot->SetScript('../../js/script.searchlist.js');
  include('../../includes/inc.bottom.php');
?>
