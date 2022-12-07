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

    function select_particular_user_ctr($role){
        $user = new User;
        return $user->select_particular_user($role);
    }

    function select_all_user_ctr($role){
        $user = new User;

        return $user->select_all_user($role);
    }

    function select_search_user_ctr($role, $v_name){
        $user = new User;

        return $user->select_search_user($role, $v_name);
    }

    function select_one_user_ctr($user_id){
        $user = new User;

        return $user->select_one_user($user_id);
    }

    function select_one_userEmail($user_email){
        $user = new User;

        return $user->select_one_userEmail($user_email);
    }

    function count_users($user_role){
        $user = new User;

        return $user->count_users($user_role);
    }

    function checkPassword($user_id, $password){
        $user = new User;

        return $user->checkPassword($user_id, $password);
    }

    function select_donor(){
        $user = new User;

        return $user->select_donor();
    }

    function delete_donor($id){
        $user = new User;

        return $user->delete_donor($id);
    }


?>