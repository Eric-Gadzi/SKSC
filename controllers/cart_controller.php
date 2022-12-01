<?php 

    require_once("../classes/cart_class.php");


    function add_cart($product_id, $ip_add, $user_id, $qty){
        $cart = new Cart;

        return $cart->add_cart($product_id, $ip_add, $user_id, $qty);
    }

    function select_all_cart(){
        $cart = new Cart;

        return $cart->select_all_cart();
    }

    function select_one_cart($product_id, $ip_add){
        $cart = new Cart;

        return $cart->select_one_cart($product_id, $ip_add);
    }

    function update_cart($product_id, $ip_add, $user_id, $qty){
        $cart = new Cart;

        return $cart->update_cart($product_id, $ip_add, $user_id, $qty);
    }

    function delete_cart($product_id, $ip_address){
        $cart = new Cart;

        return $cart->delete_cart($product_id, $ip_address);
    }


?>