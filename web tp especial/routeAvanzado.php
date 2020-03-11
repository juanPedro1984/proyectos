<?php

define('ACTION', 0);
define('PARAMS', 1);

require_once 'config/ConfigApp.php';
require_once 'controller/adminController.php';
require_once 'controller/homeController.php';
require_once 'controller/signUpController.php';
require_once 'controller/securedController.php';

function parseUrl($url){
  $arr_data = explode ("/",$url);
  $arrayReturn[ConfigApp::$ACTION] = $arr_data[0];
  $arrayReturn[ConfigApp::$PARAMS] = isset($arr_data[1]) ? array_slice($arr_data, 1) : null;
  return $arrayReturn;
}

    $urlData = parseUrl($_GET[ConfigApp::$ACTION]);
    $action = $urlData[ConfigApp::$ACTION];
if (array_key_exists($action,ConfigApp::$ACTIONS)){
    $params = $urlData[ConfigApp::$PARAMS];
    $action = explode('#',ConfigApp::$ACTIONS[$action]);
    $controller = new $action[0]();
    $metodo = $action[1];
  }
if(isset($params) && $params != null){
      echo $controller->$metodo($params);
} else {
  echo $controller->$metodo();
}

 ?>
