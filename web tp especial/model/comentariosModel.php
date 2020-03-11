<?php


class comentariosModel
{

  private $db;

  function __construct()
  {
    $this->db = new PDO('mysql:host=localhost;'
    .'dbname=db_dgames;charset=utf8'
    , 'root', '');
  }

  function PostComentario($comentario,$id_Juego,$id_Usuario,$fecha,$valoracion){
    $sentencia = $this->db->prepare("INSERT INTO comentarios (Comentarios,id_Juego,id_Usuario,Fecha,Valoracion) VALUES (?,?,?,?,?)");
    $sentencia->execute (array($comentario,$id_Juego,$id_Usuario,$fecha,$valoracion));
  }

  function GetComentarios(){
    $sentencia = $this->db->prepare("select c.id_Comentarios, c.comentarios, c.Fecha, c.Valoracion, j.Titulo, u.Usuario from comentarios c, juegos j, usuarios u where j.id_Juego = c.id_juego and u.id_usuario = c.id_Usuario");
    $sentencia->execute();
    $comentarios = $sentencia->fetchAll(PDO::FETCH_ASSOC);
    return $comentarios;
}

  function GetComentario($id_Coment){
    $sentencia = $this->db->prepare("select  c.id_Comentarios, c.comentarios, c.Fecha, c.Valoracion, j.Titulo, u.Usuario from comentarios c, juegos j, usuarios u where c.id_Juego = ? and j.id_Juego = c.id_juego and u.id_usuario = c.id_Usuario");
    $sentencia->execute(array($id_Coment));
    $comentario = $sentencia->fetchAll(PDO::FETCH_ASSOC);
    return $comentario;
  }

  function DeleteComentario($id_Coment){
    $comentario = $this->GetComentario($id_Coment);
    if(isset($comentario)){
      $sentencia = $this->db->prepare("delete from comentarios where id_Comentarios = ?");
      $sentencia->execute(array($id_Coment));
      return $comentario;
    }
  }


}
 ?>
