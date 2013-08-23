<?php

//include app
set_include_path(get_include_path() . PATH_SEPARATOR . "../");

require_once 'bootstrap.php';
require_once 'app/Dispatcher.php';


require_once CORE.DS.'functions.php';
new app\Dispatcher();

//require_once 'app/ServiceManager.php';

//$serviceManager = ServiceManager::getInstance()
//    ->addService(
//        'db',
//        DbManager::getInstance()
//           ->setRepository(RepositoryFactory::getInstance())
//    )
//;
