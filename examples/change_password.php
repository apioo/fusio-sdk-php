<?php

require_once __DIR__ . '/../vendor/autoload.php';
require_once __DIR__ . '/../src/bootstrap.php';

// @TODO set correct base uri
$baseUri = 'http://127.0.0.1/projects/fusio/public/index.php';


// request access token
$authenticator = new \Fusio\Sdk\Authenticator($baseUri);
$token = $authenticator->requestAccessToken('test', 'test1234');

echo 'Obtained token: ' . $token . "\n";


// changes the password of the user assigned to the token
$changePassword = new \Fusio\Sdk\Consumer\Account_ChangePassword();
$changePassword->setOldPassword('test1234');
$changePassword->setNewPassword('test1234!');
$changePassword->setVerifyPassword('test1234!');

$client = new \Fusio\Sdk\Consumer\Client($baseUri, $token);
$response = $client->getConsumerAccountChangePassword()->consumerActionUserChangePassword($changePassword);

echo $response->getMessage() . "\n";
