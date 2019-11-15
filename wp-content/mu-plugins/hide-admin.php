<?php


define('WP_ADMIN_URL', 'admin');

if (!defined('SITECOOKIEPATH'))
    define('SITECOOKIEPATH', preg_replace('|https?://[^/]+|i', '', get_option('siteurl') . '/'));

define('ADMIN_COOKIE_PATH', SITECOOKIEPATH . WP_ADMIN_URL);

add_filter('site_url', 'admin_site_url');

function admin_site_url($url)
{
    return preg_replace('/wp-admin/', WP_ADMIN_URL, $url, 1);
}

add_filter('site_url', 'login_site_url');

function login_site_url($url)
{
    return preg_replace('/wp-login.php/', 'login.php', $url, 1);
}

function redir_admin_init()
{
    $url = $_SERVER['REQUEST_URI'];
    if (strpos($url, SITECOOKIEPATH . 'wp-admin') !== false || strpos($url, SITECOOKIEPATH . 'wp-login.php') !== false) {
        wp_redirect(home_url('404'));

        exit(0);
    }
}

add_action('init', 'redir_admin_init');