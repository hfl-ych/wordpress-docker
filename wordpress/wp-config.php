<?php
define('DB_NAME', 'wordpress');
define('DB_USER', 'wordpress_user');
define('DB_PASSWORD', 'wordpress_pass');
define('DB_HOST', 'db');

$table_prefix  = 'wp_';

if (!defined('ABSPATH')) {
    define('ABSPATH', dirname(__FILE__) . '/');
}
require_once ABSPATH . 'wp-settings.php';

define('WP_DEBUG', false);
define( 'WP_HTTP_BASICAUTH', false);
define('DISABLE_WP_REST_API', false);
