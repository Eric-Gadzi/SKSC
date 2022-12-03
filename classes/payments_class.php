<?php 
    require_once("../settings/db_class.php");


class payment extends db_connection{



    function make_donation($name, $email, $date, $amount, $reference_no, $currency){
        $sql = "INSERT INTO `donation`( `donor_name`, `donor_email`, `donation_date`, `donation_amount`, `reference_no`, `currency`) VALUES ('$name','$email','$date','$amount','$reference_no', '$currency')";

        return $this->db_query($sql);
    }
}



?>