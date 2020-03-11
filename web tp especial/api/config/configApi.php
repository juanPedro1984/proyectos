<?php


class ConfigApi{

  public static $RESOURCE = "resource";
  public static $PARAMS = "params";
  public static $RESOURCES = [
    'comentarios#POST'=>'ComentApiController#PostComentario',
    'comentarios#GET'=>'ComentApiController#GetComentarios',
    'comentarios#DELETE'=>'ComentApiController#DeleteComentario',
    'comentarios#PUT'=>'ComentApiController#UpdateComentario',
];
}

 ?>
