<?php
/**
 * BackendSchemaTag automatically generated by SDKgen please do not edit this file manually
 * @see https://sdkgen.app
 */

namespace Fusio\Sdk;

use GuzzleHttp\Exception\BadResponseException;
use Sdkgen\Client\Exception\ClientException;
use Sdkgen\Client\Exception\Payload;
use Sdkgen\Client\Exception\UnknownStatusCodeException;
use Sdkgen\Client\TagAbstract;

class BackendSchemaTag extends TagAbstract
{
    /**
     * @param string $schemaId
     * @return CommonMessage
     * @throws CommonMessageException
     * @throws ClientException
     */
    public function delete(string $schemaId): CommonMessage
    {
        $url = $this->parser->url('/backend/schema/$schema_id<[0-9]+|^~>', [
            'schema_id' => $schemaId,
        ]);

        $options = [
            'headers' => [
            ],
            'query' => $this->parser->query([
            ], [
            ]),
        ];

        try {
            $response = $this->httpClient->request('DELETE', $url, $options);
            $body = $response->getBody();

            $data = $this->parser->parse((string) $body, \PSX\Schema\SchemaSource::fromClass(CommonMessage::class));

            return $data;
        } catch (ClientException $e) {
            throw $e;
        } catch (BadResponseException $e) {
            $body = $e->getResponse()->getBody();
            $statusCode = $e->getResponse()->getStatusCode();

            if ($statusCode === 401) {
                $data = $this->parser->parse((string) $body, \PSX\Schema\SchemaSource::fromClass(CommonMessage::class));

                throw new CommonMessageException($data);
            }

            if ($statusCode === 404) {
                $data = $this->parser->parse((string) $body, \PSX\Schema\SchemaSource::fromClass(CommonMessage::class));

                throw new CommonMessageException($data);
            }

            if ($statusCode === 410) {
                $data = $this->parser->parse((string) $body, \PSX\Schema\SchemaSource::fromClass(CommonMessage::class));

                throw new CommonMessageException($data);
            }

            if ($statusCode === 500) {
                $data = $this->parser->parse((string) $body, \PSX\Schema\SchemaSource::fromClass(CommonMessage::class));

                throw new CommonMessageException($data);
            }

            throw new UnknownStatusCodeException('The server returned an unknown status code: ' . $statusCode);
        } catch (\Throwable $e) {
            throw new ClientException('An unknown error occurred: ' . $e->getMessage());
        }
    }

