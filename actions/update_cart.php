<?php 
    require_once("../controllers/cart_controller.php");
$product_id = $_GET['product_id'];
session_start();
$user_ip = $_SESSION['user_ip'];

if(isset($_GET['increase'])){
    $in = increaseCartQauntity($user_ip, $product_id);
    if($in){
        echo 1;
        header("location: ../view/cart.php#cart");
    }
}

if(isset($_GET['decrease'])){
    $in = reduceCartQauntity($user_ip, $product_id);
    if($in){
        echo 1;
        header("location: ../view/cart.php#cart");
    }else{
        echo 2;
    }
}


?>