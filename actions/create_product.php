<?php 
    require_once ("../controllers/products_controller.php");

    $product_name = $_POST['product_name'];
    $product_price = $_POST['product_price'];
    $product_quantity = $_POST['product_quantity'];
    $product_keywords = $_POST['product_keywords'];
    $product_description = $_POST['product_description'];

    $root_dir = "../images/products";
    $upload_root_dir = "../images/products/";
    $file = $_FILES["product_image"];
    $file_dest = $root_dir . "/" . basename(str_replace(' ', '',$file["name"]));
    $upload_file_dest = $upload_root_dir . basename(str_replace(' ', '',$file["name"]));
    $file_type = strtolower(pathinfo($file_dest, PATHINFO_EXTENSION));

    $move = move_uploaded_file($file["tmp_name"], $file_dest);

    if($move){
        $added = create_product_ctr($product_name, $product_price, $product_description, $product_quantity, $file_dest, $product_keywords);
        if($added){
            header("Location: ../view/products.php?status=1");
        }else{
            header("Location: ../view/products.php?status=2");
        }

    }else{
             header("Location: ../view/products.php?status=2");
    }

?>