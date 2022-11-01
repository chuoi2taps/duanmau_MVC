<?php
@session_start();
if (isset($_SESSION['user_admin'])) {
    include ("./MVC/controllers/c_user.php");
    $user = new c_user();
    $user->index();
} else {
    header("location:login_admin.php");
}
?>