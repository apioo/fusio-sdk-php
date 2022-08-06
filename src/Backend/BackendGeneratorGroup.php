<?php
/**
 * BackendGeneratorGroup automatically generated by SDKgen please do not edit this file manually
 * @see https://sdkgen.app
 */

namespace Fusio\Sdk\Backend;

use Sdkgen\Client\ResourceAbstract;

class BackendGeneratorGroup extends ResourceAbstract
{
    /**
     * Endpoint: /backend/generator/:provider
     */
    public function getBackendGeneratorByProvider(string $provider): BackendGeneratorByProviderResource
    {
        return new BackendGeneratorByProviderResource(
            $provider,
            $this->baseUrl,
            $this->httpClient,
            $this->schemaManager
        );
    }

    /**
     * Endpoint: /backend/generator
     */
    public function getBackendGenerator(): BackendGeneratorResource
    {
        return new BackendGeneratorResource(
            $this->baseUrl,
            $this->httpClient,
            $this->schemaManager
        );
    }

}
