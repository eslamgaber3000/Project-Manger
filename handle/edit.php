<?php
require_once("../App.php");

if($request->keyCheck($request->post('submit')) && $request->keyCheck($request->get('id'))){

$title= $request->clean($request->post('title'));

$errors=$valid->validate('title',$title,['Required','Str']);

$id=$request->get('id');
if(empty($errors)){

 $stm=$conn->prepare("SELECT `id` FROM `tasks` WHERE `id`=:id");
 $stm->bindParam("id",$id,PDO::PARAM_INT);
$stm->execute();

if($stm->rowCount()==1){


    $stat=$conn->prepare("UPDATE `tasks` SET `task_name`=:title , `created_at` = CURRENT_TIMESTAMP() WHERE `id`= :id ");
    $stat->bindParam("title",$title,PDO::PARAM_STR);
    $stat->bindParam("id",$id,PDO::PARAM_INT);
    $output=$stat->execute();

    if($output){

        $session->setSession('success','task updated successfully');
        $request->redirect("../index.php");  

    }else{
        $session->setSession('error',['error while update']);
    }


}else{
    $session->setSession('error',['task not found']);
    $request->redirect("../edit.php?id=$id");  
}

   


}else{
    $session->setSession('error',$errors);
    $request->redirect("../edit.php?id=$id");  
}


}else{

    $request->redirect("../edit.php");  
}
