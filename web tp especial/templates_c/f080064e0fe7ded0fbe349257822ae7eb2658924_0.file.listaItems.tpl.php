<?php
/* Smarty version 3.1.33, created on 2018-10-24 15:29:58
  from 'C:\xampp\htdocs\proyectos\TPE-webII\TPE-webII\templates\listaItems.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5bd073d6ca9283_61055953',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f080064e0fe7ded0fbe349257822ae7eb2658924' => 
    array (
      0 => 'C:\\xampp\\htdocs\\proyectos\\TPE-webII\\TPE-webII\\templates\\listaItems.tpl',
      1 => 1540387794,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5bd073d6ca9283_61055953 (Smarty_Internal_Template $_smarty_tpl) {
?><h2 class="items">Lista de generos</h2>
<ul class='tabla'>
<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['generos']->value, 'genero');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['genero']->value) {
?>
<li>Id: <?php echo $_smarty_tpl->tpl_vars['genero']->value['id_Genero'];?>
 | Genero: <?php echo $_smarty_tpl->tpl_vars['genero']->value['Genero'];?>

<form class="" action="borrarGen" method="post">
  <button type="submit" name="cargaGenero" value="<?php echo $_smarty_tpl->tpl_vars['genero']->value['id_Genero'];?>
">Borrar</button>
</form>
<hr></li>
<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
</ul>
<h2 class="items">Lista de juegos</h2>
<ul class='tabla'>
<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['juegos']->value, 'juego');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['juego']->value) {
?>
<li> Id: <?php echo $_smarty_tpl->tpl_vars['juego']->value['id_Juego'];?>
<h4>Titulo: <?php echo $_smarty_tpl->tpl_vars['juego']->value['Titulo'];?>
</h4><hr>Consola: <?php echo $_smarty_tpl->tpl_vars['juego']->value['Consola'];?>
<br>Genero: <?php echo $_smarty_tpl->tpl_vars['juego']->value['Genero'];?>
<br>Precio: $<?php echo $_smarty_tpl->tpl_vars['juego']->value['Precio'];?>
<br>Descripcion: <br><?php echo $_smarty_tpl->tpl_vars['juego']->value['Descripcion'];?>
<br><br>
<form class="" action="borrar" method="get">
  <button type="submit" name="idBorrar" value="<?php echo $_smarty_tpl->tpl_vars['juego']->value['id_Juego'];?>
">Borrar</button>
  <button type="submit" name="idEditar" formaction="edicion" formmethod="post" value="<?php echo $_smarty_tpl->tpl_vars['juego']->value['id_Juego'];?>
">Editar</button>
</form>
<hr></li>
<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
</ul>
<?php }
}
