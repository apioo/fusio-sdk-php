
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

$credentials = new \Sdkgen\Client\Credentials\OAuth2('test', 'FRsNh1zKCXlB', 'https://demo.fusio-project.org/authorization/token', '', $tokenStore, $scopes);
$client = new \Fusio\Sdk\Client('https://demo.fusio-project.org', $credentials);

$collection = $client->backend()->operation()->getAll(0, 16, '');

echo 'Operations:' . "\n";
foreach ($collection->getEntry() as $operation) {
    echo '* ' . $operation->getHttpMethod() . ' ' . $operation->getHttpPath() . "\n";
}

```
