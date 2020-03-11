<?php
/* Smarty version 3.1.33, created on 2018-11-23 03:27:13
  from 'C:\xampp\htdocs\proyectos\TPE-webII\TPE-webII\templates\comentarios.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5bf765812c99a7_13816029',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c08492ce1c0ae5cda84863e28e1b2917b3e67393' => 
    array (
      0 => 'C:\\xampp\\htdocs\\proyectos\\TPE-webII\\TPE-webII\\templates\\comentarios.tpl',
      1 => 1542939684,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5bf765812c99a7_13816029 (Smarty_Internal_Template $_smarty_tpl) {
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['userId']->value, 'id');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['id']->value) {
?>
    <h4>Deja tu comentario <?php echo $_smarty_tpl->tpl_vars['id']->value['Usuario'];?>
 </h4>
    <input type="hidden" class="userId" name="" value="<?php echo $_smarty_tpl->tpl_vars['id']->value['id_usuario'];?>
">
<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

      <div class="comentRow">
          <textarea class="comentarios" name="name" rows="4" cols="80"placeholder="Dejanos tu comentario"></textarea>
          <button type="button" class="postComent" name="button">Enviar</button>
      </div>


    <div class="comentCol">
      <small>Valora este juego</small>
      <form class="rating">
          <input class="stars" type="radio" id="star5" name="rating" value="5" /><label class = "full" for="star5" title="Increible!! - 5 estrellas"></label>
          <input class="stars" type="radio" id="star4half" name="rating" value="4,5" /><label class="half" for="star4half" title="Bastante bueno.. - 4.5 estrellas"></label>
          <input class="stars" type="radio" id="star4" name="rating" value="4" /><label class = "full" for="star4" title="Bueno!! - 4 estrellas"></label>
          <input class="stars" type="radio" id="star3half" name="rating" value="3,5" /><label class="half" for="star3half" title="EEEHHHH - 3.5 estrellas"></label>
          <input class="stars" type="radio" id="star3" name="rating" value="3" /><label class = "full" for="star3" title="Ehhh - 3 estrellas"></label>
          <input class="stars" type="radio" id="star2half" name="rating" value="2,5" /><label class="half" for="star2half" title="Casi nose.. - 2.5 estrellas"></label>
          <input class="stars" type="radio" id="star2" name="rating" value="2" /><label class = "full" for="star2" title="Medio malo... - 2 estrellas"></label>
          <input class="stars" type="radio" id="star1half" name="rating" value="1,5" /><label class="half" for="star1half" title="Malito - 1.5 estrellas"></label>
          <input class="stars" type="radio" id="star1" name="rating" value="1" /><label class = "full" for="star1" title="Malo.. - 1 estrellas"></label>
          <input class="stars" type="radio" id="starhalf" name="rating" value="0,5" /><label class="half" for="starhalf" title="Horrible!!- 0.5 estrellas"></label>
      </form>

    </div>
<?php }
}
