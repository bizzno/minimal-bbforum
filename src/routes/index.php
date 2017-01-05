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
