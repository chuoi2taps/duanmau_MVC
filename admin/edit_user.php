<?php
@session_start();
include ("./MVC/controllers/c_user.php");
$user = new c_user();
$user->edit_user();