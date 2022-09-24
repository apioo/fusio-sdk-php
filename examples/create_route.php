<?php

require_once __DIR__ . '/../vendor/autoload.php';

// @TODO set correct client credentials
$client = new \Fusio\Sdk\Client(
    'http://127.0.0.1/projects/fusio/public/index.php',
    'test',
    'test1234'
);

$get = new \Fusio\Sdk\Backend\RouteMethod();
$get->setActive(true);
$get->setPublic(true);
$get->setDescription('My GET description');
$get->setOperationId('my_get_operation_id');
$get->setResponse('My_Response_Schema');
$get->setAction('My_Action');

$methods = new \Fusio\Sdk\Backend\RouteMethods();
$methods['GET'] = $get;

$version = new \Fusio\Sdk\Backend\RouteVersion();
$version->setVersion(1);
$version->setStatus(1);
$version->setMethods($methods);

$route = new \Fusio\Sdk\Backend\RouteCreate();
$route->setPath('/new/path');
$route->setController('Fusio\Impl\Controller\SchemaApiController');
$route->setConfig([$version]);

$response = $client->backend()->getBackendRoutes()->backendActionRouteCreate($route);

echo $response->getMessage() . "\n";