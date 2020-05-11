<?php
require_once('vendor/autoload.php');
$dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
$dotenv->load();

$db_host = getenv('DB_HOST');
$db_user = getenv('DB_USER');
$db_pass = getenv('DB_PASS');
$db_name = getenv('DB_NAME');

define("DB_HOST", $db_host);
define("DB_USER", $db_user);
define("DB_PASS", $db_pass);
define("DB_NAME", $db_name);

define("SITE_TITLE", "JobLister");
