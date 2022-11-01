<?php
require_once ("database.php");
class m_cart extends database
{
    public function read_cart() {
        $sql = "select * from cart";
        $this->setQuery($sql);
        return $this->loadAllRows();
    }

    public function read_cart_detail ($id) {
        $sql = "SELECT cus.user_name, cus.id, ca.id_cart, ca.id_product, ca.price, ca.quantity, pro.ten_hh, pro.hinh 
        FROM customers cus 
        INNER JOIN cart ca ON cus.id = ca.id_customer 
        INNER JOIN products pro ON ca.id_product = pro.id 
        WHERE cus.id = ".$id.";";
        $this->setQuery($sql);
        return $this->loadAllRows();
    }

    public function add_to_cart($id_pro, $price, $quantity, $id_cus) {
        $sql = "INSERT INTO cart VALUES (NULL, ?, ?, ?, ?, current_timestamp())";
        $this->setQuery($sql);
        return $this->execute(array($id_pro, $price, $quantity, $id_cus));
    }

    public function delete_cart($id) {
        $sql = "delete from cart where id_cart = ?";
        $this->setQuery($sql);
        return $this->execute(array($id));
    }
}