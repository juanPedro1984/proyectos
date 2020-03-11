<?php
/* Smarty version 3.1.33, created on 2018-11-22 04:05:16
  from 'C:\xampp\htdocs\proyectos\TPE-webII\TPE-webII\templates\admin.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5bf61cec84f847_10417563',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '767d66421727c09744067d18863665d8ca25dd32' => 
    array (
      0 => 'C:\\xampp\\htdocs\\proyectos\\TPE-webII\\TPE-webII\\templates\\admin.tpl',
      1 => 1542855915,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:logout.tpl' => 1,
    'file:generosAdmin.tpl' => 1,
    'file:listaJuegosAdmin.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_5bf61cec84f847_10417563 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8" />
  <base href="//<?php echo $_SERVER['SERVER_NAME'];
echo dirname($_SERVER['PHP_SELF']);?>
/" target="_self">

  <title> <?php echo $_smarty_tpl->tpl_vars['titulo']->value;?>
 </title>
  <link rel="stylesheet" type="text/css" href="./style/estilo.css" >
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>
<body>
  <div class="Navegador">
    <ul class="nav justify-content-center">
  <li class="nav-item">
    <a class="nav-link" href="home" id="Home">Home</a>
  </li>
  <li class="nav-item">
    <div class="dropdown">
  <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> Categoria </button>
    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
        <a class="dropdown-item" href="filtroAdmin/AllGames">Todos los juegos</a>
      <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['generos']->value, 'genero');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['genero']->value) {
?>
        <a class="dropdown-item" href="filtroAdmin/<?php echo $_smarty_tpl->tpl_vars['genero']->value['id_Genero'];?>
"><?php echo $_smarty_tpl->tpl_vars['genero']->value['Genero'];?>
</a>
      <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </div>
  </div>
  </li>
  <li class="nav-item">
  <div class="dropdown ">
  <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Administrador</button>
  <div class="dropdown-menu " aria-labelledby="dropdownMenuButton">

    <?php if (isset($_SESSION['User'])) {?>
    <?php $_smarty_tpl->_subTemplateRender("file:logout.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    <?php }?>
  </form>
  </div>
  </div>
  </li>
  </ul>
  </div>

<div class="cuerpo">
  <div class="contForm">
    <div class="formulario">
      <h2>Carga de Juegos</h2>
      <form class="formCarga" action="agregar" method="post">
        <input class="inputCarga" type="text" name="cargaConsola" value="" placeholder="ingrese tipo de consola">
        <input class="inputCarga" type="text" name="cargaTitulo" value="" placeholder="ingrese titulo del juego">
        <p>Seleccione Genero
        <select class="inputCarga" name="selectGen">
          <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['generos']->value, 'genero');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['genero']->value) {
?>
            <option value= "<?php echo $_smarty_tpl->tpl_vars['genero']->value['id_Genero'];?>
" ><?php echo $_smarty_tpl->tpl_vars['genero']->value['Genero'];?>
</option>
          <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </select>
      </p>
        <input class="inputCarga" type="number" name="cargaPrecio" value="" placeholder="ingrese precio del juego">
        <textarea name="cargaDescripcion" rows="4" cols="54" placeholder="ingrese breve descripcion"></textarea>
        <div class="buttons">
          <button class="btn" type="submit" name="button">Cargar</button>
        </div>
      </form>

    </div>
    <div class="formulario">
      <h2>Carga de Generos</h2>
      <form class="formCarga" action="genero" method="post">
        <input class="inputCarga" type="text" name="cargaGenero" value="" placeholder="ingrese genero del juego">
        <div class="buttons">
          <button class="btn" type="submit" name="button">Cargar</button>
        </div>
      </form>
    </div>

  <div class="listaGen">
    <h2 class="items">Lista de generos</h2>
    <ul class='tablaGen'>
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['generos']->value, 'genero');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['genero']->value) {
?>
    <li class="genRow">
      <p class="parr">Id: <?php echo $_smarty_tpl->tpl_vars['genero']->value['id_Genero'];?>
 | Genero: <?php echo $_smarty_tpl->tpl_vars['genero']->value['Genero'];?>
</p>
      <form class="boton" action="borrarGen" method="post">
        <button class="btn" type="submit" name="cargaGenero" value="<?php echo $_smarty_tpl->tpl_vars['genero']->value['id_Genero'];?>
">Borrar</button>
      </form>
      </li>
      <hr>
    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </ul>
    <div class="formulario">
      <h2>Editar genero</h2>
      <small>Seleccione de la lista el genero que desea modificar</small>
      <form class="formCarga" action="editGen" method="post">
        <input class="inputCarga" type="text" name="id_gen" value="" placeholder="ingrese id del genero">
        <input class="inputCarga" type="text" name="editGen" value="" placeholder="ingrese genero">
        <button class="btn" type="submit">Editar</button>
      </form>
    </div>
  </div>
  </div>

  <div class="lista">
    <?php if ($_smarty_tpl->tpl_vars['categorias']->value !== null) {?>
      <?php $_smarty_tpl->_subTemplateRender("file:generosAdmin.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    <?php } else { ?>
      <?php $_smarty_tpl->_subTemplateRender("file:listaJuegosAdmin.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    <?php }?>
  </div>

</div>

<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

</body>
</html>
<?php }
}
