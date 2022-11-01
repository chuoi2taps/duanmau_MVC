<?php
@session_start();
include ("./MVC/controllers/c_contact.php");
$c_contact = new c_contact();
$c_contact->index();