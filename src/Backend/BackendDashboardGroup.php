<?php
/**
 * BackendDashboardGroup generated on 2022-05-06
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
