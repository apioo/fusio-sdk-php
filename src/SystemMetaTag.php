<?php
/**
 * SystemMetaTag automatically generated by SDKgen please do not edit this file manually
 * @see https://sdkgen.app
 */

namespace Fusio\Sdk;

use GuzzleHttp\Exception\BadResponseException;
use Sdkgen\Client\Exception\ClientException;
use Sdkgen\Client\Exception\Payload;
use Sdkgen\Client\Exception\UnknownStatusCodeException;
use Sdkgen\Client\TagAbstract;

class SystemMetaTag extends TagAbstract
{
    /**
     * @return SystemAbout
     * @throws CommonMessageException
     * @throws ClientException
     */
    public function getAbout(): SystemAbout
    {
        $url = $this->parser->url('/system/about', [
        ]);

        $options = [
            'headers' => [
            ],
            'query' => $this->parser->query([
            ], [
            ]),
        ];

        try {
            $response = $this->httpClient->request('GET', $url, $options);
            $body = $response->getBody();

            $data = $this->parser->parse((string) $body, \PSX\Schema\SchemaSource::fromClass(SystemAbout::class));

            return $data;
        } catch (ClientException $e) {
            throw $e;
        } catch (BadResponseException $e) {
            $body = $e->getResponse()->getBody();
            $statusCode = $e->getResponse()->getStatusCode();

            if ($statusCode >= 0 && $statusCode <= 999) {
                $data = $this->parser->parse((string) $body, \PSX\Schema\SchemaSource::fromClass(CommonMessage::class));

                throw new CommonMessageException($data);
            }

            throw new UnknownStatusCodeException('The server returned an unknown status code: ' . $statusCode);
        } catch (\Throwable $e) {
            throw new ClientException('An unknown error occurred: ' . $e->getMessage());
        }
    }

    /**
     * @param Passthru $payload
     * @return Passthru
     * @throws CommonMessageException
     * @throws ClientException
     */
    public function getDebug(Passthru $payload): Passthru
    {
        $url = $this->parser->url('/system/debug', [
        ]);

        $options = [
            'headers' => [
                'Content-Type' => 'application/json',
            ],
            'query' => $this->parser->query([
            ], [
            ]),
            'json' => $payload,
        ];

        try {
            $response = $this->httpClient->request('POST', $url, $options);
            $body = $response->getBody();

            $data = $this->parser->parse((string) $body, \PSX\Schema\SchemaSource::fromClass(Passthru::class));

            return $data;
        } catch (ClientException $e) {
            throw $e;
        } catch (BadResponseException $e) {
            $body = $e->getResponse()->getBody();
            $statusCode = $e->getResponse()->getStatusCode();

            if ($statusCode >= 0 && $statusCode <= 999) {
                $data = $this->parser->parse((string) $body, \PSX\Schema\SchemaSource::fromClass(CommonMessage::class));

                throw new CommonMessageException($data);
            }

            throw new UnknownStatusCodeException('The server returned an unknown status code: ' . $statusCode);
        } catch (\Throwable $e) {
            throw new ClientException('An unknown error occurred: ' . $e->getMessage());
        }
    }

    /**
     * @return SystemHealthCheck
     * @throws CommonMessageException
     * @throws ClientException
     */
    public function getHealth(): SystemHealthCheck
    {
        $url = $this->parser->url('/system/health', [
        ]);

        $options = [
            'headers' => [
            ],
            'query' => $this->parser->query([
            ], [
            ]),
        ];

        try {
            $response = $this->httpClient->request('GET', $url, $options);
            $body = $response->getBody();

            $data = $this->parser->parse((string) $body, \PSX\Schema\SchemaSource::fromClass(SystemHealthCheck::class));

            return $data;
        } catch (ClientException $e) {
            throw $e;
        } catch (BadResponseException $e) {
            $body = $e->getResponse()->getBody();
            $statusCode = $e->getResponse()->getStatusCode();

            if ($statusCode >= 0 && $statusCode <= 999) {
                $data = $this->parser->parse((string) $body, \PSX\Schema\SchemaSource::fromClass(CommonMessage::class));

                throw new CommonMessageException($data);
            }

            throw new UnknownStatusCodeException('The server returned an unknown status code: ' . $statusCode);
        } catch (\Throwable $e) {
            throw new ClientException('An unknown error occurred: ' . $e->getMessage());
        }
    }

