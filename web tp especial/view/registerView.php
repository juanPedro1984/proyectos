<?php

require_once('libs/Smarty.class.php');

class registerView
{
  function register($error)
  {
    $smarty = new Smarty();
    $smarty->assign('error',$error);
    $smarty->display('templates/register.tpl');
  }
}



 ?>
