<?php 
    require_once("../controllers/cart_controller.php");
    require_once("../controllers/products_controller.php");
    session_start();
    
  

    function display(){
        $user_ip = $_SESSION['user_ip'];
        $totalAmount = 0;
        $mycartList = select_user_cart($user_ip);
        foreach($mycartList as $cart){
            $product = select_one_product_ctr($cart['product_id']);
            $totalAmount += display_cart_row($cart['product_id'], $product['product_title'], $cart['qty'], $product['product_desc'], $product['product_price'], $product['product_image'], $cart['qty']*$product['product_price']);
        }

        return $totalAmount;
    }

    function display_cart_row($product_id, $product_name, $product_qty, $product_description, $product_price, $product_image, $amount){
        echo "
        <tr>
        <td class='p-4'>
            <div class='media align-items-center'>
                <img src='$product_image' class='d-block ui-w-40 ui-bordered mr-4' alt=''>
                <div class='media-body'>
                    <a href='#' class='d-block text-dark'>$product_name</a>
                    <small>
                        <span class='text-muted'>Description:</span> $product_description
                        
                    </small>
                </div>
            </div>
        </td>
        <td class='text-right font-weight-semibold align-start p-4'>$product_price</td>
        
        <td class='text-center py-3 px-4 py-3 font-weight-bold align-start p-4'>$product_qty</td>
        
        <td class='text-center py-4' >
            <a name='' id='$product_id' class='btn btn-outline-danger' href='../actions/update_cart.php?product_id=$product_id&decrease=decrease' role='button' onclick='// decrease($product_id)' style='display: inline;'>-</a>

            <a name='' id='' class='btn btn-outline-success' href='../actions/update_cart.php?product_id=$product_id&increase=increase' role='button' onclick=' //increase($product_id)' style='display: inline;'>+</a>

        </td>

        <td class='text-right font-weight-semibold align-start p-4'>$amount</td>
        <td class='text-center align-middle px-0'><a href='../actions/delete_cart_item.php?product_id=$product_id' onclick='delete($product_id)' class='shop-tooltip close float-none text-danger' title='' data-original-title='Remove'>×</a></td>
    </tr>
        ";

        return $amount;
    }
?>