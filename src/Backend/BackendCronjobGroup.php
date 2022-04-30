<?php
/**
 * BackendCronjobGroup generated on 2022-04-30
 * @see https://sdkgen.app
 */


use Sdkgen\Client\ResourceAbstract;

class BackendCronjobGroup extends ResourceAbstract
{
    /**
     * Endpoint: /backend/cronjob/$cronjob_id<[0-9]+|^~>
     *
     * @return BackendCronjobByCronjobIdResource
     */
    public function getBackendCronjobByCronjobId(?string $cronjob_id): BackendCronjobByCronjobIdResource
    {
        return new BackendCronjobByCronjobIdResource(
            $cronjob_id,
            $this->baseUrl,
            $this->httpClient,
            $this->schemaManager
        );
    }

    /**
     * Endpoint: /backend/cronjob
     *
     * @return BackendCronjobResource
     */
    public function getBackendCronjob(): BackendCronjobResource
    {
        return new BackendCronjobResource(
            $this->baseUrl,
            $this->httpClient,
            $this->schemaManager
        );
    }

}
