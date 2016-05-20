<?php

use mhndev\NanoFramework\Kernel\Http\Kernel;

require '../vendor/autoload.php';


define('APP_DIRECTORY' ,'../app');
define('ROOT_DIRECTORY' ,'../');


$services = require_once '../app/services.php';

$ioc = new \mhndev\NanoFramework\Ioc\Container($services);

$request = $ioc->get('http')->createRequestFromGlobals();

/** @var Kernel $app */
$app = $ioc->get('http-kernel');

require_once '../app/routes.php';

$response = $app->run($request);
