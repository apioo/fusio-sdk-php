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

use GuzzleHttp\Client;

/**
 * Authenticator
 *
 * @author  Christoph Kappestein <christoph.kappestein@gmail.com>
 * @license http://www.gnu.org/licenses/agpl-3.0
 * @link    http://fusio-project.org
 */
class Authenticator
{
    /**
     * @var string
     */
    private $baseUri;

    /**
     * @var Client
     */
    private $httpClient;

    public function __construct(string $baseUri, ?Client $httpClient = null)
    {
        $this->baseUri = $baseUri;
        $this->httpClient = $httpClient ? $httpClient : new Client();
    }

    /**
     * @param string $username
     * @param string $password
     * @param array|null $scopes
     * @return AccessToken
     */
    public function requestAccessToken(string $username, string $password, ?array $scopes = null): AccessToken
    {
        $params = ['grant_type' => 'client_credentials'];
        if ($scopes !== null) {
            $params['scope'] = implode(',', $scopes);
        }

        $response = $this->httpClient->post($this->baseUri . '/authorization/token', [
            'headers' => [
                'Authorization' => 'Basic ' . base64_encode($username . ':' . $password),
            ],
            'form_params' => $params
        ]);

        if ($response->getStatusCode() >= 400) {
            throw new \RuntimeException('Could not request access token, returned an invalid status code');
        }

        $data = \json_decode((string) $response->getBody(), true);
        if (!isset($data['access_token'])) {
            throw new \RuntimeException('Could not find access token in body');
        }

        return AccessToken::fromArray($data);
    }

    public function removeAccessToken(string $accessToken): void
    {
        $this->httpClient->post($this->baseUri . '/authorization/revoke', [
            'headers' => [
                'Authorization' => 'Bearer ' . $accessToken,
            ],
        ]);
    }
}
