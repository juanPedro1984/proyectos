<h2>Todos los juegos</h2>
  <form action="Detalle" method="post">
    <table class="table table-striped">
      <thead>
        <tr>
          <th scope="col">Titulo</th>
          <th scope="col">Consola</th>
          <th scope="col">Genero</th>
        </tr>
      </thead>
      <tbody>
          {foreach from=$juegos item=juego}
          <tr>
          <td class="tdCategoria"><a class="tdJuego" href="Detalle/{$juego['id_Juego']}" value="{$juego['id_Juego']}">{$juego['Titulo']}</a></td>
          <td class="tdCategoria">{$juego['Consola']}</td>
          <td class="tdCategoria"><a class="tdJuego" href="filtro/{$juego['id_Genero']}">{$juego['Genero']}</a></td>
          </tr>
          {/foreach}
      </tbody>
    </table>
  </form>
