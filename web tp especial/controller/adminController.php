<?php

require_once './view/userView.php';
require_once './view/adminView.php';
require_once './model/adminModel.php';
require_once './view/indexView.php';
require_once './model/userModel.php';
require_once './view/registerView.php';
require_once './view/edicionView.php';
require_once './model/generoModel.php';
require_once './model/imageModel.php';
require_once './view/comentView.php';
require_once 'securedController.php';



class adminController extends SecuredController
{
  private $view;
  private $titulo;
  private $genModel;
  private $adminModel;
  private $index;
  private $userMod;
  private $registerView;
  private $arrCat;
  private $categoria;
  private $edicionView;
  private $juego;
  private $generos;
  private $imgModel;
  private $usuariosView;
  private $adComentView;


  function __construct(){
    parent::__construct();

    $this->usuariosView = new userView();

    $this->view = new adminView();
    $this->titulo = "DigitalGames";
    $this->index = new indexView();
    $this->registerView = new registerView();
    $this->userMod = new userModel();
    $this->adminModel = new adminModel();
    $this->genModel = new generoModel();
    $this->edicionView = new EdicionView();
    $this->imgModel = new ImageModel();
    $this->adComentView = new ComentView();



    if($this->isAdmin() != true ){
      header(HOME);
    }
  }

  function Admin($gen=null){

    if($gen[0] == "AllGames"){
      $juegos = $this->adminModel->GetJuegos();
      $generos = $this->genModel->GetGeneros();
      $this->view->Mostrar($this->arrCat,$this->titulo,$juegos,$generos);
    }
    elseif(isset($gen)){
      $this->categoria = $gen[0];
      $this->arrCat=$this->genModel->FiltroGen($this->categoria);
      $juegos = $this->adminModel->GetJuegos();
      $generos = $this->genModel->GetGeneros();
      $this->view->Mostrar($this->arrCat,$this->titulo,$juegos,$generos);
    }else{
    $juegos = $this->adminModel->GetJuegos();
    $generos = $this->genModel->GetGeneros();
    $this->view->Mostrar($this->arrCat,$this->titulo,$juegos,$generos);
  }
  }

  function InsertJuego(){
    $consola=$_POST['cargaConsola'];
    $titulo=$_POST['cargaTitulo'];
    $id_Genero=$_POST['selectGen'];
    $descripcion=$_POST['cargaDescripcion'];
    $precio=$_POST['cargaPrecio'];
    $this->adminModel->InsertJuego($consola,$titulo,$id_Genero,$descripcion,$precio);
    header(ADMIN);
  }

  function BorrarJuego(){
    $id_juego = $_GET['idBorrar'];
    $this->adminModel->BorrarJuego($id_juego);
    header(ADMIN);
  }

  function Edicion($ide){
    if(is_array($ide)){
      $id=$ide[0];
      $this->generos = $this->genModel->GetGeneros();
      $this->juego = $this->adminModel->GetDetalle($id);
      $imagenes=$this->imgModel->getImgById($id);
      $this->edicionView->Edicion($this->juego,$this->generos,$imagenes,$this->titulo);
    }elseif(!is_array($ide)) {
      $id=$ide;
      $this->generos = $this->genModel->GetGeneros();
      $this->juego = $this->adminModel->GetDetalle($id);
      $imagenes=$this->imgModel->getImgById($id);
      $this->edicionView->Edicion($this->juego,$this->generos,$imagenes,$this->titulo);
    }

  }


  function EditarJuego(){
    $id=$_POST['idEditar'];
    $id_juego = $_POST['idEditar'];
    $consola=$_POST['editConsola'];
    $titulo=$_POST['editTitulo'];
    $id_Genero=$_POST['editGenero'];
    $descripcion=$_POST['editDescripcion'];
    $precio=$_POST['editPrecio'];
    $this->id = $this->adminModel->EditarJuego($id_juego,$consola,$titulo,$id_Genero,$descripcion,$precio);
    $this->generos = $this->genModel->GetGeneros();
    $this->juego = $this->adminModel->GetDetalle($id);
    $this->Edicion($id);
  }

  function BorrarGenero(){
    $genero=$_POST['cargaGenero'];
    $this->genModel->BorrarGenero($genero);
    header(ADMIN);
  }

  function InsertGenero(){
    $genero=$_POST['cargaGenero'];
    $this->genModel->InsertGenero($genero);
    header(ADMIN);
  }

  function EditarGenero(){
    $id_Genero=$_POST['id_gen'];
    $genero=$_POST['editGen'];
    $this->genModel->EditarGenero($id_Genero,$genero);
    header(ADMIN);
  }


  function AgregarImg(){
    $id_juego= $_REQUEST['id_Juego'];
    $carpeta = 'image/';

     if(isset($_FILES["imagen"]) && $_FILES["imagen"]["name"][0]){
        for($i=0;$i<count($_FILES["imagen"]["name"]);$i++){
          $origen = $_FILES['imagen']['tmp_name'][$i];
          $destino = $carpeta.basename($_FILES["imagen"]["name"][$i]);
    if (move_uploaded_file($origen,$destino)){
      $data = $this->imgModel->AgregarImg($destino,$id_juego);
      }
    }
      $this->Edicion($id_juego);
  }else{
      echo "error";
    }
  }

  function DeleteImg()  {
    $id_juego=$_POST['id_Juego'];
    $id_Img=$_POST['delImg'];
    $this->imgModel->DeleteImg($id_Img);
    $this->Edicion($id_juego);
  }

  function adminUsers(){
    $users = $this->userMod->GetUsers();
    $this->usuariosView->usuariosView($users,$this->titulo);
  }

  function adminPermisos(){
    $permiso=$_POST['permiso'];
    $idUser=$_POST['idUser'];
    $this->userMod->adminPermisos($permiso,$idUser);
    $this->adminUsers();
    die();
  }

  function DeleteUser()
  {
  $idUser=$_GET['delUser'];
  $this->userMod->DeleteUser($idUser);
  $this->adminUsers();
  }

  function adminComent(){
    $this->adComentView->adminComent($this->titulo);

  }

  }



 ?>
