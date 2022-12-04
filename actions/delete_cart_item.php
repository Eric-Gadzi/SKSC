<?php 
    require_once("../controllers/cart_controller.php");
$product_id = $_GET['product_id'];
session_start();
$user_ip = $_SESSION['user_ip'];

$delete = delete_cart($product_id, $user_ip);

if($delete){
    header("location: ../view/cart.php");
}

?>