<?php 

    require_once("../settings/db_class.php");

    class Order extends db_connection{

        function create_order($user_id, $invoice_no, $order_date, $order_status){
            $sql = "INSERT INTO `orders`( `user_id`, `invoice_no`, `order_date`, `order_status`) VALUES ('$user_id','$invoice_no','$order_date','$order_status')";
            $result = $this->db_query($sql);

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

        

    }



?>