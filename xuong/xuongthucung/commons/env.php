<?php 

// Biến môi trường, dùng chung toàn hệ thống
// Khai báo dưới dạng HẰNG SỐ để không phải dùng $GLOBALS

define('BASE_URL'       , 'http://localhost/webbanthucung/xuong/xuongthucung/');

// Đường dẫn vào vào phần admin
define('BASE_URL_ADMIN'       , 'http://localhost/webbanthucung/xuong/xuongthucung/admin/');


define('DB_HOST'    , 'localhost');
define('DB_PORT'    , 3306);
define('DB_USERNAME', 'root');
define('DB_PASSWORD', '');
define('DB_NAME'    , 'xuongthucung');  // Tên database

define('PATH_ROOT'    , __DIR__ . '/../');
