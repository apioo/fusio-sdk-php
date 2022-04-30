<?php
/**
 * BackendRouteGroup generated on 2022-04-30
 * @see https://sdkgen.app
 */


use Sdkgen\Client\ResourceAbstract;

class BackendRouteGroup extends ResourceAbstract
{
    /**
     * Endpoint: /backend/routes/$route_id<[0-9]+>
     *
     * @return BackendRoutesByRouteIdResource
     */
    public function getBackendRoutesByRouteId(?string $route_id): BackendRoutesByRouteIdResource
    {
        return new BackendRoutesByRouteIdResource(
            $route_id,
            $this->baseUrl,
            $this->httpClient,
            $this->schemaManager
        );
    }

    /**
     * Endpoint: /backend/routes/provider/:provider
     *
     * @return BackendRoutesProviderByProviderResource
     */
    public function getBackendRoutesProviderByProvider(?string $provider): BackendRoutesProviderByProviderResource
    {
        return new BackendRoutesProviderByProviderResource(
            $provider,
            $this->baseUrl,
            $this->httpClient,
            $this->schemaManager
        );
    }

    /**
     * Endpoint: /backend/routes/provider
     *
     * @return BackendRoutesProviderResource
     */
    public function getBackendRoutesProvider(): BackendRoutesProviderResource
    {
        return new BackendRoutesProviderResource(
            $this->baseUrl,
            $this->httpClient,
            $this->schemaManager
        );
    }

    /**
     * Endpoint: /backend/routes
     *
     * @return BackendRoutesResource
     */
    public function getBackendRoutes(): BackendRoutesResource
    {
        return new BackendRoutesResource(
            $this->baseUrl,
            $this->httpClient,
            $this->schemaManager
        );
    }

}
