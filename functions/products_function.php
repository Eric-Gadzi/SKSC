<?php

require_once("../controllers/products_controller.php");




function display_all_product()
{
  $product_list = select_all_products_ctr();
  foreach ($product_list as $product) {
    display_a_product($product['product_id'], $product['product_image'], $product['product_title'], $product['product_desc'], $product['product_price'], $product['product_qty'],  $product['product_keywords']);
  }
}

function display_a_product($product_id, $product_image, $product_name, $product_description, $product_price, $qty, $kywd)
{
  echo "
        <div class='col-lg-4 col-md-6 mb-4'>
        <div class='card'>
          <div class='bg-image hover-zoom ripple ripple-surface ripple-surface-light'
            data-mdb-ripple-color='light'>
            <img src='$product_image' width='1280px' height='200' class='w-100'/>
            <a href='single_page.php?product_id=$product_id&product_name=$product_name&product_price=$product_price&product_description=$product_description&product_image=$product_image'>
              <div class='mask'>
                <div class='d-flex justify-content-start align-items-end h-100'></div>
              </div>
              <div class='hover-overlay'>
                <div class='mask' style='background-color: rgba(251, 251, 251, 0.15);'></div>
              </div>
            </a>
          </div>
          <div class='card-body'>
            <a href='single_page.php?product_id=$product_id&product_name=$product_name&product_price=$product_price&product_description=$product_description&product_image=$product_image' class='text-reset'>
              <h5 class='card-title mb-3'>$product_name</h5>
            </a>
            <a href='single_page.php?product_id=$product_id&product_name=$product_name&product_price=$product_price&product_description=$product_description&product_image=$product_image' class='text-reset'>
              <p>$product_description</p>
            </a>
            <h6 class='mb-3'>GHC $product_price.00</h6>
            
            <a href='../actions/add_cart.php?product_id=$product_id' type='button' class='btn btn-outline-primary' onclick='add_to_cart($product_id)'><i class='bi bi-cart4'></i>Add to cart</a>
            <br>
            <br>";
  // if (isset($_SESSION['login'])) {
    echo "
              <div class='container '>
              <div class='row justify-content-center'>
                  <a href='single_page.php?product_id=$product_id&product_name=$product_name&product_price=$product_price&product_description=$product_description&product_image=$product_image' type='button' class='btn btn-outline-primary btn-sm shadow-lg' role='button'> <i class='bi bi-eye text-primary me-3'></i></a>
                  <span>&nbsp;</span><span>&nbsp;</span><span>&nbsp;</span>
                  <a href='update_product.php?product_id=$product_id&product_name=$product_name&product_price=$product_price&product_description=$product_description&product_image=$product_image&product_quantity=$qty&product_keywords=$kywd' class='shadow-lg btn btn-outline-warning btn-sm' role='button'><i class='bi bi-pencil-square'></i></a>
                  <span>&nbsp;</span><span>&nbsp;</span><span>&nbsp;</span>
                  <a href='../actions/delete_product.php?product_id=$product_id' class='shadow-lg btn btn-outline-danger btn-sm' role='button'><i class='bi bi-trash-fill'></i></a>
              </div>
          </div>
              ";
  // }
  echo "
          </div>
        </div>
      </div>
        ";
}
