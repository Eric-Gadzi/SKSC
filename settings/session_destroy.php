<?php 

    session_start();
    unset($_SESSION["isAdmin"]);
    unset($_SESSION["admin_email"]);

    header("location: ../view/index.php");
?>