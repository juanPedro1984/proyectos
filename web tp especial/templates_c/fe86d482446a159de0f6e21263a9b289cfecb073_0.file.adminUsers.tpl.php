<?php
/* Smarty version 3.1.33, created on 2018-11-23 02:01:17
  from 'C:\xampp\htdocs\proyectos\TPE-webII\TPE-webII\templates\adminUsers.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5bf7515dcd8561_21657272',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'fe86d482446a159de0f6e21263a9b289cfecb073' => 
    array (
      0 => 'C:\\xampp\\htdocs\\proyectos\\TPE-webII\\TPE-webII\\templates\\adminUsers.tpl',
      1 => 1542934843,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5bf7515dcd8561_21657272 (Smarty_Internal_Template $_smarty_tpl) {
?>
<table class="tablaUser">
  <tr>
    <td class="filaUserHead">Id de usuario</td>
    <td class="filaUserHead">Nombre de usuario</td>
    <td class="filaUserHead">Permiso de administrador</td>
    <td class="filaUserHead">Dar o negar permiso</td>
    <td class="filaUserHead">Eliminar usuario</td>
  </tr>
  <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['usuarios']->value, 'user');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['user']->value) {
?>

  <tr>
    <td class="filaUser"><?php echo $_smarty_tpl->tpl_vars['user']->value['id_usuario'];?>
 </td>
    <td class="filaUser"><?php echo $_smarty_tpl->tpl_vars['user']->value['Usuario'];?>
</td>
    <td class="filaUser"><?php if ($_smarty_tpl->tpl_vars['user']->value['Admin_permiso'] == 1) {?>
        Si
        <?php } else { ?>
        No
        <?php }?>
    </td>
    <td class="filaUser">
      <form class="" action="permiso" method="post">
      <input type="hidden" name="idUser" value="<?php echo $_smarty_tpl->tpl_vars['user']->value['id_usuario'];?>
">
      <?php if ($_smarty_tpl->tpl_vars['user']->value['Admin_permiso'] == 0) {?>
        <button type="submit" class="btn" name="permiso" value="1">Conceder permiso</button>
        <?php } elseif ($_smarty_tpl->tpl_vars['user']->value['Admin_permiso'] == 1) {?>
        <button type="submit" class="btn" name="permiso" value="0">Revocar permiso</button>
        <?php }?>
          </form>
    </td>
    <td class="filaUser">
      <form class="" action="delUser" method="get">
          <button type="submit" class="btn" name="delUser" value="<?php echo $_smarty_tpl->tpl_vars['user']->value['id_usuario'];?>
">Eliminar Usuario</button></td>
      </form>
    </tr>

  <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
</table>
<?php }
}
