<?php
require_once ("database.php");
class m_comment extends database
{
    public function read_all_cmt() {
        $sql = "select * from comments";
        $this->setQuery($sql);
        return $this->loadAllRows();
    }
    
    public function delete_cmt($id) {
        $sql = "delete from comments where id = ?";
        $this->setQuery($sql);
        return $this->execute(array($id));
    }

    public function read_cmt ($limit, $offset) {
        $sql = "SELECT * FROM comments limit " .$limit. " offset " .$offset;
        $this->setQuery($sql);
        return $this->loadAllRows();
    }
}