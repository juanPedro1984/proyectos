<?php

class userModel
{
  private $db;
  private $registerView;
  function __construct()
  {
    $this->db = new PDO('mysql:host=localhost;'
    .'dbname=db_dgames;charset=utf8'
    , 'root', '');
  }

  function GetUserById($user)  {
    $sentencia= $this->db->prepare("select usuarios.id_usuario, usuarios.Usuario, usuarios.Admin_permiso from usuarios where Usuario = ?");
    $sentencia->execute(array($user));
    return $sentencia->fetchAll(PDO::FETCH_ASSOC);
  }

  function GetUsers(){
    $sentencia= $this->db->prepare("select * from usuarios");
    $sentencia->execute();
    return $sentencia->fetchAll(PDO::FETCH_ASSOC);
  }
  function VerifyUser($user){
    $sentencia= $this->db->prepare("select * from usuarios where Usuario=?");
    $sentencia->execute(array ($user));
    return $sentencia->fetchAll(PDO::FETCH_ASSOC);
  }

  function CargarUsuario($user,$pass){
    $hash_pass=password_hash($pass, PASSWORD_DEFAULT);
    $sentencia= $this->db->prepare("INSERT INTO usuarios(Usuario,Password) VALUES (?,?)");
    $sentencia->execute (array($user,$hash_pass));
  }

  function DeleteUser($userId)
  {
    $sentencia= $this->db->prepare("delete from usuarios where id_Usuario=?");
    $sentencia->execute (array($userId));
  }

  function adminPermisos($permiso,$id)
  {
    $sentencia = $this->db->prepare("update usuarios set Admin_permiso=? where id_usuario=?");
    $sentencia->execute(array($permiso,$id));
  }




}


 ?>
