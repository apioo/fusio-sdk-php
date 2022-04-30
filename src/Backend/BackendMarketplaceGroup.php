<?php
/**
 * BackendMarketplaceGroup generated on 2022-04-30
 * @see https://sdkgen.app
 */


use Sdkgen\Client\ResourceAbstract;

class BackendMarketplaceGroup extends ResourceAbstract
{
    /**
     * Endpoint: /backend/marketplace/:app_name
     *
     * @return BackendMarketplaceByAppNameResource
     */
    public function getBackendMarketplaceByAppName(?string $app_name): BackendMarketplaceByAppNameResource
    {
        return new BackendMarketplaceByAppNameResource(
            $app_name,
            $this->baseUrl,
            $this->httpClient,
            $this->schemaManager
        );
    }

    /**
     * Endpoint: /backend/marketplace
     *
     * @return BackendMarketplaceResource
     */
    public function getBackendMarketplace(): BackendMarketplaceResource
    {
        return new BackendMarketplaceResource(
            $this->baseUrl,
            $this->httpClient,
            $this->schemaManager
        );
    }

}
