<?php

require_once './model/userModel.php';
require_once './view/registerView.php';

class signUpController
{

  private $userMod;
  private $registerView;

  function __construct()
  {
    $this->registerView = new registerView();
    $this->userMod = new userModel();
  }

  function cargarRegistro(){
    $user = $_POST['ingresarUsuario'];
    $pass =$_POST['ingresarPassword'];
    $rePass =$_POST['repetirPassword'];
    $error_message ="";
    if((!empty($user))&&(!empty($pass))&&(!empty($rePass)) ) {
      $checkUser =  $this->userMod->VerifyUser($user);
      if($checkUser[0]['Usuario'] !== $user){
        if($pass == $rePass){
          $this->userMod->CargarUsuario($user,$pass);
          session_start();
          $_SESSION['User'] = $user;
          header(HOME);
          }else{
            $error_message = "Las contraseñas no coinciden. Por favor, inténtelo de nuevo.";
            $this->registerView->register($error_message);
      }
    }else{
        $error_message = "El nombre de usuario ya existe";
        $this->registerView->register($error_message);
      }
    }else{
        $error_message = "Algunos campos estan incompletos. Por favor, inténtelo de nuevo.";
        $this->registerView->register($error_message);
      }
    }
}



 ?>
