<?php
/**
 * BackendRateGroup generated on 2022-06-05
 * @see https://sdkgen.app
 */

namespace Fusio\Sdk\Backend;

use Sdkgen\Client\ResourceAbstract;

class BackendRateGroup extends ResourceAbstract
{
    /**
     * Endpoint: /backend/rate/$rate_id<[0-9]+|^~>
     */
    public function getBackendRateByRateId(string $rate_id): BackendRateByRateIdResource
    {
        return new BackendRateByRateIdResource(
            $rate_id,
            $this->baseUrl,
            $this->httpClient,
            $this->schemaManager
        );
    }

    /**
     * Endpoint: /backend/rate
     */
    public function getBackendRate(): BackendRateResource
    {
        return new BackendRateResource(
            $this->baseUrl,
            $this->httpClient,
            $this->schemaManager
        );
    }

}
