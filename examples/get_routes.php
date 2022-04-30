<?php

require_once __DIR__ . '/../vendor/autoload.php';

// @TODO set correct client credentials
$client = new \Fusio\Sdk\Client(
    'http://127.0.0.1/projects/fusio/public/index.php',
    'test',
    'test1234'
);

$entries = $client->backend()->backendRoute()->getBackendRoutes()->backendActionRouteGetAll(null)->getEntry();

foreach ($entries as $entry) {
    echo $entry->getPath() . "\n";
}
