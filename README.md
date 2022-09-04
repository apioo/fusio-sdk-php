
# Fusio PHP SDK

This is the official Fusio PHP SDK, it helps to talk to the Fusio REST API.
Fusio is an open source API management system, more information at:
https://www.fusio-project.org

## Usage

The following example shows how you can get all registered routes at the backend.
A working example is also available at: https://github.com/apioo/fusio-sample-php-cli

```php
<?php

require __DIR__ . '/vendor/autoload.php';

$tokenStore = new \Sdkgen\Client\TokenStore\MemoryTokenStore();
$scopes = ['backend'];

$client = new \Fusio\Sdk\Client('https://demo.fusio-project.org', 'test', 'FRsNh1zKCXlB', $scopes, $tokenStore);

$collection = $client->backend()->backendRoute()->getBackendRoutes()->backendActionRouteGetAll();

echo 'Routes:' . "\n";
foreach ($collection->getEntry() as $route) {
    echo '* ' . $route->getPath() . "\n";
}

```
