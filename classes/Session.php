<?php 
namespace Pro_Three\To_Do_List\Classes;

class Session {

public function __construct(){
    session_start();
}

public function setSession($key, $value ) {
         $_SESSION[$key] = $value;

    
}

public function getSession($key){
    
    return isset($_SESSION[$key]) ? $_SESSION[$key] : null;
}

public function S_unset($key){
    unset($_SESSION[$key]);
}
public function destroy(){
   session_destroy();
}

}


?>