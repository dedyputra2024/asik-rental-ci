<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');

class CI_Controller
{
    private static $instance;
    public $load;

    public function __construct()
    {
        self::$instance =& $this;
        $this->load = new CI_Loader();
    }

    public static function &get_instance()
    {
        return self::$instance;
    }
}
