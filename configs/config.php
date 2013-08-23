<?php

namespace config;


class Config{
    static $debug =1;


    static  $database = [
        'default' =>[
            'host'=> 'localhost',
            'database' => 'mvc2',
            'user'=>'root',
            'password' => ''
        ]
    ];
    
}

require_once 'routes.php';
