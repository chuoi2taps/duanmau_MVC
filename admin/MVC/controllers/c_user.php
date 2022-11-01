<?php
include("./MVC/models/m_customers.php");
include("./MVC/models/m_css.php");

@session_start();

class c_user
{
    public function index()
    {
        $m_user = new m_customer();
        $user = $m_user->read_all_user();

        // phân trang
        $limit = $_GET['perpage'] ?? 4;
        $current_page = $_GET['page'] ?? 1;
        $offset = ($current_page - 1) * $limit;
        $total_pages = ceil(count($user) / $limit);
        $user_limit = $m_user->read_user_limit($limit, $offset);

        // cài đặt Css
        $m_css = new m_css();
        $css = $m_css->read_css(); // trả về 1 mảng dữ liệu
        $view_user_admin = "./MVC/views/css/v_css.php";

        $view = "./MVC/views/user/v_user.php";
        include("./templates/front-end/layout.php");
    }

    public function login_admin()
    {

        if (isset($_POST['btn-login'])) {
            $username = $_POST['username'];
            $password = $_POST['password'];

            $this->saveLoginSession_admin($username,$password);
            if (isset($_SESSION['user_admin'])) { // kiểm tra có session mới được nhảy vào trang user
                header("location:user.php");
            }  else {
                setcookie('error_login', 'Sai thông tin đăng nhập admin', time()+1);
                header("location:login_admin.php");//?user=admin
            }
        }

        // cài đặt Css
        $m_css = new m_css();
        $css = $m_css->read_css(); // trả về 1 mảng dữ liệu
        $view_login = "./MVC/views/css/v_css.php";

        $view = "./MVC/views/user/v_login_admin.php";
        include("./templates/front-end/layout.php");
    }

    public function saveLoginSession_admin($username,$password) {
        $m_user = new m_customer();
        $user_admin = $m_user->read_admin($username,$password);

        if(!empty($user_admin)) {
            $_SESSION['user_admin'] = $user_admin;
            // $_SESSION['image'] = $user_admin->hinh;
        }
    }

    public function login_customer()
    {
        
        if (isset($_POST['btn-login'])) {
            $username = $_POST['username'];
            $password = $_POST['password'];

            $this->saveLoginSession_cus($username,$password);
            if (isset($_SESSION['user_customer'])) { // kiểm tra có session mới được nhảy vào trang user
                header("location:../index.php");
            }  else {
                setcookie('error_login', 'Sai thông tin đăng nhập người dùng', time()+1);
                header("location:login_cus.php");
            }
        }

        // cài đặt Css
        $m_css = new m_css();
        $css = $m_css->read_css(); // trả về 1 mảng dữ liệu
        $view_login = "./MVC/views/css/v_css.php";

        $view = "./MVC/views/user/v_login_cus.php";
        include("./templates/front-end/layout.php");
    }

    public function saveLoginSession_cus($username,$password) {
        $m_user = new m_customer();
        $user_customer = $m_user->read_customer($username, $password);
        if(!empty($user_customer)) {
            $_SESSION['user_customer'] = $user_customer;
            
        }
    }

    public function log_out() {
        unset($_SESSION['user_admin']);
        unset($_SESSION['user_customer']);
        unset($_SESSION['error_login']);
    }

