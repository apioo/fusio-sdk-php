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
    private $username;

    /**
     * @var string
     */
    private $password;

    /**
     * @var string[]|null
     */
    private $scopes;

    /**
     * @var HttpClient|null
     */
    private $httpClient;

    /**
     * @var SchemaManager|null
     */
    private $schemaManager;

    /**
     * @var AccessToken|null
     */
    private $token;

    /**
     * @param string $baseUri
     * @param string $username
     * @param string $password
     * @param array|null $scopes
     * @param HttpClient|null $httpClient
     * @param SchemaManager|null $schemaManager
     */
    public function __construct(string $baseUri, string $username, string $password, ?array $scopes = null, ?HttpClient $httpClient = null, ?SchemaManager $schemaManager = null)
    {
        $this->baseUri = $baseUri;
        $this->username = $username;
        $this->password = $password;
        $this->scopes = $scopes;
        $this->httpClient = $httpClient;
        $this->schemaManager = $schemaManager;
    }

    public function authenticate(): AccessToken
    {
        if ($this->token && $this->token->getExpiresIn() > time()) {
            return $this->token;
        }

        $authenticator = new Authenticator($this->baseUri, $this->httpClient);
        $token = $authenticator->requestAccessToken($this->username, $this->password, $this->scopes);

        return $this->token = $token;
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
