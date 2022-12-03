<?php 
    require_once("../classes/payments_class.php");


   function make_donation_ctr($name, $email, $date, $amount, $reference_no, $currency){
        $pay = new Payment;

        return $pay->make_donation($name, $email, $date, $amount, $reference_no, $currency);

   }


?>