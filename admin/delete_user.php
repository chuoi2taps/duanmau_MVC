<?php
@session_start();
if (isset($_SESSION['user_admin'])) {
    include ("./MVC/controllers/c_user.php");
    $delete_user = new c_user();
    $delete_user->delete_user();
} else {
    header("location:login_admin.php");
}