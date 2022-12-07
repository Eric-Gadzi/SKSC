<?php 
require_once("../controllers/payment_controller.php");
require_once("../controllers/orders_controller.php");
require_once("../controllers/cart_controller.php");
session_start();
$curl = curl_init();
// $data = "T032500960937628";

$user_name = $_GET['user_name'];
$user_email = $_GET['user_email'];
$user_message = $_GET['user_message'];
$user_contact = $_GET['user_contact'];
$data = $_GET["reference"];
$user_ip = $_SESSION['user_ip'];
$invoice_no = $data;
$order_status = "pending";
$order_date = new DateTime();
$order_date = date_format($order_date, "Y-m-d");


curl_setopt_array($curl, array(
  CURLOPT_URL => 'https://api.paystack.co/transaction/verify/'.$data,
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => "",
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 30,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => "GET",
  CURLOPT_HTTPHEADER => array(
    "Authorization: Bearer sk_test_50902229f2c6e2eac75bfdc2b90cc0211df24a5b",
    "Cache-Control: no-cache",
  ),
));


$response = json_decode(curl_exec($curl), true);
$err = curl_error($curl);

curl_close($curl);

if ($err) {
  echo "cURL Error #:" . $err;
}else {
    $res = $response;
    $amount =  $res['data']['amount'];
    $currency = $res['data']['currency'];
    $payment_date = date("Y-m-d");
   

    // print_r($res);
    $order_id = create_order_ctr($user_ip, $invoice_no, $order_date, $order_status);
   
 
    

    
    $paid = product_payment_ctr($user_ip,$order_id, $payment_date, $amount, $currency);

    if($paid){
     
      $donated = make_donation_ctr($user_name, $user_email, $payment_date, $amount, $data, $currency, $user_message, $user_contact);
      
        $cartList = select_user_cart($user_ip);
        foreach($cartList as $cart){
          $moved = add_order_details_ctr($order_id, $cart['product_id'], $cart['qty']);
          if($moved){
            $deleted = delete_cart($cart['product_id'], $user_ip);
          }else{
            echo 2;
            return;
          }
        }
        $_SESSION['total'] = 0;
        echo 1;
        return;
    }else{
        echo 2;
        return;
    }
}
