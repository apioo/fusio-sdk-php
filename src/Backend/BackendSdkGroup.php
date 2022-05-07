<?php
/**
 * BackendSdkGroup generated on 2022-05-07
 * @see https://sdkgen.app
 */

namespace Fusio\Sdk\Backend;

use Sdkgen\Client\ResourceAbstract;

class BackendSdkGroup extends ResourceAbstract
{
    /**
     * Endpoint: /backend/sdk
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
