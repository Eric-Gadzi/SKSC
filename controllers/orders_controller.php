<?php 
    require_once("../classes/orders_class.php");

    function create_order_ctr($user_id, $invoice_no, $order_date, $order_status){
        
        $order = new Order;

        $order->create_order($user_id, $invoice_no, $order_date, $order_status);

    }

    function update_order_ctr($order_id, $user_id, $invoice_no, $order_date, $order_status){
        $order = new Order;

        $order->update_order($order_id, $user_id, $invoice_no, $order_date, $order_status);
    }

    function delete_order($order_id){
        $order = new Order;

        $order->delete_order($order_id);
    }

    function select_all_orders(){
        $order = new Order;

        $order->select_all_orders();
    }

    function select_one_order($order_id){

        $order = new Order;

        $order->select_one_order($order_id);
    }


    function add_order_details_ctr($order_id, $product_id, $qty){
        $order = new Order;

        $order->add_order_details($order_id, $product_id, $qty);
    }


    function update_order_details_ctr($order_id, $product_id, $qty){
        $order = new Order;

        $order->update_order_details($order_id, $product_id, $qty);
    }

    function delete_order_details($order_id, $product_id){
        $order = new Order;

        $order->delete_order_details($order_id, $product_id);
    }

    

?>