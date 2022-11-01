<?php
require_once ("database.php");
class m_customer extends database
{
    public function read_product() {
        $sql = "select * from customers";
        $this->setQuery($sql);
        return $this->loadAllRows();
    }
}