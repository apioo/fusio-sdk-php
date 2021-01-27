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
$entries = $client->getBackendRoutes()->backendActionRouteGetAll(null)->getEntry();

foreach ($entries as $entry) {
    echo $entry->getPath() . "\n";
}
