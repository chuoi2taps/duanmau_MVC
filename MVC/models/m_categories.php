<?php
require_once ("database.php");
class m_category extends database
{
    public function read_category() {
        $sql = "select * from categories";
        $this->setQuery($sql);
        return $this->loadAllRows();
    }

    public function read_category_detail($id) {
        $sql = "select * from categories where id_cate = $id";
        $this->setQuery($sql);
        return $this->loadAllRows();
    }
}