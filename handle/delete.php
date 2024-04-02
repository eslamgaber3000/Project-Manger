<?php
require_once "../App.php";

// check on id || delete -> index

if($request->keyCheck($request->get('id')) && $request->emptyKey($request->get('id'))){
    
    $id=$request->get('id');

    $stat=$conn->prepare("DELETE FROM `tasks`  WHERE `id`= :id ");
    $stat->bindParam("id",$id,PDO::PARAM_INT);
    $output=$stat->execute();

    if($output){

        $session->setSession('success','task deleted  successfully');
         $request->redirect("../index.php");


    }

}else{
    $session->setSession('error',['this task not found']);
    $request->redirect("../index.php");

}