<h2>Juegos por genero</h2>

    <table class="table table-striped">
      <thead>
        <tr>
          <th scope="col">Titulo</th>
          <th scope="col">Consola</th>
          <th scope="col">Genero</th>
        </tr>
      </thead>
      <tbody>
          {foreach from=$categorias item=categoria}
          <tr>
          <td class="tdCategoria"><a class="tdJuego" href="Detalle/{$categoria['id_Juego']}" value="{$categoria['id_Juego']}">{$categoria['Titulo']}</a></td>
          <td class="tdCategoria">{$categoria['Consola']}</td>
          <td class="tdCategoria">{$categoria['Genero']}</td>
          </tr>
          {/foreach}
      </tbody>
    </table>
