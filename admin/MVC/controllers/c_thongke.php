<?php
include "./MVC/models/m_categories.php";
include ("./MVC/models/m_css.php");
include "./MVC/models/m_products.php";
include "./MVC/models/m_customers.php";

class c_thongke{

    public function thong_ke_san_pham(){
        $m_product = new m_product();
        $stt = 1;

        $thongke_product = $m_product->thong_ke_san_pham();

        $m_css = new m_css();
        $css = $m_css->read_css(); // trả về 1 mảng dữ liệu
        $view_user_admin = "./MVC/views/css/v_css.php";
        $view = "./MVC/views/thongke/v_thongke_hh.php";
        include "./templates/front-end/layout.php";
    }

    public function thong_ke_user(){
        $m_user = new m_customer();
        
        $stt = 1;
        $month = 10;
        if (isset($_POST['btn_month'])) {
            $month = $_POST['month'];
        }

        $thongke_user = $m_user->read_user_create($month);

        $m_css = new m_css();
        $css = $m_css->read_css(); // trả về 1 mảng dữ liệu
        $view_user_admin = "./MVC/views/css/v_css.php";
        $view = "./MVC/views/thongke/v_thongke_user.php";
        include "./templates/front-end/layout.php";
    }

    public function bieu_do_san_pham(){
        $m_product = new m_product();
        $stt = 1;

        $thongke_product = $m_product->thong_ke_san_pham();

        $m_css = new m_css();
        $css = $m_css->read_css(); // trả về 1 mảng dữ liệu
        $view_user_admin = "./MVC/views/css/v_css.php";
        $view = "./MVC/views/thongke/v_bieu_do_hh.php";
        include "./templates/front-end/layout.php";
    }

    public function bieu_do_user(){
        $m_user = new m_customer();

        $stt = 1;

        $thongke_user = $m_user->read_all_user();

        $m_css = new m_css();
        $css = $m_css->read_css(); // trả về 1 mảng dữ liệu
        $view_user_admin = "./MVC/views/css/v_css.php";
        $view = "./MVC/views/thongke/v_bieu_do_user.php";
        include "./templates/front-end/layout.php";
    }
}