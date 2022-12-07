<?php

    require_once("../controllers/user_controller.php");

    function display_search_user($role, $v_name){
        $user_list = select_search_user_ctr($role, $v_name);

        foreach($user_list as $user){
            display_a_volunteer($user['user_name'], $user['user_image'], $user['user_message'], $user['user_id'], $user['user_country'], $user['user_city'], $user['user_contact'], $user['user_email']);
        }
    }

    function display_user($role){

        $user_list = select_all_user_ctr($role);

        foreach($user_list as $user){
            display_a_volunteer($user['user_name'], $user['user_image'], $user['user_message'], $user['user_id'], $user['user_country'], $user['user_city'], $user['user_contact'], $user['user_email']);
        }

    }

    function display_a_volunteer($name, $image, $message, $id, $country, $city, $contact, $email){
        echo "
        <div class='col-lg-4  mb-sm-4 ftco-animate'>
        <div class='staff'>
            <div class='d-flex mb-4'>
                <div class='img' style='background-image: url($image);'></div>
                <div class='info ml-4'>
                    <h3><a href='teacher-single.html'>$name</a></h3>
                    <span class='position'>From: $city , $country</span>
               
                        <p>
                           $message
                        </p>";
            if (isset($_SESSION['isAdmin'])) {
                    echo "
                                         
                    <div class='container'>
                        <div class='row'>
                           
                            <a href='#' type='button' class='btn btn-outline-primary btn-sm' role='button'> <i class='bi bi-eye text-primary me-3'></i></a>
                            <span>&nbsp;</span><span>&nbsp;</span><span>&nbsp;</span>
                            <a href='update_volunteer.php?user_name=$name&user_email=$email&user_contact=$contact&user_country=$country&user_city=$city&user_message=$message&user_id=$id' class='btn btn-outline-warning btn-sm' role='button'><i class='bi bi-pencil-square'></i></a>
                            <span>&nbsp;</span><span>&nbsp;</span><span>&nbsp;</span>
                            <a href='../actions/delete_user_action.php?user_id=$id' class='btn btn-outline-danger btn-sm' role='button'><i class='bi bi-trash-fill'></i></a>
                        </div>
                    </div>
                    ";
            }
                    echo "
                </div>
            </div>
        </div>
    </div>
        ";
    }


?>