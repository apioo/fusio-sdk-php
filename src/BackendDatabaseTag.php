<?php
/**
 * BackendDatabaseTag automatically generated by SDKgen please do not edit this file manually
 * @see https://sdkgen.app
 */

namespace Fusio\Sdk;

use GuzzleHttp\Exception\BadResponseException;
use Sdkgen\Client\Exception\ClientException;
use Sdkgen\Client\Exception\UnknownStatusCodeException;
use Sdkgen\Client\TagAbstract;

class BackendDatabaseTag extends TagAbstract
{
    /**
     * @param string $connectionId
     * @param string $tableName
     * @param string $id
     * @return CommonMessage
     * @throws CommonMessageException
     * @throws ClientException
     */
    public function deleteRow(string $connectionId, string $tableName, string $id): CommonMessage
    {
        $url = $this->parser->url('/backend/database/:connection_id/:table_name/rows/:id', [
            'connection_id' => $connectionId,
            'table_name' => $tableName,
            'id' => $id,
        ]);

        $options = [
            'query' => $this->parser->query([
            ], [
            ]),
        ];

        try {
            $response = $this->httpClient->request('DELETE', $url, $options);
            $data = (string) $response->getBody();

            return $this->parser->parse($data, CommonMessage::class);
        } catch (ClientException $e) {
            throw $e;
        } catch (BadResponseException $e) {
            $data = (string) $e->getResponse()->getBody();

            switch ($e->getResponse()->getStatusCode()) {
                case 400:
                    throw new CommonMessageException($this->parser->parse($data, CommonMessage::class));
                case 401:
                    throw new CommonMessageException($this->parser->parse($data, CommonMessage::class));
                case 404:
                    throw new CommonMessageException($this->parser->parse($data, CommonMessage::class));
                case 500:
                    throw new CommonMessageException($this->parser->parse($data, CommonMessage::class));
                default:
                    throw new UnknownStatusCodeException('The server returned an unknown status code');
            }
        } catch (\Throwable $e) {
            throw new ClientException('An unknown error occurred: ' . $e->getMessage());
        }
    }

    /**
     * @param string $connectionId
     * @param string $tableName
     * @param string $id
     * @param BackendDatabaseRow $payload
     * @return CommonMessage
     * @throws CommonMessageException
     * @throws ClientException
     */
    public function updateRow(string $connectionId, string $tableName, string $id, BackendDatabaseRow $payload): CommonMessage
    {
        $url = $this->parser->url('/backend/database/:connection_id/:table_name/rows/:id', [
            'connection_id' => $connectionId,
            'table_name' => $tableName,
            'id' => $id,
        ]);

        $options = [
            'query' => $this->parser->query([
            ], [
            ]),
            'json' => $payload
        ];

        try {
            $response = $this->httpClient->request('PUT', $url, $options);
            $data = (string) $response->getBody();

            return $this->parser->parse($data, CommonMessage::class);
        } catch (ClientException $e) {
            throw $e;
        } catch (BadResponseException $e) {
            $data = (string) $e->getResponse()->getBody();

            switch ($e->getResponse()->getStatusCode()) {
                case 400:
                    throw new CommonMessageException($this->parser->parse($data, CommonMessage::class));
                case 401:
                    throw new CommonMessageException($this->parser->parse($data, CommonMessage::class));
                case 404:
                    throw new CommonMessageException($this->parser->parse($data, CommonMessage::class));
                case 500:
                    throw new CommonMessageException($this->parser->parse($data, CommonMessage::class));
                default:
                    throw new UnknownStatusCodeException('The server returned an unknown status code');
            }
        } catch (\Throwable $e) {
            throw new ClientException('An unknown error occurred: ' . $e->getMessage());
        }
    }

