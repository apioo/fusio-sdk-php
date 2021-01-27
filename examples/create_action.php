<?php

require_once __DIR__ . '/../vendor/autoload.php';
require_once __DIR__ . '/../src/bootstrap.php';

// @TODO set correct base uri
$baseUri = 'http://127.0.0.1/projects/fusio/public/index.php';


// request access token
$authenticator = new \Fusio\Sdk\Authenticator($baseUri);
$token = $authenticator->requestAccessToken('test', 'test1234');

echo 'Obtained token: ' . $token . "\n";


// create new backend client with the token and get all backend routes
$client = new \Fusio\Sdk\Backend\Client($baseUri, $token);

$config = new \Fusio\Sdk\Backend\Action_Config();
$config['response'] = \json_encode(['hello' => 'world']);

$action = new \Fusio\Sdk\Backend\Action_Create();
$action->setName('my-new-action');
$action->setClass('Fusio\Adapter\Util\Action\UtilStaticResponse');
$action->setConfig($config);

$response = $client->getBackendAction()->backendActionActionCreate($action);

echo $response->getMessage() . "\n";
