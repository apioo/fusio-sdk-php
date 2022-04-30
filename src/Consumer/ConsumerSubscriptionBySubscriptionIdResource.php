<?php
/**
 * ConsumerSubscriptionBySubscriptionIdResource generated on 2022-04-30
 * @see https://sdkgen.app
 */


use GuzzleHttp\Client;
use PSX\Schema\SchemaManager;
use Sdkgen\Client\ResourceAbstract;

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

    public function __construct(string $subscription_id, string $baseUrl, ?Client $httpClient = null, ?SchemaManager $schemaManager = null)
    {
        parent::__construct($baseUrl, $httpClient, $schemaManager);

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
    public function consumerActionEventSubscriptionUpdate(?Event_Subscription_Update $data = null): Message
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
