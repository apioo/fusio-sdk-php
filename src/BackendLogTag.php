<?php
/**
 * BackendLogTag automatically generated by SDKgen please do not edit this file manually
 * @see https://sdkgen.app
 */

namespace Fusio\Sdk;

use GuzzleHttp\Exception\BadResponseException;
use Sdkgen\Client\Exception\ClientException;
use Sdkgen\Client\Exception\UnknownStatusCodeException;
use Sdkgen\Client\TagAbstract;

class BackendLogTag extends TagAbstract
{
    /**
     * @param string $logId
     * @return BackendLog
     * @throws CommonMessageException
     * @throws ClientException
     */
    public function get(string $logId): BackendLog
    {
        $url = $this->parser->url('/backend/log/$log_id<[0-9]+>', [
            'log_id' => $logId,
        ]);

        $options = [
            'query' => $this->parser->query([
            ]),
        ];

        try {
            $response = $this->httpClient->request('GET', $url, $options);
            $data = (string) $response->getBody();

            return $this->parser->parse($data, BackendLog::class);
        } catch (ClientException $e) {
            throw $e;
        } catch (BadResponseException $e) {
            $data = (string) $e->getResponse()->getBody();

            switch ($e->getResponse()->getStatusCode()) {
                case 401:
                    throw new CommonMessageException($this->parser->parse($data, CommonMessage::class));
                case 404:
                    throw new CommonMessageException($this->parser->parse($data, CommonMessage::class));
                case 410:
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
     * @param int|null $routeId
     * @param int|null $appId
     * @param int|null $userId
     * @param string|null $ip
     * @param string|null $userAgent
     * @param string|null $method
     * @param string|null $path
     * @param string|null $header
     * @param string|null $body
     * @return BackendLogCollection
     * @throws CommonMessageException
     * @throws ClientException
     */
    public function getAll(?int $startIndex = null, ?int $count = null, ?string $search = null, ?string $from = null, ?string $to = null, ?int $routeId = null, ?int $appId = null, ?int $userId = null, ?string $ip = null, ?string $userAgent = null, ?string $method = null, ?string $path = null, ?string $header = null, ?string $body = null): BackendLogCollection
    {
        $url = $this->parser->url('/backend/log', [
        ]);

        $options = [
            'query' => $this->parser->query([
                'startIndex' => $startIndex,
                'count' => $count,
                'search' => $search,
                'from' => $from,
                'to' => $to,
                'routeId' => $routeId,
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

            return $this->parser->parse($data, BackendLogCollection::class);
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
     * @param string $errorId
     * @return BackendLogError
     * @throws CommonMessageException
     * @throws ClientException
     */
    public function getError(string $errorId): BackendLogError
    {
        $url = $this->parser->url('/backend/log/error/$error_id<[0-9]+>', [
            'error_id' => $errorId,
        ]);

        $options = [
            'query' => $this->parser->query([
            ]),
        ];

        try {
            $response = $this->httpClient->request('GET', $url, $options);
            $data = (string) $response->getBody();

            return $this->parser->parse($data, BackendLogError::class);
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
     * @return BackendLogErrorCollection
     * @throws CommonMessageException
     * @throws ClientException
     */
    public function getAllErrors(?int $startIndex = null, ?int $count = null, ?string $search = null): BackendLogErrorCollection
    {
        $url = $this->parser->url('/backend/log/error', [
        ]);

        $options = [
            'query' => $this->parser->query([
                'startIndex' => $startIndex,
                'count' => $count,
                'search' => $search,
            ]),
        ];

        try {
            $response = $this->httpClient->request('GET', $url, $options);
            $data = (string) $response->getBody();

            return $this->parser->parse($data, BackendLogErrorCollection::class);
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
