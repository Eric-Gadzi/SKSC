<?php 

    require_once("../controllers/user_controller.php");

    $id = $_GET['user_id'];

    $result = delete_user_ctr($id);

    if($result){
        echo "success";
        header("Location: ../view/volunteers.php?status=1");
    }else{
        header("Location: ../view/volunteers.php?status=2");
    }



?>