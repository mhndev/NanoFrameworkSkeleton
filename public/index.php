<?php

require '../vendor/autoload.php';


define('APP_DIRECTORY' ,'../app');
define('ROOT_DIRECTORY' ,'../');


$services = require_once '../app/services.php';

$ioc = new \mhndev\NanoFramework\Ioc\Container($services);


$request = $ioc->get('http')->createRequestFromGlobals();

/** @var mhndev\NanoFramework\Kernel\Http\Kernel $app */
$app = $ioc->get('http-kernel');

require_once '../app/routes.php';

try{
    $response = $app->run($request);

}catch (Exception $e){

    $response = (new \mhndev\trycatch\handler())->render($e, new \mhndev\NanoFramework\Http\Response());

    $app->respond($response);

}
