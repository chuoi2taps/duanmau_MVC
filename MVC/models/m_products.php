<?php
require_once ("database.php");

class m_product extends database
{
    public function read_all_product() {
        $sql = "SELECT * FROM products";
        $this->setQuery($sql);
        return $this->loadAllRows();
    }

    public function read_all_product_with_cate($id) {
        $sql = "SELECT * FROM products where id_loai=$id";
        $this->setQuery($sql);
        return $this->loadAllRows();
    }

    public function read_product($limit, $offset) {
        $sql = "SELECT * FROM products limit ".$limit." offset ".$offset;
        $this->setQuery($sql);
        return $this->loadAllRows();
    }

    public function read_product_once ($id) {
        $sql = "SELECT * FROM products where id='$id'";
        $this->setQuery($sql);
        return $this->loadAllRows();
    }

    // lấy comment của sản phẩm
    public function read_cmt_product ($id) {
        $sql = "SELECT cus.full_name, cus.hinh, cmt.noi_dung, cmt.ngay_bl, pro.id FROM customers cus 
        INNER JOIN comments cmt ON cus.id = cmt.id_kh 
        INNER JOIN products pro ON cmt.id_hh = pro.id 
        WHERE pro.id = ".$id.";";
        $this->setQuery($sql);
        return $this->loadAllRows();
    }

    // lấy top 10
    public function read_products_top_10 () {
        $sql = "SELECT * FROM `products` ORDER by so_luot_xem DESC LIMIT 10;";
        $this->setQuery($sql);
        return $this->loadAllRows();
    }

    //lấy ra sản phẩm đặc biệt
    public function read_product_special () {
        $sql = "SELECT * from products where dac_biet=1";
        $this->setQuery($sql);
        return $this->loadAllRows();
    }

    // lấy ra sản phẩm cùng loại
    public function read_product_with_category ($id, $limit, $offset) {
        $sql = "SELECT pro.id, pro.hinh, pro.ten_hh, pro.don_gia, cate.id_cate
        FROM products pro INNER JOIN categories cate ON pro.id_loai = cate.id_cate
        where cate.id_cate = $id LIMIT $limit OFFSET $offset";
        $this->setQuery($sql);
        return $this->loadAllRows();
    }

    // lấy ra sản phẩm liên quan
    public function read_related_product ($id_cate, $limit, $offset, $id_pro) {
        $sql = "SELECT pro.id, pro.hinh, pro.ten_hh, pro.don_gia, cate.id_cate
        FROM products pro INNER JOIN categories cate ON pro.id_loai = cate.id_cate
        where cate.id_cate = $id_cate and pro.id != $id_pro LIMIT $limit OFFSET $offset";
        $this->setQuery($sql);
        return $this->loadAllRows();
    }

    // tăng lượt xem sản phẩm
    public function view_up ($id_product) {
        $sql = "UPDATE products SET so_luot_xem = so_luot_xem + 1 WHERE id = ?";
        $this->setQuery($sql);
        return $this->execute(array($id_product));
    }
}