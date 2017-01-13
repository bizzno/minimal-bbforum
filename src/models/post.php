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
Update 5 on 2016-12-14 17:34:51
Update 11 on 2017-01-05 11:57:21
Update 26 on 2017-01-09 16:37:32
Update 32 on 2017-01-10 05:02:28
Update 33 on 2017-01-10 13:01:17
Update 46 on 2017-01-13 16:26:50
