<?php

require_once('libs/Smarty.class.php');

class userView
{
  function usuariosView($users,$titulo){
      $smarty = new Smarty();
      $smarty->assign('usuarios',$users);
      $smarty->assign('titulo',$titulo);
      $smarty->display('templates/usuarios.tpl');

  }

}


 ?>
