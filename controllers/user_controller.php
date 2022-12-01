<?php 

    require_once("../classes/user_class.php");

    function add_user_ctr($user_name, $user_email, $user_message, $user_country, $user_city, $user_contact, $user_image, $user_role){
        $user = new User;

        return $user->add_user($user_name, $user_email, $user_message, $user_country, $user_city, $user_contact, $user_image, $user_role);
    }

    function update_user_ctr($user_id, $user_name, $user_email, $user_message, $user_country, $user_city, $user_contact){
        $user = new User;

        return $user->update_user($user_id, $user_name, $user_email, $user_message, $user_country, $user_city, $user_contact);
    }

    function delete_user_ctr($user_id){
        $user = new User;

        return $user->delete_user($user_id);
    }

    function select_all_user_ctr(){
        $user = new User;

        return $user->select_all_user();
    }

    function select_one_user_ctr($user_id){
        $user = new User;

        return $user->select_one_user($user_id);
    }

    function count_users($user_role){
        $user = new User;

        return $user->count_users($user_role);
    }




?>