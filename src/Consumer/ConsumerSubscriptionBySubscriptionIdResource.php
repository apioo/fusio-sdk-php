<?php 
/**
 * ConsumerSubscriptionBySubscriptionIdResource generated on 2021-01-27
 * @see https://github.com/apioo
 */

namespace Fusio\Sdk\Consumer;

use GuzzleHttp\Client;
use PSX\Api\Generator\Client\Php\ResourceAbstract;
use PSX\Schema\SchemaManager;

class ConsumerSubscriptionBySubscriptionIdResource extends ResourceAbstract
{
    /**
     * @var string
     */
    private $url;

    /**
     * @var string
     */
    private $subscription_id;

    public function __construct(string $subscription_id, string $baseUrl, string $token, ?Client $httpClient = null, ?SchemaManager $schemaManager = null)
    {
        parent::__construct($baseUrl, $token, $httpClient, $schemaManager);

        $this->subscription_id = $subscription_id;
        $this->url = $this->baseUrl . '/consumer/subscription/' . $subscription_id . '';
    }

    /**
     * @return Event_Subscription
     */
    public function consumerActionEventSubscriptionGet(): Event_Subscription
    {
        $options = [
            'headers' => [
                'Authorization' => 'Bearer ' . $this->token
            ],
        ];

        $response = $this->httpClient->request('GET', $this->url, $options);
        $data     = (string) $response->getBody();

        return $this->parse($data, Event_Subscription::class);
    }

    /**
     * @param Event_Subscription_Update $data
     * @return Message
     */
    public function consumerActionEventSubscriptionUpdate(?Event_Subscription_Update $data): Message
    {
        $options = [
            'headers' => [
                'Authorization' => 'Bearer ' . $this->token
            ],
            'json' => $data
        ];

        $response = $this->httpClient->request('PUT', $this->url, $options);
        $data     = (string) $response->getBody();

        return $this->parse($data, Message::class);
    }

    /**
     * @return Message
     */
    public function consumerActionEventSubscriptionDelete(): Message
    {
        $options = [
            'headers' => [
                'Authorization' => 'Bearer ' . $this->token
            ],
        ];

        $response = $this->httpClient->request('DELETE', $this->url, $options);
        $data     = (string) $response->getBody();

        return $this->parse($data, Message::class);
    }

}
