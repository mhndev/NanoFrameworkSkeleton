<?php


$app->route('/','index','get', 'mhndev\NanoFrameworkSkeleton\Controllers\HomeController@indexAction');



$app->get('/test/public/index.php', 'index2', function($ioc){
    $csvService = new \mhndev\NanoFramework\Csv\Csv();

    //$csvService->arrayToCsv([['majid','ali','ruzbeh']], 'test.csv');
    //$csvService->addLine('test.csv',['majid','hamid','gavad']);

    $csvService->deleteOnLineBy('test.csv', \mhndev\NanoFramework\Csv\Csv::LINE_NUMBER , 2);


    die();
});


//$app->get('/test/public/index.php', 'index2', '\App\Controllers\HomeController@fooAction');
