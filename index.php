<?php
//composer autoloader
require_once __DIR__.'/vendor/autoload.php';

use JustinBellamyCom\Util\Logging\LoggerSingleton;

$l = LoggerSingleton::getInstance();
$l->log('Log entry one.');
$l->log('Log entry two.');
print_r($l->getLog());