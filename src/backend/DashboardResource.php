<?php

namespace Fusio\Sdk\Backend;

use Fusio\Sdk\BaseResource;

class DashboardResource extends BaseResource
{
    public function collection()
    {
        return new \BackendDashboard\Resource($this->baseUrl, $this->accessToken, $this->httpClient, $this->schemaManager);
    }
}
