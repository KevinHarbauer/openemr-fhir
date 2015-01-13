<?php
/**
 * Created by PhpStorm.
 * User: kevinharbauer
 * Date: 1/12/15
 * Time: 6:40 PM
 * */



require_once __DIR__ . '/bootstrap.php';

use Symfony\Component\HttpFoundation\Response;

$app = new Silex\Application();

$app['debug'] = true;

$app->get('/', function() {
    return new Response('Welcome to the OpenEMR FHIR');
});

$app->get('/hello/{name}', function ($name) use ($app) {
    return 'Hello '.$app->escape($name);
});

//$app->run();




?>

