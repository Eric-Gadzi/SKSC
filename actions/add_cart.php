<?php 
    require_once("../controllers/cart_controller.php");
    session_start();
    $user_ip = $_SESSION['user_ip'];
    $product_id = $_GET['product_id'];
    $user_id = null;
    $product_qty = 1;

    $add = add_cart($product_id, $user_ip, $user_id, $product_qty);

    if($add){
        echo "great";
        header("location: ../view/products.php");
    }else{
        echo "failed";
    }
    
?>