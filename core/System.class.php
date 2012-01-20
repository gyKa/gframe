<?php

class System
{
    private static $module_path;
    
    public static function start()
    {
        session_start();
    }
    
    public static function set_module_path($module_path)
    {
        self::$module_path = $module_path;
    }
    
    public static function set_debug_mode($is_enabled = FALSE)
    {
        if ($is_enabled)
        {
            error_reporting(E_ALL);
            ini_set('display_errors', 1);
        }
        else
        {
            error_reporting(0);
            ini_set('display_errors', 0);
        }
    }
    
    public static function include_module_item($module, $item)
    {
        str_replace(array('.', ':', '/'), '', $module);

        $item_path = self::$modules_path . '/' . $module . '/' . $module . '.' . $item . '.php';

        if (file_exists($item_path)) {
            return require($item_path);
        }

        return FALSE;
    }
}