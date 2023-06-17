<?php

require_once __DIR__ . '/../vendor/autoload.php';

// @TODO set correct client credentials
$client = new \Fusio\Sdk\Client(
    'http://127.0.0.1/projects/fusio/public/index.php',
    'test',
    'test1234'
);

$config = new \Fusio\Sdk\Backend\ActionConfig();
$config['response'] = \json_encode(['hello' => 'world']);

$action = new \Fusio\Sdk\Backend\ActionCreate();
$action->setName('my-new-action');
$action->setClass('Fusio\Adapter\Util\Action\UtilStaticResponse');
$action->setConfig($config);

$response = $client->backend()->action()->create($action);

echo $response->getMessage() . "\n";
