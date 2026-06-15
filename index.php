<?php
/*
 * Lightweight CodeIgniter 3-style front controller for this converted template.
 * Folder utama bisa langsung ditaruh di htdocs Laragon/XAMPP.
 */
define('ENVIRONMENT', 'development');

switch (ENVIRONMENT)
{
    case 'development':
        error_reporting(-1);
        ini_set('display_errors', 1);
        break;
    default:
        ini_set('display_errors', 0);
        error_reporting(E_ALL & ~E_NOTICE & ~E_DEPRECATED & ~E_STRICT & ~E_USER_NOTICE & ~E_USER_DEPRECATED);
        break;
}

$system_path = 'system';
$application_folder = 'application';

define('SELF', pathinfo(__FILE__, PATHINFO_BASENAME));
define('FCPATH', __DIR__ . DIRECTORY_SEPARATOR);
define('SYSDIR', basename($system_path));
define('BASEPATH', FCPATH . $system_path . DIRECTORY_SEPARATOR);
define('APPPATH', FCPATH . $application_folder . DIRECTORY_SEPARATOR);
define('VIEWPATH', APPPATH . 'views' . DIRECTORY_SEPARATOR);

require_once BASEPATH . 'core/CodeIgniter.php';
