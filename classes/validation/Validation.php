<?php

namespace Pro_Three\To_Do_List\Classes\validation;

require_once "Required.php";
require_once "Str.php";

use Pro_Three\To_Do_List\Classes\validation\Required;
use Pro_Three\To_Do_List\Classes\validation\Str;

class Validation
{
    private $errors = [];

    public function validate($key, $value, $rules)
    {
        foreach ($rules as $rule) {
            $className = "Pro_Three\\To_Do_List\\Classes\\validation\\".$rule;
            $object = new $className;

            $error = $object->check($key, $value);
            if ($error !== false) {
                $this->errors[] = $error;
            }
        }

        return $this->errors;
    }
}

?>















<?php
// namespace Pro_Three\To_Do_List\Classes\validation;

// require_once "Required.php";
// require_once "Str.php";
 
// use Pro_Three\To_Do_List\Classes\validation\Required;
// use Pro_Three\To_Do_List\Classes\validation\Str;


// class Validation    {
// private $errors=[];

//     public function validate ($key,$value,$rules){
//         // key and value take from check method in class Str and Required
//         foreach($rules as $rule){
//             $rule="Pro_Three\To_Do_List\Classes\validation\\".$rule;
//             $object= new $rule;

//            $error= $object->check($key,$value);
//            if($error != false){

//             $this->errors[]=$error;
//             return $this->errors;

//            }
//         }


//     }
// }


?>