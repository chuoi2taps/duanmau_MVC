<?php
include "./MVC/models/m_products.php";
include "./MVC/models/m_categories.php";
include("./MVC/models/m_css.php");
class c_hanghoa
{
    public function index()
    {
        $m_product = new m_product();
        // lấy tất cả hàng hóa
        $product = $m_product->read_all_product();

        // phân trang
        $limit = $_GET['perpage'] ?? 9;
        $current_page = $_GET['page'] ?? 1;
        $offset = ($current_page - 1) * $limit;
        $total_products = $m_product->read_all_product();
        $total_pages = ceil(count($total_products) / $limit);
        $products = $m_product->read_product($limit, $offset);

        $m_css = new m_css();
        $css = $m_css->read_css(); // trả về 1 mảng dữ liệu
        $view_user_admin = "./MVC/views/css/v_css.php";
        $view = "./MVC/views/hanghoa/v_hanghoa.php";
        include "./templates/front-end/layout.php";
    }

    public function addhh()
    {
        $m_product = new m_product();
        $m_category = new m_category();
        $category = $m_category->read_category();

        if (isset($_POST['btnaddhh'])) {
            $tenhh = $_POST['tensp'];
            $dongia =  (int)$_POST['dongia'];
            $quantity =  (int)$_POST['quantity'];
            $giamgia = (int)$_POST['giamgia'];
            $hinh =  $_FILES['hinh'];
            $image = $hinh['name'];
            $idloai = $_POST['loai'];
            $dacbiet = $_POST['dacbiet'];
            $mota =  $_POST['mota'];

            if ($tenhh == "") {
                $err['tenhh'] = "Bạn chưa nhập tên hàng hóa";
            }

            if ($dongia == 0) {
                $err['dongia'] = "Bạn chưa nhập hoặc nhập sai giá của sản phẩm (số nguyên lớn hơn hoặc bằng 1)";
            } 

            if ($quantity == 0) {
                $err['quantity'] = "Bạn chưa nhập hoặc nhập sai số lượng cho sản phẩm (số nguyên lớn hơn hoặc bằng 1)";
            }

            if ($giamgia == 0) {
                $err['giamgia'] = "Bạn chưa nhập hoặc nhập sai số tiền giảm (giảm ít nhất 1đ)";
            }

            if ($idloai == "") {
                $err['idloai'] = "Bạn chưa nhập chọn loại hàng cho sản phẩm";
            }

            if ($dacbiet == "") {
                $err['dacbiet'] = "Sản phẩm này có đặc biệt không?";
            }

            if ($mota == "") {
                $err['mota'] = "Bạn chưa nhập mô tả cho sản phẩm";
            }

            $img_name = $hinh['name'];
            $ext = pathinfo($img_name, PATHINFO_EXTENSION);

            if ($hinh['size'] <= 0) {
                $err['img'] = "Bạn chưa chọn ảnh";
            } else if ($ext != 'png' && $ext != 'jpg' && $ext != 'jpeg') {
                $err['img'] = 'Ảnh không đúng định dạng';
            } else if ($hinh['size'] >= 2 * 1024 * 1024) {
                $err['img'] = 'Ảnh không được quá 2MB';
            }

            if (!$err) {
                $product = $m_product->add_product($tenhh, $dongia, $quantity, $giamgia, $image, $idloai, $dacbiet, $mota);

                if ($hinh['size'] > 0) {
                    move_uploaded_file($hinh['tmp_name'], 'public/layout/assets/img/' . $image);
                }

                header('location:hanghoa.php');
            }

            
        }

        $m_css = new m_css();
        $css = $m_css->read_css(); // trả về 1 mảng dữ liệu
        $view_user_admin = "./MVC/views/css/v_css.php";
        $view = "./MVC/views/hanghoa/v_addhh.php";
        include "./templates/front-end/layout.php";
    }

    public function edit_hh()
    {
        $id_pro = $_GET['id_pro'];

        // lấy ra danh mục
        $m_category = new m_category();
        $category = $m_category->read_category();

        // lấy ra sản phẩm
        $m_product = new m_product();
        $product = $m_product->read_product_once($id_pro);

        if (isset($_POST['btnaddhh'])) {
            $tenhh = $_POST['tensp'];
            $dongia =  (int)$_POST['dongia'];
            $quantity =  (int)$_POST['quantity'];
            $giamgia = (int)$_POST['giamgia'];
            $img_name =  $_POST['hinh'];
            $hinh =  $_FILES['hinh'];
            $idloai = $_POST['loai'];
            $dacbiet = $_POST['dacbiet'];
            $mota =  $_POST['mota'];

            if ($tenhh == "") {
                $err['tenhh'] = "Bạn chưa nhập tên hàng hóa";
            }

            if ($dongia == 0) {
                $err['dongia'] = "Bạn chưa nhập hoặc nhập sai giá của sản phẩm (số nguyên lớn hơn hoặc bằng 1)";
            } 

            if ($quantity == 0) {
                $err['quantity'] = "Bạn chưa nhập hoặc nhập sai số lượng cho sản phẩm (số nguyên lớn hơn hoặc bằng 1)";
            }

            if ($giamgia == 0) {
                $err['giamgia'] = "Bạn chưa nhập hoặc nhập sai số tiền giảm (giảm ít nhất 1đ)";
            }

            if ($idloai == "") {
                $err['idloai'] = "Bạn chưa nhập chọn loại hàng cho sản phẩm";
            }

            if ($dacbiet == "") {
                $err['dacbiet'] = "Sản phẩm này có đặc biệt không?";
            }

            if ($mota == "") {
                $err['mota'] = "Bạn chưa nhập mô tả cho sản phẩm";
            }

            if ($hinh['size'] > 0) {
                $img_name = $hinh['name'];
                $ext = pathinfo($img_name, PATHINFO_EXTENSION);

                if ($ext != 'png' && $ext != 'jpg' && $ext != 'jpeg') {
                    $err['img'] = 'Ảnh không đúng định dạng';
                } else if ($hinh['size'] >= 2 * 1024 * 1024) {
                    $err['img'] = 'Ảnh không được quá 2MB';
                }
            }

            if (!$err) {
                move_uploaded_file($hinh['tmp_name'], 'public/layout/assets/img/' . $img_name);

                $product = $m_product->edit_product($tenhh, $dongia, $quantity, $giamgia, $img_name, $idloai, $dacbiet, $mota, $id_pro);

                header('location:hanghoa.php');
            }
        }

        $m_css = new m_css();
        $css = $m_css->read_css(); // trả về 1 mảng dữ liệu
        $view_user_admin = "./MVC/views/css/v_css.php";
        $view = "./MVC/views/hanghoa/v_edit_hh.php";
        include "./templates/front-end/layout.php";
    }

    public function deletehh()
    {
        $idhh = $_GET['id'];
        $m_product = new m_product();
        $prom_product = $m_product->delete_product($idhh);

        header('location:hanghoa.php');
    }
}
