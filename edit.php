<?php
require_once 'inc/header.php';
require_once "App.php";
?>
<?php 


// return value of this task

if($request->keyCheck($request->get('id'))){
    
    $id=$request->get('id');
    $sta=$conn->prepare("SELECT `task_name`,`id` FROM `tasks`   WHERE  `id`=:id ");
    $sta->bindParam('id',$id);
    $output=$sta->execute();
    if($sta->rowCount()==1){
        $result=$sta->fetch(PDO::FETCH_ASSOC );
    }else{

    }



}

?>
<body class="container w-50 mt-5">
    <?php  require_once"inc/errors.php"  ?>

    <form action="handle/edit.php?id=<?php echo $id ?>" method="post">
            <textarea type="text" class="form-control"  name="title" id="" placeholder="enter your note here"><?php if(!empty($result['task_name']))echo $result['task_name'] ?></textarea>
            <div class="text-center">
                <button type="submit" name="submit" class="form-control text-white bg-info mt-3 " >Update</button>
            </div>  
    </form>
</body>
</html>