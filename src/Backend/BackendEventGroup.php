<?php
/**
 * BackendEventGroup generated on 2022-04-30
 * @see https://sdkgen.app
 */

namespace Fusio\Sdk\Backend;

use Sdkgen\Client\ResourceAbstract;

class BackendEventGroup extends ResourceAbstract
{
    /**
     * Endpoint: /backend/event/$event_id<[0-9]+|^~>
     *
     * @return BackendEventByEventIdResource
     */
    public function getBackendEventByEventId(?string $event_id): BackendEventByEventIdResource
    {
        return new BackendEventByEventIdResource(
            $event_id,
            $this->baseUrl,
            $this->httpClient,
            $this->schemaManager
        );
    }

    /**
     * Endpoint: /backend/event
     *
     * @return BackendEventResource
     */
    public function getBackendEvent(): BackendEventResource
    {
        return new BackendEventResource(
            $this->baseUrl,
            $this->httpClient,
            $this->schemaManager
        );
    }

    /**
     * Endpoint: /backend/event/subscription/$subscription_id<[0-9]+>
     *
     * @return BackendEventSubscriptionBySubscriptionIdResource
     */
    public function getBackendEventSubscriptionBySubscriptionId(?string $subscription_id): BackendEventSubscriptionBySubscriptionIdResource
    {
        return new BackendEventSubscriptionBySubscriptionIdResource(
            $subscription_id,
            $this->baseUrl,
            $this->httpClient,
            $this->schemaManager
        );
    }

    /**
     * Endpoint: /backend/event/subscription
     *
     * @return BackendEventSubscriptionResource
     */
    public function getBackendEventSubscription(): BackendEventSubscriptionResource
    {
        return new BackendEventSubscriptionResource(
            $this->baseUrl,
            $this->httpClient,
            $this->schemaManager
        );
    }

}
