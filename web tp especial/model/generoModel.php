<?php


class generoModel
{
  private $db;

  function __construct()
  {
    $this->db = new PDO('mysql:host=localhost;'
    .'dbname=db_dgames;charset=utf8'
    , 'root', '');
  }

  function GetGeneros(){
    $sentencia= $this->db->prepare("select* from genero");
    $sentencia->execute();
    $genero = $sentencia->fetchAll(PDO::FETCH_ASSOC);
    return $genero;
}

  function InsertGenero($genero){
    $sentencia = $this->db->prepare("INSERT INTO genero (Genero) VALUES (?)");
    $sentencia->execute (array($genero));
}

  function BorrarGenero($genero){
    $sentencia = $this->db->prepare("delete from Genero where id_Genero=?");
    $sentencia -> execute(array($genero));
}

  function EditarGenero($id_Genero,$genero){
    $sentencia = $this->db->prepare("update genero set Genero=? where id_Genero=?");
    $sentencia->execute(array($genero,$id_Genero));
}
function FiltroGen($categoria){
  $sentencia= $this->db->prepare("select juegos.*, genero.Genero from juegos, genero where  juegos.id_Genero = ? and juegos.id_Genero = genero.id_Genero");
  $sentencia->execute(array($categoria));
  return $sentencia->fetchAll(PDO::FETCH_ASSOC);
}

}
 ?>
