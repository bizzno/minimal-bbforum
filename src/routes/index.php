<?php
// Main routing file
require_once 'models/post.php';

$action = $_GET['action'] ?? 'index';

switch ($action) {
    case 'index':
        include 'views/home.php';
        break;
    default:
        include 'views/404.php';
}
Update 13 on 2017-01-05 02:17:05
Update 18 on 2017-01-05 19:53:26
Update 27 on 2017-01-09 13:31:23
Update 35 on 2017-01-10 11:14:44
Update 40 on 2017-01-11 22:43:23
Update 41 on 2017-01-11 09:04:08
Update 44 on 2017-01-13 12:34:22
Update 53 on 2017-01-15 03:17:38
Update 58 on 2017-01-15 12:23:14
Update 61 on 2017-01-17 07:57:31
Update 95 on 2017-01-22 14:37:52
Update 100 on 2017-01-23 18:28:17
Update 105 on 2017-01-24 08:06:56
Update 107 on 2017-01-24 19:33:10
Update 108 on 2017-01-24 13:10:32
Update 109 on 2017-01-24 12:21:51
Update 116 on 2017-01-26 20:22:41
Update 122 on 2017-01-26 21:11:17
Update 127 on 2017-01-26 15:11:10
Update 128 on 2017-01-26 01:57:00
Update 130 on 2017-01-27 22:58:05
Update 133 on 2017-01-27 19:53:46
