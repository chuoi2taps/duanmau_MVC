<?php
@session_start();
if (isset($_SESSION['user_admin'])) {
    include("./MVC/controllers/c_thongke.php");
    $thongke = new c_thongke();
    $thongke->thong_ke_san_pham();
} else {
    header("location:login_admin.php");
}
?>