<?php

require_once __DIR__ . '/../vendor/autoload.php';

// @TODO set correct client credentials
$client = new \Fusio\Sdk\Client(
    'https://demo.fusio-project.org',
    new \Sdkgen\Client\Credentials\OAuth2('test', 'FRsNh1zKCXlB', 'https://demo.fusio-project.org/authorization/token', ''),
);

$operation = new \Fusio\Sdk\BackendOperationCreate();
$operation->setName('my_get_operation_id');
$operation->setHttpMethod('GET');
$operation->setHttpPath('/new/path');
$operation->setHttpCode(200);
$operation->setDescription('My GET description');
$operation->setOutgoing('My_Response_Schema');
$operation->setAction('My_Action');

try {
    $response = $client->backend()->operation()->create($operation);

    echo $response->getMessage() . "\n";
} catch (\Fusio\Sdk\CommonMessageException $e) {
    echo 'An error occurred:' . "\n";
    echo $e->getPayload()->getMessage() . "\n";
} catch (\Sdkgen\Client\Exception\ClientException $e) {
    echo 'An unknown client error occurred:' . "\n";
    echo $e->getMessage() . "\n";
}
