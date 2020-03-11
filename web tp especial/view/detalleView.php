<?php
require_once('libs/Smarty.class.php');

class DetalleView
{

  function mostrarDet($detalles,$userId,$imagenes)
  {
    $smarty = new Smarty();
    $smarty->assign('detalle',$detalles);
    $smarty->assign('userId',$userId);
    $smarty->assign('imagenes',$imagenes);
    $smarty->display('templates/detalle.tpl');
  }
}



 ?>
