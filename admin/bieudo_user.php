<?php
@session_start();
if (isset($_SESSION['user_admin'])) {
    include("./MVC/controllers/c_thongke.php");
    $thongke = new c_thongke();
    $thongke->bieu_do_user();
} else {
    header("location:login_admin.php");
}
?>