<?php

if (!defined("APPLICATION_PATH")) {
    define("APPLICATION_PATH", realpath(dirname(__FILE__) . "/../application"));
}

set_include_path(APPLICATION_PATH . "/../lib:" . get_include_path());

require_once "Zend/Application.php";
//require_once "Zend/ZendLogerAutoLoger.php";
$config = include (APPLICATION_PATH . "/../config/config.php");

$application = new Zend_Application(APPLICATION_PATH, $config);
$application->bootstrap();
$application->run();
