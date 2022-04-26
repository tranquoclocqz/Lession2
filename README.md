# Lession2
Middle PHP - Trần Quốc Lộc - 26/04/2022
# Cấu Hình
Import database lampart_test4.sql.

Cấu hình app trong config/config.php
```php
// Config app root
define('APP_ROOT', dirname(dirname(__FILE__)));
define('URL_ROOT', '');
define('URL_SUBFOLDER', '/middle_php-tran_quoc_loc-26_04_2022');

// Config database
define('DB_HOST', '127.0.0.1');
define('DB_USER', 'root');
define('DB_PASS', '');
define('DB_NAME', 'lampart_test4');
define('DB_PORT', '3306');
define('DB_PREFIX', 'table_');
```
### define URL_SUBFOLDER
Thay đổi giá trị của subfolder `URL_SUBFOLDER` cùng tên với project khi chạy ví dụ: http://localhost/middle_php-tran_quoc_loc-26_04_2022