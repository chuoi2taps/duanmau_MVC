<?php
@session_start();
if (isset($_SESSION['user_customer']) || isset($_SESSION['user_admin'])) {
    include ("./MVC/controllers/c_cart.php");
    $cart = new c_cart();
    $cart->index();
} else {
    header("location:admin/login_cus.php");
}
?>