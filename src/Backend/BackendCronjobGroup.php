<?php
/**
 * BackendCronjobGroup generated on 2022-06-05
 * @see https://sdkgen.app
 */

namespace Fusio\Sdk\Backend;

use Sdkgen\Client\ResourceAbstract;

class BackendCronjobGroup extends ResourceAbstract
{
    /**
     * Endpoint: /backend/cronjob/$cronjob_id<[0-9]+|^~>
     */
    public function getBackendCronjobByCronjobId(string $cronjob_id): BackendCronjobByCronjobIdResource
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
