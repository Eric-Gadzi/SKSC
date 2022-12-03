<?php
require_once("../controllers/user_controller.php");

$user_id = $_GET['user_id'];
$user_name = $_GET['user_name'];
$user_email = $_GET['user_email'];
$user_message = $_GET['user_message'];
$user_country = $_GET['user_country'];
$user_city = $_GET['user_city'];
$user_contact = $_GET['user_contact'];
$user_city = $_GET['user_city'];
$user_role = 3;


$result = update_user_ctr($user_id, $user_name, $user_email, $user_message, $user_country, $user_city, $user_contact);

if($result){
    echo 1;
}else{
    echo 2;
}