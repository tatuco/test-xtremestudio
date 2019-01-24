<?php
/**
 * Created by PhpStorm.
 * User: zippyttech
 * Date: 19/09/18
 * Time: 09:37 AM
 */

namespace App\Core;


use Exception;

class View
{

    protected static $data;

    const VIEWS_PATH = "../App/Views/";
    const EXTENSION_TEMPLATES = "php";

    public static function render($template)
    {
        if(!file_exists(resource_path("Reports/{$template}.".self::EXTENSION_TEMPLATES)))
        {
            throw new \Exception("Error: El archivo " . resource_path("Reports/{$template}.".self::EXTENSION_TEMPLATES) . " no existe", 1);
        }

        ob_start();
        extract(self::$data);
        include(resource_path("Reports/{$template}.".self::EXTENSION_TEMPLATES));
        $str = ob_get_contents();
        ob_end_clean();
        return $str;
    }

    public static function set($name, $value)
    {
        self::$data[$name] = $value;
    }
}