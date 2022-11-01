<?php
include "./MVC/models/m_categories.php";
include "./MVC/models/m_comments.php";
include ("./MVC/models/m_css.php");
class c_comments {
    public function index(){
        $m_comments = new m_comment();
        $m_css = new m_css();
        $comments = $m_comments->read_all_cmt();

        // phân trang
        $limit = $_GET['perpage'] ?? 4;
        $current_page = $_GET['page'] ?? 1;
        $offset = ($current_page - 1) * $limit;
        $total_pages = ceil(count($comments) / $limit);
        $comment = $m_comments->read_cmt($limit, $offset);

        $css = $m_css->read_css(); // trả về 1 mảng dữ liệu
        $view_user_admin = "./MVC/views/css/v_css.php";
        $view = "./MVC/views/cmt/v_cmt.php";
        include "./templates/front-end/layout.php";
    }

    public function delete_cmt(){
        $id_cmt = $_GET['id_cmt'];
        $m_comments = new m_comment();
        $comments = $m_comments->delete_cmt($id_cmt);

        header('location:comments.php');
    }

}