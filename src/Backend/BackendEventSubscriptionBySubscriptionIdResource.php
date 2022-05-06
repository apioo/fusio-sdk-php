<?php
/**
 * BackendEventSubscriptionBySubscriptionIdResource generated on 2022-05-06
 * @see https://sdkgen.app
 */

namespace Fusio\Sdk\Backend;

use GuzzleHttp\Client;
use PSX\Schema\SchemaManager;
use Sdkgen\Client\ResourceAbstract;

class BackendEventSubscriptionBySubscriptionIdResource extends ResourceAbstract
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
        $this->url = $this->baseUrl . '/backend/event/subscription/' . $subscription_id . '';
    }

    /**
     * @return Event_Subscription
     */
    public function backendActionEventSubscriptionGet(): Event_Subscription
    {
        $options = [
        ];

        $response = $this->httpClient->request('GET', $this->url, $options);
        $data     = (string) $response->getBody();

        return $this->parse($data, Event_Subscription::class);
    }

    /**
     * @param Event_Subscription_Update $data
     * @return Message
     */
    public function backendActionEventSubscriptionUpdate(?Event_Subscription_Update $data = null): Message
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
     */
    public function backendActionEventSubscriptionDelete(): Message
    {
        $options = [
        ];

        $response = $this->httpClient->request('DELETE', $this->url, $options);
        $data     = (string) $response->getBody();

        return $this->parse($data, Message::class);
    }

}
