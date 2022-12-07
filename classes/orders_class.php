<?php 

    require_once("../settings/db_class.php");

    class Order extends db_connection{

        function create_order($user_ip, $invoice_no, $order_date, $order_status){
            $sql = "INSERT INTO `orders`( `user_ip`, `invoice_no`, `order_date`, `order_status`) VALUES ('$user_ip','$invoice_no','$order_date','$order_status')";
            $this->db_query($sql);

            $id = mysqli_insert_id($this->db);

            return $id;     
        }

        function update_order($order_id, $user_id, $invoice_no, $order_date, $order_status){

            $sql = "UPDATE `orders` SET `user_id`='$user_id',`invoice_no`='$invoice_no',`order_date`='$order_date',`order_status`='$order_status' WHERE `order_id`='$order_id'";

            return $this->db_query($sql);
        }

        function delete_order($order_id){
            $sql = "DELETE FROM `orders` WHERE order_id = $order_id";

            return $this->db_query($sql);
        }

        function select_all_orders(){
            $sql = "SELECT * FROM orders";

            return $this->db_fetch_all($sql);
        }

        function select_one_order($order_id){
            $sql = "SELECT * FROM orders where order_id = $order_id";

            return $this->db_fetch_one($sql);
        }

        function add_order_details($order_id, $product_id, $qty){
          $sql = "INSERT INTO `orderdetails`(`order_id`, `product_id`, `qty`) VALUES ('$order_id','$product_id','$qty')";


          return $this->db_query($sql);

        }

        function update_order_details($order_id, $product_id, $qty){
            $sql = "UPDATE `orderdetails` SET `product_id`='$product_id',`qty`='$qty' WHERE `order_id`='$order_id'";

            return $this->db_query($sql);
        
        }

        function delete_order_details($order_id, $product_id){
            $sql = "DELETE FROM orderdetails where order_id = $order_id and product_id = $product_id";

            return $this->db_query($sql);
        }

        function select_order_details($order_id){
            $sql = "SELECT * FROM orderdetails where order_id = '$order_id'";
            return $this->db_fetch_all($sql);
        }

        function all_orders_details(){
            $sql = "SELECT orders.order_id, donation.reference_no, products.product_id, products.product_price, products.product_title, donation.donor_name, donation.donor_email, donor_contact, orderdetails.qty, orders.order_status FROM orders,donation,orderdetails,products WHERE orders.invoice_no=donation.reference_no and orders.order_id=orderdetails.order_id and products.product_id=orderdetails.product_id";
            return $this->db_fetch_all($sql);
        }

        function update_order_status($id){
            $sql = "UPDATE `orders` SET `order_status`='success' WHERE order_id='$id'";
            return $this->db_query($sql);
        
        }

        

    }



?>