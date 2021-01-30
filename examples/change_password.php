<?php

require_once __DIR__ . '/../vendor/autoload.php';
require_once __DIR__ . '/../src/bootstrap.php';

// @TODO set correct client credentials
$client = new \Fusio\Sdk\Client(
    'http://127.0.0.1/projects/fusio/public/index.php',
    'test',
    'test1234'
);

// changes the password of the user assigned to the token
$changePassword = new \Fusio\Sdk\Consumer\Account_ChangePassword();
$changePassword->setOldPassword('test1234');
$changePassword->setNewPassword('test1234!');
$changePassword->setVerifyPassword('test1234!');

$response = $client->consumer()->getConsumerAccountChangePassword()->consumerActionUserChangePassword($changePassword);

echo $response->getMessage() . "\n";
