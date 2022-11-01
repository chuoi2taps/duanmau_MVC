<?php
class c_contact {
    public function index () {
        // cài đặt Css
        include ("./MVC/models/m_css.php");
        $m_css = new m_css();
        $css = $m_css->read_css(); // trả về 1 mảng dữ liệu
        $view_contact = "./MVC/views/css/v_css.php";

        $view = "./MVC/views/contact/v_contact.php"; // $view hướng đến link view
        include ("./templates/front-end/layout.php");
    }
}