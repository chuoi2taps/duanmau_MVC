<?php
    @session_start();
    include ("./MVC/controllers/c_user.php");
    $log_out = new c_user();
    $log_out->log_out();

    header("location:../index.php");
?>