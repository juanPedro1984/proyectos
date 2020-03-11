<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <meta charset="UTF-8" />
  <base href="//{$smarty.server.SERVER_NAME}{dirname($smarty.server.PHP_SELF)}/" target="_self">

  <title> DigitalGames </title>
  <link rel="stylesheet" type="text/css" href="./style/estilo.css" >
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>
<body>
  <div class="Navegador">
    <ul class="nav justify-content-center">
  <li class="nav-item">
    <a class="nav-link" href="home" id="Home">Home</a>
  </li>
  </ul>
  </div>

<div class="cuerpoRegistro">
  <h3>Formulario de registro</h3>
  <form class="formRegistro" action="cargarRegistro" method="post">
    <div class="form-group">
      <label class="label" for="exampleInputEmail1">Ingrese su email</label>
      <input type="email" class="form-control" id="Documento" aria-describedby="emailHelp" name="ingresarUsuario" placeholder="Email">
      <small id="emailHelp" class="form-text text-muted">Registrese con su Email</small>
    </div>
    <div class="form-group">
      <label class="label" for="exampleInputPassword1">Ingrese una contraseña</label>
      <input type="password" class="form-control" id="exampleInputPassword1" name="ingresarPassword" placeholder="Password">
    </div>
    <div class="form-group">
      <label class="label" for="exampleInputPassword1">Repita su contraseña</label>
      <input type="password" class="form-control" id="exampleInputPassword1" name="repetirPassword">
      <small id="emailHelp" class="form-text text-muted">{$error}</small>
    </div>
    <button type="submit" class="btn btn-primary">Registrarse</button>
  </form>
  <small id="emailHelp" class="form-text text-muted">Una ves registrado ingrese como administrador desde home.</small>

</div>
  {include file="footer.tpl"}
</body>
</html>
