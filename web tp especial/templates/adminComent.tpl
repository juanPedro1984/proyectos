<!DOCTYPE html>
<html>

  <head>
    <meta charset="UTF-8" />
    <base href="//{$smarty.server.SERVER_NAME}{dirname($smarty.server.PHP_SELF)}/" target="_self">
    <title>{$titulo} </title>
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
                </div>
            </div>
          </li>
        </ul>

    </div>
<div class="cuerpo">

    <div class="comentList">

    </div>

</div>

{include file="footer.tpl"}

</body>

<script src="./js/adminComent.js" type="text/javascript"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/handlebars.js/4.0.12/handlebars.js"></script>

</html>
