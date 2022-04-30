<?php
/**
 * BackendSdkGroup generated on 2022-04-30
 * @see https://sdkgen.app
 */


use Sdkgen\Client\ResourceAbstract;

class BackendSdkGroup extends ResourceAbstract
{
    /**
     * Endpoint: /backend/sdk
     *
     * @return BackendSdkResource
     */
    public function getBackendSdk(): BackendSdkResource
    {
        return new BackendSdkResource(
            $this->baseUrl,
            $this->httpClient,
            $this->schemaManager
        );
    }

}
