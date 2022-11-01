<?php
@session_start();
if (isset($_SESSION['user_admin'])) {
    include ("./MVC/controllers/c_danhmuc.php");
    $edit_dm = new c_danhmuc();
    $edit_dm->edit_dm();
} else {
    header("location:login_admin.php");
}