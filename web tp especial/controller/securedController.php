<?php

require_once './model/userModel.php';

class SecuredController
{
private $userMod;
function __construct()
{
  $this->userMod= new userModel();

  session_start();
  if (isset($_SESSION['User'])){
    if ( isset($_SESSION['LAST_ACTIVITY']) &&
    (time() - $_SESSION['LAST_ACTIVITY'] > 6000)) {
    $this->logout();
    die();
    }
    $_SESSION['LAST_ACTIVITY'] = time();
  }
  else{
    header(HOME);
  }
}

function isAdmin(){
  $userDb= $this->userMod->GetUserById($_SESSION['User']);
  if ($userDb[0]['Admin_permiso']==1){
  return true;
}else{
  return false;
}
}


function logout(){
  session_start();
  session_unset();
  session_destroy();
  header(HOME);
}
}
 ?>
