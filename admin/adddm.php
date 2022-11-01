<?php
@session_start();
if (isset($_SESSION['user_admin'])) {
    include ("./MVC/controllers/c_danhmuc.php");
    $danhmuc = new c_danhmuc();
    $danhmuc->adddm();
} else {
    header("location:login_admin.php");
}
?>