    /**
     * @param string $connectionId
     * @param string $tableName
     * @param BackendDatabaseRow $payload
     * @return CommonMessage
     * @throws CommonMessageException
     * @throws ClientException
     */
    public function createRow(string $connectionId, string $tableName, BackendDatabaseRow $payload): CommonMessage
    {
        $url = $this->parser->url('/backend/database/:connection_id/:table_name/rows', [
            'connection_id' => $connectionId,
            'table_name' => $tableName,
        ]);

        $options = [
            'query' => $this->parser->query([
            ], [
            ]),
            'json' => $payload
        ];

        try {
            $response = $this->httpClient->request('POST', $url, $options);
            $data = (string) $response->getBody();

            return $this->parser->parse($data, CommonMessage::class);
        } catch (ClientException $e) {
            throw $e;
        } catch (BadResponseException $e) {
            $data = (string) $e->getResponse()->getBody();

            switch ($e->getResponse()->getStatusCode()) {
                case 400:
                    throw new CommonMessageException($this->parser->parse($data, CommonMessage::class));
                case 401:
                    throw new CommonMessageException($this->parser->parse($data, CommonMessage::class));
                case 404:
                    throw new CommonMessageException($this->parser->parse($data, CommonMessage::class));
                case 500:
                    throw new CommonMessageException($this->parser->parse($data, CommonMessage::class));
                default:
                    throw new UnknownStatusCodeException('The server returned an unknown status code');
            }
        } catch (\Throwable $e) {
            throw new ClientException('An unknown error occurred: ' . $e->getMessage());
        }
    }

    /**
     * @param string $connectionId
     * @param string $tableName
     * @param string $id
     * @return BackendDatabaseRow
     * @throws CommonMessageException
     * @throws ClientException
     */
    public function getRow(string $connectionId, string $tableName, string $id): BackendDatabaseRow
    {
        $url = $this->parser->url('/backend/database/:connection_id/:table_name/rows/:id', [
            'connection_id' => $connectionId,
            'table_name' => $tableName,
            'id' => $id,
        ]);

        $options = [
            'query' => $this->parser->query([
            ], [
            ]),
        ];

        try {
            $response = $this->httpClient->request('GET', $url, $options);
            $data = (string) $response->getBody();

            return $this->parser->parse($data, BackendDatabaseRow::class);
        } catch (ClientException $e) {
            throw $e;
        } catch (BadResponseException $e) {
            $data = (string) $e->getResponse()->getBody();

            switch ($e->getResponse()->getStatusCode()) {
                case 401:
                    throw new CommonMessageException($this->parser->parse($data, CommonMessage::class));
                case 404:
                    throw new CommonMessageException($this->parser->parse($data, CommonMessage::class));
                case 500:
                    throw new CommonMessageException($this->parser->parse($data, CommonMessage::class));
                default:
                    throw new UnknownStatusCodeException('The server returned an unknown status code');
            }
        } catch (\Throwable $e) {
            throw new ClientException('An unknown error occurred: ' . $e->getMessage());
        }
    }

    /**
     * @param string $connectionId
     * @param string $tableName
     * @param int|null $startIndex
     * @param int|null $count
     * @param string|null $filterBy
     * @param string|null $filterOp
     * @param string|null $filterValue
     * @param string|null $sortBy
     * @param string|null $sortOrder
     * @param string|null $columns
     * @return BackendDatabaseRows
     * @throws CommonMessageException
     * @throws ClientException
     */
    public function getRows(string $connectionId, string $tableName, ?int $startIndex = null, ?int $count = null, ?string $filterBy = null, ?string $filterOp = null, ?string $filterValue = null, ?string $sortBy = null, ?string $sortOrder = null, ?string $columns = null): BackendDatabaseRows
    {
        $url = $this->parser->url('/backend/database/:connection_id/:table_name/rows', [
            'connection_id' => $connectionId,
            'table_name' => $tableName,
        ]);

        $options = [
            'query' => $this->parser->query([
                'startIndex' => $startIndex,
                'count' => $count,
                'filterBy' => $filterBy,
                'filterOp' => $filterOp,
                'filterValue' => $filterValue,
                'sortBy' => $sortBy,
                'sortOrder' => $sortOrder,
                'columns' => $columns,
            ], [
            ]),
        ];

        try {
            $response = $this->httpClient->request('GET', $url, $options);
            $data = (string) $response->getBody();

            return $this->parser->parse($data, BackendDatabaseRows::class);
        } catch (ClientException $e) {
            throw $e;
        } catch (BadResponseException $e) {
            $data = (string) $e->getResponse()->getBody();

            switch ($e->getResponse()->getStatusCode()) {
                case 401:
                    throw new CommonMessageException($this->parser->parse($data, CommonMessage::class));
                case 404:
                    throw new CommonMessageException($this->parser->parse($data, CommonMessage::class));
                case 500:
                    throw new CommonMessageException($this->parser->parse($data, CommonMessage::class));
                default:
                    throw new UnknownStatusCodeException('The server returned an unknown status code');
            }
        } catch (\Throwable $e) {
            throw new ClientException('An unknown error occurred: ' . $e->getMessage());
        }
    }

