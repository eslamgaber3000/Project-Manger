<?php 
namespace Pro_Three\To_Do_List\Classes\validation;
require_once "Validator.php";
use Pro_Three\To_Do_List\Classes\validation\Validator;
// apply open closed solid principle


class Required implements Validator {

    public function check($key,$value){

            if(empty($value)){
                return "$key is required";
            }else{
                return false;
            }
    }
       
}



?>


