<?php 

    require_once("../controllers/user_controller.php");
    
    $email = $_POST['email'];
    $password = $_POST['password'];

    $user = select_one_userEmail($email);

    print_r($user);

    if($user && $user['user_role'] == 1){
        $checkPassword = checkPassword($user['user_id'], $password);
        if($checkPassword){
            $admin_pass = $checkPassword['password'];
            if($admin_pass == $password){
                session_start();
                $_SESSION['isAdmin'] = true;
                $_SESSION['admin_email'] = $email;
                header("location: ../view/index.php");
            }
        }
    }else{
        echo 10;
    }



?>