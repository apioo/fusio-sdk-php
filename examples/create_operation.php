<?php

require_once __DIR__ . '/../vendor/autoload.php';

// @TODO set correct client credentials
$client = new \Fusio\Sdk\Client(
    'http://127.0.0.1/projects/fusio/public/index.php',
    'test',
    'test1234'
);

$operation = new \Fusio\Sdk\Backend\OperationCreate();
$operation->setName('my_get_operation_id');
$operation->setHttpMethod('GET');
$operation->setHttpPath('/new/path');
$operation->setHttpCode(200);
$operation->setDescription('My GET description');
$operation->setOutgoing('My_Response_Schema');
$operation->setAction('My_Action');

$response = $client->backend()->operation()->create($operation);

echo $response->getMessage() . "\n";