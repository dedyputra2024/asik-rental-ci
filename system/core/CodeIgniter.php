<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');

// Load app config and routes
$config = array();
$route = array();
require APPPATH . 'config/config.php';
require APPPATH . 'config/routes.php';
require BASEPATH . 'helpers/url_helper.php';
require BASEPATH . 'core/Controller.php';
require BASEPATH . 'core/Loader.php';

function _ci_get_uri_path()
{
    $request_uri = isset($_SERVER['REQUEST_URI']) ? parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH) : '';
    $script_name = isset($_SERVER['SCRIPT_NAME']) ? $_SERVER['SCRIPT_NAME'] : '';
    $base_dir = rtrim(str_replace('index.php', '', $script_name), '/');

    if ($base_dir !== '' && strpos($request_uri, $base_dir) === 0) {
        $request_uri = substr($request_uri, strlen($base_dir));
    }

    $request_uri = trim($request_uri, '/');
    if (strpos($request_uri, 'index.php') === 0) {
        $request_uri = trim(substr($request_uri, strlen('index.php')), '/');
    }
    return $request_uri;
}

function show_404($page = '')
{
    http_response_code(404);
    echo '<!doctype html><html><head><meta charset="utf-8"><title>404</title></head><body style="font-family:Arial;padding:40px"><h1>404 - Page Not Found</h1><p>Halaman <strong>' . htmlspecialchars($page) . '</strong> tidak ditemukan.</p><p><a href="' . site_url() . '">Kembali ke Home</a></p></body></html>';
    exit;
}

$uri = _ci_get_uri_path();
$uri = $uri === '' ? $route['default_controller'] : ($route[$uri] ?? $uri);
$segments = array_values(array_filter(explode('/', $uri), 'strlen'));
$controller = ucfirst($segments[0] ?? $route['default_controller']);
$method = $segments[1] ?? 'index';
$params = array_slice($segments, 2);

$controller_file = APPPATH . 'controllers/' . $controller . '.php';
if (!file_exists($controller_file)) {
    show_404($controller);
}

require_once $controller_file;
if (!class_exists($controller)) {
    show_404($controller);
}

$CI = new $controller();
if (!method_exists($CI, $method) || strpos($method, '_') === 0) {
    show_404($controller . '/' . $method);
}

call_user_func_array(array($CI, $method), $params);
