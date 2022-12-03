<?php

require_once("../controllers/user_controller.php");

$user_name = $_POST['user_name'];
$user_email = $_POST['user_email'];
$user_message = $_POST['user_message'];
$user_country = $_POST['user_country'];
$user_city = $_POST['user_city'];
$user_contact = $_POST['user_contact'];
$user_city = $_POST['user_city'];
$user_role = 3;

$root_dir = "../images/users";
$upload_root_dir = "../images/users/";
$file = $_FILES["user_image"];
$file_dest = $root_dir . "/" . basename($file["name"]);
$upload_file_dest = $upload_root_dir . basename($file["name"]);
$file_type = strtolower(pathinfo($file_dest, PATHINFO_EXTENSION));

$move = move_uploaded_file($file["tmp_name"], $file_dest);



if ($move) {
    $result = add_user_ctr($user_name, $user_email, $user_message, $user_country, $user_city, $user_contact, $file_dest, $user_role);

    if($result){

    }else{
        
    }
}


?>