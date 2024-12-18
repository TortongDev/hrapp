<?php
require_once dirname(dirname(__DIR__))."/vendor/autoload.php";
$dotenv = Dotenv\Dotenv::createImmutable(dirname(dirname(__DIR__)));
$dotenv->load();
?>
