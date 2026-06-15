<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');

function _ci_detect_base_url()
{
    $https = (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off') || (isset($_SERVER['SERVER_PORT']) && $_SERVER['SERVER_PORT'] == 443);
    $scheme = $https ? 'https' : 'http';
    $host = isset($_SERVER['HTTP_HOST']) ? $_SERVER['HTTP_HOST'] : 'localhost';
    $script = isset($_SERVER['SCRIPT_NAME']) ? $_SERVER['SCRIPT_NAME'] : '/index.php';
    $base = rtrim(str_replace('index.php', '', $script), '/');
    return $scheme . '://' . $host . ($base ? $base : '') . '/';
}

function base_url($uri = '')
{
    global $config;
    $base = isset($config['base_url']) && $config['base_url'] !== '' ? $config['base_url'] : _ci_detect_base_url();
    return rtrim($base, '/') . '/' . ltrim($uri, '/');
}

function site_url($uri = '')
{
    global $config;
    $index = isset($config['index_page']) ? trim($config['index_page'], '/') : '';
    $path = $index ? $index . '/' . ltrim($uri, '/') : ltrim($uri, '/');
    return base_url($path);
}
