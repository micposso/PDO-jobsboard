<?php
// Confi file
require_once './config.php';


// Autoloader loads all classes in the lib folder so they can be initiatied in the index.pho file
function my_autoloader($class_name){
  require_once 'lib/'.$class_name. '.php';
}

spl_autoload_register('my_autoloader');
