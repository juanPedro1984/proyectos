
<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8" />
  <title> {$titulo} </title>
  <base href="//{$smarty.server.SERVER_NAME}{dirname($smarty.server.PHP_SELF)}/" target="_self">
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
  <div class="dropdown ">
  <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Administrador</button>
  <div class="dropdown-menu " aria-labelledby="dropdownMenuButton">

    {if isset ($smarty.session.User)}
    {include file="logout.tpl"}
    {/if}
  </form>
  </div>
  </div>
  </li>
  </ul>
  </div>

<div class="cuerpo">
{include file="adminUsers.tpl"}
</div>

{include file="footer.tpl"}

</body>
</html>
