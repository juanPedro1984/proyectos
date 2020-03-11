<?php
/* Smarty version 3.1.33, created on 2018-11-19 05:25:10
  from 'C:\xampp\htdocs\proyectos\TPE-webII\TPE-webII\templates\listaJuegosAdmin.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5bf23b26c6ca37_02549040',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ac212e5f08de37a34a1acd1928bdb1f3e8646dc4' => 
    array (
      0 => 'C:\\xampp\\htdocs\\proyectos\\TPE-webII\\TPE-webII\\templates\\listaJuegosAdmin.tpl',
      1 => 1542601506,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5bf23b26c6ca37_02549040 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="listaJuegos">
  <h2 class="items">Lista de juegos</h2>
  <ul class='tablaJuegos'>
  <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['juegos']->value, 'juego');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['juego']->value) {
?>
  <li> Id: <?php echo $_smarty_tpl->tpl_vars['juego']->value['id_Juego'];?>
<br>
    <div class="genRow">
    <h4 class="parr">Titulo: <?php echo $_smarty_tpl->tpl_vars['juego']->value['Titulo'];?>
</h4>
  <form class="boton btnLista" action="borrar" method="get">
    <button class="btn" type="submit" name="idBorrar" value="<?php echo $_smarty_tpl->tpl_vars['juego']->value['id_Juego'];?>
">Borrar</button>
    <button class="btn" type="submit" name="idEditar" formaction="edicion/<?php echo $_smarty_tpl->tpl_vars['juego']->value['id_Juego'];?>
" formmethod="post" value="">Edicion y carga de imagenes</button>
  </form>
</div>
  <hr>Consola: <?php echo $_smarty_tpl->tpl_vars['juego']->value['Consola'];?>
<br>Genero: <?php echo $_smarty_tpl->tpl_vars['juego']->value['Genero'];?>
<br>Precio: $<?php echo $_smarty_tpl->tpl_vars['juego']->value['Precio'];?>
<br>Descripcion: <br><?php echo $_smarty_tpl->tpl_vars['juego']->value['Descripcion'];?>
<br><br>
  <hr></li>
  <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
  </ul>
</div>
<?php }
}
