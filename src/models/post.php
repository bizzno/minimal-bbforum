<?php
// Post model for forum
class Post {
    public function __construct($db) {
        $this->db = $db;
    }

    public function getAll() {
        return $this->db->query("SELECT * FROM posts ORDER BY created_at DESC");
    }
}
Update 2 on 2016-12-14 06:11:37
