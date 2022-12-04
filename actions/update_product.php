<?php 
    require_once("../controllers/products_controller.php");

    $product_name = $_GET['product_name'];
    $product_price = $_GET['product_price'];
    $product_quantity = $_GET['product_quantity'];
    $product_keywords = $_GET['product_keywords'];
    $product_description = $_GET['product_description'];
    $product_id = $_GET['product_id'];

    $updated = update_product_ctr($product_id, $product_name, $product_price, $product_description, $product_quantity, $product_keywords);

    if($updated){
        header("location: ../view/products.php");
    }else{
        echo "failed";
    }

?>