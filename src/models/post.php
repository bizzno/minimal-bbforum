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
Update 54 on 2017-01-15 02:36:15
Update 59 on 2017-01-15 14:35:35
Update 62 on 2017-01-17 04:40:12
Update 65 on 2017-01-17 19:01:26
Update 66 on 2017-01-17 11:25:35
Update 69 on 2017-01-18 20:32:36
Update 86 on 2017-01-21 04:03:15
Update 93 on 2017-01-22 02:10:07
Update 98 on 2017-01-22 16:07:11
Update 114 on 2017-01-24 09:32:41
Update 115 on 2017-01-25 12:45:30
Update 117 on 2017-01-26 09:34:20
Update 126 on 2017-01-26 20:13:26
Update 144 on 2017-01-29 00:40:15
Update 151 on 2017-01-29 10:03:08
Update 154 on 2017-01-30 16:59:30
Update 157 on 2017-01-31 19:20:28
Update 160 on 2017-02-01 15:58:27
Update 167 on 2017-02-05 10:39:50
Update 169 on 2017-02-08 01:47:11
Update 179 on 2017-02-14 12:25:09
Update 180 on 2017-02-16 01:45:03
Update 183 on 2017-02-20 09:55:03
Update 199 on 2017-02-21 21:17:15
Update 203 on 2017-02-28 07:01:05
Update 205 on 2017-02-28 01:27:58
Update 208 on 2017-02-28 11:52:47
Update 210 on 2017-02-28 17:49:45
Update 211 on 2017-02-28 19:28:04
Update 220 on 2017-03-02 09:26:09
Update 231 on 2017-03-20 00:16:39
Update 251 on 2017-03-22 03:10:29
Update 260 on 2017-03-24 19:37:30
Update 263 on 2017-03-24 16:13:38
Update 265 on 2017-03-28 16:54:31
Update 269 on 2017-03-28 19:14:31
Update 270 on 2017-03-28 21:11:46
Update 277 on 2017-03-30 11:34:14
Update 281 on 2017-03-30 14:29:10
Update 283 on 2017-03-30 06:42:52
Update 293 on 2017-04-05 23:52:03
Update 295 on 2017-04-05 22:41:17
