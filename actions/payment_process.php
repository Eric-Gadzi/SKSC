<?php 

require_once("../controllers/payment_controller.php");
require_once("../controllers/orders_controller.php");
session_start();
$curl = curl_init();
// $data = "T032500960937628";

$user_name = $_GET['user_name'];
$user_email = $_GET['user_email'];
$user_message = $_GET['user_message'];
$user_contact = $_GET['user_contact'];
$data = $_GET["reference"];
$user_ip = $_GET['user_ip'];
$order_id = create_order_ctr($user_ip, $invoice_no, $order_date, $order_status);

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

    // print_r($res);

    $amount =  $res['data']['amount'];
    $currency = $res['data']['currency'];
    $payment_date = date("Y-m-d");

    $paid = product_payment_ctr($user_ip,$order_id, $payment_date, $amount, $currency);



    if($paid){
        echo 1;
    }else{
        echo 2;
    }
}
