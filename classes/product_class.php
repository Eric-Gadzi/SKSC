<?php 

    require_once("../settings/db_class.php");


    class Product extends db_connection{

        function create_product($title, $price, $desc, $qty, $image, $keyword){
            $sql = "INSERT INTO `products`(`product_title`, `product_price`, `product_desc`,
            `product_qty`,
            `product_image`, `product_keywords`) VALUES ('$title','$price','$desc','$qty','$image','$keyword')";

            return $this->db_query($sql);
        }

        function update_product($p_id, $title, $price, $desc, $qty, $keyword){
            $sql = "UPDATE `products` SET `product_title`='$title',`product_price`='$price',`product_desc`='$desc',
            `product_qty` = '$qty',
            `product_keywords`='$keyword' WHERE `product_id`='$p_id'";

            return $this->db_query($sql);
        }


        function delete_product($product_id){
            $sql = "DELETE FROM `products` WHERE product_id = $product_id";

            return $this->db_query($sql);            
        }

        function select_all_products(){
            $sql = "SELECT * FROM products";

            return $this->db_fetch_all($sql);
        }

        function select_search_products($value){
            $sql = "SELECT * FROM products WHERE product_title LIKE '%$value%'";
            return $this->db_fetch_all($sql);
        }

        function select_one_product($product_id){
            $sql = "SELECT * FROM products where product_id = $product_id";

            return $this->db_fetch_one($sql);
        }

        function product_is_finished($product_id){
            $result = select_one_product_ctr($product_id);

            return $result['product_qty'] == 0;
        }
    }


?>