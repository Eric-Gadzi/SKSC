<?php 

    require_once("../controllers/user_controller.php");

    $id = $_GET['user_id'];

    $result = delete_user_ctr($id);

    if($result){
        echo "success";
    }else{
        echo "failed";
    }



?>