    /**
     * @param string $connectionId
     * @param string $tableName
     * @return CommonMessage
     * @throws CommonMessageException
     * @throws ClientException
     */
    public function deleteTable(string $connectionId, string $tableName): CommonMessage
    {
        $url = $this->parser->url('/backend/database/:connection_id/:table_name', [
            'connection_id' => $connectionId,
            'table_name' => $tableName,
        ]);

        $options = [
            'query' => $this->parser->query([
            ], [
            ]),
        ];

        try {
            $response = $this->httpClient->request('DELETE', $url, $options);
            $data = (string) $response->getBody();

            return $this->parser->parse($data, CommonMessage::class);
        } catch (ClientException $e) {
            throw $e;
        } catch (BadResponseException $e) {
            $data = (string) $e->getResponse()->getBody();

            switch ($e->getResponse()->getStatusCode()) {
                case 400:
                    throw new CommonMessageException($this->parser->parse($data, CommonMessage::class));
                case 401:
                    throw new CommonMessageException($this->parser->parse($data, CommonMessage::class));
                case 404:
                    throw new CommonMessageException($this->parser->parse($data, CommonMessage::class));
                case 500:
                    throw new CommonMessageException($this->parser->parse($data, CommonMessage::class));
                default:
                    throw new UnknownStatusCodeException('The server returned an unknown status code');
            }
        } catch (\Throwable $e) {
            throw new ClientException('An unknown error occurred: ' . $e->getMessage());
        }
    }

    /**
     * @param string $connectionId
     * @param string $tableName
     * @param BackendDatabaseTable $payload
     * @return CommonMessage
     * @throws CommonMessageException
     * @throws ClientException
     */
    public function updateTable(string $connectionId, string $tableName, BackendDatabaseTable $payload): CommonMessage
    {
        $url = $this->parser->url('/backend/database/:connection_id/:table_name', [
            'connection_id' => $connectionId,
            'table_name' => $tableName,
        ]);

        $options = [
            'query' => $this->parser->query([
            ], [
            ]),
            'json' => $payload
        ];

        try {
            $response = $this->httpClient->request('PUT', $url, $options);
            $data = (string) $response->getBody();

            return $this->parser->parse($data, CommonMessage::class);
        } catch (ClientException $e) {
            throw $e;
        } catch (BadResponseException $e) {
            $data = (string) $e->getResponse()->getBody();

            switch ($e->getResponse()->getStatusCode()) {
                case 400:
                    throw new CommonMessageException($this->parser->parse($data, CommonMessage::class));
                case 401:
                    throw new CommonMessageException($this->parser->parse($data, CommonMessage::class));
                case 404:
                    throw new CommonMessageException($this->parser->parse($data, CommonMessage::class));
                case 500:
                    throw new CommonMessageException($this->parser->parse($data, CommonMessage::class));
                default:
                    throw new UnknownStatusCodeException('The server returned an unknown status code');
            }
        } catch (\Throwable $e) {
            throw new ClientException('An unknown error occurred: ' . $e->getMessage());
        }
    }

    /**
     * @param string $connectionId
     * @param BackendDatabaseTable $payload
     * @return CommonMessage
     * @throws CommonMessageException
     * @throws ClientException
     */
    public function createTable(string $connectionId, BackendDatabaseTable $payload): CommonMessage
    {
        $url = $this->parser->url('/backend/database/:connection_id', [
            'connection_id' => $connectionId,
        ]);

        $options = [
            'query' => $this->parser->query([
            ], [
            ]),
            'json' => $payload
        ];

        try {
            $response = $this->httpClient->request('POST', $url, $options);
            $data = (string) $response->getBody();

            return $this->parser->parse($data, CommonMessage::class);
        } catch (ClientException $e) {
            throw $e;
        } catch (BadResponseException $e) {
            $data = (string) $e->getResponse()->getBody();

            switch ($e->getResponse()->getStatusCode()) {
                case 400:
                    throw new CommonMessageException($this->parser->parse($data, CommonMessage::class));
                case 401:
                    throw new CommonMessageException($this->parser->parse($data, CommonMessage::class));
                case 404:
                    throw new CommonMessageException($this->parser->parse($data, CommonMessage::class));
                case 500:
                    throw new CommonMessageException($this->parser->parse($data, CommonMessage::class));
                default:
                    throw new UnknownStatusCodeException('The server returned an unknown status code');
            }
        } catch (\Throwable $e) {
            throw new ClientException('An unknown error occurred: ' . $e->getMessage());
        }
    }

