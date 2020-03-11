<?php
/* Smarty version 3.1.33, created on 2018-11-22 04:03:48
  from 'C:\xampp\htdocs\proyectos\TPE-webII\TPE-webII\templates\index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5bf61c947d6494_78839085',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '18ae7665139b2298d178d4879ab75891a0fa185a' => 
    array (
      0 => 'C:\\xampp\\htdocs\\proyectos\\TPE-webII\\TPE-webII\\templates\\index.tpl',
      1 => 1542855823,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:logout.tpl' => 1,
    'file:signIn.tpl' => 1,
    'file:generosIndex.tpl' => 1,
    'file:todosLosJuegos.tpl' => 1,
    'file:text.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_5bf61c947d6494_78839085 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8" />
  <base href="//<?php echo $_SERVER['SERVER_NAME'];
echo dirname($_SERVER['PHP_SELF']);?>
/" target="_self">
  <title> DigitalGames.com</title>
  <link rel="stylesheet" type="text/css" href="./style/estilo.css" >
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
  <meta charset="utf-8">

</head>
<body>
  <div class="Navegador">
    <ul class="nav justify-content-center">
  <li class="nav-item">
    <a class="nav-link" href="home" id="Home">Home</a>
  </li>
  <li class="nav-item">
    <div class="dropdown">
  <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> Categoria </button>
  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
      <a class="dropdown-item" href="filtro/AllGames">Todos los juegos</a>
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['generos']->value, 'genero');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['genero']->value) {
?>
      <a class="dropdown-item" href="filtro/<?php echo $_smarty_tpl->tpl_vars['genero']->value['id_Genero'];?>
"><?php echo $_smarty_tpl->tpl_vars['genero']->value['Genero'];?>
</a>
    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
  </div>
  </div>
  </li>


  <li class="nav-item">
  <div class="dropdown ">
  <?php if ((isset($_SESSION['User'])) && (isset($_smarty_tpl->tpl_vars['user']->value)) && ($_smarty_tpl->tpl_vars['user']->value[0]['Admin_permiso'] == 0)) {?>
    <a class="nav-link" href="logout" id="Home">Logout</a>
    <?php } elseif ((isset($_SESSION['User'])) && (isset($_smarty_tpl->tpl_vars['user']->value)) && ($_smarty_tpl->tpl_vars['user']->value[0]['Admin_permiso'] == 1)) {?>
    <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Administrador</button>
    <?php } else { ?>
    <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Iniciar Sesion</button>
  <?php }?>

  <div class="dropdown-menu " aria-labelledby="dropdownMenuButton">
    <?php if (isset($_SESSION['User'])) {?>
    <?php $_smarty_tpl->_subTemplateRender("file:logout.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    <?php } else { ?>
    <?php $_smarty_tpl->_subTemplateRender("file:signIn.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    <?php }?>

  </div>
  </div>
  </li>

  </ul>
  </div>

<div class="row">
  <div class="col-12 col-md-8" id="Cuerpo">
    <div class="contenedor">

      <?php if ($_smarty_tpl->tpl_vars['categorias']->value !== null) {?>
        <?php $_smarty_tpl->_subTemplateRender("file:generosIndex.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
        <?php } elseif (isset($_smarty_tpl->tpl_vars['getAll']->value)) {?>
        <?php $_smarty_tpl->_subTemplateRender("file:todosLosJuegos.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
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

<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

</body>
</html>
<?php }
}
