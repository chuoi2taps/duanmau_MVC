<?php
@session_start();
if (isset($_SESSION['user_admin'])) {
    include ("./MVC/controllers/c_hanghoa.php");
    $edit_hh = new c_hanghoa();
    $edit_hh->edit_hh();
} else {
    header("location:login_admin.php");
}
?>