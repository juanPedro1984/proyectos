<?php

define('RESOURCE', 0);
define('PARAMS', 1);

require_once 'config/configApi.php';
require_once 'controller/ComentApiController.php';

function parseUrl($url){
  $arr_data = explode ("/",$url);
  $arrayReturn[ConfigApi::$RESOURCE] = $arr_data[0]."#". $_SERVER['REQUEST_METHOD'];
  $arrayReturn[ConfigApi::$PARAMS] = isset($arr_data[1]) ? array_slice($arr_data, 1) : null;
  return $arrayReturn;
}

if (isset($_GET['resource'])){
    $urlData = parseUrl($_GET['resource']);
    $resource = $urlData[ConfigApi::$RESOURCE];
if (array_key_exists($resource,ConfigApi::$RESOURCES)){
    $params = $urlData[ConfigApi::$PARAMS];
    $action = explode('#',ConfigApi::$RESOURCES[$resource]);
    $controller = new $action[0]();
    $method = $action[1];
  }
if(isset($params) && $params != null){
  echo $controller->$method($params);
} else {
  echo $controller->$method();
}
}
 ?>
