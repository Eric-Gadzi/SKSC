<?php 
    require_once("../controllers/orders_controller.php");


    


    function display_all_orders(){
       $orderList =  all_orders_details();
       $total = 0;
       foreach($orderList as $order){
        // SELECT products.product_id, products.product_price, products.product_title, donation.donor_name, donation.donor_email, donor_contact, orderdetails.qty, orders.order_status FROM orders,donation,orderdetails,products WHERE orders.invoice_no=donation.reference_no and orders.order_id=orderdetails.order_id and products.product_id=orderdetails.product_id;

        $total += display_order_row($order['order_id'], $order['donor_name'], $order['donor_email'],$order['donor_contact'], $order['product_title'],$order['product_price'], $order['qty'], $order['qty'] * $order['product_price'], $order['order_status']);
    
       }

       return $total;
       
    }

    function display_order_row($order_id, $customer_name, $customer_email, $customer_contact, $produc_name, $price, $product_quantity,$amount,$order_status){
        echo "
        <tr>
        <td class='text-right font-weight-semibold align-start p-4'>$customer_name</td>
        <td class='text-right font-weight-semibold align-start p-4'>$customer_email</td>
        <td class='text-right font-weight-semibold align-start p-4'>$customer_contact</td> 
        <td class='text-right font-weight-semibold align-start p-4'>$produc_name</td>
        <td class='text-right font-weight-semibold align-start p-4'>$price</td>        
        <td class='text-center py-3 px-4 py-3 font-weight-bold align-start p-4'>$product_quantity</td>
        <td class='text-center py-3 px-4 py-3 font-weight-bold align-start p-4'>$amount</td>
        <td class='text-center py-3 px-4 py-3 font-weight-bold align-start p-4'>$order_status</td>


        
        
        <td class='text-center py-4' >
            <a name='' id='' class='btn btn-outline-danger' href='../actions/update_order.php?order_id=$order_id' role='button' >Change Status</a>
        </td>

      

        </tr>
        ";

        return $amount;
    }




?>