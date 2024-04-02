<?php
require_once "inc/connection.php";
require_once "classes/Request.php";
require_once "classes/validation/Validation.php";
require_once "classes/Session.php";



use Pro_Three\To_Do_List\classes\Request;
use Pro_Three\To_Do_List\Classes\Validation\Validation;
use Pro_Three\To_Do_List\Classes\Session;


$request=new Request;
$valid=new Validation;
$session=new Session;


