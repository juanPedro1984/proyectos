<?php
/* Smarty version 3.1.33, created on 2018-11-19 03:33:26
  from 'C:\xampp\htdocs\proyectos\TPE-webII\TPE-webII\templates\register.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5bf220f65a0832_32668659',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '54ce01dd3ca56340988072aa593a1db2392d2d4f' => 
    array (
      0 => 'C:\\xampp\\htdocs\\proyectos\\TPE-webII\\TPE-webII\\templates\\register.tpl',
      1 => 1542590285,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_5bf220f65a0832_32668659 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <meta charset="UTF-8" />
  <base href="//<?php echo $_SERVER['SERVER_NAME'];
echo dirname($_SERVER['PHP_SELF']);?>
/" target="_self">

  <title> DigitalGames </title>
  <link rel="stylesheet" type="text/css" href="./style/estilo.css" >
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>
<body>
  <div class="Navegador">
    <ul class="nav justify-content-center">
  <li class="nav-item">
    <a class="nav-link" href="home" id="Home">Home</a>
  </li>
  </ul>
  </div>

<div class="cuerpoRegistro">
  <h3>Formulario de registro</h3>
  <form class="formRegistro" action="cargarRegistro" method="post">
    <div class="form-group">
      <label class="label" for="exampleInputEmail1">Ingrese su email</label>
      <input type="email" class="form-control" id="Documento" aria-describedby="emailHelp" name="ingresarUsuario" placeholder="Email">
      <small id="emailHelp" class="form-text text-muted">Registrese con su Email</small>
    </div>
    <div class="form-group">
      <label class="label" for="exampleInputPassword1">Ingrese una contraseña</label>
      <input type="password" class="form-control" id="exampleInputPassword1" name="ingresarPassword" placeholder="Password">
    </div>
    <div class="form-group">
      <label class="label" for="exampleInputPassword1">Repita su contraseña</label>
      <input type="password" class="form-control" id="exampleInputPassword1" name="repetirPassword">
      <small id="emailHelp" class="form-text text-muted"><?php echo $_smarty_tpl->tpl_vars['error']->value;?>
</small>
    </div>
    <button type="submit" class="btn btn-primary">Registrarse</button>
  </form>
  <small id="emailHelp" class="form-text text-muted">Una ves registrado ingrese como administrador desde home.</small>

</div>
  <?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
</body>
</html>
<?php }
}
