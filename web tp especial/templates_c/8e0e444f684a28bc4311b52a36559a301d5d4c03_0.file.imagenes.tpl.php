<?php
/* Smarty version 3.1.33, created on 2018-11-16 20:55:09
  from 'C:\xampp\htdocs\proyectos\TPE-webII\TPE-webII\templates\imagenes.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5bef209de02b62_28639451',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8e0e444f684a28bc4311b52a36559a301d5d4c03' => 
    array (
      0 => 'C:\\xampp\\htdocs\\proyectos\\TPE-webII\\TPE-webII\\templates\\imagenes.tpl',
      1 => 1542398043,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:logout.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_5bef209de02b62_28639451 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8" />
  <title> </title>

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
  </form>
  </div>
  </div>
  </li>
  </ul>
  </div>
<div class="editContainer">

<div class="formulario formEdicion">

  <h2>Agregue una o mas imagenes: </h2>
  <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['juego']->value, 'game');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['game']->value) {
?>
  <h3><?php echo $_smarty_tpl->tpl_vars['game']->value['Titulo'];?>
</h3>
  <form class="formCarga" action="agregarimg" method="post" enctype="multipart/form-data">
    <input class="inputCarga" type="file" name="imagen[]" multiple value="" placeholder="Direccion de Imagen para juego:">
    <button class="btn" type="submit" name="id_Juego" value="<?php echo $_smarty_tpl->tpl_vars['game']->value['id_Juego'];?>
">Subir</button>
    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
  </form>
</div>

<div class="contEditImg">
  <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['imagenes']->value, 'img');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['img']->value) {
?>
  <img class="editImg"src="<?php echo $_smarty_tpl->tpl_vars['img']->value['Img_path'];?>
" alt="">
  <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
</div>

</div>
<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

</body>
</html>
<?php }
}
