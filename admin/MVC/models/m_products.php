<?php
require_once ("database.php");

class m_product extends database
{
    public function read_all_product() {
        $sql = "SELECT * from products";
        $this->setQuery($sql);
        return $this->loadAllRows();
    }

    public function read_product($limit, $offset) {
        $sql = "SELECT * from products limit ".$limit." offset ".$offset;
        $this->setQuery($sql);
        return $this->loadAllRows();
    }

    public function read_product_once ($id) {
        $sql = "SELECT * from products where id='$id'";
        $this->setQuery($sql);
        return $this->loadAllRows();
    }

    // lấy cmt của sản phẩm
    public function read_cmt_product ($id) {
        $sql = "SELECT cus.user_name, cus.hinh, cmt.noi_dung, cmt.ngay_bl, pro.id FROM customers cus 
        INNER JOIN comments cmt ON cus.id = cmt.id_kh 
        INNER JOIN products pro ON cmt.id_hh = pro.id 
        WHERE pro.id = ".$id.";";
        $this->setQuery($sql);
        return $this->loadAllRows();
    }

    public function read_products_top_10 () {
        $sql = "SELECT * FROM `products` ORDER by so_luot_xem DESC LIMIT 10;";
        $this->setQuery($sql);
        return $this->loadAllRows();
    }

    // Xóa sản phẩm
    public function delete_product($id){
        $sql = "delete from products where id=?";
        $this->setQuery($sql);
        return $this->execute(array($id));
        
    }

    // thêm sản phẩm
    public function add_product($tenhh, $dongia, $so_luong, $giamgia, $hinh, $idloai, $dacbiet, $mota){
        $sql = "INSERT into products (`id`, `ten_hh`, `don_gia`, `so_luong`, `giam_gia`, `hinh`, `ngay_nhap`, `id_loai`, `dac_biet`, `mo_ta`) values (null, ?, ?, ?, ?, ?,current_timestamp(), ?, ?, ?)";
        $this->setQuery($sql);
        return $this->execute(array($tenhh, $dongia, $so_luong, $giamgia, $hinh, $idloai, $dacbiet, $mota));
    }

    // edit sản phẩm
    public function edit_product($tenhh, $dongia, $soluong, $giamgia, $hinh, $idloai, $dacbiet, $mota, $id){
        $sql = "UPDATE products set ten_hh = ?, don_gia = ?, so_luong = ? ,giam_gia = ?, hinh = ?, ngay_nhap = current_timestamp(), id_loai = ?,
        dac_biet = ?, mo_ta = ? 
        where id = ?";
        $this->setQuery($sql);
        return $this->execute(array($tenhh, $dongia, $soluong, $giamgia, $hinh, $idloai, $dacbiet, $mota, $id));
    }

    // thống kê sản phẩm theo danh mục
    public function thong_ke_san_pham() {
        $sql = "SELECT cate.id_cate, cate.ten_loai, count(pro.id) as total_product, min(pro.don_gia) as min_price, max(pro.don_gia) as max_price, avg(pro.don_gia) as avg_price 
        from products pro left join categories cate on pro.id_loai = cate.id_cate 
        GROUP by cate.ten_loai 
        order by total_product desc;";
        $this->setQuery($sql);
        return $this->loadAllRows();
    }
}