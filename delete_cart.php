<?php
    @session_start();
    include ("./MVC/controllers/c_cart.php");
    $delete_cart = new c_cart();
    $delete_cart->delete_cart();
?>