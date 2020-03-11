<?php
/* Smarty version 3.1.33, created on 2018-11-21 21:41:11
  from 'C:\xampp\htdocs\proyectos\TPE-webII\TPE-webII\templates\signIn.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5bf5c2e753f1f1_12104576',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '22c95b564cd698d71180f134edb7aa9d5e731c13' => 
    array (
      0 => 'C:\\xampp\\htdocs\\proyectos\\TPE-webII\\TPE-webII\\templates\\signIn.tpl',
      1 => 1542832663,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5bf5c2e753f1f1_12104576 (Smarty_Internal_Template $_smarty_tpl) {
?><form class="signIn" action="signIn" method="post">
<div class="form-group">
  <label for="exampleInputEmail1">Email</label>
  <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="Documento" placeholder="Ingrese email">
</div>
<div class="form-group">
  <label for="exampleInputPassword1">Password</label>
  <input type="password" class="form-control" id="exampleInputPassword1" name="Contraseña" placeholder="Password">
</div>
<button type="submit" class="btn btn-primary">Sign in</button>
<small id="emailHelp" class="form-text text-muted">¿No estas registrado?</small>
<button type="submit" formaction="register" class="btn btn-primary">Sign up</button>
  </form>
<?php }
}