    /**
     * @param string $connectionId
     * @param string $tableName
     * @return BackendDatabaseTable
     * @throws CommonMessageException
     * @throws ClientException
     */
    public function getTable(string $connectionId, string $tableName): BackendDatabaseTable
    {
        $url = $this->parser->url('/backend/database/:connection_id/:table_name', [
            'connection_id' => $connectionId,
            'table_name' => $tableName,
        ]);

        $options = [
            'query' => $this->parser->query([
            ], [
            ]),
        ];

        try {
            $response = $this->httpClient->request('GET', $url, $options);
            $data = (string) $response->getBody();

            return $this->parser->parse($data, BackendDatabaseTable::class);
        } catch (ClientException $e) {
            throw $e;
        } catch (BadResponseException $e) {
            $data = (string) $e->getResponse()->getBody();

            switch ($e->getResponse()->getStatusCode()) {
                case 401:
                    throw new CommonMessageException($this->parser->parse($data, CommonMessage::class));
                case 404:
                    throw new CommonMessageException($this->parser->parse($data, CommonMessage::class));
                case 500:
                    throw new CommonMessageException($this->parser->parse($data, CommonMessage::class));
                default:
                    throw new UnknownStatusCodeException('The server returned an unknown status code');
            }
        } catch (\Throwable $e) {
            throw new ClientException('An unknown error occurred: ' . $e->getMessage());
        }
    }

    /**
     * @param string $connectionId
     * @return BackendDatabaseTables
     * @throws CommonMessageException
     * @throws ClientException
     */
    public function getTables(string $connectionId): BackendDatabaseTables
    {
        $url = $this->parser->url('/backend/database/:connection_id', [
            'connection_id' => $connectionId,
        ]);

        $options = [
            'query' => $this->parser->query([
            ], [
            ]),
        ];

        try {
            $response = $this->httpClient->request('GET', $url, $options);
            $data = (string) $response->getBody();

            return $this->parser->parse($data, BackendDatabaseTables::class);
        } catch (ClientException $e) {
            throw $e;
        } catch (BadResponseException $e) {
            $data = (string) $e->getResponse()->getBody();

            switch ($e->getResponse()->getStatusCode()) {
                case 401:
                    throw new CommonMessageException($this->parser->parse($data, CommonMessage::class));
                case 404:
                    throw new CommonMessageException($this->parser->parse($data, CommonMessage::class));
                case 500:
                    throw new CommonMessageException($this->parser->parse($data, CommonMessage::class));
                default:
                    throw new UnknownStatusCodeException('The server returned an unknown status code');
            }
        } catch (\Throwable $e) {
            throw new ClientException('An unknown error occurred: ' . $e->getMessage());
        }
    }

    /**
     * @return BackendDatabaseConnections
     * @throws CommonMessageException
     * @throws ClientException
     */
    public function getConnections(): BackendDatabaseConnections
    {
        $url = $this->parser->url('/backend/database', [
        ]);

        $options = [
            'query' => $this->parser->query([
            ], [
            ]),
        ];

        try {
            $response = $this->httpClient->request('GET', $url, $options);
            $data = (string) $response->getBody();

            return $this->parser->parse($data, BackendDatabaseConnections::class);
        } catch (ClientException $e) {
            throw $e;
        } catch (BadResponseException $e) {
            $data = (string) $e->getResponse()->getBody();

            switch ($e->getResponse()->getStatusCode()) {
                case 401:
                    throw new CommonMessageException($this->parser->parse($data, CommonMessage::class));
                case 500:
                    throw new CommonMessageException($this->parser->parse($data, CommonMessage::class));
                default:
                    throw new UnknownStatusCodeException('The server returned an unknown status code');
            }
        } catch (\Throwable $e) {
            throw new ClientException('An unknown error occurred: ' . $e->getMessage());
        }
    }


}
