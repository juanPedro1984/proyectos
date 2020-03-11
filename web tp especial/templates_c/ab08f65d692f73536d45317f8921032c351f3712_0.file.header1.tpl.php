<?php
/* Smarty version 3.1.33, created on 2018-10-06 21:36:43
  from 'C:\xampp\htdocs\proyectos\TPE-webII\TPE-webII\templates\header1.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5bb90ecb0b3375_59620315',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ab08f65d692f73536d45317f8921032c351f3712' => 
    array (
      0 => 'C:\\xampp\\htdocs\\proyectos\\TPE-webII\\TPE-webII\\templates\\header1.tpl',
      1 => 1538854586,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5bb90ecb0b3375_59620315 (Smarty_Internal_Template $_smarty_tpl) {
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
<div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
  <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['generos']->value, 'genero');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['genero']->value) {
?>
    <a class="dropdown-item" href="filGen" value=<?php echo $_smarty_tpl->tpl_vars['genero']->value['id_Genero'];?>
 ><?php echo $_smarty_tpl->tpl_vars['genero']->value['Genero'];?>
</a>
  <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
</div>
</div>
</li>
</ul>
</div>
<?php }
}
