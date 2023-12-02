<?php
/**
 * BackendStatisticTag automatically generated by SDKgen please do not edit this file manually
 * @see https://sdkgen.app
 */

namespace Fusio\Sdk;

use GuzzleHttp\Exception\BadResponseException;
use Sdkgen\Client\Exception\ClientException;
use Sdkgen\Client\Exception\UnknownStatusCodeException;
use Sdkgen\Client\TagAbstract;

class BackendStatisticTag extends TagAbstract
{
    /**
     * @param int|null $startIndex
     * @param int|null $count
     * @param string|null $search
     * @param string|null $from
     * @param string|null $to
     * @param int|null $operationId
     * @param int|null $appId
     * @param int|null $userId
     * @param string|null $ip
     * @param string|null $userAgent
     * @param string|null $method
     * @param string|null $path
     * @param string|null $header
     * @param string|null $body
     * @return BackendStatisticChart
     * @throws CommonMessageException
     * @throws ClientException
     */
    public function getUsedPoints(?int $startIndex = null, ?int $count = null, ?string $search = null, ?string $from = null, ?string $to = null, ?int $operationId = null, ?int $appId = null, ?int $userId = null, ?string $ip = null, ?string $userAgent = null, ?string $method = null, ?string $path = null, ?string $header = null, ?string $body = null): BackendStatisticChart
    {
        $url = $this->parser->url('/backend/statistic/used_points', [
        ]);

        $options = [
            'query' => $this->parser->query([
                'startIndex' => $startIndex,
                'count' => $count,
                'search' => $search,
                'from' => $from,
                'to' => $to,
                'operationId' => $operationId,
                'appId' => $appId,
                'userId' => $userId,
                'ip' => $ip,
                'userAgent' => $userAgent,
                'method' => $method,
                'path' => $path,
                'header' => $header,
                'body' => $body,
            ]),
        ];

        try {
            $response = $this->httpClient->request('GET', $url, $options);
            $data = (string) $response->getBody();

            return $this->parser->parse($data, BackendStatisticChart::class);
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

    /**
     * @param int|null $startIndex
     * @param int|null $count
     * @param string|null $search
     * @param string|null $from
     * @param string|null $to
     * @param int|null $operationId
     * @param int|null $appId
     * @param int|null $userId
     * @param string|null $ip
     * @param string|null $userAgent
     * @param string|null $method
     * @param string|null $path
     * @param string|null $header
     * @param string|null $body
     * @return BackendStatisticChart
     * @throws CommonMessageException
     * @throws ClientException
     */
    public function getTimePerOperation(?int $startIndex = null, ?int $count = null, ?string $search = null, ?string $from = null, ?string $to = null, ?int $operationId = null, ?int $appId = null, ?int $userId = null, ?string $ip = null, ?string $userAgent = null, ?string $method = null, ?string $path = null, ?string $header = null, ?string $body = null): BackendStatisticChart
    {
        $url = $this->parser->url('/backend/statistic/time_per_operation', [
        ]);

        $options = [
            'query' => $this->parser->query([
                'startIndex' => $startIndex,
                'count' => $count,
                'search' => $search,
                'from' => $from,
                'to' => $to,
                'operationId' => $operationId,
                'appId' => $appId,
                'userId' => $userId,
                'ip' => $ip,
                'userAgent' => $userAgent,
                'method' => $method,
                'path' => $path,
                'header' => $header,
                'body' => $body,
            ]),
        ];

        try {
            $response = $this->httpClient->request('GET', $url, $options);
            $data = (string) $response->getBody();

            return $this->parser->parse($data, BackendStatisticChart::class);
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

    /**
     * @param int|null $startIndex
     * @param int|null $count
     * @param string|null $search
     * @param string|null $from
     * @param string|null $to
     * @param int|null $operationId
     * @param int|null $appId
     * @param int|null $userId
     * @param string|null $ip
     * @param string|null $userAgent
     * @param string|null $method
     * @param string|null $path
     * @param string|null $header
     * @param string|null $body
     * @return BackendStatisticChart
     * @throws CommonMessageException
     * @throws ClientException
     */
    public function getTimeAverage(?int $startIndex = null, ?int $count = null, ?string $search = null, ?string $from = null, ?string $to = null, ?int $operationId = null, ?int $appId = null, ?int $userId = null, ?string $ip = null, ?string $userAgent = null, ?string $method = null, ?string $path = null, ?string $header = null, ?string $body = null): BackendStatisticChart
    {
        $url = $this->parser->url('/backend/statistic/time_average', [
        ]);

        $options = [
            'query' => $this->parser->query([
                'startIndex' => $startIndex,
                'count' => $count,
                'search' => $search,
                'from' => $from,
                'to' => $to,
                'operationId' => $operationId,
                'appId' => $appId,
                'userId' => $userId,
                'ip' => $ip,
                'userAgent' => $userAgent,
                'method' => $method,
                'path' => $path,
                'header' => $header,
                'body' => $body,
            ]),
        ];

        try {
            $response = $this->httpClient->request('GET', $url, $options);
            $data = (string) $response->getBody();

            return $this->parser->parse($data, BackendStatisticChart::class);
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

    /**
     * @param int|null $startIndex
     * @param int|null $count
     * @param string|null $search
     * @param string|null $from
     * @param string|null $to
     * @param int|null $operationId
     * @param int|null $appId
     * @param int|null $userId
     * @param string|null $ip
     * @param string|null $userAgent
     * @param string|null $method
     * @param string|null $path
     * @param string|null $header
     * @param string|null $body
     * @return BackendStatisticChart
     * @throws CommonMessageException
     * @throws ClientException
     */
    public function getMostUsedOperations(?int $startIndex = null, ?int $count = null, ?string $search = null, ?string $from = null, ?string $to = null, ?int $operationId = null, ?int $appId = null, ?int $userId = null, ?string $ip = null, ?string $userAgent = null, ?string $method = null, ?string $path = null, ?string $header = null, ?string $body = null): BackendStatisticChart
    {
        $url = $this->parser->url('/backend/statistic/most_used_operations', [
        ]);

        $options = [
            'query' => $this->parser->query([
                'startIndex' => $startIndex,
                'count' => $count,
                'search' => $search,
                'from' => $from,
                'to' => $to,
                'operationId' => $operationId,
                'appId' => $appId,
                'userId' => $userId,
                'ip' => $ip,
                'userAgent' => $userAgent,
                'method' => $method,
                'path' => $path,
                'header' => $header,
                'body' => $body,
            ]),
        ];

        try {
            $response = $this->httpClient->request('GET', $url, $options);
            $data = (string) $response->getBody();

            return $this->parser->parse($data, BackendStatisticChart::class);
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

    /**
     * @param int|null $startIndex
     * @param int|null $count
     * @param string|null $search
     * @param string|null $from
     * @param string|null $to
     * @param int|null $operationId
     * @param int|null $appId
     * @param int|null $userId
     * @param string|null $ip
     * @param string|null $userAgent
     * @param string|null $method
     * @param string|null $path
     * @param string|null $header
     * @param string|null $body
     * @return BackendStatisticChart
     * @throws CommonMessageException
     * @throws ClientException
     */
    public function getMostUsedApps(?int $startIndex = null, ?int $count = null, ?string $search = null, ?string $from = null, ?string $to = null, ?int $operationId = null, ?int $appId = null, ?int $userId = null, ?string $ip = null, ?string $userAgent = null, ?string $method = null, ?string $path = null, ?string $header = null, ?string $body = null): BackendStatisticChart
    {
        $url = $this->parser->url('/backend/statistic/most_used_apps', [
        ]);

        $options = [
            'query' => $this->parser->query([
                'startIndex' => $startIndex,
                'count' => $count,
                'search' => $search,
                'from' => $from,
                'to' => $to,
                'operationId' => $operationId,
                'appId' => $appId,
                'userId' => $userId,
                'ip' => $ip,
                'userAgent' => $userAgent,
                'method' => $method,
                'path' => $path,
                'header' => $header,
                'body' => $body,
            ]),
        ];

        try {
            $response = $this->httpClient->request('GET', $url, $options);
            $data = (string) $response->getBody();

            return $this->parser->parse($data, BackendStatisticChart::class);
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

    /**
     * @param int|null $startIndex
     * @param int|null $count
     * @param string|null $search
     * @param string|null $from
     * @param string|null $to
     * @param int|null $operationId
     * @param int|null $appId
     * @param int|null $userId
     * @param string|null $ip
     * @param string|null $userAgent
     * @param string|null $method
     * @param string|null $path
     * @param string|null $header
     * @param string|null $body
     * @return BackendStatisticChart
     * @throws CommonMessageException
     * @throws ClientException
     */
    public function getIssuedTokens(?int $startIndex = null, ?int $count = null, ?string $search = null, ?string $from = null, ?string $to = null, ?int $operationId = null, ?int $appId = null, ?int $userId = null, ?string $ip = null, ?string $userAgent = null, ?string $method = null, ?string $path = null, ?string $header = null, ?string $body = null): BackendStatisticChart
    {
        $url = $this->parser->url('/backend/statistic/issued_tokens', [
        ]);

        $options = [
            'query' => $this->parser->query([
                'startIndex' => $startIndex,
                'count' => $count,
                'search' => $search,
                'from' => $from,
                'to' => $to,
                'operationId' => $operationId,
                'appId' => $appId,
                'userId' => $userId,
                'ip' => $ip,
                'userAgent' => $userAgent,
                'method' => $method,
                'path' => $path,
                'header' => $header,
                'body' => $body,
            ]),
        ];

        try {
            $response = $this->httpClient->request('GET', $url, $options);
            $data = (string) $response->getBody();

            return $this->parser->parse($data, BackendStatisticChart::class);
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

    /**
     * @param int|null $startIndex
     * @param int|null $count
     * @param string|null $search
     * @param string|null $from
     * @param string|null $to
     * @param int|null $operationId
     * @param int|null $appId
     * @param int|null $userId
     * @param string|null $ip
     * @param string|null $userAgent
     * @param string|null $method
     * @param string|null $path
     * @param string|null $header
     * @param string|null $body
     * @return BackendStatisticChart
     * @throws CommonMessageException
     * @throws ClientException
     */
    public function getIncomingTransactions(?int $startIndex = null, ?int $count = null, ?string $search = null, ?string $from = null, ?string $to = null, ?int $operationId = null, ?int $appId = null, ?int $userId = null, ?string $ip = null, ?string $userAgent = null, ?string $method = null, ?string $path = null, ?string $header = null, ?string $body = null): BackendStatisticChart
    {
        $url = $this->parser->url('/backend/statistic/incoming_transactions', [
        ]);

        $options = [
            'query' => $this->parser->query([
                'startIndex' => $startIndex,
                'count' => $count,
                'search' => $search,
                'from' => $from,
                'to' => $to,
                'operationId' => $operationId,
                'appId' => $appId,
                'userId' => $userId,
                'ip' => $ip,
                'userAgent' => $userAgent,
                'method' => $method,
                'path' => $path,
                'header' => $header,
                'body' => $body,
            ]),
        ];

        try {
            $response = $this->httpClient->request('GET', $url, $options);
            $data = (string) $response->getBody();

            return $this->parser->parse($data, BackendStatisticChart::class);
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

    /**
     * @param int|null $startIndex
     * @param int|null $count
     * @param string|null $search
     * @param string|null $from
     * @param string|null $to
     * @param int|null $operationId
     * @param int|null $appId
     * @param int|null $userId
     * @param string|null $ip
     * @param string|null $userAgent
     * @param string|null $method
     * @param string|null $path
     * @param string|null $header
     * @param string|null $body
     * @return BackendStatisticChart
     * @throws CommonMessageException
     * @throws ClientException
     */
    public function getIncomingRequests(?int $startIndex = null, ?int $count = null, ?string $search = null, ?string $from = null, ?string $to = null, ?int $operationId = null, ?int $appId = null, ?int $userId = null, ?string $ip = null, ?string $userAgent = null, ?string $method = null, ?string $path = null, ?string $header = null, ?string $body = null): BackendStatisticChart
    {
        $url = $this->parser->url('/backend/statistic/incoming_requests', [
        ]);

        $options = [
            'query' => $this->parser->query([
                'startIndex' => $startIndex,
                'count' => $count,
                'search' => $search,
                'from' => $from,
                'to' => $to,
                'operationId' => $operationId,
                'appId' => $appId,
                'userId' => $userId,
                'ip' => $ip,
                'userAgent' => $userAgent,
                'method' => $method,
                'path' => $path,
                'header' => $header,
                'body' => $body,
            ]),
        ];

        try {
            $response = $this->httpClient->request('GET', $url, $options);
            $data = (string) $response->getBody();

            return $this->parser->parse($data, BackendStatisticChart::class);
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

    /**
     * @param int|null $startIndex
     * @param int|null $count
     * @param string|null $search
     * @param string|null $from
     * @param string|null $to
     * @param int|null $operationId
     * @param int|null $appId
     * @param int|null $userId
     * @param string|null $ip
     * @param string|null $userAgent
     * @param string|null $method
     * @param string|null $path
     * @param string|null $header
     * @param string|null $body
     * @return BackendStatisticChart
     * @throws CommonMessageException
     * @throws ClientException
     */
    public function getErrorsPerOperation(?int $startIndex = null, ?int $count = null, ?string $search = null, ?string $from = null, ?string $to = null, ?int $operationId = null, ?int $appId = null, ?int $userId = null, ?string $ip = null, ?string $userAgent = null, ?string $method = null, ?string $path = null, ?string $header = null, ?string $body = null): BackendStatisticChart
    {
        $url = $this->parser->url('/backend/statistic/errors_per_operation', [
        ]);

        $options = [
            'query' => $this->parser->query([
                'startIndex' => $startIndex,
                'count' => $count,
                'search' => $search,
                'from' => $from,
                'to' => $to,
                'operationId' => $operationId,
                'appId' => $appId,
                'userId' => $userId,
                'ip' => $ip,
                'userAgent' => $userAgent,
                'method' => $method,
                'path' => $path,
                'header' => $header,
                'body' => $body,
            ]),
        ];

        try {
            $response = $this->httpClient->request('GET', $url, $options);
            $data = (string) $response->getBody();

            return $this->parser->parse($data, BackendStatisticChart::class);
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

    /**
     * @param int|null $startIndex
     * @param int|null $count
     * @param string|null $search
     * @param string|null $from
     * @param string|null $to
     * @param int|null $operationId
     * @param int|null $appId
     * @param int|null $userId
     * @param string|null $ip
     * @param string|null $userAgent
     * @param string|null $method
     * @param string|null $path
     * @param string|null $header
     * @param string|null $body
     * @return BackendStatisticCount
     * @throws CommonMessageException
     * @throws ClientException
     */
    public function getCountRequests(?int $startIndex = null, ?int $count = null, ?string $search = null, ?string $from = null, ?string $to = null, ?int $operationId = null, ?int $appId = null, ?int $userId = null, ?string $ip = null, ?string $userAgent = null, ?string $method = null, ?string $path = null, ?string $header = null, ?string $body = null): BackendStatisticCount
    {
        $url = $this->parser->url('/backend/statistic/count_requests', [
        ]);

        $options = [
            'query' => $this->parser->query([
                'startIndex' => $startIndex,
                'count' => $count,
                'search' => $search,
                'from' => $from,
                'to' => $to,
                'operationId' => $operationId,
                'appId' => $appId,
                'userId' => $userId,
                'ip' => $ip,
                'userAgent' => $userAgent,
                'method' => $method,
                'path' => $path,
                'header' => $header,
                'body' => $body,
            ]),
        ];

        try {
            $response = $this->httpClient->request('GET', $url, $options);
            $data = (string) $response->getBody();

            return $this->parser->parse($data, BackendStatisticCount::class);
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
