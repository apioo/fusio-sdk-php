<?php
/**
 * BackendRouteGroup generated on 2022-05-07
 * @see https://sdkgen.app
 */

namespace Fusio\Sdk\Backend;

use Sdkgen\Client\ResourceAbstract;

class BackendRouteGroup extends ResourceAbstract
{
    /**
     * Endpoint: /backend/routes/$route_id<[0-9]+>
     */
    public function getBackendRoutesByRouteId(string $route_id): BackendRoutesByRouteIdResource
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
     */
    public function getBackendRoutesProviderByProvider(string $provider): BackendRoutesProviderByProviderResource
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
