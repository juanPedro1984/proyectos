<?php
/* Smarty version 3.1.33, created on 2018-10-07 20:53:49
  from 'C:\xampp\htdocs\proyectos\TPE-webII\TPE-webII\templates\navegador.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5bba563da0e9c8_13104071',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '270069069292563d62ae8dffa4d0a7f4a4610ec9' => 
    array (
      0 => 'C:\\xampp\\htdocs\\proyectos\\TPE-webII\\TPE-webII\\templates\\navegador.tpl',
      1 => 1538938418,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5bba563da0e9c8_13104071 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="Navegador">
  <ul class="nav justify-content-center">
<li class="nav-item">
  <a class="nav-link" href="home" id="Home">Home</a>
</li>
<li class="nav-item">
  <a class="nav-link" href="#">Informacion</a>
</li>
<li class="nav-item">
  <div class="dropdown">
<button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> Categoria </button>
<form action="filtrar" method="post" class="dropdown-menu" aria-labelledby="dropdownMenuButton">
  <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['generos']->value, 'genero');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['genero']->value) {
?>
    <button type="submit" class="dropdown-item" name="seleccionarGen" value="<?php echo $_smarty_tpl->tpl_vars['genero']->value['id_Genero'];?>
" ><?php echo $_smarty_tpl->tpl_vars['genero']->value['Genero'];?>
</button>
  <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
</form>
</div>
</li>

<li class="nav-item">
 <div class="dropdown">
<button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> Sign In</i> </button>
<div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
 <form action="administrador" method="post">
 <li>Documento: <input  type="number" name="Documento" /></li>
 <li>Contraseña: <input type="text" name="Contraseña" /></li>
 <li><input type="submit" value="Sign in"></li>
 <li>¿No estas registrado</li>
 <li><input type="submit" value="Sign up"formaction="register" ></li>
</form>
</div>
</div>
</li>
</ul>
</div>
<?php }
}
