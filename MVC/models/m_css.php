<?php
require_once ("database.php");
class m_css extends database
{
    public function read_css() {
        $sql = "select * from css";
        $this->setQuery($sql);
        return $this->loadAllRows();
    }
}