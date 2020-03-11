<?php

define('ADMIN',"Location:http://".$_SERVER["SERVER_NAME"]. dirname($_SERVER["PHP_SELF"])."/administrador");
define('HOME',"Location:http://".$_SERVER["SERVER_NAME"]. dirname($_SERVER["PHP_SELF"]));
define('REGISTER',"Location:http://".$_SERVER["SERVER_NAME"]. dirname($_SERVER["PHP_SELF"])."/register");
define('LOGOUT',"Location:http://".$_SERVER["SERVER_NAME"]. dirname($_SERVER["PHP_SELF"])."/logout");
define('EDICION',"Location:http://".$_SERVER["SERVER_NAME"]. dirname($_SERVER["PHP_SELF"])."/edicion");


class ConfigApp{

  public static $ACTION = "action";
  public static $PARAMS = "params";
  public static $ACTIONS = [
      ''=>'homeController#HomeController',
      'home'=>'homeController#HomeController',
      'Detalle'=>'homeController#mostrarDetalle',
      'administrador'=>'adminController#admin',
      'signIn'=>'homeController#verifyUser',
      'register'=>'homeController#signUp',
      'agregar'=>'adminController#InsertJuego',
      'borrar'=>'adminController#BorrarJuego',
      'editar'=>'adminController#EditarJuego',
      'edicion'=>'adminController#Edicion',
      'genero'=>'adminController#InsertGenero',
      'borrarGen'=>'adminController#BorrarGenero',
      'editGen'=>'adminController#EditarGenero',
      'cargarRegistro'=>'signUpController#cargarRegistro',
      'filtro'=>'homeController#HomeController',
      'filtroAdmin'=>'adminController#Admin',
      'logout'=>'securedController#logout',
      'agregarimg'=>'adminController#AgregarImg',
      'deleteImg'=>'adminController#DeleteImg',
      'usuarios'=>'adminController#adminUsers',
      'permiso'=>'adminController#adminPermisos',
      'delUser'=>'adminController#DeleteUser',
      'adminComent'=>'adminController#adminComent'
  ];
}

 ?>
