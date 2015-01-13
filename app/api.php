<?php
/**
 * Created by PhpStorm.
 * User: kevinharbauer
 * Date: 1/12/15
 * Time: 2:35 PM
 */

// web/index.php
require_once __DIR__ . '/../vendor/autoload.php';


$app = new Silex\Application();

$app['debug'] = true;

$app->get('/hello/{name}', function ($name) use ($app) {
    return 'Hello '.$app->escape($name);
});



$app->run();


?>