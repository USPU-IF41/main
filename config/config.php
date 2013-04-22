<?php

$config = array(
    'phpSettings' => array(
        'display_errors' => 1,
        'date' => array('timezone' => 'Asia/Yekaterinburg',
        ),
    ),
    'bootstrap' => array('path' => APPLICATION_PATH . '/Bootstrap.php',
        'class' => 'Bootstrap',
    ),
    'resources' => array('frontController' => array('controllerDirectory' => APPLICATION_PATH . '/controllers',
        ),
        'view'      => '',
        'layout'    => array(
            'layoutpath'    => APPLICATION_PATH."/views/layout",
            'layout'        => 'main',
        ),
        'db'        => array(
            'adapter'           => 'pdo_mysql',
            'isdefaultadapter'  => true,
            'params'            => array(
                'host'              => '127.0.0.1',
                'username'          => 'root',
                'password'          => '123',
                'dbname'            => 'shop',
                'charset'           => 'UTF8',
            )
        )
    ),
);
return $config;