<?php
include ("./MVC/models/m_categories.php");
include ("./MVC/models/m_products.php");
include ("./MVC/models/m_css.php");

class c_home {

    public function index() {
        // lấy ra sản phẩm
        $m_product = new m_product();
        $m_category = new m_category();
        $m_css = new m_css();

        // lấy ra tất cả sản phấm
        $products = $m_product->read_product(9, 0); // trả về 1 mảng dữ liệu

        // lấy ra top 10 sản phẩm có lượt xem nhiều nhất
        $products_top_10 = $m_product->read_products_top_10(); // trả về 1 mảng dữ liệu

        // lấy ra danh mục
        $categories = $m_category->read_category(); // trả về 1 mảng dữ liệu

        // lấy ra sản phẩm đặc biệt
        $product_special = $m_product->read_product_special();

        // cài đặt css
        $css = $m_css->read_css(); // trả về 1 mảng dữ liệu
        $view_home = "./MVC/views/css/v_css.php";

        $view = "./MVC/views/home/v_home.php"; // $view hướng đến link view
        include ("templates/front-end/layout.php");
    }
}
?>