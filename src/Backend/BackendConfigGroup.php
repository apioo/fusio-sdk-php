<?php
/**
 * BackendConfigGroup generated on 2022-05-07
 * @see https://sdkgen.app
 */

namespace Fusio\Sdk\Backend;

use Sdkgen\Client\ResourceAbstract;

class BackendConfigGroup extends ResourceAbstract
{
    /**
     * Endpoint: /backend/config/$config_id<[0-9]+|^~>
     */
    public function getBackendConfigByConfigId(string $config_id): BackendConfigByConfigIdResource
    {
        return new BackendConfigByConfigIdResource(
            $config_id,
            $this->baseUrl,
            $this->httpClient,
            $this->schemaManager
        );
    }

    /**
     * Endpoint: /backend/config
     */
    public function getBackendConfig(): BackendConfigResource
    {
        return new BackendConfigResource(
            $this->baseUrl,
            $this->httpClient,
            $this->schemaManager
        );
    }

}
