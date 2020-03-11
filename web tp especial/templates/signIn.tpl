<form class="signIn" action="signIn" method="post">
<div class="form-group">
  <label for="exampleInputEmail1">Email</label>
  <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="Documento" placeholder="Ingrese email">
</div>
<div class="form-group">
  <label for="exampleInputPassword1">Password</label>
  <input type="password" class="form-control" id="exampleInputPassword1" name="Contraseña" placeholder="Password">
</div>
<button type="submit" class="btn btn-primary">Sign in</button>
<small id="emailHelp" class="form-text text-muted">¿No estas registrado?</small>
<button type="submit" formaction="register" class="btn btn-primary">Sign up</button>
  </form>
