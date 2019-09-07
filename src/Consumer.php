<?php

namespace Fusio\Sdk;

class Consumer extends BaseResource
{
    /**
     * @return Consumer\AccountResource
     */
    public function account(): Consumer\AccountResource
    {
        return new Consumer\AccountResource($this->baseUrl, $this->accessToken, $this->httpClient, $this->schemaManager);
    }

    /**
     * @return Consumer\ActivateResource
     */
    public function activate(): Consumer\ActivateResource
    {
        return new Consumer\ActivateResource($this->baseUrl, $this->accessToken, $this->httpClient, $this->schemaManager);
    }

    /**
     * @return Consumer\AppResource
     */
    public function app(): Consumer\AppResource
    {
        return new Consumer\AppResource($this->baseUrl, $this->accessToken, $this->httpClient, $this->schemaManager);
    }

    /**
     * @return Consumer\EventResource
     */
    public function event(): Consumer\EventResource
    {
        return new Consumer\EventResource($this->baseUrl, $this->accessToken, $this->httpClient, $this->schemaManager);
    }

    /**
     * @return Consumer\GrantResource
     */
    public function grant(): Consumer\GrantResource
    {
        return new Consumer\GrantResource($this->baseUrl, $this->accessToken, $this->httpClient, $this->schemaManager);
    }

    /**
     * @return Consumer\LoginResource
     */
    public function login(): Consumer\LoginResource
    {
        return new Consumer\LoginResource($this->baseUrl, $this->accessToken, $this->httpClient, $this->schemaManager);
    }

    /**
     * @return Consumer\PlanContractResource
     */
    public function planContract(): Consumer\PlanContractResource
    {
        return new Consumer\PlanContractResource($this->baseUrl, $this->accessToken, $this->httpClient, $this->schemaManager);
    }

    /**
     * @return Consumer\PlanResource
     */
    public function plan(): Consumer\PlanResource
    {
        return new Consumer\PlanResource($this->baseUrl, $this->accessToken, $this->httpClient, $this->schemaManager);
    }

    /**
     * @return Consumer\RegisterResource
     */
    public function register(): Consumer\RegisterResource
    {
        return new Consumer\RegisterResource($this->baseUrl, $this->accessToken, $this->httpClient, $this->schemaManager);
    }

    /**
     * @return Consumer\ScopeResource
     */
    public function scope(): Consumer\ScopeResource
    {
        return new Consumer\ScopeResource($this->baseUrl, $this->accessToken, $this->httpClient, $this->schemaManager);
    }

    /**
     * @return Consumer\SubscriptionResource
     */
    public function subscription(): Consumer\SubscriptionResource
    {
        return new Consumer\SubscriptionResource($this->baseUrl, $this->accessToken, $this->httpClient, $this->schemaManager);
    }

    /**
     * @return Consumer\TokenResource
     */
    public function token(): Consumer\TokenResource
    {
        return new Consumer\TokenResource($this->baseUrl, $this->accessToken, $this->httpClient, $this->schemaManager);
    }

    /**
     * @return Consumer\TransactionResource
     */
    public function transaction(): Consumer\TransactionResource
    {
        return new Consumer\TransactionResource($this->baseUrl, $this->accessToken, $this->httpClient, $this->schemaManager);
    }
}