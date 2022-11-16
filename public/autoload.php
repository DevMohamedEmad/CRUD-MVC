<?php

/*  Declaration All Folders  */

define("DS" , DIRECTORY_SEPARATOR);
define("ROOT_PATH" , dirname(__DIR__).DS);
define("APP" ,ROOT_PATH.'app'.DS);
define("CORE",APP.'Core'.DS);
define("CONTROLLERS",APP.'Controllers'.DS);
define("CONFIG",APP.'Config'.DS);
define("MODELS",APP.'Models'.DS);
define("VIEWS",APP.'Views'.DS);
define("LIBS",APP.'Libs'.DS);
define("UPLOADS",ROOT_PATH.'public'.DS.'Uploads'.DS);
define("Assets",ROOT_PATH.'public'.DS.'assets'.DS);

// load config file
require_once(CONFIG.'config.php');
require_once(CONFIG.'helpers.php');

// autoLoad All Classes

$modules = [ROOT_PATH , CONFIG , APP , CORE , CONTROLLERS , UPLOADS , VIEWS , MODELS , LIBS];
set_include_path(get_include_path().PATH_SEPARATOR.implode(PATH_SEPARATOR,$modules));
spl_autoload_register('spl_autoload');


new App();






?>