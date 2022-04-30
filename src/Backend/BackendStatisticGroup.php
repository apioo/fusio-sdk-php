<?php
/**
 * BackendStatisticGroup generated on 2022-04-30
 * @see https://sdkgen.app
 */


use Sdkgen\Client\ResourceAbstract;

class BackendStatisticGroup extends ResourceAbstract
{
    /**
     * Endpoint: /backend/statistic/used_points
     *
     * @return BackendStatisticUsedPointsResource
     */
    public function getBackendStatisticUsedPoints(): BackendStatisticUsedPointsResource
    {
        return new BackendStatisticUsedPointsResource(
            $this->baseUrl,
            $this->httpClient,
            $this->schemaManager
        );
    }

    /**
     * Endpoint: /backend/statistic/time_per_route
     *
     * @return BackendStatisticTimePerRouteResource
     */
    public function getBackendStatisticTimePerRoute(): BackendStatisticTimePerRouteResource
    {
        return new BackendStatisticTimePerRouteResource(
            $this->baseUrl,
            $this->httpClient,
            $this->schemaManager
        );
    }

    /**
     * Endpoint: /backend/statistic/time_average
     *
     * @return BackendStatisticTimeAverageResource
     */
    public function getBackendStatisticTimeAverage(): BackendStatisticTimeAverageResource
    {
        return new BackendStatisticTimeAverageResource(
            $this->baseUrl,
            $this->httpClient,
            $this->schemaManager
        );
    }

    /**
     * Endpoint: /backend/statistic/most_used_routes
     *
     * @return BackendStatisticMostUsedRoutesResource
     */
    public function getBackendStatisticMostUsedRoutes(): BackendStatisticMostUsedRoutesResource
    {
        return new BackendStatisticMostUsedRoutesResource(
            $this->baseUrl,
            $this->httpClient,
            $this->schemaManager
        );
    }

    /**
     * Endpoint: /backend/statistic/most_used_apps
     *
     * @return BackendStatisticMostUsedAppsResource
     */
    public function getBackendStatisticMostUsedApps(): BackendStatisticMostUsedAppsResource
    {
        return new BackendStatisticMostUsedAppsResource(
            $this->baseUrl,
            $this->httpClient,
            $this->schemaManager
        );
    }

    /**
     * Endpoint: /backend/statistic/issued_tokens
     *
     * @return BackendStatisticIssuedTokensResource
     */
    public function getBackendStatisticIssuedTokens(): BackendStatisticIssuedTokensResource
    {
        return new BackendStatisticIssuedTokensResource(
            $this->baseUrl,
            $this->httpClient,
            $this->schemaManager
        );
    }

    /**
     * Endpoint: /backend/statistic/incoming_transactions
     *
     * @return BackendStatisticIncomingTransactionsResource
     */
    public function getBackendStatisticIncomingTransactions(): BackendStatisticIncomingTransactionsResource
    {
        return new BackendStatisticIncomingTransactionsResource(
            $this->baseUrl,
            $this->httpClient,
            $this->schemaManager
        );
    }

    /**
     * Endpoint: /backend/statistic/incoming_requests
     *
     * @return BackendStatisticIncomingRequestsResource
     */
    public function getBackendStatisticIncomingRequests(): BackendStatisticIncomingRequestsResource
    {
        return new BackendStatisticIncomingRequestsResource(
            $this->baseUrl,
            $this->httpClient,
            $this->schemaManager
        );
    }

    /**
     * Endpoint: /backend/statistic/errors_per_route
     *
     * @return BackendStatisticErrorsPerRouteResource
     */
    public function getBackendStatisticErrorsPerRoute(): BackendStatisticErrorsPerRouteResource
    {
        return new BackendStatisticErrorsPerRouteResource(
            $this->baseUrl,
            $this->httpClient,
            $this->schemaManager
        );
    }

    /**
     * Endpoint: /backend/statistic/count_requests
     *
     * @return BackendStatisticCountRequestsResource
     */
    public function getBackendStatisticCountRequests(): BackendStatisticCountRequestsResource
    {
        return new BackendStatisticCountRequestsResource(
            $this->baseUrl,
            $this->httpClient,
            $this->schemaManager
        );
    }

}
