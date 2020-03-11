<?php
/* Smarty version 3.1.33, created on 2018-11-22 03:57:27
  from 'C:\xampp\htdocs\proyectos\TPE-webII\TPE-webII\templates\generosIndex.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5bf61b17802112_26346240',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1cdac804d63cdd37fe813f0eade0971d8793d32e' => 
    array (
      0 => 'C:\\xampp\\htdocs\\proyectos\\TPE-webII\\TPE-webII\\templates\\generosIndex.tpl',
      1 => 1542855440,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5bf61b17802112_26346240 (Smarty_Internal_Template $_smarty_tpl) {
?><h2>Juegos por genero</h2>

    <table class="table table-striped">
      <thead>
        <tr>
          <th scope="col">Titulo</th>
          <th scope="col">Consola</th>
          <th scope="col">Genero</th>
        </tr>
      </thead>
      <tbody>
          <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['categorias']->value, 'categoria');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['categoria']->value) {
?>
          <tr>
          <td class="tdCategoria"><a class="tdJuego" href="Detalle/<?php echo $_smarty_tpl->tpl_vars['categoria']->value['id_Juego'];?>
" value="<?php echo $_smarty_tpl->tpl_vars['categoria']->value['id_Juego'];?>
"><?php echo $_smarty_tpl->tpl_vars['categoria']->value['Titulo'];?>
</a></td>
          <td class="tdCategoria"><?php echo $_smarty_tpl->tpl_vars['categoria']->value['Consola'];?>
</td>
          <td class="tdCategoria"><?php echo $_smarty_tpl->tpl_vars['categoria']->value['Genero'];?>
</td>
          </tr>
          <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
      </tbody>
    </table>
<?php }
}
