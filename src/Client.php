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

use Fusio\Sdk\TokenStore\MemoryTokenStore;
use Fusio\Sdk\TokenStore\TokenStoreInterface;
use GuzzleHttp\Client as HttpClient;
use PSX\Schema\SchemaManager;

/**
 * Client
 *
 * @author  Christoph Kappestein <christoph.kappestein@gmail.com>
 * @license http://www.gnu.org/licenses/agpl-3.0
 * @link    http://fusio-project.org
 */
class Client
{
    /**
     * @var string
     */
    private $baseUri;

    /**
     * @var string
     */
    private $appKey;

    /**
     * @var string
     */
    private $appSecret;

    /**
     * @var string[]|null
     */
    private $scopes;

    /**
     * @var TokenStoreInterface
     */
    private $tokenStore;

    /**
     * @var HttpClient|null
     */
    private $httpClient;

    /**
     * @var SchemaManager|null
     */
    private $schemaManager;

    /**
     * @param string $baseUri
     * @param string $appKey
     * @param string $appSecret
     * @param array|null $scopes
     * @param HttpClient|null $httpClient
     * @param SchemaManager|null $schemaManager
     */
    public function __construct(string $baseUri, string $appKey, string $appSecret, ?array $scopes = null, ?TokenStoreInterface $tokenStore = null, ?HttpClient $httpClient = null, ?SchemaManager $schemaManager = null)
    {
        $this->baseUri = $baseUri;
        $this->appKey = $appKey;
        $this->appSecret = $appSecret;
        $this->scopes = $scopes;
        $this->tokenStore = $tokenStore ?? new MemoryTokenStore();
        $this->httpClient = $httpClient;
        $this->schemaManager = $schemaManager;
    }

    public function authenticate(): AccessToken
    {
        $token = $this->tokenStore->get();
        if ($token && $token->getExpiresIn() > time()) {
            return $token;
        }

        $authenticator = new Authenticator($this->baseUri, $this->httpClient);
        $token = $authenticator->requestAccessToken($this->appKey, $this->appSecret, $this->scopes);

        $this->tokenStore->persist($token);

        return $token;
    }

    public function backend(): Backend\Client
    {
        $token = $this->authenticate();
        return new Backend\Client($this->baseUri, $token->getAccessToken(), $this->httpClient, $this->schemaManager);
    }

    public function consumer(): Consumer\Client
    {
        $token = $this->authenticate();
        return new Consumer\Client($this->baseUri, $token->getAccessToken(), $this->httpClient, $this->schemaManager);
    }
}
