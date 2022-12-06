<?php 
    require_once("../classes/payments_class.php");


   function make_donation_ctr($name, $email, $date, $amount, $reference_no, $currency,  $user_message, $user_contact){
        $pay = new Payment;

        return $pay->make_donation($name, $email, $date, $amount, $reference_no, $currency,  $user_message, $user_contact);

   }


   function product_payment_ctr($ip_add,$order_id, $payment_date, $amount, $currency){
     $pay = new Payment;

     return $pay->product_payment_ctr($ip_add,$order_id, $payment_date, $amount,  $currency);
   }

   function total_donations(){
     $pay = new Payment;

     return $pay->total_donations();
   }


?>