
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

$client = new \Fusio\Sdk\Client('https://myapi.com', '');

$login = new \ConsumerLogin\Consumer_User_Login();
$login->setUsername('username');
$login->setPassword('password');

$jwt = $client->consumer()->login()->do()->post($login);

// contains the JWT access token
$jwt->getToken();

```

## Usage

### Backend

```php
<?php

$client = new \Fusio\Sdk\Client('https://myapi.com', '[token]');

// output all configured backend routes
$collection = $client->backend()->routes()->collection()->get(new \BackendRoutes\GetQuery());
foreach ($collection->getEntry() as $route) {
    /** @var \BackendRoutes\Routes $route */
    echo $route->getPath() . "\n";
}

```

### Consumer

```php
<?php

$client = new \Fusio\Sdk\Client('https://myapi.com', '[token]');

// exchange the password of the authenticated user
$credentials = new \ConsumerAccountChange_password\Consumer_User_Credentials();
$credentials->setNewPassword('new pw');
$credentials->setOldPassword('old pw');
$credentials->setVerifyPassword('new pw');

$result = $client->consumer()->account()->changePassword()->put($credentials);

if ($result->getSuccess()) {
    echo $result->getMessage() . "\n";
}

```
