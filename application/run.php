<?php

# incl slim framework
require '../framework/Slim/Slim.php';
require 'app/autoload.php';
require 'config/main.php';

\Slim\Slim::registerAutoloader();
\app\Core::register(new \Slim\Slim());

$slim = \app\Core::Slim();


# main page
$slim->get('/', [new controllers\Main(), 'index']);


# documentation page
$slim->map('/documentation(/:link)', [new controllers\Main(), 'documentation'])
    ->via('GET')
    ->conditions([
        'link'=>'\w+'
    ]);


# Single pages with only GET requests
$slim->map('/:action', ['controllers\Main','call'])
    ->via('GET')
    ->conditions([
        'action'=>'structure|download|example'
    ]);


# Single pages with POST requests
$slim->map('/:action', ['controllers\Main','call'])
    ->via('GET','POST')
    ->conditions([
        'action'=>'login|logout|contacts'
    ]);


$slim->run();