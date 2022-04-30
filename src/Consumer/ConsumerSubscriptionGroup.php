<?php
/**
 * ConsumerSubscriptionGroup generated on 2022-04-30
 * @see https://sdkgen.app
 */


use Sdkgen\Client\ResourceAbstract;

class ConsumerSubscriptionGroup extends ResourceAbstract
{
    /**
     * Endpoint: /consumer/subscription/$subscription_id<[0-9]+>
     *
     * @return ConsumerSubscriptionBySubscriptionIdResource
     */
    public function getConsumerSubscriptionBySubscriptionId(?string $subscription_id): ConsumerSubscriptionBySubscriptionIdResource
    {
        return new ConsumerSubscriptionBySubscriptionIdResource(
            $subscription_id,
            $this->baseUrl,
            $this->httpClient,
            $this->schemaManager
        );
    }

    /**
     * Endpoint: /consumer/subscription
     *
     * @return ConsumerSubscriptionResource
     */
    public function getConsumerSubscription(): ConsumerSubscriptionResource
    {
        return new ConsumerSubscriptionResource(
            $this->baseUrl,
            $this->httpClient,
            $this->schemaManager
        );
    }

}
