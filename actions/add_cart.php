<?php 
    require_once("../controllers/cart_controller.php");
    session_start();
    $user_ip = $_SESSION['user_ip'];
    $product_id = $_GET['product_id'];
    $user_id = null;
    $product_qty = 1;

    // if item exist increase quantity
    $products = checkProductInCart($user_ip, $product_id);
    if($products > 0){
        //increaseCartQauntity($user_ip, $product_id);
        echo 2;
        return;
    }
    

    $add = add_cart($product_id, $user_ip, $user_id, $product_qty);

    if($add){
        echo 1;
        return;
    }else{
        
        echo 3;
        return;
    }
    
?>