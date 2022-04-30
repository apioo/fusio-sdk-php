<?php
/**
 * Client generated on 2022-04-30
 * @see https://sdkgen.app
 */


use Sdkgen\Client\ClientAbstract;
use Sdkgen\Client\Credentials;
use Sdkgen\Client\TokenStoreInterface;

class Client extends ClientAbstract
{
    public function __construct(string $baseUrl, ?TokenStoreInterface $tokenStore = null)
    {
        parent::__construct($baseUrl, null, $tokenStore);
    }

    /**
     * Tag: consumer.user
     *
     * @return ConsumerUserGroup
     */
    public function consumerUser(): ConsumerUserGroup
    {
        return new ConsumerUserGroup(
            $this->baseUrl,
            $this->newHttpClient(),
            $this->schemaManager
        );
    }

    /**
     * Tag: consumer.transaction
     *
     * @return ConsumerTransactionGroup
     */
    public function consumerTransaction(): ConsumerTransactionGroup
    {
        return new ConsumerTransactionGroup(
            $this->baseUrl,
            $this->newHttpClient(),
            $this->schemaManager
        );
    }

    /**
     * Tag: consumer.subscription
     *
     * @return ConsumerSubscriptionGroup
     */
    public function consumerSubscription(): ConsumerSubscriptionGroup
    {
        return new ConsumerSubscriptionGroup(
            $this->baseUrl,
            $this->newHttpClient(),
            $this->schemaManager
        );
    }

    /**
     * Tag: consumer.scope
     *
     * @return ConsumerScopeGroup
     */
    public function consumerScope(): ConsumerScopeGroup
    {
        return new ConsumerScopeGroup(
            $this->baseUrl,
            $this->newHttpClient(),
            $this->schemaManager
        );
    }

    /**
     * Tag: consumer.plan
     *
     * @return ConsumerPlanGroup
     */
    public function consumerPlan(): ConsumerPlanGroup
    {
        return new ConsumerPlanGroup(
            $this->baseUrl,
            $this->newHttpClient(),
            $this->schemaManager
        );
    }

    /**
     * Tag: consumer.page
     *
     * @return ConsumerPageGroup
     */
    public function consumerPage(): ConsumerPageGroup
    {
        return new ConsumerPageGroup(
            $this->baseUrl,
            $this->newHttpClient(),
            $this->schemaManager
        );
    }

    /**
     * Tag: consumer.log
     *
     * @return ConsumerLogGroup
     */
    public function consumerLog(): ConsumerLogGroup
    {
        return new ConsumerLogGroup(
            $this->baseUrl,
            $this->newHttpClient(),
            $this->schemaManager
        );
    }

    /**
     * Tag: consumer.grant
     *
     * @return ConsumerGrantGroup
     */
    public function consumerGrant(): ConsumerGrantGroup
    {
        return new ConsumerGrantGroup(
            $this->baseUrl,
            $this->newHttpClient(),
            $this->schemaManager
        );
    }

    /**
     * Tag: consumer.event
     *
     * @return ConsumerEventGroup
     */
    public function consumerEvent(): ConsumerEventGroup
    {
        return new ConsumerEventGroup(
            $this->baseUrl,
            $this->newHttpClient(),
            $this->schemaManager
        );
    }

    /**
     * Tag: consumer.app
     *
     * @return ConsumerAppGroup
     */
    public function consumerApp(): ConsumerAppGroup
    {
        return new ConsumerAppGroup(
            $this->baseUrl,
            $this->newHttpClient(),
            $this->schemaManager
        );
    }

}
