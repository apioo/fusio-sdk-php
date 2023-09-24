<?php

require_once __DIR__ . '/../vendor/autoload.php';

// @TODO set correct client credentials
$client = new \Fusio\Sdk\Client(
    'https://demo.fusio-project.org',
    new \Sdkgen\Client\Credentials\OAuth2('test', 'FRsNh1zKCXlB', 'https://demo.fusio-project.org/authorization/token', ''),
);

try {
    $entries = $client->backend()->operation()->getAll()->getEntry() ?? [];
    foreach ($entries as $entry) {
        echo $entry->getName() . "\n";
    }
} catch (\Fusio\Sdk\CommonMessageException $e) {
    echo 'An error occurred:' . "\n";
    echo $e->getPayload()->getMessage() . "\n";
} catch (\Sdkgen\Client\Exception\ClientException $e) {
    echo 'An unknown client error occurred:' . "\n";
    echo $e->getMessage() . "\n";
}
