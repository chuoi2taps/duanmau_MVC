<?php
require_once ("database.php");
class m_comment extends database
{
    public function read_product() {
        $sql = "select * from comments";
        $this->setQuery($sql);
        return $this->loadAllRows();
    }

    // public function read_product() {
    //     $sql = "select * from comments";
    //     $this->setQuery($sql);
    //     return $this->loadAllRows();
    // }

    public function add_cmt($cmt_content, $id_kh, $ho_ten_cmt, $id_pro) {
        $sql = "INSERT INTO comments VALUES (NULL, ?, ?, ?, ?, NULL)";
        $this->setQuery($sql);
        return $this->execute(array($cmt_content, $id_kh, $ho_ten_cmt, $id_pro));
    }
}