    /**
     * @param string $schemaId
     * @param BackendSchemaUpdate $payload
     * @return CommonMessage
     * @throws CommonMessageException
     * @throws ClientException
     */
    public function update(string $schemaId, BackendSchemaUpdate $payload): CommonMessage
    {
        $url = $this->parser->url('/backend/schema/$schema_id<[0-9]+|^~>', [
            'schema_id' => $schemaId,
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
            $response = $this->httpClient->request('PUT', $url, $options);
            $body = $response->getBody();

            $data = $this->parser->parse((string) $body, \PSX\Schema\SchemaSource::fromClass(CommonMessage::class));

            return $data;
        } catch (ClientException $e) {
            throw $e;
        } catch (BadResponseException $e) {
            $body = $e->getResponse()->getBody();
            $statusCode = $e->getResponse()->getStatusCode();

            if ($statusCode === 400) {
                $data = $this->parser->parse((string) $body, \PSX\Schema\SchemaSource::fromClass(CommonMessage::class));

                throw new CommonMessageException($data);
            }

            if ($statusCode === 401) {
                $data = $this->parser->parse((string) $body, \PSX\Schema\SchemaSource::fromClass(CommonMessage::class));

                throw new CommonMessageException($data);
            }

            if ($statusCode === 404) {
                $data = $this->parser->parse((string) $body, \PSX\Schema\SchemaSource::fromClass(CommonMessage::class));

                throw new CommonMessageException($data);
            }

            if ($statusCode === 410) {
                $data = $this->parser->parse((string) $body, \PSX\Schema\SchemaSource::fromClass(CommonMessage::class));

                throw new CommonMessageException($data);
            }

            if ($statusCode === 500) {
                $data = $this->parser->parse((string) $body, \PSX\Schema\SchemaSource::fromClass(CommonMessage::class));

                throw new CommonMessageException($data);
            }

            throw new UnknownStatusCodeException('The server returned an unknown status code: ' . $statusCode);
        } catch (\Throwable $e) {
            throw new ClientException('An unknown error occurred: ' . $e->getMessage());
        }
    }

    /**
     * @param string $schemaId
     * @return BackendSchema
     * @throws CommonMessageException
     * @throws ClientException
     */
    public function get(string $schemaId): BackendSchema
    {
        $url = $this->parser->url('/backend/schema/$schema_id<[0-9]+|^~>', [
            'schema_id' => $schemaId,
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

            $data = $this->parser->parse((string) $body, \PSX\Schema\SchemaSource::fromClass(BackendSchema::class));

            return $data;
        } catch (ClientException $e) {
            throw $e;
        } catch (BadResponseException $e) {
            $body = $e->getResponse()->getBody();
            $statusCode = $e->getResponse()->getStatusCode();

            if ($statusCode === 401) {
                $data = $this->parser->parse((string) $body, \PSX\Schema\SchemaSource::fromClass(CommonMessage::class));

                throw new CommonMessageException($data);
            }

            if ($statusCode === 404) {
                $data = $this->parser->parse((string) $body, \PSX\Schema\SchemaSource::fromClass(CommonMessage::class));

                throw new CommonMessageException($data);
            }

            if ($statusCode === 410) {
                $data = $this->parser->parse((string) $body, \PSX\Schema\SchemaSource::fromClass(CommonMessage::class));

                throw new CommonMessageException($data);
            }

            if ($statusCode === 500) {
                $data = $this->parser->parse((string) $body, \PSX\Schema\SchemaSource::fromClass(CommonMessage::class));

                throw new CommonMessageException($data);
            }

            throw new UnknownStatusCodeException('The server returned an unknown status code: ' . $statusCode);
        } catch (\Throwable $e) {
            throw new ClientException('An unknown error occurred: ' . $e->getMessage());
        }
    }

    /**
     * @param string $schemaId
     * @param BackendSchemaForm $payload
     * @return CommonMessage
     * @throws CommonMessageException
     * @throws ClientException
     */
    public function updateForm(string $schemaId, BackendSchemaForm $payload): CommonMessage
    {
        $url = $this->parser->url('/backend/schema/form/$schema_id<[0-9]+>', [
            'schema_id' => $schemaId,
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
            $response = $this->httpClient->request('PUT', $url, $options);
            $body = $response->getBody();

            $data = $this->parser->parse((string) $body, \PSX\Schema\SchemaSource::fromClass(CommonMessage::class));

            return $data;
        } catch (ClientException $e) {
            throw $e;
        } catch (BadResponseException $e) {
            $body = $e->getResponse()->getBody();
            $statusCode = $e->getResponse()->getStatusCode();

            if ($statusCode === 400) {
                $data = $this->parser->parse((string) $body, \PSX\Schema\SchemaSource::fromClass(CommonMessage::class));

                throw new CommonMessageException($data);
            }

            if ($statusCode === 401) {
                $data = $this->parser->parse((string) $body, \PSX\Schema\SchemaSource::fromClass(CommonMessage::class));

                throw new CommonMessageException($data);
            }

            if ($statusCode === 404) {
                $data = $this->parser->parse((string) $body, \PSX\Schema\SchemaSource::fromClass(CommonMessage::class));

                throw new CommonMessageException($data);
            }

            if ($statusCode === 410) {
                $data = $this->parser->parse((string) $body, \PSX\Schema\SchemaSource::fromClass(CommonMessage::class));

                throw new CommonMessageException($data);
            }

            if ($statusCode === 500) {
                $data = $this->parser->parse((string) $body, \PSX\Schema\SchemaSource::fromClass(CommonMessage::class));

                throw new CommonMessageException($data);
            }

            throw new UnknownStatusCodeException('The server returned an unknown status code: ' . $statusCode);
        } catch (\Throwable $e) {
            throw new ClientException('An unknown error occurred: ' . $e->getMessage());
        }
    }

    /**
     * @param string $schemaId
     * @return BackendSchemaPreviewResponse
     * @throws CommonMessageException
     * @throws ClientException
     */
    public function getPreview(string $schemaId): BackendSchemaPreviewResponse
    {
        $url = $this->parser->url('/backend/schema/preview/:schema_id', [
            'schema_id' => $schemaId,
        ]);

        $options = [
            'headers' => [
            ],
            'query' => $this->parser->query([
            ], [
            ]),
        ];

        try {
            $response = $this->httpClient->request('POST', $url, $options);
            $body = $response->getBody();

            $data = $this->parser->parse((string) $body, \PSX\Schema\SchemaSource::fromClass(BackendSchemaPreviewResponse::class));

            return $data;
        } catch (ClientException $e) {
            throw $e;
        } catch (BadResponseException $e) {
            $body = $e->getResponse()->getBody();
            $statusCode = $e->getResponse()->getStatusCode();

            if ($statusCode === 401) {
                $data = $this->parser->parse((string) $body, \PSX\Schema\SchemaSource::fromClass(CommonMessage::class));

                throw new CommonMessageException($data);
            }

            if ($statusCode === 500) {
                $data = $this->parser->parse((string) $body, \PSX\Schema\SchemaSource::fromClass(CommonMessage::class));

                throw new CommonMessageException($data);
            }

            throw new UnknownStatusCodeException('The server returned an unknown status code: ' . $statusCode);
        } catch (\Throwable $e) {
            throw new ClientException('An unknown error occurred: ' . $e->getMessage());
        }
    }

    /**
     * @param BackendSchemaCreate $payload
     * @return CommonMessage
     * @throws CommonMessageException
     * @throws ClientException
     */
    public function create(BackendSchemaCreate $payload): CommonMessage
    {
        $url = $this->parser->url('/backend/schema', [
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

            $data = $this->parser->parse((string) $body, \PSX\Schema\SchemaSource::fromClass(CommonMessage::class));

            return $data;
        } catch (ClientException $e) {
            throw $e;
        } catch (BadResponseException $e) {
            $body = $e->getResponse()->getBody();
            $statusCode = $e->getResponse()->getStatusCode();

            if ($statusCode === 400) {
                $data = $this->parser->parse((string) $body, \PSX\Schema\SchemaSource::fromClass(CommonMessage::class));

                throw new CommonMessageException($data);
            }

            if ($statusCode === 401) {
                $data = $this->parser->parse((string) $body, \PSX\Schema\SchemaSource::fromClass(CommonMessage::class));

                throw new CommonMessageException($data);
            }

            if ($statusCode === 500) {
                $data = $this->parser->parse((string) $body, \PSX\Schema\SchemaSource::fromClass(CommonMessage::class));

                throw new CommonMessageException($data);
            }

            throw new UnknownStatusCodeException('The server returned an unknown status code: ' . $statusCode);
        } catch (\Throwable $e) {
            throw new ClientException('An unknown error occurred: ' . $e->getMessage());
        }
    }

    /**
     * @param int|null $startIndex
     * @param int|null $count
     * @param string|null $search
     * @return BackendSchemaCollection
     * @throws CommonMessageException
     * @throws ClientException
     */
    public function getAll(?int $startIndex = null, ?int $count = null, ?string $search = null): BackendSchemaCollection
    {
        $url = $this->parser->url('/backend/schema', [
        ]);

        $options = [
            'headers' => [
            ],
            'query' => $this->parser->query([
                'startIndex' => $startIndex,
                'count' => $count,
                'search' => $search,
            ], [
            ]),
        ];

        try {
            $response = $this->httpClient->request('GET', $url, $options);
            $body = $response->getBody();

            $data = $this->parser->parse((string) $body, \PSX\Schema\SchemaSource::fromClass(BackendSchemaCollection::class));

            return $data;
        } catch (ClientException $e) {
            throw $e;
        } catch (BadResponseException $e) {
            $body = $e->getResponse()->getBody();
            $statusCode = $e->getResponse()->getStatusCode();

            if ($statusCode === 401) {
                $data = $this->parser->parse((string) $body, \PSX\Schema\SchemaSource::fromClass(CommonMessage::class));

                throw new CommonMessageException($data);
            }

            if ($statusCode === 500) {
                $data = $this->parser->parse((string) $body, \PSX\Schema\SchemaSource::fromClass(CommonMessage::class));

                throw new CommonMessageException($data);
            }

            throw new UnknownStatusCodeException('The server returned an unknown status code: ' . $statusCode);
        } catch (\Throwable $e) {
            throw new ClientException('An unknown error occurred: ' . $e->getMessage());
        }
    }



}
