<?php
/**
 * ConsumerSubscriptionTag automatically generated by SDKgen please do not edit this file manually
 * @see https://sdkgen.app
 */

namespace Fusio\Sdk\Consumer;

use GuzzleHttp\Exception\BadResponseException;
use Sdkgen\Client\Exception\ClientException;
use Sdkgen\Client\Exception\UnknownStatusCodeException;
use Sdkgen\Client\TagAbstract;

class ConsumerSubscriptionTag extends TagAbstract
{
    /**
     * @param string $subscriptionId
     * @return Message
     * @throws ClientException
     */
    public function delete(string $subscriptionId): Message
    {
        $url = $this->parser->url('/consumer/subscription/$subscription_id<[0-9]+>', [
            'subscription_id' => $subscriptionId,
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
                default:
                    throw new UnknownStatusCodeException('The server returned an unknown status code');
            }
        } catch (\Throwable $e) {
            throw new ClientException('An unknown error occurred: ' . $e->getMessage());
        }
    }

    /**
     * @param string $subscriptionId
     * @param EventSubscriptionUpdate $payload
     * @return Message
     * @throws ClientException
     */
    public function update(string $subscriptionId, EventSubscriptionUpdate $payload): Message
    {
        $url = $this->parser->url('/consumer/subscription/$subscription_id<[0-9]+>', [
            'subscription_id' => $subscriptionId,
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
                default:
                    throw new UnknownStatusCodeException('The server returned an unknown status code');
            }
        } catch (\Throwable $e) {
            throw new ClientException('An unknown error occurred: ' . $e->getMessage());
        }
    }

    /**
     * @param string $subscriptionId
     * @return EventSubscription
     * @throws ClientException
     */
    public function get(string $subscriptionId): EventSubscription
    {
        $url = $this->parser->url('/consumer/subscription/$subscription_id<[0-9]+>', [
            'subscription_id' => $subscriptionId,
        ]);

        $options = [
            'query' => $this->parser->query([
            ]),
        ];

        try {
            $response = $this->httpClient->request('GET', $url, $options);
            $data = (string) $response->getBody();

            return $this->parser->parse($data, EventSubscription::class);
        } catch (BadResponseException $e) {
            $data = (string) $e->getResponse()->getBody();

            switch ($e->getResponse()->getStatusCode()) {
                default:
                    throw new UnknownStatusCodeException('The server returned an unknown status code');
            }
        } catch (\Throwable $e) {
            throw new ClientException('An unknown error occurred: ' . $e->getMessage());
        }
    }

    /**
     * @param EventSubscriptionCreate $payload
     * @return Message
     * @throws ClientException
     */
    public function create(EventSubscriptionCreate $payload): Message
    {
        $url = $this->parser->url('/consumer/subscription', [
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
                default:
                    throw new UnknownStatusCodeException('The server returned an unknown status code');
            }
        } catch (\Throwable $e) {
            throw new ClientException('An unknown error occurred: ' . $e->getMessage());
        }
    }

    /**
     * @return EventSubscriptionCollection
     * @throws ClientException
     */
    public function getAll(): EventSubscriptionCollection
    {
        $url = $this->parser->url('/consumer/subscription', [
        ]);

        $options = [
            'query' => $this->parser->query([
            ]),
        ];

        try {
            $response = $this->httpClient->request('GET', $url, $options);
            $data = (string) $response->getBody();

            return $this->parser->parse($data, EventSubscriptionCollection::class);
        } catch (BadResponseException $e) {
            $data = (string) $e->getResponse()->getBody();

            switch ($e->getResponse()->getStatusCode()) {
                default:
                    throw new UnknownStatusCodeException('The server returned an unknown status code');
            }
        } catch (\Throwable $e) {
            throw new ClientException('An unknown error occurred: ' . $e->getMessage());
        }
    }


}
