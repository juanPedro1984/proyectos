<?php

require_once './view/indexView.php';
require_once './model/userModel.php';
require_once './view/registerView.php';
require_once './model/adminModel.php';
require_once './model/generoModel.php';
require_once './view/detalleView.php';
require_once './model/imageModel.php';

class homeController
{

  private $index;
  private $userMod;
  private $genModel;
  private $adminModel;
  private $registerView;
  private $detalleView;
  private $arrCat;
  private $categoria;
  private $detalle;
  private $getAll;
  private $userSession;
  private $userId;
  private $imgModel;
  private $error;

  function __construct() {
    $this->index = new indexView();
    $this->registerView = new registerView();
    $this->userMod = new userModel();
    $this->adminModel = new adminModel();
    $this->genModel = new generoModel();
    $this->detalleView = new DetalleView();
    $this->imgModel = new ImageModel();
  }

  function HomeController($gen=null){
    session_start();
    if (isset($_SESSION['User'])) {
      $this->userSession = $this->userMod->GetUserById($_SESSION['User']);
    }
    if($gen[0] == "AllGames"){
      $this->getAll = $gen[0];
      $juegos = $this->adminModel->GetJuegos();
      $generos = $this->genModel->GetGeneros();
      $this->index->Home($this->arrCat,$juegos,$generos,$this->getAll,$this->userSession,$this->error);
    }elseif (isset($gen)){
      $this->categoria = $gen[0];
      $this->arrCat=$this->genModel->FiltroGen($this->categoria);
      $juegos = $this->adminModel->GetJuegos();
      $generos = $this->genModel->GetGeneros();
      $this->index->Home($this->arrCat,$juegos,$generos,$this->getAll,$this->userSession,$this->error);
    }
      else{
      $juegos = $this->adminModel->GetJuegos();
      $generos = $this->genModel->GetGeneros();
      $this->index->Home($this->arrCat,$juegos,$generos,$this->getAll,$this->userSession,$this->error);
    }
  }

  function signUp(){
    $message="";
    $this->registerView->register($message);
  }

  function verifyUser(){
    $this->error="";
    $user = $_POST['Documento'];
    $pass = $_POST['Contraseña'];
    $userDb= $this->userMod->VerifyUser($user);
    if (!empty($userDb)) {
      if ((password_verify($pass, $userDb[0]['Password']))) {
        switch ($userDb[0]['Admin_permiso']) {
          case '1':
              session_start();
              $_SESSION['User'] = $user;
              header(ADMIN);
            break;
          case '0':
              session_start();
              $_SESSION['User'] = $user;
              header(HOME);
            break;
          default:
              $this->error = "Usuario no registrado";
              header(HOME);
            break;
        }
      }else{
          $this->error = "Contraseña incorrecta";
          header(HOME);
      }
  }else{
        $this->error = "El usuario no existe";
        header(HOME);
  }
}

  function mostrarDetalle($ide){
    $id=$ide[0];
    $user;
    session_start();
    if (isset($_SESSION['User'])){
      $user = $_SESSION['User'];
    }
    if (isset($id)){
      if (isset($user)){
    $this->userId = $this->userMod->GetUserById($user);
  }
    $imagenes=$this->imgModel->getImgById($id);
    $this->detalle = $this->adminModel->GetDetalle($id);
    $this->detalleView->mostrarDet($this->detalle,$this->userId,$imagenes);
  }
}

}
 ?>
