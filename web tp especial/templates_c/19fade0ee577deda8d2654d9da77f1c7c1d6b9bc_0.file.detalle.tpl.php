<?php
/* Smarty version 3.1.33, created on 2018-11-23 03:27:13
  from 'C:\xampp\htdocs\proyectos\TPE-webII\TPE-webII\templates\detalle.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5bf765812a6722_35612514',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '19fade0ee577deda8d2654d9da77f1c7c1d6b9bc' => 
    array (
      0 => 'C:\\xampp\\htdocs\\proyectos\\TPE-webII\\TPE-webII\\templates\\detalle.tpl',
      1 => 1542939887,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:comentarios.tpl' => 1,
    'file:comenDisabled.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_5bf765812a6722_35612514 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html>

  <head>
    <meta charset="UTF-8" />
    <base href="//<?php echo $_SERVER['SERVER_NAME'];
echo dirname($_SERVER['PHP_SELF']);?>
/" target="_self">
    <title><?php echo $_smarty_tpl->tpl_vars['titulo']->value;?>
</title>
    <link rel="stylesheet" type="text/css" href="./style/estilo.css" >
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css">
  </head>

<body>

    <div class="Navegador">
      <ul class="nav justify-content-center">
        <li class="nav-item">
          <a class="nav-link" href="home" id="Home">Home</a>
        </li>
      </ul>
    </div>

<div class="cuerpoDetalle" id="Cuerpo">

    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['detalle']->value, 'det');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['det']->value) {
?>
    <div class="infoTitulo">
      <h2 class="Titulo" title="<?php echo $_smarty_tpl->tpl_vars['det']->value['id_Juego'];?>
"><?php echo $_smarty_tpl->tpl_vars['det']->value['Titulo'];?>
</h2>
    </div>
    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

    <div class="contImg">
    <figure class="gameFig" >
      <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">

          <div class="carousel-inner">
            <div class="carousel-item active ">
              <img class="d-block w-100 gameImg" src="<?php echo $_smarty_tpl->tpl_vars['imagenes']->value[0]['Img_path'];?>
" alt="First slide">
            </div>
            <div class="carousel-item">
              <img class="d-block w-100 gameImg" src="<?php echo $_smarty_tpl->tpl_vars['imagenes']->value[1]['Img_path'];?>
" alt="Second slide">
            </div>
            <div class="carousel-item ">
              <img class="d-block w-100 gameImg" src="<?php echo $_smarty_tpl->tpl_vars['imagenes']->value[2]['Img_path'];?>
" alt="Third slide">
            </div>
          </div>

        <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>
    </figure>
    </div>

    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['detalle']->value, 'det');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['det']->value) {
?>
    <div class="descripcion">
        <div class="info">
          <h5 class="infoGame">Genero: <?php echo $_smarty_tpl->tpl_vars['det']->value['Genero'];?>
 |</h5>
          <h5 class="infoGame">Consola: <?php echo $_smarty_tpl->tpl_vars['det']->value['Consola'];?>
 |</h5>
          <h5 class="infoGame">Precio: $ <?php echo $_smarty_tpl->tpl_vars['det']->value['Precio'];?>
</h5>
        </div>
        <h5>Descripcion:</h5>
        <?php echo $_smarty_tpl->tpl_vars['det']->value['Descripcion'];?>
<br>
    </div>
    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

    <?php if (isset($_SESSION['User'])) {?>
    <?php $_smarty_tpl->_subTemplateRender('file:comentarios.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    <?php } else { ?>
    <?php $_smarty_tpl->_subTemplateRender('file:comenDisabled.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    <?php }?>

    <div class="opi">

    </div>
</div>

<?php $_smarty_tpl->_subTemplateRender('file:footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
</body>

<?php echo '<script'; ?>
 src="./js/ApiAjax.js" type="text/javascript"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="https://cdnjs.cloudflare.com/ajax/libs/handlebars.js/4.0.12/handlebars.min.js"><?php echo '</script'; ?>
>
</html>
<?php }
}
