<?php
/*
 * Fusio
 * A web-application to create dynamically RESTful APIs
 *
 * Copyright (C) 2015-2020 Christoph Kappestein <christoph.kappestein@gmail.com>
 *
 * This program is free software: you can redistribute it and/or modify
 * it under the terms of the GNU Affero General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU Affero General Public License for more details.
 *
 * You should have received a copy of the GNU Affero General Public License
 * along with this program.  If not, see <http://www.gnu.org/licenses/>.
 */

namespace Fusio\Sdk;

use Sdkgen\Client\Credentials\ClientCredentials;
use Sdkgen\Client\CredentialsInterface;
use Sdkgen\Client\TokenStore\MemoryTokenStore;
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
    private ?array $scopes;
    private TokenStoreInterface $tokenStore;

    public function __construct(string $baseUrl, string $clientId, string $clientSecret, ?array $scopes = null, ?TokenStoreInterface $tokenStore = null)
    {
        $this->baseUrl = $baseUrl;
        $this->credentials = $this->newCredentials($clientId, $clientSecret);
        $this->scopes = $scopes;
        $this->tokenStore = $tokenStore ?? new MemoryTokenStore();
    }

    public function backend(): Backend\Client
    {
        return new Backend\Client($this->baseUrl, $this->credentials, $this->tokenStore, $this->scopes);
    }

    public function consumer(): Consumer\Client
    {
        return new Consumer\Client($this->baseUrl, $this->credentials, $this->tokenStore, $this->scopes);
    }

    public function getTokenStore(): TokenStoreInterface
    {
        return $this->tokenStore;
    }

    private function newCredentials(string $clientId, string $clientSecret): CredentialsInterface
    {
        return new ClientCredentials(
            $clientId,
            $clientSecret,
            $this->baseUrl . '/authorization/token',
            '',
            $this->baseUrl . '/authorization/refresh'
        );
    }
}
