<!DOCTYPE html>
<html>

  <head>
    <meta charset="UTF-8" />
    <base href="//{$smarty.server.SERVER_NAME}{dirname($smarty.server.PHP_SELF)}/" target="_self">
    <title>{$titulo}</title>
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

    {foreach from=$detalle item=det}
    <div class="infoTitulo">
      <h2 class="Titulo" title="{$det['id_Juego']}">{$det['Titulo']}</h2>
    </div>
    {/foreach}

    <div class="contImg">
    <figure class="gameFig" >
      <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">

          <div class="carousel-inner">
            <div class="carousel-item active ">
              <img class="d-block w-100 gameImg" src="{$imagenes[0]['Img_path']}" alt="First slide">
            </div>
            <div class="carousel-item">
              <img class="d-block w-100 gameImg" src="{$imagenes[1]['Img_path']}" alt="Second slide">
            </div>
            <div class="carousel-item ">
              <img class="d-block w-100 gameImg" src="{$imagenes[2]['Img_path']}" alt="Third slide">
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

    {foreach from=$detalle item=det}
    <div class="descripcion">
        <div class="info">
          <h5 class="infoGame">Genero: {$det['Genero']} |</h5>
          <h5 class="infoGame">Consola: {$det['Consola']} |</h5>
          <h5 class="infoGame">Precio: $ {$det['Precio']}</h5>
        </div>
        <h5>Descripcion:</h5>
        {$det['Descripcion']}<br>
    </div>
    {/foreach}

    {if isset ($smarty.session.User)}
    {include file='comentarios.tpl'}
    {else}
    {include file='comenDisabled.tpl'}
    {/if}

    <div class="opi">

    </div>
</div>

{include file = 'footer.tpl'}
</body>

<script src="./js/ApiAjax.js" type="text/javascript"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/handlebars.js/4.0.12/handlebars.min.js"></script>
</html>
