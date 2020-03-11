<?php

require_once('libs/Smarty.class.php');

class ComentView{

    function adminComent($titulo){
        $smarty = new Smarty();
        $smarty->assign('titulo',$titulo);
        $smarty->display('templates/adminComent.tpl');
    }

}

 ?>
