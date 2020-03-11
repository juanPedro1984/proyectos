
<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8" />
  <base href="//{$smarty.server.SERVER_NAME}{dirname($smarty.server.PHP_SELF)}/" target="_self">
  <title> {$titulo} </title>
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
              {foreach from=$generos item=genero}
                <a class="dropdown-item" href="filtroAdmin/{$genero['id_Genero']}">{$genero['Genero']}</a>
              {/foreach}
            </div>
          </div>
      </li>

      <li class="nav-item">
        <div class="dropdown ">
          <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Administrador</button>
            <div class="dropdown-menu " aria-labelledby="dropdownMenuButton">
              {if isset ($smarty.session.User)}
              {include file="logout.tpl"}
              {/if}
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
              {foreach from=$generos item=genero}
                <option value= "{$genero['id_Genero']}" >{$genero['Genero']}</option>
              {/foreach}
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
            {foreach from=$generos item=genero}
            <li class="genRow">
              <p class="parr">Id: {$genero['id_Genero']} | Genero: {$genero['Genero']}</p>
              <form class="boton" action="borrarGen" method="post">
                <button class="btn" type="submit" name="cargaGenero" value="{$genero['id_Genero']}">Borrar</button>
              </form>
            </li>
            <hr>
          {/foreach}
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
    {if $categorias !== null}
      {include file="generosAdmin.tpl"}
    {else}
      {include file="listaJuegosAdmin.tpl"}
    {/if}
  </div>

</div>

{include file="footer.tpl"}

</body>
</html>
