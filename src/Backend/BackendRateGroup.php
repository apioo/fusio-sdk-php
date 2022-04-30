<?php
/**
 * BackendRateGroup generated on 2022-04-30
 * @see https://sdkgen.app
 */


use Sdkgen\Client\ResourceAbstract;

class BackendRateGroup extends ResourceAbstract
{
    /**
     * Endpoint: /backend/rate/$rate_id<[0-9]+|^~>
     *
     * @return BackendRateByRateIdResource
     */
    public function getBackendRateByRateId(?string $rate_id): BackendRateByRateIdResource
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
     *
     * @return BackendRateResource
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
