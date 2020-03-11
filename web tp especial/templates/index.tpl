
<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8" />
  <base href="//{$smarty.server.SERVER_NAME}{dirname($smarty.server.PHP_SELF)}/" target="_self">
  <title> DigitalGames.com</title>
  <link rel="stylesheet" type="text/css" href="./style/estilo.css" >
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
  <meta charset="utf-8">

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
      <a class="dropdown-item" href="filtro/AllGames">Todos los juegos</a>
    {foreach from=$generos item=genero}
      <a class="dropdown-item" href="filtro/{$genero['id_Genero']}">{$genero['Genero']}</a>
    {/foreach}
  </div>
  </div>
  </li>


  <li class="nav-item">
  <div class="dropdown ">
  {if (isset($smarty.session.User)) && (isset ($user)) && ($user[0]['Admin_permiso']==0)}
    <a class="nav-link" href="logout" id="Home">Logout</a>
    {elseif (isset ($smarty.session.User)) &&  (isset ($user)) && ($user[0]['Admin_permiso']==1) }
    <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Administrador</button>
    {else}
    <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Iniciar Sesion</button>
  {/if}

  <div class="dropdown-menu " aria-labelledby="dropdownMenuButton">
    {if isset ($smarty.session.User)}
    {include file="logout.tpl"}
    {else}
    {include file="signIn.tpl"}
    {/if}

  </div>
  </div>
  </li>

  </ul>
  </div>

<div class="row">
  <div class="col-12 col-md-8" id="Cuerpo">
    <div class="contenedor">

      {if $categorias !== null}
        {include file="generosIndex.tpl"}
        {elseif isset($getAll)}
        {include file="todosLosJuegos.tpl"}
        {else}
        {include file="text.tpl"}
        {/if}

    </div>
</div>
  <div class="col-6 col-md-4" class="foto">
      <div class="text-center">
      <img src="./image/propaganda3.jpg" class="img-fluid" class="img-thumbnail" alt="Responsive image" id="foto1">
      <img src="./image/propaganda2.jpg" class="img-fluid" class="img-thumbnail" alt="Responsive image" id="fotodos">
    </div></div>
</div>

{include file="footer.tpl"}

</body>
</html>
