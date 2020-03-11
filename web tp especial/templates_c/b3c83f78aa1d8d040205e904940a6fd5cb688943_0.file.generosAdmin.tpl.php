<?php
/* Smarty version 3.1.33, created on 2018-11-22 04:11:34
  from 'C:\xampp\htdocs\proyectos\TPE-webII\TPE-webII\templates\generosAdmin.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5bf61e661d9982_13378380',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b3c83f78aa1d8d040205e904940a6fd5cb688943' => 
    array (
      0 => 'C:\\xampp\\htdocs\\proyectos\\TPE-webII\\TPE-webII\\templates\\generosAdmin.tpl',
      1 => 1542856292,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5bf61e661d9982_13378380 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="listaJuegos">
<h2 class="items">Lista de Items</h2>
<ul class='tablaJuegos'>
<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['categorias']->value, 'categoria');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['categoria']->value) {
?>
<li> Id: <?php echo $_smarty_tpl->tpl_vars['categoria']->value['id_Juego'];?>
 <br>
  <div class="genRow">
  <h4 class="parr">Titulo: <?php echo $_smarty_tpl->tpl_vars['categoria']->value['Titulo'];?>
</h4>
  <form class="boton btnLista" action="borrar" method="get">
    <button class="btn" type="submit" name="idBorrar" value="<?php echo $_smarty_tpl->tpl_vars['categoria']->value['id_Juego'];?>
">Borrar</button>
    <button class="btn" type="submit" name="idEditar" formaction="edicion/<?php echo $_smarty_tpl->tpl_vars['juego']->value['id_Juego'];?>
" formmethod="post" value="">Edicion y carga de imagenes</button>
  </form>
  </form>
</div>
  <hr>Consola: <?php echo $_smarty_tpl->tpl_vars['categoria']->value['Consola'];?>
<br>Genero: <?php echo $_smarty_tpl->tpl_vars['categoria']->value['Genero'];?>
 (Id: <?php echo $_smarty_tpl->tpl_vars['categoria']->value['id_Genero'];?>
) <br>Descripcion: <?php echo $_smarty_tpl->tpl_vars['categoria']->value['Descripcion'];?>
<br>Precio: $<?php echo $_smarty_tpl->tpl_vars['categoria']->value["Precio"];?>
<br>
<hr></li>
<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
</ul>
</div>
<?php }
}
