<?php 

    require_once("../controllers/products_controller.php");

    $id = $_GET['product_id'];

    $deleted = delete_product_ctr($id);

    if($deleted){
        echo "deleted";
        header("Location: ../view/products.php?status=5");          
          
    }else{
        echo "failed";
        header("Location: ../view/products.php?status=6");
    }


?>