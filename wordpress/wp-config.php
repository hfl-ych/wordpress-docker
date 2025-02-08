<?php
define('DB_NAME', 'wordpress');
define('DB_USER', 'wordpress_user');
define('DB_PASSWORD', 'wordpress_pass');
define('DB_HOST', 'db');

define('AUTH_KEY',         'your-auth-key');
define('SECURE_AUTH_KEY',  'your-secure-auth-key');
define('LOGGED_IN_KEY',    'your-logged-in-key');
define('NONCE_KEY',        'your-nonce-key');

$table_prefix  = 'wp_';
define('WP_DEBUG', false);

if (!defined('ABSPATH')) {
    define('ABSPATH', dirname(__FILE__) . '/');
}
require_once ABSPATH . 'wp-settings.php';

define( 'WP_HTTP_BASICAUTH', true );
define('DISABLE_WP_REST_API', false);
