<?php 
    require_once("../settings/db_class.php");


class payment extends db_connection{



    function make_donation($name, $email, $date, $amount, $reference_no, $currency,  $user_message, $user_contact){
        $sql = "INSERT INTO `donation`( `donor_name`, `donor_email`, `donation_date`, `donation_amount`, `reference_no`, `currency`, `message`, `donor_contact`) VALUES ('$name','$email','$date','$amount','$reference_no', '$currency',  '$user_message', '$user_contact')";

        return $this->db_query($sql);
    }


    function product_payment_ctr($ip_add,$order_id, $payment_date, $amount, $currency){
        $sql = "INSERT INTO `payment`( `amt`, `user_ip`, `order_id`, `currency`, `payment_date`) VALUES ('$amount','$ip_add','$order_id','$currency','$payment_date')";

        return $this->db_query($sql);

    }

    function total_donations(){
        $sql = "SELECT SUM(donation_amount) as amount FROM `donation`";

        return $this->db_fetch_one($sql);
    }
}



?>