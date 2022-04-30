<?php
/**
 * BackendDashboardGroup generated on 2022-04-30
 * @see https://sdkgen.app
 */

namespace Fusio\Sdk\Backend;

use Sdkgen\Client\ResourceAbstract;

class BackendDashboardGroup extends ResourceAbstract
{
    /**
     * Endpoint: /backend/dashboard
     *
     * @return BackendDashboardResource
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
