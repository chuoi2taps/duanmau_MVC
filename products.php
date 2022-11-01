<?php
@session_start();
include ("./MVC/controllers/c_products.php");
$c_products = new c_products();
$c_products->index();