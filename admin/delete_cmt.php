<?php
@session_start();
if (isset($_SESSION['user_admin'])) {
    include ("./MVC/controllers/c_comments.php");
    $cmt = new c_comments();
    $cmt->delete_cmt();
} else {
    header("location:login_admin.php");
}