<?php

require_once __DIR__ . '/../vendor/autoload.php';

// @TODO set correct client credentials
$client = new \Fusio\Sdk\Client(
    'https://demo.fusio-project.org',
    new \Sdkgen\Client\Credentials\OAuth2('test', 'FRsNh1zKCXlB', 'https://demo.fusio-project.org/authorization/token', ''),
);

// changes the password of the user assigned to the token
$changePassword = new \Fusio\Sdk\BackendAccountChangePassword();
$changePassword->setOldPassword('test1234');
$changePassword->setNewPassword('test1234!');
$changePassword->setVerifyPassword('test1234!');

try {
    $response = $client->consumer()->account()->changePassword($changePassword);

    echo $response->getMessage() . "\n";
} catch (\Fusio\Sdk\CommonMessageException $e) {
    echo 'An error occurred:' . "\n";
    echo $e->getPayload()->getMessage() . "\n";
} catch (\Sdkgen\Client\Exception\ClientException $e) {
    echo 'An unknown client error occurred:' . "\n";
    echo $e->getMessage() . "\n";
}
