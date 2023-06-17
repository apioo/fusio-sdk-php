<?php

require_once __DIR__ . '/../vendor/autoload.php';

// @TODO set correct client credentials
$client = new \Fusio\Sdk\Client(
    'http://127.0.0.1/projects/fusio/public/index.php',
    'test',
    'test1234'
);

$app = new \Fusio\Sdk\Backend\AppCreate();
$app->setStatus(1);
$app->setUserId(1);
$app->setName('my-new-action');
$app->setUrl('https://myapp.com');
$app->setScopes(['foo', 'bar']);

$response = $client->backend()->app()->create($app);

echo $response->getMessage() . "\n";
