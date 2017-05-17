<?php
  include('../../includes/inc.main.php');
  $Company = new Pharmacy();
  $Head->setTitle("Farmacias");
  $Head->setIcon('<i class="fa fa-plus"></i>');
  $Head->setSubTitle('Listado de Farmacias');
  $Head->setHead();

  /* Header */
  include('../../includes/inc.top.php');
  
  /* Body Content */ 
  // Search List Box
  $Company->ConfigureSearchRequest();
  echo $Company->InsertSearchList();
  // Help Modal
  //include('modal.help.php');
  
  /* Footer */
  $Foot->SetScript('../../js/script.searchlist.js');
  include('../../includes/inc.bottom.php');
?>