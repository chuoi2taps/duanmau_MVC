<?php
include("./MVC/models/m_products.php");
include("./MVC/models/m_cart.php");
include("./MVC/models/m_css.php");
class c_cart
{
    public function index()
    {
        $id_user = $_GET['id_user'];
        $m_cart = new m_cart();
        $cart = $m_cart->read_cart(); // lấy dữ liệu giỏ hàng

        $cart_detail = $m_cart->read_cart_detail($id_user); // lấy dữ liệu giỏ hàng theo người dùng

        // thêm vào giỏ hàng
        if (isset($_POST['btn-add'])) {
            $quantity = $_POST['quantity'];
            $price = $_POST['price'];
            $id_product = $_GET['id'];
            $err = [];

            if (!$err) {
                $add_to_cart = $m_cart->add_to_cart($id_product, $price, $quantity, $id_user);

                header("location:cart.php?id_user=$id_user");
            }
        // end thêm vào giỏ hàng
        }

        $m_css = new m_css();
        $css = $m_css->read_css();

        // cài đặt Css
        $m_css = new m_css();
        $css = $m_css->read_css(); 
        $view_cart = "./MVC/views/css/v_css.php";

        // lấy view
        $view_header_cart = "./MVC/views/cart/v_header_cart.php";
        $view = "./MVC/views/cart/v_cart.php";
        include("./templates/front-end/layout.php");
    }

    public function delete_cart () {
        $id_cart = $_GET['id_cart'];
        $id_user = $_GET['id_user'];
        
        $m_cart = new m_cart();
        $delete_cart = $m_cart->delete_cart($id_cart); // lấy dữ liệu giỏ hàng

        header("location:cart.php?id_user=$id_user");
    }
}
