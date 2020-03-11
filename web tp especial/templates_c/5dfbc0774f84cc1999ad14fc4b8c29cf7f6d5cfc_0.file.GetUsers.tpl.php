<?php
/* Smarty version 3.1.33, created on 2018-11-19 03:24:41
  from 'C:\xampp\htdocs\proyectos\TPE-webII\TPE-webII\templates\GetUsers.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5bf21ee9202918_04360369',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5dfbc0774f84cc1999ad14fc4b8c29cf7f6d5cfc' => 
    array (
      0 => 'C:\\xampp\\htdocs\\proyectos\\TPE-webII\\TPE-webII\\templates\\GetUsers.tpl',
      1 => 1542594278,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5bf21ee9202918_04360369 (Smarty_Internal_Template $_smarty_tpl) {
?>
<table>
  <tr>
    <td>Id de usuario</td>
    <td>Nombre de usuario</td>
    <td>Permiso de administrador</td>
    <td></td>
  </tr>
  <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['usuarios']->value, 'user');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['user']->value) {
?>
  <tr>
    <td><?php echo $_smarty_tpl->tpl_vars['user']->value['id_usuario'];?>
 </td>
    <td><?php echo $_smarty_tpl->tpl_vars['user']->value['Usuario'];?>
</td>
    <td><?php if ($_smarty_tpl->tpl_vars['user']->value['Admin_permiso'] == 1) {?>
        Si
        <?php } else { ?>
        No
        <?php }?>
    </td>
    <td><?php if ($_smarty_tpl->tpl_vars['user']->value['Admin_permiso'] == 1) {?>
        <button type="button" name="button">Conceder permiso</button>
        <?php } else { ?>
        <button type="button" name="button">Revocar permiso</button>
        <?php }?></td>
    <td><button type="button" name="button">Eliminar Usuario</button></td>
  </tr>
  <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
</table>
<?php }
}
