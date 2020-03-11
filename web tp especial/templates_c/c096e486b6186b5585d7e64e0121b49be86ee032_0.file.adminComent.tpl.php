<?php
/* Smarty version 3.1.33, created on 2018-11-23 03:27:36
  from 'C:\xampp\htdocs\proyectos\TPE-webII\TPE-webII\templates\adminComent.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5bf7659835b601_27430162',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c096e486b6186b5585d7e64e0121b49be86ee032' => 
    array (
      0 => 'C:\\xampp\\htdocs\\proyectos\\TPE-webII\\TPE-webII\\templates\\adminComent.tpl',
      1 => 1542939638,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:logout.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_5bf7659835b601_27430162 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html>

  <head>
    <meta charset="UTF-8" />
    <base href="//<?php echo $_SERVER['SERVER_NAME'];
echo dirname($_SERVER['PHP_SELF']);?>
/" target="_self">
    <title><?php echo $_smarty_tpl->tpl_vars['titulo']->value;?>
 </title>
    <link rel="stylesheet" type="text/css" href="./style/estilo.css" >
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
  </head>

<body>

    <div class="Navegador">

        <ul class="nav justify-content-center">
          <li class="nav-item">
            <a class="nav-link" href="home" id="Home">Home</a>
          </li>

          <li class="nav-item">
            <div class="dropdown ">
                <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Administrador</button>
                <div class="dropdown-menu " aria-labelledby="dropdownMenuButton">
                  <?php if (isset($_SESSION['User'])) {?>
                  <?php $_smarty_tpl->_subTemplateRender("file:logout.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
                  <?php }?>
                </div>
            </div>
          </li>
        </ul>

    </div>
<div class="cuerpo">

    <div class="comentList">

    </div>

</div>

<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

</body>

<?php echo '<script'; ?>
 src="./js/adminComent.js" type="text/javascript"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="https://cdnjs.cloudflare.com/ajax/libs/handlebars.js/4.0.12/handlebars.js"><?php echo '</script'; ?>
>

</html>
<?php }
}
