<?php
    @session_start();
    include ("./MVC/controllers/c_user.php");
    $login = new c_user();
    $login->login_customer();
?>