<?php

namespace Src\Classes;

use PDO;

abstract class Model
{
    private static $instance;

    public static function getConn()
    {
        try {

            if (!isset(self::$instance)) {
                self::$instance = new PDO("mysql:host=" . HOST . ";dbname=" . DB . ";charset=utf8", USER, PASS);
            }
        } catch (\PDOException $e) {
            return $e->getMessage();
        }
        return self::$instance;
    }
}
