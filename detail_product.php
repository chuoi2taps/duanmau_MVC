<?php
@session_start();
include ("./MVC/controllers/c_detail_products.php");
$c_detail_product = new c_detail_product();
$c_detail_product->index();