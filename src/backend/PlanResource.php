<?php

namespace Fusio\Sdk\Backend;

use Fusio\Sdk\BaseResource;

class PlanResource extends BaseResource
{
    public function collection()
    {
        return new \BackendPlan\Resource($this->baseUrl, $this->accessToken, $this->httpClient, $this->schemaManager);
    }

    public function entity($id)
    {
        return new \BackendPlanPlan_id09\Resource($id, $this->baseUrl, $this->accessToken, $this->httpClient, $this->schemaManager);
    }
}
