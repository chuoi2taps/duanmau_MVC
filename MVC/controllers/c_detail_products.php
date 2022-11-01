<?php
include("./MVC/models/m_products.php");
include("./MVC/models/m_comments.php");
include("./MVC/models/m_categories.php");
include("./MVC/models/m_css.php");
class c_detail_product
{
    public function index()
    {
        $m_product = new m_product();
        $m_category = new m_category();

        $id_pro = $_GET['id_product'];
        $id_cate = $_GET['id_cate'];

        // trả về 1 dữ liệu để làm chi tiết
        $product = $m_product->read_product_once($_GET['id_product']);

        // lấy ra bình luận
        $cmt_product = $m_product->read_cmt_product($_GET['id_product']); // trả về 1 dữ liệu

        // lấy ra danh mục
        $categories = $m_category->read_category(); // trả về 1 mảng dữ liệu

        //lấy ra các sản phẩm cùng loại
        $related_product = $m_product->read_related_product($id_cate, 5, 0, $id_pro);

        // tăng view
        $sessionKey = 'product_' . $id_pro;
        $sessionView = $_SESSION[$sessionKey] ?? null;

        if (!$sessionView) { // nếu chưa có session
            $_SESSION[$sessionKey] = 1; //set giá trị cho session
            $view_up = $m_product->view_up($id_pro);
        }

        if (isset($_POST['btn_cmt'])) {
            // $this->cmt($_GET['id']);
            $cmt_content = $_POST['cmt_content'];
            $err = [];

            if ($cmt_content == "") {
                $err['cmt_content'] = "Bạn chưa nhập nội dung bình luận";
            }

            if (isset($_SESSION['user_admin'])) {
                $user_cmt = $_SESSION['user_admin']->id;
                $ho_ten_cmt = $_SESSION['user_admin']->full_name;
            } else if (isset($_SESSION['user_customer'])) {
                $user_cmt = $_SESSION['user_customer']->id;
                $ho_ten_cmt = $_SESSION['user_customer']->full_name;
            } else {
                $err['login'] = "Bạn chưa đăng nhập";
            }

            if (!$err) {
                $m_cmt = new m_comment();
                $new_cmt = $m_cmt->add_cmt($cmt_content, $user_cmt, $ho_ten_cmt, $id_pro);

                header("location:detail_product.php?id_product=$id_pro&id_cate=$id_cate");
            }
        }

        // cài đặt Css
        $m_css = new m_css();
        $css = $m_css->read_css(); // trả về 1 mảng dữ liệu
        $view_detail = "./MVC/views/css/v_css.php";
        $view = "./MVC/views/detail_product/v_detail_product.php"; // $view hướng đến link view

        include("./templates/front-end/layout.php");
    }
}
