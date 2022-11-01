<?php
include ("./MVC/models/m_products.php");
include ("./MVC/models/m_categories.php");
include ("./MVC/models/m_css.php");
class c_products {
    public function index () {
        $m_product = new m_product();
        $m_category = new m_category();

        // phân trang
        $limit = $_GET['perpage'] ?? 9;
        $current_page = $_GET['page'] ?? 1;
        $offset = ($current_page - 1) * $limit;
        $total_products = $m_product->read_all_product();
        $total_pages = ceil(count($total_products) / $limit);
        $products = $m_product->read_product($limit, $offset);

        // lấy top 10 sản phẩm có lượt xem cao nhất
        $products_top_10 = $m_product->read_products_top_10();
        
        // lấy ra danh mục
        $categories = $m_category->read_category();

        // cài đặt Css
        $m_css = new m_css();
        $css = $m_css->read_css();
        $view_product = "./MVC/views/css/v_css.php";

        // lấy view
        $view = "./MVC/views/products/v_products.php";
        include ("./templates/front-end/layout.php");
    }
}
