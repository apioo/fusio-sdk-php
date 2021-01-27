
# Fusio SDK

This PHP library helps to talk to the Fusio (https://www.fusio-project.org/)
API. It uses the automatically generated PHP definition of the Fusio backend.
The following code contains some samples how to use the SDK: 

## Authorization

For most endpoints you need to obtain an access token. Fusio provides multiple
ways to obtain such an access token. The access token is always a JWT, which you
should store i.e. at the local storage so that you can simply reuse the token.
Note every token has an expire time, if the token is expired you either need to
obtain a new token or use the refresh token.

### Simple login

Provides a simple way to obtain an access token using simply the username and
password. If you need more fine control over the access token it is recommended
to use an OAuth2 endpoint

```php
<?php
// @TODO set correct base uri
$baseUri = 'https://myapi.com';

$authenticator = new \Fusio\Sdk\Authenticator($baseUri);
$token = $authenticator->requestAccessToken('test', 'test1234');

```

## Usage

### Backend

```php
<?php

$client = new \Fusio\Sdk\Backend\Client('https://myapi.com', '[token]');
$entries = $client->getBackendRoutes()->backendActionRouteGetAll(null)->getEntry();

foreach ($entries as $entry) {
    echo $entry->getPath() . "\n";
}

```

### Consumer

```php
<?php

$changePassword = new \Fusio\Sdk\Consumer\Account_ChangePassword();
$changePassword->setOldPassword('test1234');
$changePassword->setNewPassword('test1234!');
$changePassword->setVerifyPassword('test1234!');

$client = new \Fusio\Sdk\Consumer\Client('https://myapi.com', '[token]');
$response = $client->getConsumerAccountChangePassword()->consumerActionUserChangePassword($changePassword);

echo $response->getMessage() . "\n";


```
