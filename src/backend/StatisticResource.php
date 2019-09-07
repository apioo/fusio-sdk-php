<?php

namespace Fusio\Sdk\Backend;

use Fusio\Sdk\BaseResource;

class StatisticResource extends BaseResource
{
    public function countRequests()
    {
        return new \BackendStatisticCount_requests\Resource($this->baseUrl, $this->accessToken, $this->httpClient, $this->schemaManager);
    }

    public function errorsPerRoute()
    {
        return new \BackendStatisticErrors_per_route\Resource($this->baseUrl, $this->accessToken, $this->httpClient, $this->schemaManager);
    }

    public function incomingRequests()
    {
        return new \BackendStatisticIncoming_requests\Resource($this->baseUrl, $this->accessToken, $this->httpClient, $this->schemaManager);
    }

    public function incomingTransactions()
    {
        return new \BackendStatisticIncoming_transactions\Resource($this->baseUrl, $this->accessToken, $this->httpClient, $this->schemaManager);
    }

    public function issuedTokens()
    {
        return new \BackendStatisticIssued_tokens\Resource($this->baseUrl, $this->accessToken, $this->httpClient, $this->schemaManager);
    }

    public function mostUsedApps()
    {
        return new \BackendStatisticMost_used_apps\Resource($this->baseUrl, $this->accessToken, $this->httpClient, $this->schemaManager);
    }

    public function mostUsedRoutes()
    {
        return new \BackendStatisticMost_used_routes\Resource($this->baseUrl, $this->accessToken, $this->httpClient, $this->schemaManager);
    }

    public function timeAverage()
    {
        return new \BackendStatisticTime_average\Resource($this->baseUrl, $this->accessToken, $this->httpClient, $this->schemaManager);
    }

    public function timePerRoute()
    {
        return new \BackendStatisticTime_per_route\Resource($this->baseUrl, $this->accessToken, $this->httpClient, $this->schemaManager);
    }

    public function usedpoints()
    {
        return new \BackendStatisticUsed_points\Resource($this->baseUrl, $this->accessToken, $this->httpClient, $this->schemaManager);
    }
}
