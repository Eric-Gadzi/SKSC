<?php 

    require_once("../classes/cart_class.php");


    function increaseCartQauntity($ip_address, $p_id){
        $cart = new Cart;

        return $cart->increaseCartQauntity($ip_address, $p_id);
    }

    function reduceCartQauntity( $ip_address, $p_id){
        $cart = new Cart;

        return $cart->reduceCartQauntity( $ip_address, $p_id);
    }

    function checkProductInCart($ip_add, $p_id){
        $cart = new Cart;

        return $cart->checkProductInCart($ip_add, $p_id);
    }

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