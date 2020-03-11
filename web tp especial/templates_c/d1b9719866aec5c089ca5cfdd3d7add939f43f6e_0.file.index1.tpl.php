<?php
/* Smarty version 3.1.33, created on 2018-10-07 21:14:15
  from 'C:\xampp\htdocs\proyectos\TPE-webII\TPE-webII\templates\index1.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5bba5b07452421_97908280',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd1b9719866aec5c089ca5cfdd3d7add939f43f6e' => 
    array (
      0 => 'C:\\xampp\\htdocs\\proyectos\\TPE-webII\\TPE-webII\\templates\\index1.tpl',
      1 => 1538939652,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:navegador.tpl' => 1,
    'file:generos.tpl' => 1,
    'file:text.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_5bba5b07452421_97908280 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8" />
  <title> DigitalGames.com</title>
  <link rel="stylesheet" type="text/css" href="./style/estilo.css" >
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
  <meta charset="utf-8">

</head>
<body>
<?php $_smarty_tpl->_subTemplateRender("file:navegador.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<div class="row">
  <div class="col-12 col-md-8" id="Cuerpo">
    <div class="contenedor">

      <?php if ($_smarty_tpl->tpl_vars['categorias']->value !== null) {?>
        <?php $_smarty_tpl->_subTemplateRender("file:generos.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
        <?php } else { ?>
        <?php $_smarty_tpl->_subTemplateRender("file:text.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
        <?php }?>

    </div>
</div>
  <div class="col-6 col-md-4" class="foto">
      <div class="text-center">
      <img src="./image/propaganda3.jpg" class="img-fluid" class="img-thumbnail" alt="Responsive image" id="foto1">
      <img src="./image/propaganda2.jpg" class="img-fluid" class="img-thumbnail" alt="Responsive image" id="fotodos">
    </div></div>
</div>

<div class="container">

</div>
<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

</body>
</html>
<?php }
}
