<?php 

require_once("../controllers/payment_controller.php");

$curl = curl_init();
// $data = "T032500960937628";

$user_name = $_GET['user_name'];
$user_email = $_GET['user_email'];
$user_message = $_GET['user_message'];
$user_contact = $_GET['user_contact'];
$data = $_GET["reference"];

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

    $donated = make_donation_ctr($user_name, $user_email, $payment_date, $amount, $data, $currency, $user_message, $user_contact);

    if($donated){
        echo 1;
    }else{
        echo 2;
    }
}


?>