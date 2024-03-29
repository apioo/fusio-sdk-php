<?php
/**
 * BackendEventTag automatically generated by SDKgen please do not edit this file manually
 * @see https://sdkgen.app
 */

namespace Fusio\Sdk;

use GuzzleHttp\Exception\BadResponseException;
use Sdkgen\Client\Exception\ClientException;
use Sdkgen\Client\Exception\UnknownStatusCodeException;
use Sdkgen\Client\TagAbstract;

class BackendEventTag extends TagAbstract
{
    /**
     * @param string $eventId
     * @return CommonMessage
     * @throws CommonMessageException
     * @throws ClientException
     */
    public function delete(string $eventId): CommonMessage
    {
        $url = $this->parser->url('/backend/event/$event_id<[0-9]+|^~>', [
            'event_id' => $eventId,
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
     * @param string $eventId
     * @param BackendEventUpdate $payload
     * @return CommonMessage
     * @throws CommonMessageException
     * @throws ClientException
     */
    public function update(string $eventId, BackendEventUpdate $payload): CommonMessage
    {
        $url = $this->parser->url('/backend/event/$event_id<[0-9]+|^~>', [
            'event_id' => $eventId,
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
     * @param string $eventId
     * @return BackendEvent
     * @throws CommonMessageException
     * @throws ClientException
     */
    public function get(string $eventId): BackendEvent
    {
        $url = $this->parser->url('/backend/event/$event_id<[0-9]+|^~>', [
            'event_id' => $eventId,
        ]);

        $options = [
            'query' => $this->parser->query([
            ], [
            ]),
        ];

        try {
            $response = $this->httpClient->request('GET', $url, $options);
            $data = (string) $response->getBody();

            return $this->parser->parse($data, BackendEvent::class);
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
     * @param BackendEventCreate $payload
     * @return CommonMessage
     * @throws CommonMessageException
     * @throws ClientException
     */
    public function create(BackendEventCreate $payload): CommonMessage
    {
        $url = $this->parser->url('/backend/event', [
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
     * @return BackendEventCollection
     * @throws CommonMessageException
     * @throws ClientException
     */
    public function getAll(?int $startIndex = null, ?int $count = null, ?string $search = null): BackendEventCollection
    {
        $url = $this->parser->url('/backend/event', [
        ]);

        $options = [
            'query' => $this->parser->query([
                'startIndex' => $startIndex,
                'count' => $count,
                'search' => $search,
            ], [
            ]),
        ];

        try {
            $response = $this->httpClient->request('GET', $url, $options);
            $data = (string) $response->getBody();

            return $this->parser->parse($data, BackendEventCollection::class);
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
