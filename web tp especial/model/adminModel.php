<?php

class adminModel
    {

  private $db;

  function __construct()  {
    $this->db = new PDO('mysql:host=localhost;'
    .'dbname=db_dgames;charset=utf8'
    , 'root', '');
  }

  function GetJuegos()  {
    $sentencia= $this->db->prepare("select juegos.*, genero.* from juegos, genero where juegos.id_Genero = genero.id_Genero");
    $sentencia->execute();
    return $sentencia->fetchAll(PDO::FETCH_ASSOC);
  }

  function GetDetalle($id){
    $sentencia= $this->db->prepare("select juegos.*, genero.Genero from juegos, genero where  juegos.id_Juego = ? and juegos.id_Genero = genero.id_Genero");
    $sentencia->execute(array($id));
    return $sentencia->fetchAll(PDO::FETCH_ASSOC);
  }

  function InsertJuego($consola,$titulo,$id_Genero,$descripcion,$precio){
    $sentencia = $this->db->prepare("INSERT INTO juegos(Consola,id_Genero,Titulo,Descripcion,Precio) VALUES (?,?,?,?,?)" );
    $sentencia->execute (array($consola,$id_Genero,$titulo,$descripcion,$precio));
  }

  function BorrarJuego($id_juego){
    $sentencia = $this->db->prepare("delete from juegos where id_Juego=?");
    $sentencia -> execute(array($id_juego));

  }

  function EditarJuego($id_juego,$consola,$titulo,$id_Genero,$descripcion,$precio){
    $sentencia = $this->db->prepare("update juegos set Consola=?,Titulo=?,Descripcion=?,id_Genero=?,Precio=? where id_Juego=?");
    $sentencia->execute(array($consola,$titulo,$descripcion,$id_Genero,$precio,$id_juego));
  }
}
 ?>
