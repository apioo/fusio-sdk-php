<?php

namespace Fusio\Sdk;

use Sdkgen\Client\Credentials\OAuth2;
use Sdkgen\Client\CredentialsInterface;
use Sdkgen\Client\TokenStoreInterface;

/**
 * Client
 *
 * @author  Christoph Kappestein <christoph.kappestein@gmail.com>
 * @license http://www.gnu.org/licenses/agpl-3.0
 * @link    http://fusio-project.org
 */
class Client
{
    private string $baseUrl;
    private CredentialsInterface $credentials;

    public function __construct(string $baseUrl, string $clientId, string $clientSecret, ?array $scopes = null, ?TokenStoreInterface $tokenStore = null)
    {
        $this->baseUrl = $baseUrl;
        $this->credentials = $this->newCredentials($clientId, $clientSecret, $tokenStore, $scopes);
    }

    public function backend(): Backend\Client
    {
        return new Backend\Client($this->baseUrl, $this->credentials);
    }

    public function consumer(): Consumer\Client
    {
        return new Consumer\Client($this->baseUrl, $this->credentials);
    }

    public function getCredentials(): CredentialsInterface
    {
        return $this->credentials;
    }

    private function newCredentials(string $clientId, string $clientSecret, ?TokenStoreInterface $tokenStore = null, ?array $scopes = null): CredentialsInterface
    {
        return new OAuth2(
            $clientId,
            $clientSecret,
            $this->baseUrl . '/authorization/token',
            '',
            $tokenStore,
            $scopes
        );
    }
}
