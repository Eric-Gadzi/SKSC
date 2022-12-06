<?php 
    require_once("../settings/db_class.php");

    class User extends db_connection{

        function add_user($user_name, $user_email, $user_message, $user_country, $user_city, $user_contact, $user_image, $user_role){
            $sql = "INSERT INTO `user`( `user_name`, `user_email`, `user_message`, `user_country`, `user_city`, `user_contact`, `user_image`, `user_role`) VALUES ('$user_name','$user_email','$user_message','$user_country','$user_city','$user_contact','$user_image','$user_role')";

            return $this->db_query($sql);
        }

        // intentially took image out.
        function update_user($user_id, $user_name, $user_email, $user_message, $user_country, $user_city, $user_contact){
            $sql = "UPDATE `user` SET `user_name`='$user_name',`user_email`='$user_email',`user_message`='$user_message',`user_country`='$user_country',`user_city`='$user_city',`user_contact`='$user_contact' WHERE `user_id` = '$user_id'";

            return $this->db_query($sql);
        }

        function delete_user($user_id){
            $sql = "DELETE FROM `user` WHERE user_id = '$user_id'";

            return $this->db_query($sql);
        }


        function select_all_user($role){
            $sql = "SELECT * FROM user where user_role = '$role'" ;

            return $this->db_fetch_all($sql);
        }

        function select_particular_user($role){
            $sql = "SELECT * FROM user where user_role = '$role'";

            return $this->db_fetch_all($sql);
        }

        function select_one_user($user_id){
            $sql = "SELECT * FROM user where `user_id` = '$user_id'";

            return $this->db_fetch_one($sql);
        }

        function select_one_userEmail($user_email){
            $sql = "SELECT * FROM user where `user_email` = '$user_email'";

            return $this->db_fetch_one($sql);
        }

        function count_users($user_role){
            $sql = "SELECT * FROM user where user_role = $user_role";
            $this->db_fetch_all($sql);
            return $this->db_count();
        }

        function  checkPassword($user_id, $password){
            $sql = "SELECT `user_id`, `password` FROM `admin` WHERE user_id = '$user_id' and password = '$password'";

            return $this->db_fetch_one($sql);
        }

        function select_donor(){
            $sql = "SELECT * FROM `donation`";

            return $this->db_fetch_all($sql);
        }

        function delete_donor($id){
            $sql = "DELETE FROM `donation` WHERE donation_id = $id";

            return $this->db_query($sql);
        }




    }



?>