<?php 

    require_once("../settings/db_class.php");


    class Cart extends db_connection{

        
        function  increaseCartQauntity($ip_address, $p_id){
            $sql = "UPDATE `cart` SET `qty`= qty+1 WHERE product_id = '$p_id' and ip_add = '$ip_address'";
            
            return $this->db_query($sql);
        }

        function  reduceCartQauntity( $ip_address, $p_id){
            $sql = "UPDATE `cart` SET `qty`= qty-1 WHERE product_id = '$p_id' and ip_add = '$ip_address'";
            
            return $this->db_query($sql);
        }

        function checkProductInCart($ip_add, $p_id){
            $sql = "SELECT * FROM `cart` WHERE product_id = '$p_id'  and ip_add = '$ip_add' ";
    
            $this->db_fetch_all($sql);
    
            return $this->db_count();
        }
        
        function add_cart($product_id, $ip_add, $user_id, $qty){
            $sql = "INSERT INTO `cart`(`product_id`, `ip_add`, `user_id`, `qty`) VALUES ('$product_id','$ip_add','$user_id','$qty')";

            return $this->db_query($sql);
        }

        function select_all_cart(){
            $sql = "SELECT * FROM cart";

            return $this->db_fetch_all($sql);
        }


        function select_one_cart($product_id, $ip_add){
            $sql = "SELECT * FROM cart where product_id = $product_id and ip_add = $ip_add";

            return $this->db_fetch_one($sql);
        }

        function update_cart($product_id, $ip_add, $user_id, $qty){
            $sql = "UPDATE `cart` SET `user_id`='$user_id',`qty`='$qty' WHERE product_id = '$product_id' and  ip_add = '$ip_add'";

            return $this->db_query($sql);
        }

        function delete_cart($product_id, $ip_address){
            $sql = "DELETE FROM cart WHERE ip_add = '$ip_address' and product_id = '$product_id'";

            return $this->db_query($sql);
        }

    }



?>