<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');

class CI_Loader
{
    public function view($view, $vars = array(), $return = FALSE)
    {
        $file = VIEWPATH . str_replace('/', DIRECTORY_SEPARATOR, $view) . '.php';
        if (!file_exists($file)) {
            throw new Exception('View tidak ditemukan: ' . $view);
        }

        if (is_array($vars)) {
            extract($vars, EXTR_SKIP);
        }

        if ($return) {
            ob_start();
            include $file;
            return ob_get_clean();
        }

        include $file;
        return NULL;
    }
}
