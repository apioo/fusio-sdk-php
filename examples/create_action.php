<?php

require_once __DIR__ . '/../vendor/autoload.php';

// @TODO set correct client credentials
$client = new \Fusio\Sdk\Client(
    'https://demo.fusio-project.org',
    new \Sdkgen\Client\Credentials\OAuth2('test', 'FRsNh1zKCXlB', 'https://demo.fusio-project.org/authorization/token', ''),
);

$config = new \Fusio\Sdk\BackendActionConfig();
$config['response'] = \json_encode(['hello' => 'world']);

$action = new \Fusio\Sdk\BackendActionCreate();
$action->setName('my-new-action');
$action->setClass('Fusio.Adapter.Util.Action.UtilStaticResponse');
$action->setConfig($config);

try {
    $response = $client->backend()->action()->create($action);

    echo $response->getMessage() . "\n";
} catch (\Fusio\Sdk\CommonMessageException $e) {
    echo 'An error occurred:' . "\n";
    echo $e->getPayload()->getMessage() . "\n";
} catch (\Sdkgen\Client\Exception\ClientException $e) {
    echo 'An unknown client error occurred:' . "\n";
    echo $e->getMessage() . "\n";
}
