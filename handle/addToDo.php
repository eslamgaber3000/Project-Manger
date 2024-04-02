<?php
require_once("../App.php");

// check that he came from submit 
if($request->keyCheck($request->post('submit'))){
   
  
 $title= $request->clean($request->post('title'));


$errors=$valid->validate("title",$title,["Str","Required"]);



if(empty($errors)){

    $user_id=1;
    // insert query
  $result=$conn->prepare("INSERT INTO `tasks`(`task_name`,`user_id`) VALUES (:title ,:user_id) ");
  $result->bindParam("title",$title);
  $result->bindParam("user_id",$user_id);
  $output=$result->execute();

  if($output){

   $data=$session->setSession('success','data inserted successfully');
     $request->redirect("../index.php");
    
  }

}else{
     
    $errors=$session->setSession('error',$errors);
    $request->redirect("../index.php");
   

    
}



}else{

  $request->redirect("../index.php");
    

}


