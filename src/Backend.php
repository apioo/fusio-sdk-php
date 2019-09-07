<?php

namespace Fusio\Sdk;

class Backend extends BaseResource
{
    /**
     * @return Backend\ActionResource
     */
    public function action(): Backend\ActionResource
    {
        return new Backend\ActionResource($this->baseUrl, $this->accessToken, $this->httpClient, $this->schemaManager);
    }

    /**
     * @return Backend\AppResource
     */
    public function app(): Backend\AppResource
    {
        return new Backend\AppResource($this->baseUrl, $this->accessToken, $this->httpClient, $this->schemaManager);
    }

    /**
     * @return Backend\AuditResource
     */
    public function audit(): Backend\AuditResource
    {
        return new Backend\AuditResource($this->baseUrl, $this->accessToken, $this->httpClient, $this->schemaManager);
    }

    /**
     * @return Backend\ConfigResource
     */
    public function config(): Backend\ConfigResource
    {
        return new Backend\ConfigResource($this->baseUrl, $this->accessToken, $this->httpClient, $this->schemaManager);
    }

    /**
     * @return Backend\ConnectionResource
     */
    public function connection(): Backend\ConnectionResource
    {
        return new Backend\ConnectionResource($this->baseUrl, $this->accessToken, $this->httpClient, $this->schemaManager);
    }

    /**
     * @return Backend\CronjobResource
     */
    public function cronjob(): Backend\CronjobResource
    {
        return new Backend\CronjobResource($this->baseUrl, $this->accessToken, $this->httpClient, $this->schemaManager);
    }

    /**
     * @return Backend\DashboardResource
     */
    public function dashboard(): Backend\DashboardResource
    {
        return new Backend\DashboardResource($this->baseUrl, $this->accessToken, $this->httpClient, $this->schemaManager);
    }

    /**
     * @return Backend\EventResource
     */
    public function event(): Backend\EventResource
    {
        return new Backend\EventResource($this->baseUrl, $this->accessToken, $this->httpClient, $this->schemaManager);
    }

    /**
     * @return Backend\LogErrorResource
     */
    public function logError(): Backend\LogErrorResource
    {
        return new Backend\LogErrorResource($this->baseUrl, $this->accessToken, $this->httpClient, $this->schemaManager);
    }

    /**
     * @return Backend\LogResource
     */
    public function log(): Backend\LogResource
    {
        return new Backend\LogResource($this->baseUrl, $this->accessToken, $this->httpClient, $this->schemaManager);
    }

    /**
     * @return Backend\PlanContractResource
     */
    public function planContract(): Backend\PlanContractResource
    {
        return new Backend\PlanContractResource($this->baseUrl, $this->accessToken, $this->httpClient, $this->schemaManager);
    }

    /**
     * @return Backend\PlanInvoiceResource
     */
    public function planInvoice(): Backend\PlanInvoiceResource
    {
        return new Backend\PlanInvoiceResource($this->baseUrl, $this->accessToken, $this->httpClient, $this->schemaManager);
    }

    /**
     * @return Backend\PlanResource
     */
    public function plan(): Backend\PlanResource
    {
        return new Backend\PlanResource($this->baseUrl, $this->accessToken, $this->httpClient, $this->schemaManager);
    }

    /**
     * @return Backend\RateResource
     */
    public function rate(): Backend\RateResource
    {
        return new Backend\RateResource($this->baseUrl, $this->accessToken, $this->httpClient, $this->schemaManager);
    }

    /**
     * @return Backend\RoutesResource
     */
    public function routes(): Backend\RoutesResource
    {
        return new Backend\RoutesResource($this->baseUrl, $this->accessToken, $this->httpClient, $this->schemaManager);
    }

    /**
     * @return Backend\SchemaResource
     */
    public function schema(): Backend\SchemaResource
    {
        return new Backend\SchemaResource($this->baseUrl, $this->accessToken, $this->httpClient, $this->schemaManager);
    }

    /**
     * @return Backend\ScopeResource
     */
    public function scope(): Backend\ScopeResource
    {
        return new Backend\ScopeResource($this->baseUrl, $this->accessToken, $this->httpClient, $this->schemaManager);
    }

    /**
     * @return Backend\StatisticResource
     */
    public function statistic(): Backend\StatisticResource
    {
        return new Backend\StatisticResource($this->baseUrl, $this->accessToken, $this->httpClient, $this->schemaManager);
    }

    /**
     * @return Backend\TokenResource
     */
    public function token(): Backend\TokenResource
    {
        return new Backend\TokenResource($this->baseUrl, $this->accessToken, $this->httpClient, $this->schemaManager);
    }

    /**
     * @return Backend\TransactionResource
     */
    public function transaction(): Backend\TransactionResource
    {
        return new Backend\TransactionResource($this->baseUrl, $this->accessToken, $this->httpClient, $this->schemaManager);
    }

    /**
     * @return Backend\UserResource
     */
    public function user(): Backend\UserResource
    {
        return new Backend\UserResource($this->baseUrl, $this->accessToken, $this->httpClient, $this->schemaManager);
    }
}