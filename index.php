<?php
@session_start();
include ("./MVC/controllers/c_home.php");
$c_home = new c_home();
$c_home->index();