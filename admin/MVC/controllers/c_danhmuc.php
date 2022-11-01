<?php
include "./MVC/models/m_categories.php";
include ("./MVC/models/m_css.php");
class c_danhmuc{
    public function index(){
        $m_category = new m_category();
        $category = $m_category->read_category();

        // phân trang
        $limit = $_GET['perpage'] ?? 4;
        $current_page = $_GET['page'] ?? 1;
        $offset = ($current_page - 1) * $limit;
        $total_pages = ceil(count($category) / $limit);
        $category_limit = $m_category->read_category_limit($limit, $offset);

        $m_css = new m_css();
        $css = $m_css->read_css(); // trả về 1 mảng dữ liệu
        $view_user_admin = "./MVC/views/css/v_css.php";
        $view = "./MVC/views/danhmuc/v_danhmuc.php";
        include "./templates/front-end/layout.php";
    }

    public function deletedm(){
        $iddm = $_GET['id'];
        $m_category = new m_category();
        $category = $m_category->delete_category($iddm);

        header('location:danhmuc.php');
    }

    public function adddm(){
        $m_category = new m_category();

        if(isset($_POST['btnadddm'])){
            $tenloai = $_POST['tenloai'];
            $err = [];

            if ($tenloai == "") {
                $err['tenloai'] = "Bạn chưa nhập tên loại";
            }

            if (!$err) {
                $category = $m_category->add_category($tenloai);
                header('location:danhmuc.php');
            }
            

        }

        $m_css = new m_css();
        $css = $m_css->read_css(); // trả về 1 mảng dữ liệu
        $view_user_admin = "./MVC/views/css/v_css.php";
        $view = "./MVC/views/danhmuc/v_adddm.php";
        include "./templates/front-end/layout.php";
    }

    public function edit_dm(){
        $id_cate = $_GET['id'];

        // lấy ra danh mục
        $m_category = new m_category();
        $category = $m_category->read_category_once($id_cate);
        
        if(isset($_POST['btn_edit'])){
            $ten_loai = $_POST['tenloai'];
            $err = [];

            if ($ten_loai == "") {
                $err['tenloai'] = "Bạn chưa nhập tên loại";
            }

            if (!$err) {
                $category = $m_category->edit_category($ten_loai, $id_cate);
                header('location:danhmuc.php');
            }
        }

        $m_css = new m_css();
        $css = $m_css->read_css(); // trả về 1 mảng dữ liệu
        $view_user_admin = "./MVC/views/css/v_css.php";
        $view = "./MVC/views/danhmuc/v_editdm.php";
        include "./templates/front-end/layout.php";
    }
}