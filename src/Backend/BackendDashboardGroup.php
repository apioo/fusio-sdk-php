<?php
/**
 * BackendDashboardGroup generated on 2022-06-05
 * @see https://sdkgen.app
 */

namespace Fusio\Sdk\Backend;

use Sdkgen\Client\ResourceAbstract;

class BackendDashboardGroup extends ResourceAbstract
{
    /**
     * Endpoint: /backend/dashboard
     */
    public function getBackendDashboard(): BackendDashboardResource
    {
        return new BackendDashboardResource(
            $this->baseUrl,
            $this->httpClient,
            $this->schemaManager
        );
    }

}
