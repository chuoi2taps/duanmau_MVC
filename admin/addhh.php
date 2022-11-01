<?php
@session_start();
 if (isset($_SESSION['user_admin'])) {
    include ("./MVC/controllers/c_hanghoa.php");
    $hanghoa = new c_hanghoa();
    $hanghoa->addhh();
} else {
    header("location:login_admin.php");
}
// include ("./MVC/controllers/c_hanghoa.php");
//      $hanghoa = new c_hanghoa();
//    $hanghoa->addhh();
?>