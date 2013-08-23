<?php
define('WEBROOT',   dirname(__FILE__));
define('ROOT',      dirname(WEBROOT));
define('DS',        DIRECTORY_SEPARATOR);
define('CORE',      WEBROOT.DS."app");
define('BASE_URL', dirname(dirname($_SERVER['SCRIPT_NAME'])));
define("CSS", BASE_URL.DS."webroot".DS."css");
define("JS", BASE_URL.DS."webroot".DS."js");


