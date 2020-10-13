<?php
header("Content-Type: text/html; charset-utf-8");
require_once("../config/config.php");
require_once("../vendor/autoload.php");

use App\Dispatch;

$dispatch = new Dispatch();
