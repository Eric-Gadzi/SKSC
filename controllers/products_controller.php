<?php 
    require_once("../classes/product_class.php");

    function create_product_ctr($title, $price, $desc, $qty, $image, $keyword){
        $product = new Product;

        return $product->create_product($title, $price, $desc, $qty, $image, $keyword);
    }

    function update_product_ctr($p_id, $title, $price, $desc, $qty, $keyword){
        $product = new Product;

        return $product->update_product($p_id, $title, $price, $desc, $qty, $keyword);
    }

    function delete_product_ctr($product_id){
        $product = new Product;

        return $product->delete_product($product_id);
    }

    function select_all_products_ctr(){
        $product = new Product;

        return $product->select_all_products();
    }

    function select_one_product_ctr($product_id){
        $product = new Product;

        return $product->select_one_product($product_id);
    }

    function product_is_finished($product_id){
        $product = new Product;

        return $product->product_is_finished($product_id);
    }

?>