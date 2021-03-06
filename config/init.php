<?php

error_reporting(E_ALL);
ini_set('display_errors', 1);

// session start
session_start();

// Confi file
require_once './config.php';

// helper file
require_once 'helpers/system_helper.php';

// Autoloader loads all classes in the lib folder so they can be initiatied in the index.pho file
function my_autoloader($class_name){
  require_once 'lib/'.$class_name. '.php';
}

spl_autoload_register('my_autoloader');
