<?php
require_once ("database.php");
class m_category extends database
{
    public function read_category() {
        $sql = "select * from categories";
        $this->setQuery($sql);
        return $this->loadAllRows();
    }

    public function read_category_once ($id) {
        $sql = "select * from categories where id_cate='$id'";
        $this->setQuery($sql);
        return $this->loadAllRows();
    }

    public function delete_category($id){
        $sql = "delete from categories where id_cate=?";
        $this->setQuery($sql);
        return $this->execute(array($id));
        
    }

    public function add_category($tenloai){
        $sql = "INSERT into categories (`id_cate`, `ten_loai`) values (null, ?)";
        $this->setQuery($sql);
        return $this->execute(array($tenloai));
    }

    // edit sản phẩm
    public function edit_category ($ten_loai, $id){
        $sql = "UPDATE categories set ten_loai = ? where id_cate = ?";
        $this->setQuery($sql);
        return $this->execute(array($ten_loai, $id));
    }

    public function read_category_limit ($limit, $offset) {
        $sql = "SELECT * FROM categories limit " .$limit. " offset " .$offset;
        $this->setQuery($sql);
        return $this->loadAllRows();
    }
}