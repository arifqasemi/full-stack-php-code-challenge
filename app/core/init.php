<?php

spl_autoload_register(function($class_name)
{
	$parts = explode("\\", $class_name);
	$class_name = array_pop($parts);
        $file= "../app/models/" .$class_name . ".php";
      

    // Check if the file exists
    if(file_exists($file)){

        // require_once $full_path;	
        require_once $file;

    }
});

require_once('router.php');
require_once('controller.php');
require_once('Database.php');
require_once('model.php');
require_once('config.php');
require_once('functions.php');