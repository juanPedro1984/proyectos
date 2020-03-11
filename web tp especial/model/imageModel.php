<?php

class ImageModel
{
  private $db;
  function __construct()
  {
    $this->db = new PDO('mysql:host=localhost;'
    .'dbname=db_dgames;charset=utf8'
    , 'root', '');
  }

  function AgregarImg($path,$id_juego){
  $sentencia = $this->db->prepare("INSERT INTO imagenes(Img_path,id_Juego) VALUES(?,?)");
  $sentencia->execute(array($path,$id_juego));
  }

  function getImgById($id)
  {
  $sentencia = $this->db->prepare("select imagenes.* from imagenes where id_Juego = ?");
  $sentencia->execute(array($id));
  return $sentencia->fetchAll(PDO::FETCH_BOTH);
  }

  function DeleteImg($id)
  {
  $sentencia = $this->db->prepare("delete from imagenes where id_Imagen=?");
  $sentencia -> execute(array($id));
  }
}


 ?>
