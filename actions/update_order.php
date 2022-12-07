<?php 
    require_once("../controllers/orders_controller.php");

    $id = $_GET['order_id'];
    

    $updated = update_order_status($id);

    if($updated){
        header("Location: ../view/orders.php?status=1");
    }else{
        header("Location: ../view/orders.php?status=2");
    }

?>