    public function add_user()
    {

        if (isset($_POST['btn_sign_up'])) {
            $full_name = $_POST['full_name'];
            $username = $_POST['user_name'];
            $password = $_POST['password'];
            $repassword = $_POST['re_password'];
            $sdt = $_POST['sdt'];
            $diachi = $_POST['address'];
            $avatar = $_FILES['avatar'];
            $err = [];

            if ($full_name == "") {
                $err['full_name'] = "Bạn chưa nhập họ tên";
            }

            if ($username == "") {
                $err['username'] = "Bạn chưa nhập tên tài khoản";
            }

            if ($password == "") {
                $err['password'] = "Bạn chưa nhập mật khẩu";
            }

            if ($repassword != $password) {
                $err['repassword'] = "Mật khẩu không trùng";
            }

            if ($sdt == "") {
                $err['sdt'] = "Bạn chưa nhập số điện thoại";
            }

            if ($diachi == "") {
                $err['diachi'] = "Bạn chưa nhập địa chỉ";
            }

            if ($avatar['size'] <= 0) {
                $err['img'] = "Bạn chưa chọn ảnh";
            }

            $img_name = $avatar['name'];
            $ext = pathinfo($img_name, PATHINFO_EXTENSION);

            if($ext != 'png' && $ext != 'jpg' && $ext != 'jpeg') {
                $err['img'] = 'Ảnh không đúng định dạng';
            } elseif($avatar['size'] >= 2*1024*1024){
                $err['img'] = 'Ảnh không được quá 2MB';
            }

            if (!$err) {
                //câu lệnh insert
                $m_customers = new m_customer();
                $new_cus = $m_customers->add_customers($username, $full_name, $password, $sdt, $diachi, $img_name);

                if($avatar['size'] > 0){
                    move_uploaded_file($avatar['tmp_name'],'public/layout/assets/img/'.$img_name);
                }

                //chuyển hướng website đến trang
                header("location: login_cus.php");
                exit;
            }
        }

        // cài đặt Css
        $m_css = new m_css();
        $css = $m_css->read_css(); // trả về 1 mảng dữ liệu
        $view_sign_up = "./MVC/views/css/v_css.php";

        $view_header_sign_up = "./MVC/views/user/v_header_sign_up.php";
        $view = "./MVC/views/user/v_sign_up.php";
        include("./templates/front-end/layout.php");
    }
    
    public function edit_user () {
        $id_user = $_GET['id_user'];

        // lấy ra user
        $m_user = new m_customer();
        $user = $m_user->read_user_once($id_user);
        
        if(isset($_POST['btn_edit'])){
            $full_name = $_POST['full_name'];
            $username =  $_POST['user_name'];
            $password = $_POST['password'];
            $repassword = $_POST['re_password'];
            $sdt = $_POST['sdt'];
            $diachi = $_POST['address'];
            $image_name =  $_POST['avatar'];
            
            $avatar =  $_FILES['avatar'];

            if ($full_name == "") {
                $err['full_name'] = "Bạn chưa nhập họ tên";
            }

            if ($username == "") {
                $err['username'] = "Bạn chưa nhập tên tài khoản";
            }

            if ($password == "") {
                $err['password'] = "Bạn chưa nhập mật khẩu";
            }

            if ($repassword != $password) {
                $err['repassword'] = "Mật khẩu không trùng";
            }

            if ($sdt == "") {
                $err['sdt'] = "Bạn chưa nhập số điện thoại";
            }

            if ($diachi == "") {
                $err['diachi'] = "Bạn chưa nhập địa chỉ";
            }

            

            if($avatar['size'] > 0 ){
                $img_name = $avatar['name'];
                $ext = pathinfo($img_name, PATHINFO_EXTENSION);

                if($ext != 'png' && $ext != 'jpg' && $ext != 'jpeg') {
                    $err['img'] = 'Ảnh không đúng định dạng';
                } elseif($avatar['size'] >= 2*1024*1024){
                    $err['img'] = 'Ảnh không được quá 2MB';
                }
            }

            if (empty($err)) {
                $user = $m_user->edit_user($username, $full_name, $password, $sdt, $diachi, $image_name, $id_user);

                move_uploaded_file($avatar['tmp_name'], 'public/layout/assets/img/'.$image_name);
                
                isset($_SESSION['user_admin']) ? header('location:user.php') : header('location:../index.php');
                exit;
            }            
        }

        $m_css = new m_css();
        $css = $m_css->read_css(); // trả về 1 mảng dữ liệu
        $view_header_profile = "./MVC/views/user/v_header_profile.php";
        $view_edit = "./MVC/views/css/v_css.php";
        $view = "./MVC/views/user/v_edit_user.php";
        include "./templates/front-end/layout.php";
    }

    public function delete_user () {
        $id_user = $_GET['id_user'];
        $m_user = new m_customer();
        $user = $m_user->delete_customer($id_user);

        header('location:user.php');
    }
}
