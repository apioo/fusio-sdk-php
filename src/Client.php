<?php
/*
 * Fusio is an open source API management platform which helps to create innovative API solutions.
 * For the current version and information visit <https://www.fusio-project.org/>
 *
 * Copyright 2015-2023 Christoph Kappestein <christoph.kappestein@gmail.com>
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *     http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */

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