    /**
     * @return SystemOAuthConfiguration
     * @throws CommonMessageException
     * @throws ClientException
     */
    public function getOAuthConfiguration(): SystemOAuthConfiguration
    {
        $url = $this->parser->url('/system/oauth-authorization-server', [
        ]);

        $options = [
            'headers' => [
            ],
            'query' => $this->parser->query([
            ], [
            ]),
        ];

        try {
            $response = $this->httpClient->request('GET', $url, $options);
            $body = $response->getBody();

            $data = $this->parser->parse((string) $body, \PSX\Schema\SchemaSource::fromClass(SystemOAuthConfiguration::class));

            return $data;
        } catch (ClientException $e) {
            throw $e;
        } catch (BadResponseException $e) {
            $body = $e->getResponse()->getBody();
            $statusCode = $e->getResponse()->getStatusCode();

            if ($statusCode >= 0 && $statusCode <= 999) {
                $data = $this->parser->parse((string) $body, \PSX\Schema\SchemaSource::fromClass(CommonMessage::class));

                throw new CommonMessageException($data);
            }

            throw new UnknownStatusCodeException('The server returned an unknown status code: ' . $statusCode);
        } catch (\Throwable $e) {
            throw new ClientException('An unknown error occurred: ' . $e->getMessage());
        }
    }

    /**
     * @return SystemRoute
     * @throws CommonMessageException
     * @throws ClientException
     */
    public function getRoutes(): SystemRoute
    {
        $url = $this->parser->url('/system/route', [
        ]);

        $options = [
            'headers' => [
            ],
            'query' => $this->parser->query([
            ], [
            ]),
        ];

        try {
            $response = $this->httpClient->request('GET', $url, $options);
            $body = $response->getBody();

            $data = $this->parser->parse((string) $body, \PSX\Schema\SchemaSource::fromClass(SystemRoute::class));

            return $data;
        } catch (ClientException $e) {
            throw $e;
        } catch (BadResponseException $e) {
            $body = $e->getResponse()->getBody();
            $statusCode = $e->getResponse()->getStatusCode();

            if ($statusCode >= 0 && $statusCode <= 999) {
                $data = $this->parser->parse((string) $body, \PSX\Schema\SchemaSource::fromClass(CommonMessage::class));

                throw new CommonMessageException($data);
            }

            throw new UnknownStatusCodeException('The server returned an unknown status code: ' . $statusCode);
        } catch (\Throwable $e) {
            throw new ClientException('An unknown error occurred: ' . $e->getMessage());
        }
    }

    /**
     * @param string $name
     * @return SystemSchema
     * @throws CommonMessageException
     * @throws ClientException
     */
    public function getSchema(string $name): SystemSchema
    {
        $url = $this->parser->url('/system/schema/:name', [
            'name' => $name,
        ]);

        $options = [
            'headers' => [
            ],
            'query' => $this->parser->query([
            ], [
            ]),
        ];

        try {
            $response = $this->httpClient->request('GET', $url, $options);
            $body = $response->getBody();

            $data = $this->parser->parse((string) $body, \PSX\Schema\SchemaSource::fromClass(SystemSchema::class));

            return $data;
        } catch (ClientException $e) {
            throw $e;
        } catch (BadResponseException $e) {
            $body = $e->getResponse()->getBody();
            $statusCode = $e->getResponse()->getStatusCode();

            if ($statusCode >= 0 && $statusCode <= 999) {
                $data = $this->parser->parse((string) $body, \PSX\Schema\SchemaSource::fromClass(CommonMessage::class));

                throw new CommonMessageException($data);
            }

            throw new UnknownStatusCodeException('The server returned an unknown status code: ' . $statusCode);
        } catch (\Throwable $e) {
            throw new ClientException('An unknown error occurred: ' . $e->getMessage());
        }
    }



}
