
<div class="listaJuegos">
  <h2 class="items">Lista de juegos</h2>
  <ul class='tablaJuegos'>
  {foreach from=$juegos item=juego}
  <li> Id: {$juego['id_Juego']}<br>
    <div class="genRow">
    <h4 class="parr">Titulo: {$juego['Titulo']}</h4>
  <form class="boton btnLista" action="borrar" method="get">
    <button class="btn" type="submit" name="idBorrar" value="{$juego['id_Juego']}">Borrar</button>
    <button class="btn" type="submit" name="idEditar" formaction="edicion/{$juego['id_Juego']}" formmethod="post" value="">Edicion y carga de imagenes</button>
  </form>
</div>
  <hr>Consola: {$juego['Consola']}<br>Genero: {$juego['Genero']}<br>Precio: ${$juego['Precio']}<br>Descripcion: <br>{$juego['Descripcion']}<br><br>
  <hr></li>
  {/foreach}
  </ul>
</div>
