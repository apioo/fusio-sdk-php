<?php
/**
 * AppTag automatically generated by SDKgen please do not edit this file manually
 * @see https://sdkgen.app
 */

namespace Fusio\Sdk\Consumer;

use GuzzleHttp\Exception\BadResponseException;
use Sdkgen\Client\Exception\ClientException;
use Sdkgen\Client\Exception\UnknownStatusCodeException;
use Sdkgen\Client\TagAbstract;

class AppTag extends TagAbstract
{
    /**
     * @param string $appId
     * @return Message
     * @throws MessageException
     * @throws ClientException
     */
    public function delete(string $appId): Message
    {
        $url = $this->parser->url('/consumer/app/$app_id<[0-9]+>', [
            'app_id' => $appId,
        ]);

        $options = [
            'query' => $this->parser->query([
            ]),
        ];

        try {
            $response = $this->httpClient->request('DELETE', $url, $options);
            $data = (string) $response->getBody();

            return $this->parser->parse($data, Message::class);
        } catch (BadResponseException $e) {
            $data = (string) $e->getResponse()->getBody();

            switch ($e->getResponse()->getStatusCode()) {
                case 401:
                    throw new MessageException($this->parser->parse($data, Message::class));
                case 404:
                    throw new MessageException($this->parser->parse($data, Message::class));
                case 410:
                    throw new MessageException($this->parser->parse($data, Message::class));
                case 500:
                    throw new MessageException($this->parser->parse($data, Message::class));
                default:
                    throw new UnknownStatusCodeException('The server returned an unknown status code');
            }
        } catch (\Throwable $e) {
            throw new ClientException('An unknown error occurred: ' . $e->getMessage());
        }
    }

    /**
     * @param string $appId
     * @param AppUpdate $payload
     * @return Message
     * @throws MessageException
     * @throws ClientException
     */
    public function update(string $appId, AppUpdate $payload): Message
    {
        $url = $this->parser->url('/consumer/app/$app_id<[0-9]+>', [
            'app_id' => $appId,
        ]);

        $options = [
            'query' => $this->parser->query([
            ]),
            'json' => $payload
        ];

        try {
            $response = $this->httpClient->request('PUT', $url, $options);
            $data = (string) $response->getBody();

            return $this->parser->parse($data, Message::class);
        } catch (BadResponseException $e) {
            $data = (string) $e->getResponse()->getBody();

            switch ($e->getResponse()->getStatusCode()) {
                case 400:
                    throw new MessageException($this->parser->parse($data, Message::class));
                case 401:
                    throw new MessageException($this->parser->parse($data, Message::class));
                case 404:
                    throw new MessageException($this->parser->parse($data, Message::class));
                case 410:
                    throw new MessageException($this->parser->parse($data, Message::class));
                case 500:
                    throw new MessageException($this->parser->parse($data, Message::class));
                default:
                    throw new UnknownStatusCodeException('The server returned an unknown status code');
            }
        } catch (\Throwable $e) {
            throw new ClientException('An unknown error occurred: ' . $e->getMessage());
        }
    }

    /**
     * @param string $appId
     * @return App
     * @throws MessageException
     * @throws ClientException
     */
    public function get(string $appId): App
    {
        $url = $this->parser->url('/consumer/app/$app_id<[0-9]+>', [
            'app_id' => $appId,
        ]);

        $options = [
            'query' => $this->parser->query([
            ]),
        ];

        try {
            $response = $this->httpClient->request('GET', $url, $options);
            $data = (string) $response->getBody();

            return $this->parser->parse($data, App::class);
        } catch (BadResponseException $e) {
            $data = (string) $e->getResponse()->getBody();

            switch ($e->getResponse()->getStatusCode()) {
                case 401:
                    throw new MessageException($this->parser->parse($data, Message::class));
                case 404:
                    throw new MessageException($this->parser->parse($data, Message::class));
                case 410:
                    throw new MessageException($this->parser->parse($data, Message::class));
                case 500:
                    throw new MessageException($this->parser->parse($data, Message::class));
                default:
                    throw new UnknownStatusCodeException('The server returned an unknown status code');
            }
        } catch (\Throwable $e) {
            throw new ClientException('An unknown error occurred: ' . $e->getMessage());
        }
    }

    /**
     * @param AppCreate $payload
     * @return Message
     * @throws MessageException
     * @throws ClientException
     */
    public function create(AppCreate $payload): Message
    {
        $url = $this->parser->url('/consumer/app', [
        ]);

        $options = [
            'query' => $this->parser->query([
            ]),
            'json' => $payload
        ];

        try {
            $response = $this->httpClient->request('POST', $url, $options);
            $data = (string) $response->getBody();

            return $this->parser->parse($data, Message::class);
        } catch (BadResponseException $e) {
            $data = (string) $e->getResponse()->getBody();

            switch ($e->getResponse()->getStatusCode()) {
                case 400:
                    throw new MessageException($this->parser->parse($data, Message::class));
                case 401:
                    throw new MessageException($this->parser->parse($data, Message::class));
                case 500:
                    throw new MessageException($this->parser->parse($data, Message::class));
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
     * @return AppCollection
     * @throws MessageException
     * @throws ClientException
     */
    public function getAll(?int $startIndex = null, ?int $count = null, ?string $search = null): AppCollection
    {
        $url = $this->parser->url('/consumer/app', [
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

            return $this->parser->parse($data, AppCollection::class);
        } catch (BadResponseException $e) {
            $data = (string) $e->getResponse()->getBody();

            switch ($e->getResponse()->getStatusCode()) {
                case 401:
                    throw new MessageException($this->parser->parse($data, Message::class));
                case 500:
                    throw new MessageException($this->parser->parse($data, Message::class));
                default:
                    throw new UnknownStatusCodeException('The server returned an unknown status code');
            }
        } catch (\Throwable $e) {
            throw new ClientException('An unknown error occurred: ' . $e->getMessage());
        }
    }


}
