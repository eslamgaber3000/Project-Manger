<?php 
namespace Pro_Three\To_Do_List\Classes\validation;

require_once "Validator.php";
use Pro_Three\To_Do_List\Classes\validation\Validator;



class Str implements Validator{

    public function check($key,$value){

        if(is_numeric($value)){
            return "$key should be string";
        }else{
            return false;

        }
        
    }
       
}

?>