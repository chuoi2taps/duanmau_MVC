<?php
    @session_start();
    include ("MVC/controllers/c_category.php");
    $cate = new c_category();
    $cate->index();
?>