<?php

require_once __DIR__ . '/../vendor/autoload.php';

// @TODO set correct client credentials
$client = new \Fusio\Sdk\Client(
    'https://demo.fusio-project.org',
    new \Sdkgen\Client\Credentials\OAuth2('test', 'FRsNh1zKCXlB', 'https://demo.fusio-project.org/authorization/token', ''),
);

$app = new \Fusio\Sdk\BackendAppCreate();
$app->setStatus(1);
$app->setUserId(1);
$app->setName('my-new-action');
$app->setUrl('https://myapp.com');
$app->setScopes(['foo', 'bar']);

try {
    $response = $client->backend()->app()->create($app);

    echo $response->getMessage() . "\n";
} catch (\Fusio\Sdk\CommonMessageException $e) {
    echo 'An error occurred:' . "\n";
    echo $e->getPayload()->getMessage() . "\n";
} catch (\Sdkgen\Client\Exception\ClientException $e) {
    echo 'An unknown client error occurred:' . "\n";
    echo $e->getMessage() . "\n";
}

