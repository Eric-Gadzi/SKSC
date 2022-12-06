<?php 

    require_once("../controllers/user_controller.php");

    $id = $_GET['user_id'];

    $deleted = delete_donor($id);

    if($deleted){
        header("location: ../view/donate.php?message='success'");
    }else{
        echo  "failed";
    }

?>