<?php 
namespace Pro_Three\To_Do_List\Classes;

class Request{

    public function get($key){
        if(isset($_GET[$key])){

            return $_GET[$key];
        }
    }
    public function post($key){
        if(isset($_POST[$key])){

            return $_POST[$key];
        }
    }
    public function keyCheck($key){
        return isset($key);
    }
    public function clean($key){
        return trim(htmlspecialchars($key));
    }

public function redirect($location){
    header("location:$location");
}
    
public function emptyKey($key){
   return ! empty($key);
}
    

}



?>