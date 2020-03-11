<?php
/* Smarty version 3.1.33, created on 2018-10-24 06:27:07
  from 'C:\xampp\htdocs\proyectos\TPE-webII\TPE-webII\templates\navAdmin.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5bcff49bda2b16_38182500',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8ed25c0d1bd247417030388168863a0eb0b55861' => 
    array (
      0 => 'C:\\xampp\\htdocs\\proyectos\\TPE-webII\\TPE-webII\\templates\\navAdmin.tpl',
      1 => 1540355148,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5bcff49bda2b16_38182500 (Smarty_Internal_Template $_smarty_tpl) {
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
  <form action="filtrarAdmin" method="get" class="dropdown-menu" aria-labelledby="dropdownMenuButton">
      <button type="submit" class="dropdown-item" formaction="administrador" >Todos los juegos</button>
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['generos']->value, 'genero');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['genero']->value) {
?>
      <button type="submit" class="dropdown-item" name="seleccionarGenAdmin" value="<?php echo $_smarty_tpl->tpl_vars['genero']->value['id_Genero'];?>
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
  <a class="nav-link" href="logout">Logout</a>
</li>
</ul>
</div>
<?php }
}
