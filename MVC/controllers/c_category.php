<?php
include("./MVC/models/m_products.php");
include("./MVC/models/m_comments.php");
include("./MVC/models/m_categories.php");
include("./MVC/models/m_css.php");

class c_category {
    public function index() {
        // lấy ra sản phẩm
        $m_category = new m_category();
        $m_products = new m_product();
        $id = $_GET['id_cate'];

        // lấy tất cả danh mục
        $categories = $m_category->read_category();

        // phân trang
        $limit = $_GET['perpage'] ?? 9;
        $current_page = $_GET['page'] ?? 1;
        $offset = ($current_page - 1) * $limit;
        $total_products_with_cate = $m_products->read_all_product_with_cate($id);
        $total_pages = ceil(count($total_products_with_cate) / $limit);
        
        // lấy ra danh mục
        $category = $m_category->read_category_detail($id); // trả về 1 mảng dữ liệu

        //lấy ra các sản phẩm cùng loại
        $product_with_category = $m_products->read_product_with_category($id, $limit, $offset);

        // lấy ra top 10
        $products_top_10 = $m_products->read_products_top_10(); // trả về 1 mảng dữ liệu

        // cài đặt Css
        $m_css = new m_css();
        $css = $m_css->read_css(); // trả về 1 mảng dữ liệu
        $view_danh_muc = "./MVC/views/css/v_css.php";

        // lấy view
        $view = "./MVC/views/category/v_category.php"; // $view hướng đến link view
        include ("./templates/front-end/layout.php");
    }
}