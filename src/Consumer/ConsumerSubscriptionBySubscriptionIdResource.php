<?php
/**
 * ConsumerSubscriptionBySubscriptionIdResource automatically generated by SDKgen please do not edit this file manually
 * @see https://sdkgen.app
 */

namespace Fusio\Sdk\Consumer;

use GuzzleHttp\Client;
use PSX\Schema\SchemaManager;
use Sdkgen\Client\ResourceAbstract;

class ConsumerSubscriptionBySubscriptionIdResource extends ResourceAbstract
{
    private string $url;

    private string $subscriptionId;

    public function __construct(string $subscriptionId, string $baseUrl, ?Client $httpClient = null, ?SchemaManager $schemaManager = null)
    {
        parent::__construct($baseUrl, $httpClient, $schemaManager);

        $this->subscriptionId = $subscriptionId;
        $this->url = $this->baseUrl . '/consumer/subscription/' . $subscriptionId . '';
    }

    /**
     * @return EventSubscription
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function consumerActionEventSubscriptionGet(): EventSubscription
    {
        $options = [
        ];

        $response = $this->httpClient->request('GET', $this->url, $options);
        $data     = (string) $response->getBody();

        return $this->parse($data, EventSubscription::class);
    }

    /**
     * @param EventSubscriptionUpdate $data
     * @return Message
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function consumerActionEventSubscriptionUpdate(EventSubscriptionUpdate $data): Message
    {
        $options = [
            'json' => $data
        ];

        $response = $this->httpClient->request('PUT', $this->url, $options);
        $data     = (string) $response->getBody();

        return $this->parse($data, Message::class);
    }

    /**
     * @return Message
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function consumerActionEventSubscriptionDelete(): Message
    {
        $options = [
        ];

        $response = $this->httpClient->request('DELETE', $this->url, $options);
        $data     = (string) $response->getBody();

        return $this->parse($data, Message::class);
    }

}
