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
