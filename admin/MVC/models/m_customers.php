<?php
require_once ("database.php");
class m_customer extends database
{
    public function read_all_user() {
        $sql = "SELECT *, month(created_time) as month_create from customers";
        $this->setQuery($sql);
        return $this->loadAllRows();
    }

    public function read_admin($username, $password) {
        $sql = "SELECT * from customers where user_name = ? and mat_khau = ? and vai_tro = 0";
        $this->setQuery($sql);
        return $this->loadRow(array($username,$password));
    }

    public function read_customer($username, $password) {
        $sql = "SELECT * from customers where user_name = ? and mat_khau = ? and vai_tro = 1";
        $this->setQuery($sql);
        return $this->loadRow(array($username,$password));
    }

    public function add_customers($username, $name, $password, $sdt, $diachi, $hinh) {
        $sql = "INSERT INTO customers (`id`, `user_name`, `full_name`, `mat_khau`, `sdt`, `diachi`, `hinh`, `kich_hoat`, `vai_tro`) VALUES (NULL, ?, ?, ?, ?, ?, ?, 1, 1)";
        $this->setQuery($sql);
        return $this->execute(array($username, $name, $password, $sdt, $diachi, $hinh));
    }

    public function delete_customer($id){
        $sql = "delete from customers where id=?";
        $this->setQuery($sql);
        return $this->execute(array($id));
        
    }

    public function read_user_once ($id) {
        $sql = "SELECT * from customers where id='$id'";
        $this->setQuery($sql);
        return $this->loadAllRows();
    }

    // edit user
    public function edit_user($user_name, $full_name, $mat_khau, $sdt, $diachi, $hinh, $id){
        $sql = "UPDATE customers set user_name = ?, full_name = ?, mat_khau = ?, sdt = ?, diachi = ?, hinh = ?
        where id = ?";
        $this->setQuery($sql);
        return $this->execute(array($user_name, $full_name, $mat_khau, $sdt, $diachi, $hinh, $id));
    }

    public function read_user_limit ($limit, $offset) {
        $sql = "SELECT * FROM customers limit " .$limit. " offset " .$offset;
        $this->setQuery($sql);
        return $this->loadAllRows();
    }

    // lấy ra user đăng ký theo tháng
    public function read_user_create ($month) {
        $sql = "SELECT id, full_name, user_name, diachi, created_time, month(created_time) as month_create FROM `customers` WHERE month(created_time) = ".$month." ORDER BY created_time DESC" ;
        $this->setQuery($sql);
        return $this->loadAllRows();
    }
}