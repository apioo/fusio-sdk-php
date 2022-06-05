<?php
/**
 * ConsumerSubscriptionResource generated on 2022-06-05
 * @see https://sdkgen.app
 */

namespace Fusio\Sdk\Consumer;

use GuzzleHttp\Client;
use PSX\Schema\SchemaManager;
use Sdkgen\Client\ResourceAbstract;

class ConsumerSubscriptionResource extends ResourceAbstract
{
    private string $url;


    public function __construct(string $baseUrl, ?Client $httpClient = null, ?SchemaManager $schemaManager = null)
    {
        parent::__construct($baseUrl, $httpClient, $schemaManager);

        $this->url = $this->baseUrl . '/consumer/subscription';
    }

    /**
     * @param Collection_Query|null $query
     * @return Event_Subscription_Collection
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function consumerActionEventSubscriptionGetAll(?Collection_Query $query = null): Event_Subscription_Collection
    {
        $options = [
            'query' => $query !== null ? (array) $query->jsonSerialize() : [],
        ];

        $response = $this->httpClient->request('GET', $this->url, $options);
        $data     = (string) $response->getBody();

        return $this->parse($data, Event_Subscription_Collection::class);
    }

    /**
     * @param Event_Subscription_Create $data
     * @return Message
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function consumerActionEventSubscriptionCreate(Event_Subscription_Create $data): Message
    {
        $options = [
            'json' => $data
        ];

        $response = $this->httpClient->request('POST', $this->url, $options);
        $data     = (string) $response->getBody();

        return $this->parse($data, Message::class);
    }

}
